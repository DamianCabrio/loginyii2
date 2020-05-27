<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear un usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        "options" => ["class" => "table-responsive"],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                "attribute" => "username",
                'header' => '<a href="/user/index?sort=username">Nombre de usuario</a>',
            ],
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            [
                "attribute" => "status",
                "value"=> function ($model, $index, $widget) { return $model->getStatusLablesStatus()[$model->status]; },
                'header' => '<a href="/user/index?sort=status">Estado</a>',
            ],
            [
                "attribute" => "created_at",
                'header' => '<a href="/user/index?sort=created_at">Creado en</a>',
                "format" => "datetime",
            ],
            [
                "attribute" => "updated_at",
                'header' => '<a href="/user/index?sort=updated_at">Actualizado en</a>',
                "format" => "datetime",
            ],
            //'verification_token',
            [
                "attribute" => "rol",
                "value"=> function ($model, $index, $widget) { return $model->getStatusLables()[$model->rol]; },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Acciones',
                'template' => '{mirar} {editar} {eliminar}',  // the default buttons + your custom button
                'buttons' => [
                    'mirar' => function($url, $model, $key) {     // render your custom button
                        return Html::a("Mirar", ["user/view?id=". $model->id], ['class' => 'btn btn-success btn-xs']);
                    },
                    'editar' => function($url, $model, $key) {     // render your custom button
                        return Html::a("Editar", ["user/update?id=". $model->id], ['class' => 'btn btn-primary btn-xs']);
                    },
                    'eliminar' => function($url, $model, $key) {     // render your custom button
                        return Html::a('Eliminar', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
