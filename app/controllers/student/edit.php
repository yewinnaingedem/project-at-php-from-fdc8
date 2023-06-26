<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    } 

    include "../../helpers/App.php";
    $app = new App();
    $errorState = false;
    $_SESSION['errors'] = null;

    $id = isset($_REQUEST['id'])? $_REQUEST['id']: null;
    $name = isset($_REQUEST['name'])? $_REQUEST['name']: null;
    $gender = isset($_REQUEST['gender'])? $_REQUEST['gender']: null;
    $age = isset($_REQUEST['age'])? $_REQUEST['age']: null;
    $address = isset($_REQUEST['address'])? $_REQUEST['address']: null;
    $id_number = isset($_REQUEST['id_number'])? $_REQUEST['id_number']: null;
    $grade = isset($_REQUEST['grade'])? $_REQUEST['grade']: null;
    $parent_name = isset($_REQUEST['parent_name'])? $_REQUEST['parent_name']: null;
    $contact_address = isset($_REQUEST['contact_address'])? $_REQUEST['contact_address']: null;
    $contact_phone = isset($_REQUEST['contact_phone'])? $_REQUEST['contact_phone']: null;

    $_SESSION['old-values']['name'] = $name;
    $_SESSION['old-values']['gender'] = $gender;
    $_SESSION['old-values']['age'] = $age;
    $_SESSION['old-values']['address'] = $address;
    $_SESSION['old-values']['id_number'] = $id_number;
    $_SESSION['old-values']['grade'] = $grade;
    $_SESSION['old-values']['parent_name'] = $parent_name;
    $_SESSION['old-values']['contact_address'] = $contact_address;
    $_SESSION['old-values']['contact_phone'] = $contact_phone;


    if($name == ""){
        $errorState = true;
        $_SESSION['errors']['name'] = "The name is required";
    }

    if($age == ""){
        $errorState = true;
        $_SESSION['errors']['age'] = "The age is required";
    }

    if($address == ""){
        $errorState = true;
        $_SESSION['errors']['address'] = "The address is required";
    }

    if($id_number == ""){
        $errorState = true;
        $_SESSION['errors']['id_number'] = "The id number is required";
    }

    if($parent_name == ""){
        $errorState = true;
        $_SESSION['errors']['parent_name'] = "The parent name is required";
    }
    


    if(! $errorState){
        $data = [];
        $data['name'] = $name;
        $data['gender'] = $gender;
        $data['age'] = $age;
        $data['address'] = $address;
        $data['id_number'] = $id_number;
        $data['grade'] = $grade;
        $data['parent_name'] = $parent_name;
        $data['contact_address'] = $contact_address;
        $data['contact_phone'] = $contact_phone;          
        $app->update('students',$data,'where id = ' . $id);
        $_SESSION['flush-message'] = "You updated the record successfully.";
        $app->redirect('/project/students/list.php');
    }
    else{        
        $app->redirect("/project/students/edit.php?id=" . $id);        
    }
    

    //echo 'save successfully';
?>