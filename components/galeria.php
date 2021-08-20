<?php for ($i = 1; $i < 10; $i++) { ?>
    <div class="col-6 galeria_fotos col-md-4 mb-4">
        <a data-fancybox="gallery" class="d-block overlay" href="img/galeria<?php echo $i;?>.jpg">
            <i class="bi bi-plus"></i>
            <img class="img-fluid w-100" src="img/galeria<?php echo $i;?>.jpg" alt="Galeria <?php echo $i;?>">
        </a>
    </div>
<?php } ?>