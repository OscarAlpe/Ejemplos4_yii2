<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="backgris">
        Home
    </div>
    <div>
        &nbsp;
    </div>
    <div class="jumbotron backgris">
        <h1>Ejemplo 1 de aplicación</h1>

        <p class="lead">Podemos ver un ejemplo del funcionamiento de este framework.</p>
    </div>

    <div class="body-content">
        <div class="row">
<?php
for ($i=0; $i<count($noticias); $i++) {
?>
            <div class="col-lg-2">
                <div class="backgris">
                    <h2><?= $noticias[$i]["Titulo"] ?></h2>
                    <p><?= $noticias[$i]["Texto"] ?></p>
                </div>
            </div>
<?php
}
?>
        </div>
    </div>
</div>
