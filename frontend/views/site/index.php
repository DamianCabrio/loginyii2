<?php

/* @var $this yii\web\View */

$this->title = 'Inicio';



?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hola <?= !Yii::$app->user->isGuest ?
                ucfirst(strtolower(Yii::$app->user->identity->username)) :
                "Invitado";
            ?></h1>
        <h2>Usted inicio sesion como:
            <?= !Yii::$app->user->isGuest ?
                Yii::$app->user->identity->getStatusLables()[Yii::$app->user->identity->rol] :
                "Invitado";
            ?>
        </h2>
    </div>
    <hr>
    <div class="body-content text-center">



        <div class="row">
            <div class="col-lg-4">
                <h2 class="mb-3">Ver eventos</h2>

                <button type="button" class="btn btn-primary">Ir</button>
            </div>
            <div class="col-lg-4">
                <h2 class="mb-3">Ver perfil</h2>

                <button type="button" class="btn btn-primary">Ir</button>
            </div>
            <div class="col-lg-4">
                <h2>Ver ver</h2>

                <button type="button" class="btn btn-primary">Ir</button>
            </div>
        </div>

    </div>
</div>
