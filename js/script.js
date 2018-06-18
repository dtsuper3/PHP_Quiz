const signup=document.getElementById('signup');
const login=document.getElementById('login');
const btn_signup=document.getElementById('btn_signup');
const btn_login=document.getElementById('btn_login');
signup.style.display="none";

btn_signup.addEventListener('click',function(e) {
	signup.style.display="block";
	login.style.display="none";	
	e.preventDefault();
})

btn_login.addEventListener('click',function(e) {
	signup.style.display="none";
	login.style.display="block";	
	e.preventDefault();
})