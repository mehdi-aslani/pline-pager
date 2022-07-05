<?php

namespace app\models\azans;

use Yii;

/**
 * This is the model class for table "tblAzans".
 *
 * @property int $id
 * @property string $date
 * @property string $time1
 * @property string $zones1
 * @property string $sounds1
 * @property int $volume1
 * @property bool $enable1
 * @property string $time2
 * @property string $zones2
 * @property string $sounds2
 * @property int $volume2
 * @property bool $enable2
 * @property string $time3
 * @property string $zones3
 * @property string $sounds3
 * @property int $volume3
 * @property bool $enable3
 * @property string $desc
 */
class TblAzans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblAzans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'time1', 'zones1', 'sounds1', 'time2', 'zones2', 'sounds2', 'time3', 'zones3', 'sounds3'], 'required'],
            [['volume1', 'volume2', 'volume3'], 'default', 'value' => null],
            [['volume1', 'volume2', 'volume3'], 'integer'],
            [['enable1', 'enable2', 'enable3'], 'boolean'],
            [['date'], 'string', 'max' => 10],
            [['time1', 'time2', 'time3'], 'string', 'max' => 8],
            [['zones1', 'sounds1', 'zones2', 'sounds2', 'zones3', 'sounds3', 'desc'], 'string', 'max' => 1024],
            [['date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'time1' => 'Time 1',
            'zones1' => 'Zones 1',
            'sounds1' => 'Sounds 1',
            'volume1' => 'Volume 1',
            'enable1' => 'Enable 1',
            'time2' => 'Time 2',
            'zones2' => 'Zones 2',
            'sounds2' => 'Sounds 2',
            'volume2' => 'Volume 2',
            'enable2' => 'Enable 2',
            'time3' => 'Time 3',
            'zones3' => 'Zones 3',
            'sounds3' => 'Sounds 3',
            'volume3' => 'Volume 3',
            'enable3' => 'Enable 3',
            'desc' => 'Desc',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblAzansQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblAzansQuery(get_called_class());
    }
}
