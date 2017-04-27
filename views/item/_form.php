<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\models\Factura;
use app\models\Producto;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>
     <?php
        $producto = new Producto();
        $factura = new Factura();
        ?>
    <?= $form->field($model, 'id_factura')
                ->dropdownList( ArrayHelper::map($factura
                                            ->find()
                                            ->all(),'id', 'id') ) ?>

    <?= $form->field($model, 'id_producto')->dropdownList( ArrayHelper::map($producto->find()->all(),'id', 'nombre') ) ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'costo_unitario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impuesto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo_total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
