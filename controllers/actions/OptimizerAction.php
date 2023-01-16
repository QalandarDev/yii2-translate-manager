<?php

namespace hsoft\translatemanager\controllers\actions;

use hsoft\translatemanager\services\Optimizer;

/**
 * Class for optimizing language database.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class OptimizerAction extends \yii\base\Action
{
    /**
     * Removing unused language elements.
     *
     * @return string
     */
    public function run()
    {
        $optimizer = new Optimizer();
        $optimizer->run();

        $removedLanguageElements = $optimizer->getRemovedLanguageElements();

        return $this->controller->render('optimizer', [
            'newDataProvider' => $this->controller->createLanguageSourceDataProvider($removedLanguageElements),
        ]);
    }
}
