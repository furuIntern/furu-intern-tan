<?php
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $vat = $price * 10 / 100;
    $bill = ($price + $vat) * $amount;
    echo "đơn giá là: $bill" ;