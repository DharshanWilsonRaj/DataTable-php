<?php
require_once __DIR__ . "/constant.php";
try {
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);
} catch (\Exception $e) {
    echo 'Failed to connect Database' . $e->getMessage();
    exit();
}
