<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id . " - " . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que deseas eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                "attribute" => "username",
                'label' => 'Nombre de usuario',
            ],
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            [
                "attribute" => "status",
                "value"=> function ($model) { return $model->getStatusLablesStatus()[$model->status]; },
                'label' => 'Estado',
            ],
            [
                "attribute" => "created_at",
                'label' => 'Creado en',
                "format" => "datetime",
            ],
            [
                "attribute" => "updated_at",
                'label' => 'Actualizado en',
                "format" => "datetime",
            ],
            //'verification_token',
            [
                "attribute" => "rol",
                "value"=> function ($model) { return $model->getStatusLables()[$model->rol]; },
            ],
        ],
    ]) ?>
    <?= Html::a('Volver atras', ["user/index"], ['class' => 'btn btn-secondary']) ?>

</div>
