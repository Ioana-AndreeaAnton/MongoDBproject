<?php

require_once "connection.php";
$bulk = new MongoDB\Driver\BulkWrite;
if (isset($_POST["upload"])) {
    $target = "./images/" . md5(uniqid(time())) . basename($_FILES['image']['name']);
    $data = array('_id' => new MongoDB\BSON\ObjectID, 'nume' => $_POST['text'], 'image' => $target,);
    $bulk->insert($data);
}
$client->executeBulkWrite('clienti.clienti', $bulk);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    header('location: user.php');
} else {
    $msg = "Vai vai vai...";
}
?>