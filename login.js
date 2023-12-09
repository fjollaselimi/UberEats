document.addEventListener ("DOMContentLoaded",function(event){ 
    const SignUp= document.getElementById('sign-up');
 
    const validate= (event) => { 
      event.preventDefault();

      const Number= document.getElementById('numri');
      const Password= document.getElementById('passi');

      if(Number.value === ""){ 
        alert("Phone Number is required.");
        Number.focus();
        return false;
      }
      if(!numriValid(numri.value)) { 
       alert("Type your number in this format (xxx)xxx-xxxx");
       Number.focus();
       return false;
     }
      if(Password.value === ""){ 
       alert("Password is required");
       Password.focus();
       return false;
     }
     
     return true;
 
   }
 
   function numriValid(numri) {
     var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
     if (regex.test(numri)) {
       return true;
     } else {
       return false;
     }
   }
   SignUp.addEventListener('click',validate);
   });