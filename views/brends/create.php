<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Brends */

$this->title = 'Create Brends';
$this->params['breadcrumbs'][] = ['label' => 'Brends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brends-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
