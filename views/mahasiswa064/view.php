<?php
use yii\widgets\DetailView;
?>

<?=
DetailView::widget([
    'model' => $mahasiswa064,
    'attributes' => [
        'id064',
        'nim064',
        'nama064',
        'kelas064',
        'status064',
    ],
]);
?>