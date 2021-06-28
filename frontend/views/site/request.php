<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Заявка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-form']); ?>

                <?= $form->field($model, 'fullName')->textInput(['placeholder' => 'Введите ФИО']) ?>

                <?= $form->field($model, 'town')->textInput(['placeholder' => 'Введите Город (Ростовская область)']) ?>

                <?= $form->field($model, 'address')->textInput(['placeholder' => 'Введите Адрес']) ?>

                <?= $form->field($model, 'text')->textarea(['placeholder' => 'Введите Текст заявки']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Опубликовать', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
