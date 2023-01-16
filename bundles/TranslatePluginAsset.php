<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains javascript files necessary for modify translations on the backend.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class TranslatePluginAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hsoft/translatemanager/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'javascripts/helpers.js',
        'javascripts/translate.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'hsoft\translatemanager\bundles\TranslationPluginAsset',
    ];
}
