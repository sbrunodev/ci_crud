function validacao(){
	if (document.form.nome.value==""){
		alert("Por favor, preencha o campo nome!");
		$('.asd').addClass( "border" );
		document.form.nome.focus();
		return false;
	}

	if (document.form.senha.value.length < 8){
		alert("A senha deve conter no minino 8 digitos");
	}
}