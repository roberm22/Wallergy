
<!DOCTYPE html>
<html lang="en">
<head>

    <?php require "../common/head.php" ?>

</head>
<body>

<?php require "../common/header.php" ?>

<div class="container">

    <div class="login" data-aos="fade-up">
        <h1 class="text-center">Inicio de sesión</h1>
        <form action="procesaLogin.php" method="post">

            <div class="mb-3 mt-5">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" name="username"
                       placeholder="Nombre de usuario" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Contraseña" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-5">Entrar</button>
            </div>

            <?php if(isset($_REQUEST['errorLogin'])): ?>
                <div>
                    <div>
                        Error
                    </div>
                    <div>
                        <p> <?php echo "Nombre o contraseña incorrectas" ?> </p>
                    </div>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>


<?php include '../common/footer.php' ?>

<?php include '../common/scripts.php' ?>

</body>
</html>
