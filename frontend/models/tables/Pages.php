<?php

namespace frontend\models\tables;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property int|null $static_page
 */
class Pages extends \yii\db\ActiveRecord
{

    const PAGE_HOME = 0;
    const PAGE_ABOUT = 1;
    const PAGE_VACANCIES = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'static_page'], 'integer'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'static_page' => 'Page',
        ];
    }

    public function getStaticPages()
    {
        return [
            self::PAGE_HOME => 'Главная',
            self::PAGE_ABOUT => 'О компании',
            self::PAGE_VACANCIES => 'Вакансии',
        ];
    }

    public function getStaticPageName()
    {
        return $this->staticPages[$this->static_page];
    }

}
