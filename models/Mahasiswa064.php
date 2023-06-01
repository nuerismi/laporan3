<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa064".
 *
 * @property int $id064
 * @property string $nim064
 * @property string $nama064
 * @property string $kelas064
 * @property string $status064
 */
class Mahasiswa064 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa064';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim064', 'nama064', 'kelas064', 'status064'], 'required'],
            [['nim064'], 'string', 'max' => 25],
            [['nama064'], 'string', 'max' => 225],
            [['kelas064'], 'string', 'max' => 10],
            [['status064'], 'string', 'max' => 50],
            [['nim064'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id064' => 'Id064',
            'nim064' => 'No. Induk Mahasiswa064',
            'nama064' => 'Nama mahasiswa064',
            'kelas064' => 'Kelas064',
            'status064' => 'Status064',
        ];
    }
}
