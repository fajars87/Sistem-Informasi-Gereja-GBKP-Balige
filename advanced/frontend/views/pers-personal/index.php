<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersPersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pers Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pers-personal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pers Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_personal',
            'nama',
            'jenis_pers',
            'jumlah',
            'pos',
            // 'id_kegiatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
