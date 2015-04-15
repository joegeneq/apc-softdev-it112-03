<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dependents */

$this->title = 'Create Dependents';
$this->params['breadcrumbs'][] = ['label' => 'Dependents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
