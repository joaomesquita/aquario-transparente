<?php include 'components/header.php' ?>

<div class="header-page interna" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.2) 17.69%, rgba(0, 0, 0, 0.2) 93.98%), url('img/bg-fotos-videos.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 class="font-60 color-light">Fotos e Vídeos</h1>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="font-60 color-black">Fotos</h1>
            </div>
        </div>

        <div class="row mt-5">
            <?php include 'components/galeria.php' ?>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="font-60 color-black">Vídeos</h1>
            </div>
        </div>

        <div class="row mt-5">
            <?php include 'components/galeria.php' ?>
        </div>
    </div>
</div>


<?php include 'components/cadastro.php' ?>

<?php include 'components/footer.php' ?>