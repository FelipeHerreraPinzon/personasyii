<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personas".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $profesion
 * @property string|null $imagen
 */
class Persona extends \yii\db\ActiveRecord
{
    public $archivo;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['profesion'], 'required'],
            [['nombre'], 'string', 'max' => 255],
            [['profesion'], 'string', 'max' => 255],
            [['archivo'], 'file', 'extensions'=>'jpg, png, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'profesion' => 'Profesion',
            'archivo' => 'Imagen',
        ];
    }
}
