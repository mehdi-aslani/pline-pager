<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zones\TblZones */

$this->title = 'Create Tbl Zones';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Zones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-zones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
