<?php

namespace backend\controllers;

use Yii;
use common\models\EventList;
use common\models\EventListSeach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * EventListController implements the CRUD actions for EventList model.
 */
class EventListController extends Controller
{
    public function behaviors()
    {
        return [
            'acces'=>[
                'class'=>AccessControl::classname(),
                'only'=>['create','update', 'delete'],
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles'=>['@']
                    ],
                ]
            ],        
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all EventList models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventListSeach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EventList model.
     * @param integer $el_ctrlno
     * @param integer $mr_id
     * @param integer $ev_id
     * @return mixed
     */
    public function actionView($el_ctrlno, $mr_id, $ev_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($el_ctrlno, $mr_id, $ev_id),
        ]);
    }

    /**
     * Creates a new EventList model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EventList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'el_ctrlno' => $model->el_ctrlno, 'mr_id' => $model->mr_id, 'ev_id' => $model->ev_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EventList model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $el_ctrlno
     * @param integer $mr_id
     * @param integer $ev_id
     * @return mixed
     */
    public function actionUpdate($el_ctrlno, $mr_id, $ev_id)
    {
        $model = $this->findModel($el_ctrlno, $mr_id, $ev_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'el_ctrlno' => $model->el_ctrlno, 'mr_id' => $model->mr_id, 'ev_id' => $model->ev_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EventList model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $el_ctrlno
     * @param integer $mr_id
     * @param integer $ev_id
     * @return mixed
     */
    public function actionDelete($el_ctrlno, $mr_id, $ev_id)
    {
        $this->findModel($el_ctrlno, $mr_id, $ev_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EventList model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $el_ctrlno
     * @param integer $mr_id
     * @param integer $ev_id
     * @return EventList the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($el_ctrlno, $mr_id, $ev_id)
    {
        if (($model = EventList::findOne(['el_ctrlno' => $el_ctrlno, 'mr_id' => $mr_id, 'ev_id' => $ev_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
