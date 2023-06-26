<?php
    include "../../helpers/App.php";

    $id = $_REQUEST['id'];
    $app = new App();
    $app->delete('students',
    'where id=' . $id);
    echo json_encode("You deleted the record successfully.");    
?>