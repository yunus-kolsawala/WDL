<?php

include "db.php";

if(isset($_REQUEST['longitudeUp']) && isset($_REQUEST['longitudeDown']) && isset($_REQUEST['latitudeUp']) && isset($_REQUEST['latitudeDown']))
     { 
       
        $longitudeUp= $_REQUEST['longitudeUp'];
        $longitudeDown= $_REQUEST['longitudeDown'];
        $latitudeUp= $_REQUEST['latitudeUp'];
        $latitudeDown= $_REQUEST['latitudeDown'];
        
       // echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
    
        $Query = $db->prepare("Select * from hospital_info WHERE (hospital_info.lattitude BETWEEN ? AND ?) AND (hospital_info.longitude BETWEEN ? AND ?)  order by hospital_info.update_at desc");
        //=CONCAT( CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&CHAR(RANDBETWEEN(65,90))&RANDBETWEEN(1000,9999),"@gmail.com")
       // Select * from hospital_info WHERE (hospital_info.lattitude BETWEEN 10 AND 30) AND (hospital_info.longitude BETWEEN 60 AND 80) order by hospital_info.created_at	
        $Query->execute([$latitudeDown, $latitudeUp, $longitudeDown,$longitudeUp]);


        if ($Query->rowCount() > 0){
            # code...
            $arr = [];
            $inc = 0;

            ini_set('display_errors', 0);
            ini_set('display_startup_errors', 0);

            while ($row = $Query->fetch(PDO::FETCH_OBJ)) {
                # code...
                
        
                $hospital= $row->hospital_name;
                $address= $row->address;
                $phone= $row->phone;
                $landline= $row->landline;
                $c_o= $row->c_o;
                $c_n= $row->c_r;
                $nc_o= $row->n_o;
                $nc_n= $row->n_r;
                $update_at=$row->update_at;

                $jsonArrayObject = (array('hospital' => $hospital, 'address' => $address, 'phone' => $phone,'landline' => $landline,'c_o' => $c_o,'c_n' => $c_n,'nc_o' => $nc_o,'nc_n' => $nc_n,'update_at' => $update_at));
                $arr[$inc] = $jsonArrayObject;
                $inc++;
            
                
            }
             

            
            echo json_encode($arr);
        }
        else{
            echo json_encode(['status' => 'No Value']);
        }
    }
    else{
        echo json_encode(['status' => 'failure']);
    }




?>