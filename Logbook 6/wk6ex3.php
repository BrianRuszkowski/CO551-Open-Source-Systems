<?php 
    $sql = "UPDATE test SET email = $_POST[txtemail], phone_number = $_POST[txttelno] WHERE ID = '$_GET[id]'";

    $link = mysqli_connect("localhost", "root", "", "test");

    $result = mysqli_query($link, $sql);

    $sql = "SELECT * from test";

    $result = mysqli_query($link, $sql);
    
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "$row[name] $row[email] $row[phone_number] <br/>";	
    }
?>