<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\HospitalInfo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/coronacount', function () {
    return view('coronacount');
});

Route::get('/hospitalinfo', function () {
    return view('hospitalinfo');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/update', function () {
    
  //  session()->forget('data');
    if(!session()->has('data'))
    {
        return redirect('signin');
    }
    return view('update');
});

Route::post('/adduser', function (Request $request) {
   
    $request->validate([
        'hospital'=>'required',
        'address'=>'required',
        'Longitude'=>'required',
        'c_n'=>'required',
        'c_o'=>'required',
        'city'=>'required',
        'email'=>'required',
        'first_name'=>'required',
        'landline'=>'required',
        'latitude'=>'required',
        'nc_n'=>'required',
        'nc_o'=>'required',
        'phone'=>'required',
        'state'=>'required'

    ]);


    $users = HospitalInfo::where('email', '=', $request->email)->get();

    
    if(count($users) ){
        echo json_encode(['status' => 'userExist', 'message' => 'Sorry this email is already taken']);
    } else {
        $post= HospitalInfo::create([
            'hospital_id'=>"",
             'hospital_name'=>$request->hospital,
             'address'=>$request->address,
             'city'=>$request->city,
             'state'=>$request->state,
             'phone' =>$request->phone,
             'landline'=>$request->landline,
             'con_person'=>$request->first_name,
             'password'=>$request->password,
             'email' =>$request->email,
             'latitude' =>$request->latitude,
             'longitude'=>$request->Longitude,
             'c_o'=>$request->c_o,
             'c_r' =>$request->c_n,
             'n_o'=>$request->nc_o,	
             'n_r'=>$request->nc_n, 
         ]);
         
         if($post){
         echo json_encode(['status' => 'success']);
     }
    }

});

Route::post('/checkuser',function(Request $request){

    $request->validate([    
        'email'=>'required',
        'password'=>'required',
    ]);

    $users = HospitalInfo::where('email', '=', $request->email)->where('password', '=', $request->password)->get();

    if(count($users)){

    $id= $users[0]->id;

    $request->session()->put('data',$id);
     echo json_encode(['status' => 'success',
                              'email'=>session('data')]);
        
        } else {
            echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
        }
       
});

Route::post('/fetchdata',function(Request $request){
    if(!session()->has('data'))
    {
        return redirect('signin');
    }
    $hospitalData = HospitalInfo::where('id', '=',session()->get('data'))->get();

    if(count($hospitalData)){
      //  return json_encode(['status' => 'success', 'message' => 'Your email is wrong']);

   // $email_id= $users[0]->email;
    echo json_encode( $hospitalData[0]);
        
        } else {
            echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
        }
 
});

Route::post('/updatehospital',function(Request $request){
    if(!session()->has('data'))
    {
        return redirect('signin');
    }
    $request->validate([
        'hospital'=>'required',
        'address'=>'required',
        'Longitude'=>'required',
        'c_n'=>'required',
        'c_o'=>'required',
        'city'=>'required',
        'first_name'=>'required',
        'landline'=>'required',
        'latitude'=>'required',
        'nc_n'=>'required',
        'nc_o'=>'required',
        'phone'=>'required',
        'state'=>'required'
    ]);


    $updatehospital = HospitalInfo::find($request->email);

    
    if($updatehospital->id>0){

        $updatehospital->hospital_name=$request->hospital;
        $updatehospital->address=$request->address;
        $updatehospital->longitude=$request->Longitude;
        $updatehospital->c_r=$request->c_n;
        $updatehospital->c_o=$request->c_o;
        $updatehospital->city=$request->city;
        $updatehospital->con_person=$request->first_name;
        $updatehospital->landline=$request->landline;
        $updatehospital->latitude=$request->latitude;
        $updatehospital->n_r=$request->nc_n;
        $updatehospital->n_o=$request->nc_o;
        $updatehospital->phone=$request->phone;
        $updatehospital->state=$request->state;
        $updatehospital->save();
             
         echo json_encode(['status' => 'success']);
    } else{
     echo json_encode(['status' => 'notAllowed']);
    }

});

Route::post('/deleteaccount',function(Request $request){
    if(!session()->has('data'))
    {
        return redirect('signin');
    }
    $deletehospital = HospitalInfo::find(session()->get('data'));
    $deletehospital->forceDelete();
echo json_encode(['status' => 'success']);

});

Route::post('/infobyposition',function(Request $request){

    $request->validate([
        'longitudeUp'=>'required',
        'longitudeDown'=>'required',
        'latitudeUp'=>'required',
        'latitudeDown'=>'required',
    ]);
    $hospitalData = HospitalInfo::where('latitude', '>',$request->latitudeDown)
                        ->where('latitude', '<',$request->latitudeUp)->where('longitude', '>',$request->longitudeDown)
                        ->where('longitude', '<',$request->longitudeUp)->orderBy('updated_at', 'DESC')->get();

        echo $hospitalData;

});

