<?php

namespace frontend\modules;

/**
 * pages module definition class
 */
class pages extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\controllers';

    public $defaultRoute = 'pages';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
