<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hola <?= ucfirst(strtolower(Yii::$app->user->identity->username)) ?></h1>

        <p class="lead">Usted inicio sesion en el backend de <?= Yii::$app->name ?></p>

    </div>
    <hr>
    <div class="body-content text-center">

        <div class="row">
            <div class="col-lg-4" style="width: 50%;margin: 0 auto">
                <h2 class="mb-3">Ver usuarios</h2>

                <?= Html::a('Ir', ['user/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

    </div>
</div>
