<?php

namespace hsoft\translatemanager\bundles;

use yii\web\AssetBundle;

/**
 * Contains css files necessary for backend interface.
 *
 * @author Lajos Molnar <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class TranslateManagerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hsoft/translatemanager/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'stylesheets/translate-manager.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
