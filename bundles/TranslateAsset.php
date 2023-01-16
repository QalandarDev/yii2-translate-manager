<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains css files necessary for modify translations on the backend.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class TranslateAsset extends AssetBundle
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
        'stylesheets/translate.css',
    ];
}
