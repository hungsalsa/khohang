<?php

namespace backend\controllers;

use Yii;
use backend\models\Loaihang;
use backend\models\LoaihangSearch;
use backend\models\Hangxe;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * LoaihangController implements the CRUD actions for Loaihang model.
 */
class LoaihangController extends Controller
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
     * Lists all Loaihang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LoaihangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Loaihang model.
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
     * Creates a new Loaihang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Loaihang();
        $model->created_at = time();
        $model->updated_at = time();

        $hangxe = new Hangxe();
        $allHangXe = $hangxe->get_all_Hangxe();
        
        $dataParent = $model->getLoaiHangParent();
        if(empty($dataParent)) $dataParent = array();


        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->parentID == null){
                $model->parentID = 0;
            }
            // $model->icon = str_replace($myUrl."/", "", $post_info['Category']['icon']);
            // print_r($post_info); echo $model->icon; echo  'parent = '.$model->parent_id; die();
           if($model->save()) return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'allHangXe' => $allHangXe,
                'dataParent' => $dataParent,
            ]);
        }
    }

    /**
     * Updates an existing Loaihang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->updated_at = time();

        $hangxe = new Hangxe();
        $allHangXe = $hangxe->get_all_Hangxe();
        
        $dataParent = $model->getLoaiHangParent();
        if(empty($dataParent)) $dataParent = array();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->parentID == null){
                $model->parentID = 0;
            }
            // $model->icon = str_replace($myUrl."/", "", $post_info['Category']['icon']);
            // print_r($post_info); echo $model->icon; echo  'parent = '.$model->parent_id; die();
           if($model->save()) return $this->redirect(['view', 'id' => $model->id_LH]);
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // return $this->redirect(['view', 'id' => $model->id_LH]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'allHangXe' => $allHangXe,
                'dataParent' => $dataParent,
            ]);
        }
    }

    /**
     * Deletes an existing Loaihang model.
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
     * Finds the Loaihang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Loaihang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Loaihang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
