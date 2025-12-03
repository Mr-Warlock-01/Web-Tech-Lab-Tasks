function validate(pForm){
	const uname = pForm.username.value;
	const msg=document.getElementById("usernameError")
	msg.innerHTML = "";
	let flag=1;
	if(uname == ""){
		msg.innerHTML ="Fill username";
		flag=0;
	}
	else if(uname.length<2){
		msg.innerHTML ="Username must be alteast 2 length";
		flag=0;
	}
	if(flag==1){return true;}
	return false;
}