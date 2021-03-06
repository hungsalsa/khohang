<?php

namespace backend\controllers;

use Yii;
use backend\models\Nhaphang;
use backend\models\NhaphangSearch;
use backend\models\Nhacungcap;
use backend\models\Mathang;
use backend\models\Donvitinh;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * NhaphangController implements the CRUD actions for Nhaphang model.
 */
class NhaphangController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Nhaphang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NhaphangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nhaphang model.
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
     * Creates a new Nhaphang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nhaphang();
        $model->created_at = time();
        $model->updated_at = time();
        $model->manhanvien = Yii::$app->user->id;

        $ncc = new Nhacungcap();
        $allNCC = $ncc->get_AllNhacungcap();

        $mathang = new Mathang();
        $allMathang = $mathang->getAllMathang();

        
        $dvt = new Donvitinh();
        $alldvt = $dvt->get_AllDonvitinh();
        if($post = Yii::$app->request->post()){
            $model->gianhap = str_replace(',', '', $post['Nhaphang']['gianhap']);
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
            $model->gianhap = str_replace(',', '', $model->gianhap);
            if($model->save()) return $this->redirect(['index']);

        } else {
            return $this->render('create', [
                'model' => $model,
                'allNCC' => $allNCC,
                'allMathang' => $allMathang,
                'alldvt' => $alldvt,
            ]);
        }
    }

    /**
     * Updates an existing Nhaphang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->mahdn]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Nhaphang model.
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
     * Finds the Nhaphang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Nhaphang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Nhaphang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
