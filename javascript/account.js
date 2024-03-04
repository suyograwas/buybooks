let LoginForm = document.getElementById("LoginForm");
let RegForm = document.getElementById("RegForm");
let Indicator = document.getElementById("Indicator");


function register() {
  RegForm.style.transform = "translateX(0px)";
  LoginForm.style.transform = "translateX(0px)";
  Indicator.style.transform ="translateX(100px)";

}

function login() {
  RegForm.style.transform = "translateX(300px)";
  LoginForm.style.transform = "translateX(300px)";
  Indicator.style.transform ="translateX(0px)";
}


// regex form validation


let uname=document.getElementById("uname");
let pass =document.getElementById("pass");

uname.addEventListener('blur',()=>{
  let regex = /^[a-zA-Z\-]+$/;
  let str =uname.value;

  if (regex.test(str)){
   
  }
  else
  {
    if(uname.value==""){
      alert("Please Enter Username");
    }
    else{
      alert("Your username is not valid .Only characters A-Z, a-z and '-' are  acceptable");
    }
    uname.value="";
  }
})


pass.addEventListener('blur',()=>{
  let regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
  let str =pass.value;

  if (regex.test(str))
  {
  }
  else
  {
    if(pass.value==""){
      alert("Please Enter Password");
    }
    else{
      alert("password should contain atleast one number and one special character");
    }
    pass.value="";
  }
})
// --------------reg form-------------


let rname=document.getElementById("rname");
let remail =document.getElementById("remail");
let rpass =document.getElementById("rpass");

rname.addEventListener('blur',()=>{
  let regex = /^[a-zA-Z\-]+$/;
  let str =rname.value;

  if (regex.test(str))
  {
    
  }else{
    if(rname.value==""){
      alert("Please Enter Username");
    }
    else{
      alert("Your username is not valid .Only characters A-Z, a-z and '-' are  acceptable");
    }
    rname.value="";
  }
})

remail.addEventListener('blur',()=>{
  let regex =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  let str =remail.value;

  if (regex.test(str))
  {
  }
  else{
    if(remail.value==""){
      alert("Please Enter Email");
    }else{
      alert("You have entered an invalid email address!");
    }
    remail.value="";
  }

})

rpass.addEventListener('blur',()=>{
  let regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
  let str =rpass.value;

  if (regex.test(str))
  {
  }else{
    if(rpass.value==""){
      alert("Please Enter Password");
    }
    else{
      alert("password should contain atleast one number and one special character");
    }
    rpass.value="";
  }
  
})


document.getElementById('LoginForm').reset();
document.getElementById('RegForm').reset();
document.getElementById('AdminLog').reset();



//------------------positive number--------------------

