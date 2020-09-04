// For Contact Us page

const inputs = document.querySelectorAll('input');


// regex patterns
const patterns = {
        telephone: /^\d{11}$/,
        Username: /^[a-z\d]{1,12}$/i,
        Password: /^[\d\w@-]{8,20}$/i,
        Email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
        Name: /^[a-z]{1,}$/i
};

// validation function
function validate(field, regex){


    if(regex.test(field.value)){
        if(field.classList.contains("invalid")){

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
