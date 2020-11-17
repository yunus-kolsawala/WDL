<?php

include "db.php";

if(isset($_SESSION["name"]))
{
if(isset($_POST['email']))
    
     {   $email= trim($_POST['email']);
    
        $Query = $db->prepare("Delete FROM hospital_info WHERE email = ?");
        $Query->execute([$email]);
        if($Query){
            echo json_encode(['status' => 'success', 'message' => 'Your Account de;eted']);
                                    
    } 
    else {
                echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
            }
    
    }
}            




?>