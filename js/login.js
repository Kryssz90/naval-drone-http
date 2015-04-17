function checkpoint(form) {
if (form.id.value=="try") 
	{ 
		if (form.pass.value=="it") 
		{              
			location="index.html" 
			alert("Ejnye, a forráskódot nézed?!")
		} 
		else { alert("Invalid Password") }
	} 
	else {  alert("Invalid UserID") }
}