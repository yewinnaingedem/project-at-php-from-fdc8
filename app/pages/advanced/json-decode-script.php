<?php
    $company = json_decode($_REQUEST['company']);
    echo $company->name;
?>