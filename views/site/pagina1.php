<?php
use yii\helpers\Html;
?>

<?php
echo $this->render("_modal");
?>

<div style="text-align: center;">
    <?= Html::img("@web/imgs/viviendas-venta-Alcazares-consiguen-venderla_EDIIMA20200217_0114_20.jpg") ?>

    <div style="width: 50%; margin: 0 auto; margin-top: 25px">
        <div class="thumbnail">
            <div class="backgris miAlto1">
                <h2><?= $noticiaAleatoria["Titulo"] ?></h2>
            </div>
            <p><?= $noticiaAleatoria["Texto"] ?></p>
        </div>
    </div>
</div>
