<?php

namespace app\controllers;

use app\models\Keranjang;
use app\models\KeranjangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeranjangController implements the CRUD actions for Keranjang model.
 */
class KeranjangController extends Controller
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
     * Lists all Keranjang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KeranjangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Keranjang model.
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_pembeli Kode Pembeli
     * @param string $kode_penjual Kode Penjual
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_keranjang, $kode_pembeli, $kode_penjual)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_keranjang, $kode_pembeli, $kode_penjual),
        ]);
    }

    /**
     * Creates a new Keranjang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Keranjang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_keranjang' => $model->id_keranjang, 'kode_pembeli' => $model->kode_pembeli, 'kode_penjual' => $model->kode_penjual]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Keranjang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_pembeli Kode Pembeli
     * @param string $kode_penjual Kode Penjual
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_keranjang, $kode_pembeli, $kode_penjual)
    {
        $model = $this->findModel($id_keranjang, $kode_pembeli, $kode_penjual);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_keranjang' => $model->id_keranjang, 'kode_pembeli' => $model->kode_pembeli, 'kode_penjual' => $model->kode_penjual]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Keranjang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_pembeli Kode Pembeli
     * @param string $kode_penjual Kode Penjual
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_keranjang, $kode_pembeli, $kode_penjual)
    {
        $this->findModel($id_keranjang, $kode_pembeli, $kode_penjual)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Keranjang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_pembeli Kode Pembeli
     * @param string $kode_penjual Kode Penjual
     * @return Keranjang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_keranjang, $kode_pembeli, $kode_penjual)
    {
        if (($model = Keranjang::findOne(['id_keranjang' => $id_keranjang, 'kode_pembeli' => $kode_pembeli, 'kode_penjual' => $kode_penjual])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
