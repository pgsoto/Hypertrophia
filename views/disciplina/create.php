<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Disciplina */

$this->title = Yii::t('app', 'Crear Disciplina');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Disciplinas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

  

</div>
