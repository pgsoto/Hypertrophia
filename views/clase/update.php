<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clase */

$this->title = 'Update Clase: ' . ' ' . $model->CLA_id;
$this->params['breadcrumbs'][] = ['label' => 'Clases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CLA_id, 'url' => ['view', 'id' => $model->CLA_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
