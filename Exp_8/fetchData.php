<?php

include "db.php";


if(isset($_SESSION["name"]))
{
if(isset($_POST['email']))
    
     {   $email= trim($_POST['email']);
    
        $Query = $db->prepare("SELECT * FROM hospital_info WHERE email = ?");
        $Query->execute([$email]);
        if($Query->rowCount() > 0 ){
    
             $row = $Query->fetch(PDO::FETCH_OBJ);
    
              $hospital= $row->hospital_name;
             $state= $row->state;
                $address= $row->address;
                $city= $row->city;
             $phone= $row->phone;
              $landline= $row->landline;
             $first_name= $row->con_person;
             $email_id= $row->email;
             $latitude=$row->lattitude;
                $longitude= $row->longitude;
                $c_o= $row->c_o;
                $c_n= $row->c_r;
             $nc_o= $row->n_o;
             $nc_n= $row->n_r;
             
                echo json_encode(['status' => 'success','hospital'=>$hospital,'state'=>$state,'address'=>$address,'city'=>$city,
                                 'phone'=>$phone,'landline'=>$landline,'first_name'=>$first_name,'latitude'=>$latitude,
                                  'email'=>$email_id,'longitude'=>$longitude,'c_o'=>$c_o,'c_n'=>$c_n,
                                  'nc_o'=>$nc_o,'nc_n'=>$nc_n]);
            
    } 
    else {
                echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
            }
    
    }
}            




?>