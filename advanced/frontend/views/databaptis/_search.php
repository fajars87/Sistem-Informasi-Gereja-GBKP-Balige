<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DatabaptisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="databaptis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_databaptis') ?>

    <?= $form->field($model, 'tanggal_baptis') ?>

    <?= $form->field($model, 'tempat_baptis') ?>

    <?= $form->field($model, 'no_registrasi') ?>

    <?= $form->field($model, 'dilayani_oleh') ?>

    <?php // echo $form->field($model, 'id_datagereja') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
