<?php
    $link = mysqli_connect("localhost", "root", "", "test");

	$sql = "SELECT * from test where ID = '$_GET[id]' ";
	$result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>
    <body>
        <form action='wk6ex4.php?id=<?php echo $_GET['id']?>' method='post'>
            Name :
            <input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
            </br>
            Phone number :
            <input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
            </br>
            Email :
            <input type=text name=txtemail value="<?php echo $row['email'] ?>" />
            </br>
            <!-- <input type=submit name=btnsubmit value="save"/> -->
            <input type=submit name=delete value="delete"/>
        </form>
    </body>
</html>