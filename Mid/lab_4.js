function validate(pForm) {
  const username = pForm.uname.value;
  const password = pForm.upass.value;
  const dob = pForm.bdate.value;
  const c1 = pForm.chkbox1.checked;
  const c2 = pForm.chkbox2.checked;
  const genderMale = pForm.male.checked;
  const genderFemale = pForm.female.checked;
  const email = pForm.uemail.value;
  
  document.getElementById('usernameErrMsg').innerHTML = "";
  document.getElementById('passErrMsg').innerHTML = "";
  document.getElementById('dobErrMsg').innerHTML = "";
  document.getElementById('langErrMsg').innerHTML = "";
  document.getElementById('genderErrMsg').innerHTML = "";
  document.getElementById('emailErrMsg').innerHTML = "";

  let flag = 1;

  if (username == "") {
    document.getElementById('usernameErrMsg').innerHTML = 'Please fill up the username!';
    document.getElementById('usernameErrMsg').style.color = 'red';
    flag = 0;
  }

  if (password.length < 8) {
    document.getElementById('passErrMsg').innerHTML = 'Password should contain at least 8 characters!';
    document.getElementById('passErrMsg').style.color = 'red';
    flag = 0;
  }
  else{
     document.getElementById('passErrMsg').innerHTML ="";
  }

  if (dob == "") {
    document.getElementById('dobErrMsg').innerHTML = "Please select your birthdate!";
    document.getElementById('dobErrMsg').style.color = "red";
    flag = 0;
  }


  if (!c1 && !c2) {
    document.getElementById('langErrMsg').innerHTML = "Please select at least one language!";
    document.getElementById('langErrMsg').style.color = "red";
    flag = 0;
  }

  if (!genderMale && !genderFemale) {
    document.getElementById('genderErrMsg').innerHTML = "Please select your gender!";
    document.getElementById('genderErrMsg').style.color = "red";
    flag = 0;
  }
  
  if (email == "") {
    document.getElementById('emailErrMsg').innerHTML = "Please enter your email!";
    document.getElementById('emailErrMsg').style.color = "red";
    flag = 0;
  }
  else{
    let at_sign = -1, dot_sign = -1;
    for (let i = 0; i < email.length; i++) {
        if (email[i] == '@'){at_sign = i;}
        if (email[i] == '.'){dot_sign = i;}
    }
    if(at_sign==-1 || dot_sign==-1){
      document.getElementById('emailErrMsg').innerHTML = "Please enter valid email!";
      document.getElementById('emailErrMsg').style.color = "red";
      flag = 0;
    }
  }
  if(flag!=0){return true;}
  return false;
}