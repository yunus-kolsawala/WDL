// For Contact Us page

const inputs = document.querySelectorAll('input');
var jsonBall={
    email:null,
    password:null,
};

// regex patterns
const patterns = {
        Email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
        Password: /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/,

};

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

    if( 
    document.getElementById("Password").classList.contains("valid") &&
    document.getElementById("Email").classList.contains("valid") ){

        jsonBall.password=document.getElementById("Password").value;
        jsonBall.email=document.getElementById("Email").value;

        console.log(jsonBall);
        signincall();
    }
    else{
        alert("Fill All the feild properly");
    }

  });

  function signincall(){
    $.ajax({
        method: 'POST'
        ,data:jsonBall
        , url: 'checkuser.php'
        , dataType: 'json'
    }).done(output)
    .fail(function () {
        console.log('Error!!');
    })
  }


  function output(data) {             
    console.log(data);
    if(data.status === "success"){
        console.log(data);
        dataToUpdate=JSON.stringify(data);
        console.log(dataToUpdate);
        localStorage.setItem("dataToUpdate", JSON.stringify(data));
         window.location = "Update.html";
    } else if(data.status === "emailError"){
        console.log("Wrong Email Id");
    } else if(data.status === "dataError"){
        console.log("Error in Data");
    }
  }
  