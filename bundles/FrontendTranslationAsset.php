<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains css files necessary for modify translations on the live site (frontend translation).
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.2
 */
class FrontendTranslationAsset extends AssetBundle
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
        'stylesheets/frontend-translation.css',
    ];
}
