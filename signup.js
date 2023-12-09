document.addEventListener ("DOMContentLoaded",function(event){ 
   const SignUp= document.getElementById('sign-up');

   const validate= (event) => { 
     event.preventDefault();

     const Name = document.getElementById('emri');
     const LastName= document.getElementById('mbiemri');
     const Email= document.getElementById('email');
     const Number= document.getElementById('numri');
     const Password= document.getElementById('passi');
     
     if(Name.value === "") {
       alert("Name is required");
       Name.focus();
       return false;
     }
     if(LastName.value === ""){ 
       alert("Last Name is required."); 
       LastName.focus();
       return false;
     }
     if(Email.value === ""){ 
       alert("Email is required"); 
       Email.focus();
       return false;
     }
     if(Number.value === ""){ 
       alert("Number is required.");
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
    if(!emailValid(email.value)) { 
        alert("Please type the email correctly");
        Email.focus();
        return false;
    }
    

    return true;

  }

  const emailValid= (email) => { 
     const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
     return emailRegex.test(email.toLowerCase());
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


