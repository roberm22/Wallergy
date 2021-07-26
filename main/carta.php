<!DOCTYPE html>
<html lang="en">
<head>

    <?php require "../common/head.php" ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">

</head>
<body>

<!-- ======= Header =======-->

<?php require "../common/header.php" ?>


<!-- Fin Header -->

<!-- ======= Carta =======-->

<section id="carta" class="carta mx-5" data-aos="fade-up">
    <div class="container">

        <?php
            $restaurant = $_REQUEST['rest'];
            $json = 'https://wallergy.000webhostapp.com/main/json.php?rest=' . $restaurant;
        ?>
        <table
                id="table"
                data-toggle="table"
                data-url= <?php echo $json?>
                data-pagination="true"
                data-search="true"
                data-page-list="[5, 10, 15, 20, all]"
                data-page-size="10"
        >
            <thead>
            <tr>
                <th data-field="Platos">Platos</th>
                <th data-field="Leche">Leche</th>
                <th data-field="Pescado">Pescado</th>
                <th data-field="Cacahuetes">Cacahuetes</th>
                <th data-field="Cereales">Cereales</th>
                <th data-field="Frutos">Frutos</th>
                <th data-field="Moluscos">Moluscos</th>
                <th data-field="Sésamo">Sésamo</th>
                <th data-field="Huevo">Huevo</th>
                <th data-field="Sulfitos">Sulfitos</th>
            </tr>
            </thead>
        </table>
    </div>
</section>

<!-- Fin Carta -->

<?php include '../common/footer.php' ?>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php include '../common/scripts.php' ?>

<script>
    let $table = $('#table')

    $(function() {
        $table.bootstrapTable('hideLoading')
    })
</script>

</body>
</html>