<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Newsletter | Indie's Clan</title>
</head>
<body>
   <div class="container">
    <h1 class="title">Stay Updated</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <div class="email-container">
        <input type="email" name="email" id="email" />
        <button type="submit">Subscribe</button>
    </div>
    </form>
   </div> 
</body>
</html>