<?php

require_once "../flstdb.php";

$sql="SELECT * from products";
$result = $db->query($sql);
$products = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($products);