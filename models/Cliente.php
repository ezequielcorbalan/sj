<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $dni
 * @property string $telefono
 * @property string $email
 * @property string $direccion
 *
 * @property Factura[] $facturas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'apellido', 'email'], 'required'],
            [['id'], 'integer'],
            [['email'], 'email'],
            [['nombre', 'apellido', 'dni', 'telefono', 'email', 'direccion'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'dni' => 'Dni',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'direccion' => 'Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Factura::className(), ['id_cliente' => 'id']);
    }
}
