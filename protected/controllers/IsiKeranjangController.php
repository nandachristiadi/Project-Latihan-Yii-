<?php

namespace app\controllers;

use app\models\IsiKeranjang;
use app\models\IsiKeranjangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IsiKeranjangController implements the CRUD actions for IsiKeranjang model.
 */
class IsiKeranjangController extends Controller
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
     * Lists all IsiKeranjang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IsiKeranjangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IsiKeranjang model.
     * @param int $id_isi Id Isi
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_barang Kode Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_isi, $id_keranjang, $kode_barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_isi, $id_keranjang, $kode_barang),
        ]);
    }

    /**
     * Creates a new IsiKeranjang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new IsiKeranjang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_isi' => $model->id_isi, 'id_keranjang' => $model->id_keranjang, 'kode_barang' => $model->kode_barang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IsiKeranjang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_isi Id Isi
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_barang Kode Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_isi, $id_keranjang, $kode_barang)
    {
        $model = $this->findModel($id_isi, $id_keranjang, $kode_barang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_isi' => $model->id_isi, 'id_keranjang' => $model->id_keranjang, 'kode_barang' => $model->kode_barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IsiKeranjang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_isi Id Isi
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_barang Kode Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_isi, $id_keranjang, $kode_barang)
    {
        $this->findModel($id_isi, $id_keranjang, $kode_barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IsiKeranjang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_isi Id Isi
     * @param int $id_keranjang Id Keranjang
     * @param string $kode_barang Kode Barang
     * @return IsiKeranjang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_isi, $id_keranjang, $kode_barang)
    {
        if (($model = IsiKeranjang::findOne(['id_isi' => $id_isi, 'id_keranjang' => $id_keranjang, 'kode_barang' => $kode_barang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
