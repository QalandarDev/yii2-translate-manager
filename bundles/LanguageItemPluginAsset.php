<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains the translated javascript messages for the current language.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class LanguageItemPluginAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hsoft/translatemanager/assets';

    /**
     * @inheritdoc
     */
    public $publishOptions = [
        'forceCopy' => true,
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = \Yii::$app->getModule('translatemanager')->getLanguageItemsDirPath();
        $language = \Yii::$app->language;

        if (file_exists(\Yii::getAlias($this->sourcePath . $language . '.js'))) {
            $this->js = [$language . '.js'];
        } else {
            $this->sourcePath = null;
        }

        parent::init();
    }
}
