<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hoge */

$this->title = 'Update Hoge: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hoges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoge-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
