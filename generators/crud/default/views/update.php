<?php

/* @var $this yii\web\View */
/* @var $generator dee\angular\generators\crud\Generator */

echo "<?php\n";
?>
use dee\angular\Angular;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $angular Angular */

Angular::renderScript('_update.js');
?>

<div class="<?= $generator->controllerID ?>-update">

    <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>

    <?= "<?= " ?>$this->render('_form', [
        'angular' => $angular,
    ]) ?>

</div>