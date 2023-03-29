<?php session_start(); ?>
<?php 
    $_SESSION['quantity'] = filter_input(INPUT_POST, 'selqty', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['size'] = htmlspecialchars($_POST['selsize'], ENT_QUOTES, 'UTF-8'); 
?>
<html>
    <head>
        <title>Select size page</title>
    </head>
    <body>
        <form action="selectcolour.php" method="post">
            Select the size for the <?php echo $_SESSION['quantity'] ?> widgets you are ordering:
            <select name="selsize">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
            </select>
            <br/><br/>	
            <input type="submit" value="Buy"/>
        </form>
    </body>
</html>