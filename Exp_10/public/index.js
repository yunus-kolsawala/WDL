// For Contact Us page

const inputs = document.querySelectorAll('input');
var jsonBall={
    
    Name:null,
    Email:null,
   Message:null
};

// regex patterns
const patterns = {
        Name: /^[a-zA-Z ]{2,30}$/,
        Message: /^[a-zA-Z0-9\s,.'-\/]{3,}$/,
        Email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
       
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

    if( document.getElementById("Name").classList.contains("valid") &&
    document.getElementById("Email").classList.contains("valid") ){
        jsonBall.Name=document.getElementById("Name").value;
        jsonBall.Message=document.getElementById("Message").value;
        jsonBall.Email=document.getElementById("Email").value;
        console.log(jsonBall);
    }
    else{
        alert("Fill All the feild properly");
    }



  });