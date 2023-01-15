<?php


$objDb = new \App\Manager\UserManager(new \App\Factory\PDOFactory());
$conn = $objDb->getAllUsers();
echo json_encode($conn,true);

