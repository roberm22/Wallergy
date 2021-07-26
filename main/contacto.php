<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../common/head.php" ?>
</head>
<body>

<!-- ======= Header ======= -->

<?php require "../common/header.php" ?>

<!-- Fin Header -->

<!-- ======= Contacto ======= -->

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3><span>Contacta con nosotros</span></h3>
            <p>Estaremos encantados de ayudarte en cualquier duda que te pueda surgir.<br> Puedes visitarnos en
                nuestras oficinas, llamarnos por teléfono o enviar un email rellenando el siguiente formulario.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Nuestra dirección</h3>
                    <p>Av. Complutense, 30<br>
                        Madrid, España</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>wallergy@enterprises.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Teléfono</h3>
                    <p>+34 910 67 19 00</p>
                </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6">
                <img src="../img/map.png" alt="map">
            </div>

            <div class="col-lg-6">
                <form action="answer.php" method="post" class="php-email-form">
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                </form>
            </div>

        </div>

    </div>
</section>

<!-- Fin Contacto -->


<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php include '../common/scripts.php' ?>

</body>
</html>