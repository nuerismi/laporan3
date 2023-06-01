<?php
use app\models\Odp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="odp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('ODP Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= 
         GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'id',
            'code_odp',
            'nama_odp',
            'titik_x',
            'titik_y',
            'max_user',
            //'profilNim.foto_profil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Odp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
        ]); 
    ?>

</div>
