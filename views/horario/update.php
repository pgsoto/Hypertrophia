<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horario */

$this->title = 'Update Horario: ' . ' ' . $model->HOR_id;
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HOR_id, 'url' => ['view', 'id' => $model->HOR_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
