<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Diseño Web Paz Romero</title>
</head>
<body>
<?php
function is_valid_email($vemail) {
	$result = TRUE;
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $vemail)) {
	$result = FALSE;
	}
	return $result;
}
//if "email" is filled out, send email
if (isset($_REQUEST['email']) && $_REQUEST['email'] != '' && $_REQUEST['fname'] != '' && $_REQUEST['message'] != ''
	&& is_valid_email($_REQUEST['email']))
{
	//send email
	$email = $_REQUEST['email'] ;
	$name = $_REQUEST['fname'] ;
	$message = $_REQUEST['message'] ;
	$recievers_email = "paz.romero.soto@gmail.com";
		
	mail($recievers_email,
	$message, "From:" . $email);
	echo "<p class='form_success'>Mensaje enviado! Gracias!</p><p class='form_success_sub'>Responderé lo antes posible.</p>";
}
else
{
	//if "email" is not filled out, display the form
	if(!is_valid_email($_REQUEST['email']))
	{
		echo "<p class='form_error'>Por favor, inserta una dirección de correo.</p>";						   
	}
	else if($_REQUEST['fname'] == '')
	{
		echo "<p class='form_error'>Por favor, escribe tu nombre.</p>";
	}
	else if($_REQUEST['message'] == '')
	{
		echo "<p class='form_error'>Por favor, deja tu mensaje.</p>";
	}
}
?>
</body>
</html>