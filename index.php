<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM crud WHERE is_deleted=0 ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Create</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>id</th>
        <th>create_date</th>
        <th>modified_date</th>
        <th>item</th>
        <th>count</th>
        <th>price</th>
        <th>paid</th>
        <th>deleted_at</th>
        <th>action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['create_date']."</td>";
        echo "<td>".$user_data['modified_date']."</td>";    
        echo "<td>".$user_data['item']."</td>"; 
        echo "<td>".$user_data['count']."</td>"; 
        echo "<td>".$user_data['price']."</td>"; 
        echo "<td>".$user_data['paid']."</td>"; 
        echo "<td>".$user_data['deleted_at']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>