//Interactive

const _form = document.getElementById('AddUserForm');
const _name = document.getElementById('name');
const _uid = document.getElementById('uid');
const _email = document.getElementById('email');
const _pwd = document.getElementById('pwd');
const _pwdrepeat = document.getElementById('pwdrepeat');
const _role = document.getElementById('role');
const _dep = document.getElementById('dep');




_form.addEventListener('submit', function(ev) {
  let name=0;
  let uid=0;
  let email=0;
  let pwd=0;
  let pwdrepeat=0;
  let role=0;
  let dep=0;
  

  const _nameVal = _name.value;
  const _uidVal = _uid.value;
  const _emailVal = _email.value;
  const _pwdVal = _pwd.value;
  const _pwdrepeatVal = _pwdrepeat.value;
  const _roleVal = _role.value;
  const _depVal = _dep.value;
  

  if (_nameVal === '' && _emailVal === '' && _pwdVal === '' && _uidVal === '' && _roleVal === ''&& _pwdrepeatVal === '' && _depVal === '') {
    setErrorFor(_name);
    setErrorFor(_uid);
    setErrorFor(_email);
    setErrorFor(_pwdrepeat);
    setErrorFor(_pwd);
    setErrorFor(_role);
    alert("All inputs are empty.");

  }else {
    if(_nameVal === '') {
      setErrorFor(_name);
      alert("Please Enter User Name.");
    } else {
      setSuccessFor(_name);
      name=1;
    }

    if(_emailVal === '') {
      setErrorFor(_email);
      alert("Please Enter User Email.");
    } else if (!isEmail(_emailVal)) {
      setErrorFor(_email);
      alert("It is not proper email format.");

    } else {
      setSuccessFor(_email);
      email=1;
    }

    if(_pwdVal === '') {
      setErrorFor(_pwd);
      alert("Please Enter User Password.")
    } else {
      setSuccessFor(_pwd);
      pwd=1;
    }

    if(_uidVal === '') {
      setErrorFor(_uid);
      alert("Please Enter User ID.");
    } else {
      setSuccessFor(_uid);
      uid=1;
    }
    
    if(_depVal === '') {
      setErrorFor(_dep);
      alert("Please Enter User ID.");
    } else {
      setSuccessFor(_dep);
      dep=1;
    }

    if(_roleVal === "admin") {
      setSuccessFor(_role);
      role=1;
    } else if( _roleVal === "student") {
      setSuccessFor(_role);
      role=1;
    }else {
      setErrorFor(_role);
      alert("User Only Can Have Two Role student or admin.");
    }


    if(_pwdrepeatVal === '') {
      setErrorFor(_pwdrepeat);
      alert("Please Enter Repeat Password.");
    } else if(_pwdVal !== _pwdrepeatVal) {
      setErrorFor(_pwdrepeat);
      alert("passwords Does Not Match.");
    } else{
      setSuccessFor(_pwdrepeat);
      pwdrepeat=1;
    }
    }

    if(name==0 || uid==0 || email==0 || pwd==0 || pwdrepeat==0 || role==0 || dep==0){
      ev.preventDefault();
    }

});



function setErrorFor(In) {
const formControl = In.parentElement;
formControl.className = 'form error';
}

function setSuccessFor(In) {
const formControl = In.parentElement;
formControl.className = 'form success';
}

function isEmail(email) {
return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
