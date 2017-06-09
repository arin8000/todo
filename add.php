<?php
require_once 'app/init.php';
if(isset($_POST['name'])) {
    $name = trim($_POST['name']);
    if (!empty($name)) {
        $addedQuery = $conn->prepare("
            INSERT INTO items (name, done, created)
            VALUES (:name, 0, NOW())
        ");
        $addedQuery->execute([
            'name' => $name
        ]);
    }
}
header('Location: index.php');
