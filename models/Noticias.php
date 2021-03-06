<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $Id
 * @property string|null $Titulo
 * @property string|null $Texto
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Titulo', 'Texto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Titulo' => 'Titulo',
            'Texto' => 'Texto',
        ];
    }
    
    public static function aleatoria() {
        $nRegistros = self::find()->count();
        $aleatorio = random_int(0, $nRegistros - 1);
        return self::find()->offset($aleatorio)->one();
    }
}
