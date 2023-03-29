<?php 
    session_start();

    switch ($_SESSION['size']) {
        case 'Small':
            $price = 15.75;
            break;
        case 'Medium':
            $price = 16.75;
            break;
        case 'Large':
            $price = 17.75;
            break;
        case 'Extra Large':
            $price = 18.75;
            break;
    }

    if (isset($_SESSION['qty'])) {
        $quantity = $_SESSION['qty'];
    } elseif (isset($_POST['selqty'])) {
        $quantity = $_POST['selqty'];
    } else {
        $quantity = 0;
    }

    $totalamount = $quantity * $price;
    
    echo "<h2> Your order quantity is " . $quantity . "</h2>";
    echo "<h2> and the selected colour is " . $_POST['selcolour'] . "</h2>";
    echo "<h2>The size is " . $_SESSION['size'] . "</h2>";
    echo "<h2> The total cost to pay is £" . $totalamount . "</h2>";
?>