<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Hypertrophia',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => '¿Quienes Somos?', 'url' => ['/site/about']],
                    ['label' => 'Contacto', 'url' => ['/site/contact']],
                    ['label' => 'Clases', 'url' => ['/clase/index']],
                     ['label' => 'Socios', 'url' => ['/socio/index']],
                     ['label' => 'Pagos', 'url' => ['/pago/index']],
                     ['label' => 'Progresos', 'url' => ['/progreso/index']],
                    ['label' => 'Horarios', 'url' => ['/horario/index']],
                    ['label' => 'Sueldos', 'url' => ['/sueldo/index']],
                    ['label' => 'Profesores', 'url' => ['/profesor/index']],
                    ['label' => 'Tipo de profesores', 'url' => ['/tipo-profesor/index']],
                    ['label' => 'Informes medicos', 'url' => ['/informe-medico/index']],
                    Yii::$app->user->isGuest ?

                        ['label' => 'Conectar', 'url' => ['/site/login']] :
                        ['label' => 'Desconectar (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; TISW_GRUPO2 IECI <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