Route::post('/infobydistrict', function (Request $request) {
    $hospitalData = HospitalInfo::where('city', '=',$request->districtName)->orderBy('updated_at', 'DESC')->get();

    echo $hospitalData;
});

Route::get('/logout',function(){

    session()->forget('data');
    return redirect('/'); 


});

Route::get('/adminsignin',function(){
    return view('adminsignin');
});



Route::get('/admintable',function(){
    return view('admintable');
});


Route::post('/checkadminuser',function(Request $request){

    $request->validate([    
        'email'=>'required',
        'password'=>'required',
    ]);

    if($request->email=="mohib@gmail.com" && $request->password=="qwerty@123456"){

    $id= "admin";

    $request->session()->put('data',$id);
     echo json_encode(['status' => 'success',
                              'email'=>session('data')]);
        
        } else {
            echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
        }
       
});


Route::get('/adminupdate/{id}',function($id,Request $request){
    if(session()->get('data')!="admin")
    {
        return redirect('signin');
    }
    
    $request->session()->put('pageId',$id);

    return redirect('adminupdate');
});

Route::post('/admintablesearch',function(Request $request){
    if(session()->get('data')!="admin")
    {
        return redirect('signin');
    }

    $hospitalData = HospitalInfo::where('hospital_name', 'like', $request->jsonBall.'%')->get();
    
    return $hospitalData;
});


Route::post('/adminfetchdata',function(Request $request){
    if(session()->get('data')!="admin")
    {
        return redirect('signin');
    }

    $hospitalData = HospitalInfo::where('id', '=',session()->get('pageId'))->get();

    if(count($hospitalData)){
      //  return json_encode(['status' => 'success', 'message' => 'Your email is wrong']);

   // $email_id= $users[0]->email;
    echo json_encode( $hospitalData[0]);
        
        } else {
            echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
        }
});

Route :: get('/adminupdate',function(){

    //echo session()->get('pageId');
    return view('adminupdate');
});


Route::post('/adminupdatehospital',function(Request $request){
    if(!session()->has('data'))
    {
        return redirect('signin');
    }
    $request->validate([
        'hospital'=>'required',
        'address'=>'required',
        'Longitude'=>'required',
        'c_n'=>'required',
        'c_o'=>'required',
        'city'=>'required',
        'first_name'=>'required',
        'landline'=>'required',
        'latitude'=>'required',
        'nc_n'=>'required',
        'nc_o'=>'required',
        'phone'=>'required',
        'state'=>'required'
    ]);


    $updatehospital = HospitalInfo::find(session()->get('pageId'));

    
    if($updatehospital->id>0){

        $updatehospital->hospital_name=$request->hospital;
        $updatehospital->address=$request->address;
        $updatehospital->longitude=$request->Longitude;
        $updatehospital->c_r=$request->c_n;
        $updatehospital->c_o=$request->c_o;
        $updatehospital->city=$request->city;
        $updatehospital->con_person=$request->first_name;
        $updatehospital->landline=$request->landline;
        $updatehospital->latitude=$request->latitude;
        $updatehospital->n_r=$request->nc_n;
        $updatehospital->n_o=$request->nc_o;
        $updatehospital->phone=$request->phone;
        $updatehospital->state=$request->state;
        $updatehospital->save();
             
         echo json_encode(['status' => 'success']);
    } else{
     echo json_encode(['status' => 'notAllowed']);
    }

});


Route :: post('/admindeleteaccount',function(Request $request){
    if(!session()->has('data'))
    {
        return redirect('signin');
    }
    $deletehospital = HospitalInfo::find(session()->get('pageId'));
    $deletehospital->forceDelete();
    session()->forget('data');
echo json_encode(['status' => 'success']);
});

Route::get('try',function(){
   
   
   
    $updatehospital = HospitalInfo::find("mohib@gmail.com");

    
    if($updatehospital->id>0){

        $updatehospital->hospital_name="sdf";
        $updatehospital->address="aewarg";
        $updatehospital->longitude=12.22134;
        $updatehospital->c_r=23;
        $updatehospital->c_o=23;
        $updatehospital->city=$request->city;
        $updatehospital->con_person=$request->first_name;
        $updatehospital->landline=$request->landline;
        $updatehospital->latitude=$request->latitude;
        $updatehospital->n_r=$request->nc_n;
        $updatehospital->n_o=$request->nc_o;
        $updatehospital->phone=$request->phone;
        $updatehospital->state=$request->state;
        $updatehospital->save();
             
         echo json_encode(['status' => 'success']);
    } else{
     echo json_encode(['status' => 'notAllowed']);
    }
});
