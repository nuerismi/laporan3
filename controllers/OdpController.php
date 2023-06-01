<?php

namespace app\controllers;

use app\models\Odp;
use yii\data\ActiveDataProvider;

class OdpController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Odp::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $Odp = new Odp;
        $Odp->code_odp = '12';
        $Odp->nama_odp = 'nurismi';
        $Odp->titik_x = 'x';
        $Odp->titik_y = 'y';
        $Odp->max_user = '30';
        if ($Odp->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Odp->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Odp = Odp::findOne($id);
        $Odp->nama_odp = 'nuerismi';
        if ($Odp->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Odp->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Odp = Odp::findOne($id);
        if ($Odp->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Odp->getErrors());
            die();
        }
    }
    public function actionView($id)
    {
        $Odp = Odp::findOne(['id' => $id]);
        return $this->render('view', ['model' => $Odp]);
    }

}