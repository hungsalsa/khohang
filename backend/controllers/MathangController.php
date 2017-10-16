<?php

namespace backend\controllers;

use Yii;
use backend\models\Mathang;
use backend\models\MathangSearch;
use backend\models\Nhacungcap;
use backend\models\Donvitinh;
use backend\models\Loaihang;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MathangController implements the CRUD actions for Mathang model.
 */
class MathangController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mathang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MathangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mathang model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mathang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mathang();
        $model->created_at = time();
        $model->updated_at = time();
        $model->manhanvien = Yii::$app->user->id;

        $loaihang = new Loaihang();

        $dataParentLH = $loaihang->getLoaiHangParent();
        if(empty($dataParentLH)) $dataParentLH = array();

        $ncc = new Nhacungcap();
        $allNCC = $ncc->get_AllNhacungcap();

        $dvt = new Donvitinh();
        $alldvt = $dvt->get_AllDonvitinh();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->mahang]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'allNCC' => $allNCC,
                'alldvt' => $alldvt,
                'dataParentLH' => $dataParentLH,
            ]);
        }
    }

    /**
     * Updates an existing Mathang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->mahang]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Mathang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mathang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mathang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mathang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
