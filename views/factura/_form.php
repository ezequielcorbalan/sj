<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\models\Cliente

/* @var $this yii\web\View */
/* @var $model app\models\Factura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factura-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'fecha')->textInput(['readonly'=>'true']) ?>



    <?= $form->field($model, 'id_cliente')->dropdownList( ArrayHelper::map($cliente->find()->all(),'id', 'nombre') ) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    $( function() {
        $('#factura-fecha').datepicker({
                                         dateFormat: "yy-mm-dd"
                                       });
    });
</script>
