<?php

namespace app\models\schedules;

use Yii;

/**
 * This is the model class for table "tblSchedules".
 *
 * @property int $id
 * @property string $name
 * @property string $zones
 * @property string $sounds
 * @property string $schedules
 * @property bool $enable
 * @property string $desc
 */
class TblSchedules extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblSchedules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'zones', 'sounds', 'schedules'], 'required'],
            [['enable'], 'boolean'],
            [['name'], 'string', 'max' => 255],
            [['zones', 'sounds', 'desc'], 'string', 'max' => 1024],
            [['schedules'], 'string', 'max' => 2048],
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
            'zones' => 'Zones',
            'sounds' => 'Sounds',
            'schedules' => 'Schedules',
            'enable' => 'Enable',
            'desc' => 'Desc',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblSchedulesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblSchedulesQuery(get_called_class());
    }
}
