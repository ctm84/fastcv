document.getElementById("imppassconfirm").addEventListener('blur',validar,false);


function validar() {
	if(signup.password_confirm.value != signup.password.value) {
		alert("Las contraseñas no coinciden");
		return;
	}
} 