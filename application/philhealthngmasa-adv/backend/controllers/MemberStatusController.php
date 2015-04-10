<?php

namespace backend\controllers;

use Yii;
use common\models\MemberStatus;
use common\models\MemberStatusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * MemberStatusController implements the CRUD actions for MemberStatus model.
 */
class MemberStatusController extends Controller
{
    public function behaviors()
    {
        return [
            'acces'=>[
                'class'=>AccessControl::classname(),
                'only'=>['create','update'],
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
     * Lists all MemberStatus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MemberStatusSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MemberStatus model.
     * @param integer $ms_id
     * @param integer $member_records_mr_id
     * @return mixed
     */
    public function actionView($ms_id, $member_records_mr_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($ms_id, $member_records_mr_id),
        ]);
    }

    /**
     * Creates a new MemberStatus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MemberStatus();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ms_id' => $model->ms_id, 'member_records_mr_id' => $model->member_records_mr_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MemberStatus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ms_id
     * @param integer $member_records_mr_id
     * @return mixed
     */
    public function actionUpdate($ms_id, $member_records_mr_id)
    {
        $model = $this->findModel($ms_id, $member_records_mr_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ms_id' => $model->ms_id, 'member_records_mr_id' => $model->member_records_mr_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MemberStatus model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ms_id
     * @param integer $member_records_mr_id
     * @return mixed
     */
    public function actionDelete($ms_id, $member_records_mr_id)
    {
        $this->findModel($ms_id, $member_records_mr_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MemberStatus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ms_id
     * @param integer $member_records_mr_id
     * @return MemberStatus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ms_id, $member_records_mr_id)
    {
        if (($model = MemberStatus::findOne(['ms_id' => $ms_id, 'member_records_mr_id' => $member_records_mr_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
