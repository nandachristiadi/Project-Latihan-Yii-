<?php

namespace app\controllers;

use app\models\Pembeli;
use app\models\PembeliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PembeliController implements the CRUD actions for Pembeli model.
 */
class PembeliController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pembeli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PembeliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pembeli model.
     * @param string $kode_pembeli Kode Pembeli
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_pembeli)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_pembeli),
        ]);
    }

    /**
     * Creates a new Pembeli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pembeli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_pembeli' => $model->kode_pembeli]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pembeli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_pembeli Kode Pembeli
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_pembeli)
    {
        $model = $this->findModel($kode_pembeli);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_pembeli' => $model->kode_pembeli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pembeli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_pembeli Kode Pembeli
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_pembeli)
    {
        $this->findModel($kode_pembeli)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pembeli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_pembeli Kode Pembeli
     * @return Pembeli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_pembeli)
    {
        if (($model = Pembeli::findOne(['kode_pembeli' => $kode_pembeli])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
