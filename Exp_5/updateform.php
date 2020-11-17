<?php

include "db.php";

if(isset($_SESSION["name"]))
{

    if(isset($_POST['hospital']) && isset($_POST['state']) && isset($_POST['address']) && isset($_POST['city']) &&
    isset($_POST['phone']) && isset($_POST['landline']) && isset($_POST['first_name']) &&
     isset($_POST['latitude']) && isset($_POST['Longitude']) &&
    isset($_POST['c_o']) && isset($_POST['c_n']) && isset($_POST['nc_o']) && isset($_POST['nc_n']) ){
    
        $hospital= trim($_POST['hospital']);
        $state= trim($_POST['state']);
        $address= trim($_POST['address']);
        $city= trim($_POST['city']);
        $phone= trim($_POST['phone']);
        $landline= trim($_POST['landline']);
        $first_name= trim($_POST['first_name']);
        $latitude= trim($_POST['latitude']);
        $longitude= trim($_POST['Longitude']);
        $c_o= trim($_POST['c_o']);
        $c_n= trim($_POST['c_n']);
        $nc_o= trim($_POST['nc_o']);
        $nc_n= trim($_POST['nc_n']);
        $email=trim($_POST['email']);
    
        
         $Query = $db->prepare("UPDATE `hospital_info` SET `hospital_name`=?,`address`=?,`city`=?,`state`=?,`phone`=?,`landline`=?,`con_person`=?,`lattitude`=?,`longitude`=?,`c_o`=?,`c_r`=?,`n_o`=?,`n_r`=?,`update_at`=Now() WHERE email=?");
         $Query->execute([$hospital, $address,$city,$state,$phone,$landline,$first_name,$latitude,$longitude,$c_o,$c_n,$nc_o,$nc_n,$email]);
         if($Query){
             $_SESSION['created'] = "Your account has been created successfully";
             echo json_encode(['status' => 'success']);
      
        }
    
    }
}

?>