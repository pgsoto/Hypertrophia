<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoProfesorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Profesors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-profesor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Profesor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TIP_id',
            'TIP_nombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
