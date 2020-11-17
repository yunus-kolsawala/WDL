<?php

include "db.php";

if(isset($_POST['email']) && isset($_POST['password']) ){

    $email= trim($_POST['email']);
    $password= trim($_POST['password']);

    $Query = $db->prepare("SELECT * FROM hospital_info WHERE email = ? AND password = ?");
    $Query->execute([$email,$password]);
    if($Query->rowCount() > 0 ){

        $row = $Query->fetch(PDO::FETCH_OBJ);

    $email_id= $row->email;

            $_SESSION['name'] = $email_id;

             
            echo json_encode(['status' => 'success',
                              'email'=>$email_id]);
        
        } else {
            echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
        }
       
}
else{
    echo json_encode(['status' => 'dataError', 'message' => 'Invalid Data']);

}

?>