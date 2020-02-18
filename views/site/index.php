<?php

use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */

$this->title = 'Ejemplos4yii2';
?>
<div class="site-index">

    <div class="backgris">
       <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
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
        echo $this->render("_index",[
            "noticias"=>$noticias,
            "i"=>$i,
        ]);
}
?>
        </div>
    </div>
</div>
