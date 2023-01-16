<?php

namespace hsoft\translatemanager\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use hsoft\translatemanager\models\Language;

/**
 * Controller for managing multilinguality.
 *
 * @author Lajos Molnár <hsoft.m@gmail.com>
 *
 * @since 1.0
 */
class LanguageController extends Controller
{
    /**
     * @var \hsoft\translatemanager\Module TranslateManager module
     */
    public $module;

    /**
     * @inheritdoc
     */
    public $defaultAction = 'list';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['list', 'change-status', 'optimizer', 'scan', 'translate', 'save', 'dialog', 'message', 'view', 'create', 'update', 'delete', 'delete-source', 'import', 'export'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['list', 'change-status', 'optimizer', 'scan', 'translate', 'save', 'dialog', 'message', 'view', 'create', 'update', 'delete', 'delete-source', 'import', 'export'],
                        'roles' => $this->module->roles,
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'list' => [
                'class' => 'hsoft\translatemanager\controllers\actions\ListAction',
            ],
            'change-status' => [
                'class' => 'hsoft\translatemanager\controllers\actions\ChangeStatusAction',
            ],
            'optimizer' => [
                'class' => 'hsoft\translatemanager\controllers\actions\OptimizerAction',
            ],
            'scan' => [
                'class' => 'hsoft\translatemanager\controllers\actions\ScanAction',
            ],
            'translate' => [
                'class' => 'hsoft\translatemanager\controllers\actions\TranslateAction',
            ],
            'save' => [
                'class' => 'hsoft\translatemanager\controllers\actions\SaveAction',
            ],
            'dialog' => [
                'class' => 'hsoft\translatemanager\controllers\actions\DialogAction',
            ],
            'message' => [
                'class' => 'hsoft\translatemanager\controllers\actions\MessageAction',
            ],
            'view' => [
                'class' => 'hsoft\translatemanager\controllers\actions\ViewAction',
            ],
            'create' => [
                'class' => 'hsoft\translatemanager\controllers\actions\CreateAction',
            ],
            'update' => [
                'class' => 'hsoft\translatemanager\controllers\actions\UpdateAction',
            ],
            'delete' => [
                'class' => 'hsoft\translatemanager\controllers\actions\DeleteAction',
            ],
            'delete-source' => [
                'class' => 'hsoft\translatemanager\controllers\actions\DeleteSourceAction',
            ],
            'import' => [
                'class' => 'hsoft\translatemanager\controllers\actions\ImportAction',
            ],
            'export' => [
                'class' => 'hsoft\translatemanager\controllers\actions\ExportAction',
            ],
        ];
    }

    /**
     * Finds the Language model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param string $id
     *
     * @return Language the loaded model
     *
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function findModel($id)
    {
        if (($model = Language::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Returns an ArrayDataProvider consisting of language elements.
     *
     * @param array $languageSources
     *
     * @return ArrayDataProvider
     */
    public function createLanguageSourceDataProvider($languageSources)
    {
        $data = [];
        foreach ($languageSources as $category => $messages) {
            foreach ($messages as $message => $boolean) {
                $data[] = [
                    'category' => $category,
                    'message' => $message,
                ];
            }
        }

        return new ArrayDataProvider([
            'allModels' => $data,
            'pagination' => false,
        ]);
    }
}
