// For Contact Us page

const inputs = document.querySelectorAll('input');
var jsonBall={
    hospital:null,
    state:null,
    address:null,
    city:null,
    phone:null,
    landline:null,
    first_name:null,
    email:null,
    latitude:null,
    Longitude:null,
    c_o:null,
    c_n:null,
    nc_o:null,
    nc_n:null
};

// regex patterns
const patterns = {
        Hospital: /^[a-zA-Z ]{2,30}$/,
        State: /^[a-zA-Z ]{2,30}$/,
        Address: /^[a-zA-Z0-9\s,.'-\/]{3,}$/,
        City: /^[a-zA-Z ]{2,30}$/,
        Phone: /^\d{10}$/,
        Landline: /^\d{11}$/,
        First_name: /^[a-zA-Z ]{2,30}$/,
        Last_name: /^[a-zA-Z ]{2,30}$/,
        Contact_no: /^\d{10}$/,
        Email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
        Password: /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/,
        Latitude: /^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}/,
        Longitude: /^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}/
};


// window on load


fetchData();


var JsonForEmail={};

function fetchData(){
    JsonForEmail=JSON.parse(localStorage.getItem("dataToUpdate"));
    console.log(JsonForEmail);
    fetchDataAjax();
}



// validation function
function validate(field, regex){


    if(regex.test(field.value)){
        
        if(field.classList.contains("invalid"))
        {

        field.classList.remove("invalid");
        field.classList.remove("border-red-500");
        }
        field.classList.add("valid");
        field.classList.add("border-green-500");

    } else {
        if(field.classList.contains("valid")){
            field.classList.remove("valid");
            field.classList.remove("border-green-500");
        
        }
        field.classList.add("invalid");
        field.classList.add("border-red-500");
    }

}

// attach keyup events to inputs
inputs.forEach((input) => {
    input.addEventListener('keyup', (e) => {
            // console.log(patterns[e.target.attributes.name.value]);
            validate(e.target, patterns[e.target.attributes.placeholder.value]);
    });
});

document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault();

    if( document.getElementById("Hospital").classList.contains("valid") &&
    document.getElementById("State").classList.contains("valid") &&
    document.getElementById("City").classList.contains("valid") &&
    document.getElementById("Address").classList.contains("valid") &&
    document.getElementById("Phone").classList.contains("valid") &&
    document.getElementById("Landline").classList.contains("valid") &&
    document.getElementById("latitude").classList.contains("valid") &&
    document.getElementById("longitude").classList.contains("valid") &&
    document.getElementById("First_name").classList.contains("valid") 

    ){
        jsonBall.hospital=document.getElementById("Hospital").value;
        jsonBall.state=document.getElementById("State").value;
        jsonBall.city=document.getElementById("City").value;
        jsonBall.address=document.getElementById("Address").value;
        jsonBall.phone=document.getElementById("Phone").value;
        jsonBall.landline=document.getElementById("Landline").value;
        jsonBall.latitude=document.getElementById("latitude").value;
        jsonBall.Longitude=document.getElementById("longitude").value;

        JsonForEmail=JSON.parse(localStorage.getItem("dataToUpdate"));

        jsonBall.email=JsonForEmail.email;
        jsonBall.first_name=document.getElementById("First_name").value;
        jsonBall.c_o=document.getElementById("c_o").value;
        jsonBall.c_n=document.getElementById("c_uo").value;
        jsonBall.nc_o=document.getElementById("nc_o").value;
        jsonBall.nc_n=document.getElementById("nc_uo").value;
        console.log(jsonBall);

        updateData();
    }
    else{
        alert("Fill All the feild properly");
    }



  });

  document.getElementById("delete").addEventListener("click", function(event){
    event.preventDefault();

    if( document.getElementById("Hospital").classList.contains("valid")){
       
        JsonForEmail=JSON.parse(localStorage.getItem("dataToUpdate"));
        
        deleteAccount(JsonForEmail.email);
    }
    else{
        alert("Fill All the feild properly");
    }
  });

  // delete account
  function deleteAccount(email_id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        method: 'POST'
        ,data:{ "email": email_id}
        , url: '/deleteaccount'
        , dataType: 'json'
    }).done(deleted)
    .fail(function () {
        console.log('Error!! from fetch data');
    })
  }

  function deleted(data) {             
    console.log(data);
    if(data.status === "success"){
        alert("Account Deleted Succesfully");
        setTimeout(redirectafterDelete,1000);
    } else if(data.status === "notAllowed"){
        console.log("Cannot able delete the account");
    } else if(data.status === "dataError"){
        console.log("Error in Data");
    }
  }
  
function redirectafterDelete(){
    localStorage.removeItem("dataToUpdate");
    window.location = "signin";
}
//fetch data 

  function fetchDataAjax(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        method: 'POST'
        ,data:{ "email": "a"}
        , url: '/fetchdata'
        , dataType: 'json'
    }).done(fillTheFeild)
    .fail(function (err) {
        console.log('Error!! from fetch data'+err);
    })
  }
 

  function fillTheFeild(JsonToFill) {  
      
    console.log(JsonToFill)
    document.getElementById("Hospital").value=JsonToFill.hospital_name;
    document.getElementById("State").value=JsonToFill.state;
    document.getElementById("City").value=JsonToFill.city;
    document.getElementById("Address").value=JsonToFill.address;
    document.getElementById("Phone").value=JsonToFill.phone;
    document.getElementById("Landline").value=JsonToFill.landline;
    document.getElementById("latitude").value=JsonToFill.latitude;
    document.getElementById("longitude").value=JsonToFill.longitude;
    document.getElementById("First_name").value=JsonToFill.con_person;
    document.getElementById("c_o").value=JsonToFill.c_o;
    document.getElementById("c_uo").value=JsonToFill.c_r;
    document.getElementById("nc_o").value=JsonToFill.n_o;
    document.getElementById("nc_uo").value=JsonToFill.n_r;
  }


  //register call


function updateData(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },

        method: 'POST'
        ,data:jsonBall
        , url: '/updatehospital'
        , dataType: 'json'
    }).done(output)
    .fail(function () {
        console.log('Error!!');
    })
  }


  function output(data) {             
    console.log(data);
    if(data.status === "success"){
        alert("Data Updated Succesfully");
    } else if(data.status === "notAllowed"){
        console.log("NotAllowed");
    } else if(data.status === "dataError"){
        console.log("Error in Data");
    }
  }
  