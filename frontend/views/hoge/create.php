<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hoge */

$this->title = 'Create Hoge';
$this->params['breadcrumbs'][] = ['label' => 'Hoges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoge-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
