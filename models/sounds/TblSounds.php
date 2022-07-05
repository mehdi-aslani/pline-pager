<?php

namespace app\models\sounds;

use Yii;

/**
 * This is the model class for table "tblSounds".
 *
 * @property int $id
 * @property string $name
 * @property string $desc
 */
class TblSounds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblSounds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['desc'], 'string', 'max' => 1024],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'desc' => 'Desc',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblSoundsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblSoundsQuery(get_called_class());
    }
}
