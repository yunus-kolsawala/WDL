// For Contact Us page

const inputs = document.querySelectorAll('input');


// regex patterns
const patterns = {
        Hospital: /[\w]+/g,
        State: /[\w]+/g,
        District: /[\w]+/g,
        City: /[\w]+/g,
        Phone: /^\d{10}$/,
        Landline: /^\d{11}$/,
        First_name: /^[a-z]+$/,
        Last_name: /^[a-z]+$/g,
        Contact_no: /^\d{10}$/,
        Email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
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
