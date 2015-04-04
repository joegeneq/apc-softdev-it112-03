<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RenewList */

$this->title = 'Create Renew List';
$this->params['breadcrumbs'][] = ['label' => 'Renew Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="renew-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
