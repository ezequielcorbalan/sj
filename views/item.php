<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form ActiveForm */
?>
<div class="item">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'id_factura') ?>
        <?= $form->field($model, 'id_producto') ?>
        <?= $form->field($model, 'cantidad') ?>
        <?= $form->field($model, 'costo_unitario') ?>
        <?= $form->field($model, 'impuesto') ?>
        <?= $form->field($model, 'costo_total') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- item -->
