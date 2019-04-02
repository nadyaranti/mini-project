<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>item</td>
                <td><input type="text" name="item"></td>
            </tr>
            <tr> 
                <td>count</td>
                <td><input type="text" name="count"></td>
            </tr>
            <tr> 
                <td>price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr> 
                <td>paid</td>
                <td><input type="text" name="paid"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $item = $_POST['item'];
        $count = $_POST['count'];
        $price = $_POST['price'];
        $paid = $_POST['paid'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO crud(create_date, item, count, price, paid) VALUES(NOW(), '$item','$count','$price', '$paid')");

        echo "Data added successfully. <a href='index.php'>View Data</a>";
    }
    ?>
</body>
</html>