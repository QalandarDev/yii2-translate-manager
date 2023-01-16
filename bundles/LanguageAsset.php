<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains css files necessary for language list on the backend.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class LanguageAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hsoft/translatemanager/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'stylesheets/helpers.css',
        'stylesheets/language.css',
    ];
}
