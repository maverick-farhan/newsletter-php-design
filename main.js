// Email Validation
//Declarative approach, "Just write, Don't ask why. No How only What" :)

const email = document.querySelector("#email");
const submit = document.querySelector('#submit');

const setErrMsg = (errormsg) => {
  const message_div = document.querySelector(".message_div");
  message_div.className = "message_div errormsg";
  message_div.style.visibility = "visible";
  message_div.style.transition = "all 1s linear";
  message_div.innerText = errormsg;
};
const setSuccessMsg = (successmsg) => {
  const message_div = document.querySelector(".message_div");
  message_div.className = "message_div successmsg";
  message_div.style.visibility = "visible"; 
  message_div.style.transition = "all 1s linear";
  
  message_div.innerText = successmsg;
};  

const isEmail = (emailVal) => {
    var atSymbol = emailVal.indexOf("@");
    if (atSymbol < 1) {
      return false;
    }  
    var dot = emailVal.lastIndexOf(".");
    if (dot <= atSymbol + 2) {
      return false;
    }
    if (dot === email.length - 1) {
      return false;
    } else return true;
  };

const validateEmail = ()=>{
const emailVal = email.value.trim();
if(emailVal===""){
  setErrMsg("Email Can't Be Empty"); 
  
}
else if(!isEmail(emailVal)){
  setErrMsg("Not a valid Email")
}
else if(emailVal<=2){
  setErrMsg("Email must be atleast 3 characters")
}
else{
  setSuccessMsg("Successfully subscribed");
}
}
submit.addEventListener('click',(e)=>{
  validateEmail();
})

