function validate()
{
   
   var mail = document.getElementById('email').value;
   var password = document.getElementById('pass').value;
 
   
   if(mail == ""){
        document.getElementById('eml').innerHTML="Please enter a email";   
        return false;
    }
    var emailformat=/^[a-z A-z 0-9_\.\+]{2,}\@{1}[a-z A-Z]{2,}\.{1}[a-z]{2,6}\.{0,1}[a-z]{0,3}$/;
    if(emailformat.test(mail)) {
        document.getElementById('eml').innerHTML="";   
       
    }
    else{
        document.getElementById('eml').innerHTML="Please enter correct email";   
        return false;
    }

    if(password == ""){
        document.getElementById('ps').innerHTML="Please enter a Password";   
        return false;
        }
        else{
            document.getElementById('ps').innerHTML=" ";   
           }
        if((password.length<=6)){
            document.getElementById('ps').innerHTML="Enter Password more than 6 characters";   
            return false;
    
        }
        else{
            document.getElementById('ps').innerHTML=" ";   
           }



}