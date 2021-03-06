<?php
include_once('../includes/init.php');
include_once('../database/project.php');
$userID = getUserID();
if(!is_numeric($userID))
    header('Location:notfound.php');

$projects = getUserProjects($userID, 'FALSE');
 
for($i=0; $i<count($projects); $i++) {
    $users[$i] = getProjectUsers($projects[$i]['ID']);
}

include_once('../templates/common/header.php');
include_once('../templates/common/aside.php');
include_once('../templates/dialogs/add_project.php');
include_once('../templates/contents/project_grid.php');
include_once('../templates/common/footer.php');
?>