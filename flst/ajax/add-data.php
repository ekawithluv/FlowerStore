<?php

require_once "../flstdb.php";


$sql = "INSERT INTO products (name, amount, price) VALUES (?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param('sss',  $_POST['name'], $_POST['amount'], $_POST['price']);
$stmt->execute();
