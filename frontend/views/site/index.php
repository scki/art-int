<?php

/* @var $this yii\web\View */

$this->title = 'Карта заявок';
Yii::$app->view->registerJs('var address = ' . json_encode($addresses) . ';', \yii\web\View::POS_HEAD);
?>
<div class="site-index">
    <h2>Здравствуйте, <?= Yii::$app->user->identity->full_name ? Yii::$app->user->identity->full_name : ''?>!</h2>
    <p>На этой странице вы можете просмтаривать заявки, поданные через раздел <?=\yii\helpers\Html::a('заявки', ['site/request'])?></p>
    <div id="map" style="min-height: 600px; width: 100%"></div>
</div>
