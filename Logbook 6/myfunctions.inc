<?php
    function html_header($pageTitle)
    {
        echo "<html><title> $pageTitle </title></head>";
        echo "<body>";
    }

    function html_h1($text)
    {
        echo "<h1> $text </h1>";
    }

    function html_h2($text_h2)
    {
        echo "<h2> $text_h2 </h2>";
    }

    function calculatetax($salary, $rate=40, $allowance=926)
    {
        $tax = (($salary * ($rate/100)) - $allowance);
        return $tax;
    }

    function html_footer()
    {
        echo "</body>";
        echo "</html>";
    }
?>