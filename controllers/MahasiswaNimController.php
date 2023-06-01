<?php
namespace app\controllers;
use app\models\MahasiswaNim;
use yii\data\ActiveDataProvider;


class MahasiswaNimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = MahasiswaNim::find();
       $dataProvider = new ActiveDataProvider([
            'query' => MahasiswaNim::find()
       ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}