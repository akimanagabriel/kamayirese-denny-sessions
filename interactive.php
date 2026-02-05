<?php
$amount = $_GET["amountInput"];

$discount = $amount / 100 * 5;
$totalAmount = $amount - $discount;

print "AMOUNT TO BE PAID = $totalAmount <br>Discount = $discount";
?>

<form>
    <input name="amountInput" type="number">
    <button>get a discount</button>
</form>