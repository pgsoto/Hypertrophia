<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sueldo */

$this->title = $model->SUE_id;
$this->params['breadcrumbs'][] = ['label' => 'Sueldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sueldo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SUE_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SUE_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SUE_id',
            'SUE_sueldo',
        ],
    ]) ?>

</div>