<?php  
class Contacto extends Controller{
	protected function index(){
		$viewmodel = new ContactoModel();
		$this->ReturnView($viewmodel->index(), true);

		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['email'])) {

			$email_to = "ing.sergio.camus@gmail.com"; 
			$email_subject = "Contacto vía formulario"; 

			function died($error) {
				echo '<strong>Oops! Algo anda mal.</strong>  Por favor inténtalo una vez más.<br/><br /><strong>';
				echo $error."<br /><br />";
				die();
			}

    	// validation expected data exists

			if(!isset($post['nombre']) ||
				!isset($post['email']) ||
				!isset($post['asunto']) ||
				!isset($post['mensaje'])) {
				died('Se produjo un error al enviar su mensaje. Por favor inténtelo de nuevo.');       
		}

		    $nombre = $post['nombre']; // required
		    $email = $post['email']; // required
		    $telefono = $post['telefono']; // not required
		    $asunto = $post['asunto']; // required
		    $plan = $post['plan']; // not required
		    $mensaje = $post['mensaje']; // required

		    $error_message = "";
		    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

		    if(!preg_match($email_exp,$email)) {
		    	$error_message .= 'El Email es incorrecto. Por favor ingrese una dirección válida.<br />';
		    }

		    $string_exp = "/^[A-Za-z .'-]+$/";
		    if(!preg_match($string_exp,$nombre)) {
		    	$error_message .= 'El Nombre parece no ser correcto. Por favor ingrese su nombre real.<br />';
		    }


		    if(strlen($mensaje) < 2) {
		    	$error_message .= 'Se produjo un error al enviar su mensaje. Por favor inténtelo de nuevo.<br />';
		    }

		    if(strlen($error_message) > 0) {
		    	died($error_message);
		    }

		    $email_message = "Alguien envío un mensaje desde el formulario de Contacto. Los detalles aparecen abajo:\n\n";

		    function clean_string($string) {
		    	$bad = array("content-type","bcc:","to:","cc:","href");
		    	return str_replace($bad,"",$string);
		    }

		    $email_message .= "Nombre: ".clean_string($nombre)."\n";
		    $email_message .= "Email: ".clean_string($email)."\n";
		    $email_message .= "Telefono: ".clean_string($telefono)."\n";
		    $email_message .= "Asunto: ".clean_string($asunto)."\n";
		    $email_message .= "Plan: ".clean_string($plan)."\n";
		    $email_message .= "Mensaje: ".clean_string($mensaje)."\n";

		// create email headers

		    $headers = 'From: '.$email."\r\n".
		    'Reply-To: '.$email."\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		    @mail($email_to, $email_subject, $email_message, $headers);  


		    //echo '<script> alert("¡Gracias por escribirnos! Recibimos tu mensaje correctamente, muy pronto recibirás nuestra respuesta")</script>';
		}
	} 
}
?>