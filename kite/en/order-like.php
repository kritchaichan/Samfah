<?php
session_start();
require_once ('../app/config.inc.php');

if(isset($_GET['type'],$_GET['id'])){

$type = $_GET['type'];
$id = $_GET['id'];
$session_id = session_id();

switch ($type) {
  case 'picture_door':
    $objCon->query("
    INSERT INTO picture_door_like (Picture_Door_ID,Session_ID)
        SELECT '{$id}','{$session_id}'
        FROM picture_door
        WHERE EXISTS(
            SELECT Picture_Door_ID
            FROM picture_door
            WHERE Picture_Door_ID = '{$id}')
        AND NOT EXISTS(
            SELECT LIKE_ID
            FROM picture_door_like
            WHERE Picture_Door_ID = '{$id}'
            AND Session_ID = '{$session_id}')
        LIMIT 1
    ");
    break;
}

$doorsQuery = $objCon->query("
    SELECT
    COUNT(picture_door_like.LIKE_ID) As likes

    FROM picture_door

    LEFT JOIN picture_door_like
    ON picture_door.Picture_Door_ID = picture_door_like.Picture_Door_ID
	
	WHERE picture_door.Picture_Door_Type = 'Classic' AND picture_door.Picture_Door_ID = '{$id}'

    GROUP BY picture_door.Picture_Door_Name


");

while($row = $doorsQuery->fetch_object()){
	$ds[] = $row;
}

foreach ($ds as $door){
	echo $door->likes;	
}

//header('Location: order.php#page-order');
}

 ?>
 
 
