<?php

namespace backend\controllers;

use Yii;
use common\models\Dependents;
use common\models\DependentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DependentsController implements the CRUD actions for Dependents model.
 */
class DependentsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Dependents models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DependentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dependents model.
     * @param integer $id
     * @param integer $member_records_mr_id
     * @return mixed
     */
    public function actionView($id, $member_records_mr_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $member_records_mr_id),
        ]);
    }

    /**
     * Creates a new Dependents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dependents();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'member_records_mr_id' => $model->member_records_mr_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dependents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $member_records_mr_id
     * @return mixed
     */
    public function actionUpdate($id, $member_records_mr_id)
    {
        $model = $this->findModel($id, $member_records_mr_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'member_records_mr_id' => $model->member_records_mr_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Dependents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $member_records_mr_id
     * @return mixed
     */
    public function actionDelete($id, $member_records_mr_id)
    {
        $this->findModel($id, $member_records_mr_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dependents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $member_records_mr_id
     * @return Dependents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $member_records_mr_id)
    {
        if (($model = Dependents::findOne(['id' => $id, 'member_records_mr_id' => $member_records_mr_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
