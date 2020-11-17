<?php

include "db.php";

if(isset($_POST['hospital']) && isset($_POST['state']) && isset($_POST['address']) && isset($_POST['city']) &&
isset($_POST['phone']) && isset($_POST['landline']) && isset($_POST['first_name']) && isset($_POST['last_name']) &&
isset($_POST['email']) && isset($_POST['password']) && isset($_POST['latitude']) && isset($_POST['Longitude']) &&
isset($_POST['c_o']) && isset($_POST['c_n']) && isset($_POST['nc_o']) && isset($_POST['nc_n']) ){

    $hospital= trim($_POST['hospital']);
    $state= trim($_POST['state']);
    $address= trim($_POST['address']);
    $city= trim($_POST['city']);
    $phone= trim($_POST['phone']);
    $landline= trim($_POST['landline']);
    $first_name= trim($_POST['first_name']);
    $last_name= trim($_POST['last_name']);
    $email= trim($_POST['email']);
    $password= trim($_POST['password']);
    $latitude= trim($_POST['latitude']);
    $longitude= trim($_POST['Longitude']);
    $c_o= trim($_POST['c_o']);
    $c_n= trim($_POST['c_n']);
    $nc_o= trim($_POST['nc_o']);
    $nc_n= trim($_POST['nc_n']);



    $checkEmail = $db->prepare("SELECT email FROM hospital_info WHERE email = ?");
    $checkEmail->execute([$email]);
    if($checkEmail->rowCount() > 0 ){
        echo json_encode(['status' => 'error', 'message' => 'Sorry this email is already taken']);
    } else {
     $Query = $db->prepare("INSERT INTO `hospital_info`(`hospital_name`, `address`, `city`, `state`, `phone`, `landline`,`con_person`, `password`, `email`, `lattitude`, `longitude`, `c_o`, `c_r`, `n_o`, `n_r`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $Query->execute([$hospital, $address,$city,$state,$phone,$landline,$first_name,$password,$email,$latitude,$longitude,$c_o,$c_n,$nc_o,$nc_n]);
     if($Query){
         $_SESSION['created'] = "Your account has been created successfully";
         echo json_encode(['status' => 'success']);
     }
    }

}

?>