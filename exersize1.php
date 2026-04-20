<?php
$name = $_POST['username'];



$bulbtype = $_POST['btype'];


if ($bulbtype == "4x100") {
    $bulbPrice = 2.39;
} elseif ($bulbtype == "8x100") {
    $bulbPrice = 4.29;
} elseif ($bulbtype == "4x100+") {
    $bulbPrice = 3.95;
} else {
    $bulbPrice = 7.49;
}

$amount = $_POST['packamount'];


$packPrice = $amount * 10.42;

$card = $_POST['cardType'];

?>

<table>
    <tr>
        <th>Category</th>
        <th>Input</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>Bulb Type</td>
        <td><?php echo $bulbtype; ?></td>
        <td><?php echo $bulbPrice; ?></td>
    </tr>
    <tr>
        <td>Package Amount</td>
        <td><?php echo $amount; ?></td>
        <td><?php echo $packPrice; ?></td>
    </tr>
    <tr>
        <td>Card Type</td>
        <td><?php echo $card; ?></td>
        <td>N/A</td>
    </tr>
    <tr>
        <td colspan="2">Total Price</td>

        <td><?php echo $bulbPrice + $packPrice; ?></td>
    </tr>
</table>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>