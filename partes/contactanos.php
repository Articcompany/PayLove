<section id="contactanos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Hagamos Negocios</h2>
                <h3 class="section-subheading text-muted">Contactanos para darte una cotizacion personalizada.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" method="POST" href="#contactanos">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre" class="col-form-label">Escribe tu Nombre:</label>
                                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Escribe tu Email:</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="col-form-label">Escribe tu Telefono:</label>
                                <input class="form-control" name="telefono" id="telefono" type="tel" placeholder="Telefono" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mensaje" class="col-form-label">Describe tu proyecto:</label>
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="8" placeholder="Escribenos un mensaje con las especificaciones generales de lo que quieres" required data-validation-required-message="por favor cuentanos de que trata tu proyecto.."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input name="enviar" id="enviar" class="btn btn-primary btn-xl text-uppercase" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    $mail = "Prueba de mensaje";
    //Titulo
    $titulo = "PRUEBA DE TITULO";
    //cabecera
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    //dirección del remitente 
    $headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
    //Enviamos el mensaje a tu_dirección_email 
    $bool = mail("icruizc@correo.udistrital.edu.co",$titulo,$mail,$headers);
    if($bool){
        echo "Mensaje enviado";
    }else{
        echo "Mensaje no enviado";
    }
    if(isset($_POST['email'])) {
        // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
        $email_to = "icruizc@correo.udistrital.edu.co";
        $email_subject = "Proyecto nuevo para Artic";
        // Aquí se deberían validar los datos ingresados por el usuario
        if(!isset($_POST['nombre']) || !isset($_POST['email']) || !isset($_POST['telefono']) || !isset($_POST['mensaje'])) {
            echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
            echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
            die();
        }
        $email_message = "";
        $email_message .= "Nombre Cliente: " . $_POST['nombre'] . "\n";
        $email_message .= "E-mail Cliente: " . $_POST['email'] . "\n";
        $email_message .= "Teléfono Cliente: " . $_POST['telefono'] . "\n";
        $email_message .= "Comentarios acerca del proyecto: " . $_POST['mensaje'] . "\n\n";
        $email_message = "Detalles del formulario de contacto:\n\n";
        // Ahora se envía el e-mail usando la función mail() de PHP
        
        if(@mail("icruizc@correo.udistrital.edu.co", "nuevo trabajo artic", "oli")){
            echo "¡El formulario se ha enviado con éxito!";
        }else{
            echo "¡problemas con el envio!";
        }
        
        
    }
?>

