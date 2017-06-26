<?php

include  __DIR__ . '/../../include/db.php';

$result = $db->query('SELECT * FROM users');
$scans = array();
while ($user = $result->fetchArray(SQLITE3_ASSOC)){
    $scans[] = $user;
}

header('Content-type: application/json');
echo json_encode($scans);
?>