<div class="col-lg-4">
    <h2><?=$model->name?></h2>

    <p><?=$model->text?></p>

    <?
        if (!isset(\Yii::$app->request->get()['id'])){
            echo
            '<p><a class="btn btn-outline-secondary" href="' . \yii\helpers\Url::to(['site/one', 'id' => $model->id]) . '">Страница фрагмента</a></p>';
        }
    ?>

</div>
