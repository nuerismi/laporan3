<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveFrom;
?>

<?php $from = ActiveFrom::begin() ?>

<?= $from->field($Odp, 'id') ?>
<?= $from->field($Odp, 'code_odp') ?>
<?= $from->field($Odp, 'nama_odp') ?>
<?= $from->field($Odp, 'titik_x') ?>
<?= $from->field($Odp, 'titik_y') ?>
<?= $from->field($Odp, 'max_user') ?>

<?=
    Html::submitButton('Save', ['class' => 'btn btn-priamry'])
?>

<?php ActiveFrom::end() ?>