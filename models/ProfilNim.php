<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_nim".
 *
 * @property int $id
 * @property string $id_mahasiswa
 * @property string $foto_profil
 */
class ProfilNim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_nim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa', 'foto_profil'], 'required'],
            [['id'], 'integer'],
            [['id_mahasiswa'], 'string', 'max' => 25],
            [['foto_profil'], 'string', 'max' => 40],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
