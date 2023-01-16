<?php

namespace hsoft\translatemanager\controllers\actions;

/**
 * Displays a single Language model.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.3
 */
class ViewAction extends \yii\base\Action
{
    /**
     * Displays a single Language model.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function run($id)
    {
        return $this->controller->render('view', [
            'model' => $this->controller->findModel($id),
        ]);
    }
}
