<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "odp".
 *
 * @property int $id
 * @property int $code_odp
 * @property string $nama_odp
 * @property string $titik_x
 * @property string $titik_y
 * @property int $max_user
 */
class Odp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code_odp', 'nama_odp', 'titik_x', 'titik_y', 'max_user'], 'required'],
            [['code_odp', 'max_user'], 'integer'],
            [['nama_odp'], 'string', 'max' => 20],
            [['titik_x', 'titik_y'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code_odp' => 'Code Odp',
            'nama_odp' => 'Nama Odp',
            'titik_x' => 'Titik X',
            'titik_y' => 'Titik Y',
            'max_user' => 'Max User',
        ];
    }
    public function getProfilNim()
    {
        return $this->hasOne(ProfilNim::class, ['id_mahasiswa' => 'id']);
    }
}
