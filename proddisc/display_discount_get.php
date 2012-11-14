<?php
// Declare and instantiate variables (optional)

// get the user data from the form
$product_description = $_GET["product_description"];
$list_price = $_GET["list_price"];
$discount_percent = $_GET["discount_percent"];

// calculate the discount

$discount = $list_price * $discount_percent * 0.01;
$discount_price = $list_price - $discount;

// apply currency formatting to the dollar amounts
$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = "$discount_percent."%""	;
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);

// display the output

?>


<!DOCTYPE html>
<html></html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
</head>
<body>
    <div id="content">
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>