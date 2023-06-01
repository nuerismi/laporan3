<?php

namespace app\controllers;
use app\models\Mahasiswa064;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa064Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa064::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $mahasiswa064 = new Mahasiswa064;
        $mahasiswa064->nim064 = '60200121064-'.rand(10,99);
        $mahasiswa064->nama064 = 'Nur Ismi';
        $mahasiswa064->kelas064 = 'C';
        $mahasiswa064->status064= 'Update';
        if ($mahasiswa064->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa064->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $mahasiswa064 = Mahasiswa064::findOne($id);
        if($mahasiswa064!== null){
            $mahasiswa064->kelas064 = 'A';
            $mahasiswa064->status064 = 'Baru';
            $mahasiswa064->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }   
        return $this->redirect(['index']);

    }

    public function actionDelete($id)
    {
        $mahasiswa064 = Mahasiswa064::findOne($id);
        if ($mahasiswa064->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa064->getErrors());
            die();
        }
    }
    public function actionView($id)
    {
        $mahasiswa064 = Mahasiswa064::findOne($id);
        return $this->render('view', ['mahasiswa064' => $mahasiswa064]);
    }

}