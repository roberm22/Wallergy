<?php

define("RECIPIENT_NAME", "Wallergy");
define("RECIPIENT_ADDRESS", "wallergy@enterprises.com");
define("EMAIL_SUBJECT", "Contacto desde la web");

// Recupera valores

$senderEmail = $_REQUEST['email'];
$senderName = $_REQUEST['name'];
$senderSubject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

// Si existen todos los valores mandamos el correo

$success = false;

if(!empty($senderEmail) && !empty($senderName) && !empty($message) && !empty($senderSubject)) {
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRESS . ">";
    $headers = "From: " . $senderName . " <" . $senderEmail . ">";
    $success = mail($recipient, EMAIL_SUBJECT, $message, $headers);
}

/* Codigo para insertar en la BBDD */

require_once 'conectar.php';

$sql_insert = "INSERT INTO `contactos` (Nombre, Email, Asunto, Mensaje) " . "
		      VALUES (?, ?, ?, ?)";
try {
    $sentencia = $db->prepare($sql_insert);
    $sentencia->execute(array($senderName, $senderEmail, $senderSubject, $message));
}catch(PDOException $error) {
    die("Error al insertar " . $error->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "../common/head.php" ?>
</head>
<body>

<!-- ======= Header ======= -->

<?php require "../common/header.php" ?>

<!-- Fin Header -->

<!-- ======= Answer ======= -->

<section id="answer" class="answer">

    <div class="container">

        <h2 class="text-center pb-4" data-aos="fade-down"> Mensaje enviado </h2>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="mb-3 mt-5 row">
                    <label for="staticName" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticName" value=<?php echo $senderName?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value=<?php echo $senderEmail?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="asunto" class="col-sm-2 col-form-label">Asunto:</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="asunto" value=<?php echo $senderSubject?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mensaje" class="col-sm-2 col-form-label">Mensaje:</label>
                    <div class="col-sm-10">
                        <textarea disabled class="form-control-plaintext" id="mensaje" rows="10"><?php echo $message?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="flexslider">

                    <ul class="slides">
                        <li>
                            <img src="https://estaticos-cdn.elperiodico.com/clip/569e50d7-3d32-431f-9300-702cf8e8c8a4_alta-libre-aspect-ratio_default_0.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="https://monchitime.com/www/wp-content/uploads/2017/08/Molletes-vips.png" alt=""/>
                        </li>
                        <li>
                            <img src="https://media-cdn.tripadvisor.com/media/photo-m/1280/1b/25/bc/7d/hamburguesa-pampera-en.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="https://10619-2.s.cdn12.com/rests/original/403_503278750.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="https://www.ginos.es/sites/default/files/styles/optimize/public/tavola-di-costrini-ginos2.jpg?itok=-ByUzhtO"  alt=""/>
                        </li>
                    </ul>

                </div>
            </div>
        </div>


    </div>
</section>

<!-- Fin Answer -->

<?php include '../common/footer.php' ?>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php require "../common/scripts.php" ?>

</body>
</html>







