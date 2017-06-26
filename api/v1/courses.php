<?php

include  __DIR__ . '/../../include/db.php';

$result = $db->query('SELECT * FROM courses');
$scans = array();
while ($course = $result->fetchArray(SQLITE3_ASSOC)){
    $courses[] = $course;
}

header('Content-type: application/json');
echo json_encode($courses);
?>