<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property integer $id_factura
 * @property integer $id_producto
 * @property integer $cantidad
 * @property string $costo_unitario
 * @property string $impuesto
 * @property string $costo_total
 *
 * @property Producto $idProducto
 * @property Factura $idFactura
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_factura', 'id_producto', 'cantidad', 'costo_unitario', 'impuesto', 'costo_total'], 'required'],
            [['id', 'id_factura', 'id_producto', 'cantidad'], 'integer'],
            [['costo_unitario', 'impuesto', 'costo_total'], 'string', 'max' => 45],
            [['id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['id_producto' => 'id']],
            [['id_factura'], 'exist', 'skipOnError' => true, 'targetClass' => Factura::className(), 'targetAttribute' => ['id_factura' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_factura' => 'Id Factura',
            'id_producto' => 'Id Producto',
            'cantidad' => 'Cantidad',
            'costo_unitario' => 'Costo Unitario',
            'impuesto' => 'Impuesto',
            'costo_total' => 'Costo Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProducto()
    {
        return $this->hasOne(Producto::className(), ['id' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFactura()
    {
        return $this->hasOne(Factura::className(), ['id' => 'id_factura']);
    }
}
