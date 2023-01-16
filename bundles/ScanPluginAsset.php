<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains javascript files necessary for message scan on the backend.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.4
 */
class ScanPluginAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hsoft/translatemanager/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'javascripts/scan.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'hsoft\translatemanager\bundles\TranslationPluginAsset',
    ];
}
