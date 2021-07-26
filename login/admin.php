
<?php
    session_start();
    if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <?php require "../common/head.php" ?>

</head>
<body>

<?php require "../common/header.php" ?>

<div class="container" data-aos="fade-up">
    <div class="gestion">
        <h1 class="text-center"> Página de gestión del usuario: <?php echo $_SESSION['username'];?></h1>

        <ul class="text-center mt-5">
            <li><a href="../index.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

</div>

<?php include '../common/footer.php' ?>

<?php include '../common/scripts.php' ?>

</body>
</html>
