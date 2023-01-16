<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains javascript files necessary for translating javascript messages on the client side (`hsoft.t()` calls).
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class TranslationPluginAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hsoft/translatemanager/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'javascripts/md5.js',
        'javascripts/hsoft.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'hsoft\translatemanager\bundles\LanguageItemPluginAsset',
    ];
}
