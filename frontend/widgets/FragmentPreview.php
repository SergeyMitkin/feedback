<?php

namespace frontend\widgets;

use frontend\models\tables\Pages;
use yii\base\Widget;

class FragmentPreview extends Widget
{
    public $model;

    public function run()
    {
        if (is_a($this->model, Pages::class)){
            return $this->render('fragment_preview', ['model' => $this->model]);
        }
        throw new \Exception('Невозможно отобразить модель');
    }

}