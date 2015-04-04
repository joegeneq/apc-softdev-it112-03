<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BarangayPersonnel */

$this->title = 'Create Barangay Personnel';
$this->params['breadcrumbs'][] = ['label' => 'Barangay Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-personnel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
