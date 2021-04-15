<?php
$title = 'SEI - Catálogos';
require_once('templates/header.php');
$isIndex = false;
?>
<div class="container">
    <div class="row row-catalogos">
        <?php
        $path = 'files/';
        foreach (glob($path . '*.pdf') as $filename) {
            $p = pathinfo($filename);
        ?>
            <div class="col mb-4">
                <div class="card text-center" style="width: 18rem;">
                    <img src="img/<?php echo $p['filename'].'.png'; ?>" class="card-img-top" alt="<?php echo $p['filename'];?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ucfirst($p['filename']); ?></h5>
                        <a target="_blank" href="<?php echo $path.$p['filename'].'.pdf' ?>" class="btn btn-primary">Ver Cat&aacute;logo</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
require_once('templates/contacto.php');
require_once('templates/footer.php');
?>