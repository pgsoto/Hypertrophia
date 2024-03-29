<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Progreso */


$this->params['breadcrumbs'][] = ['label' => 'Progresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progreso-view">



    <p>
        <?= Html::a('actualizar', ['update', 'id' => $model->PROG_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->PROG_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro que deseas borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'PROG_id',
            'SO_id',
            'PROG_peso',
            'PROG_altura',
            'PROG_porcentaje_grasa',
            'PROG_indice_masa_corporal',
            'PROG_fecha_evaluacion',
        ],
    ]) ?>

</div>
