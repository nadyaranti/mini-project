<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $item = $_POST['item'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    $paid = $_POST['paid'];

    $result = mysqli_query($mysqli, "UPDATE crud SET item='$item',count='$count', price='$price', paid='$paid', modified_date=NOW() WHERE id=$id");
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM crud WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $item = $user_data['item'];
    $count = $user_data['count'];
    $price = $user_data['price'];
    $paid = $user_data['paid'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>item</td>
                <td><input type="text" name="item" value=<?php echo $item;?>></td>
            </tr>
            <tr> 
                <td>count</td>
                <td><input type="text" name="count" value=<?php echo $count;?>></td>
            </tr>
            <tr> 
                <td>price</td>
                <td><input type="text" name="price" value=<?php echo $price;?>></td>
            </tr>
            <tr> 
                <td>paid</td>
                <td><input type="text" name="paid" value=<?php echo $paid;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>