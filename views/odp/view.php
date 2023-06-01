<?php
    use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code_odp',
            'nama_odp',
            'titik_x',
            'titik_y',
            'max_user',
        ]
    ])
?>