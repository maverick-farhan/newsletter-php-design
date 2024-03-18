<?php 
include './config.php';
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($connect,$_POST['email']);
$check_sql = "select email from subscribers_list where email = '{$email}'";

$result = mysqli_query($connect,$check_sql) or die("Failed");
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        if($row['email']==$email){
   echo "
   <div class='exist'>Email Already Exist</div>
   "; 
        }
    }
}
else{
        $insert_sql = "insert into subscribers_list (email) values ('{$email}');";
        $insert_result = mysqli_query($connect,$insert_sql);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Newsletter | Indie's Clan</title>
</head>
<body>
   <div class="container">
    <h1 class="title">newsletter</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <div class="email-container">
        <input type="email" name="email" id="email" required/>
        <input type="submit" id="submit" name="submit" value="Subscribe" />
    </div>
   <div class="message_div"></div>
    </form>
   </div> 
   <script src="./main.js"></script>
</body>
</html>