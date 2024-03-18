<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Admin Panel</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        html,body{
            width:100%;
            height:100%;
        }

table{
    width: 100%;
    border-collapse: collapse;
}
td,th{
  font-family:monospace;
  font-size:2rem;
  border: 1px solid #ddd;
  padding: 10px;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Emails</th>
    </tr> 
    <?php 
    include './config.php';
    $sql = "select * from subscribers_list order by id asc";
    $result = mysqli_query($connect,$sql) or die("Failed to connect to");
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>