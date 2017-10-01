<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieSalesSuspendedPayments;
use app\models\ShopxieSalesSuspendedPaymentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieSalesSuspendedPaymentsController implements the CRUD actions for ShopxieSalesSuspendedPayments model.
 */
class ShopxieSalesSuspendedPaymentsController extends Controller
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
     * Lists all ShopxieSalesSuspendedPayments models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieSalesSuspendedPaymentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieSalesSuspendedPayments model.
     * @param integer $sale_id
     * @param string $payment_type
     * @return mixed
     */
    public function actionView($sale_id, $payment_type)
    {
        return $this->render('view', [
            'model' => $this->findModel($sale_id, $payment_type),
        ]);
    }

    /**
     * Creates a new ShopxieSalesSuspendedPayments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieSalesSuspendedPayments();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'payment_type' => $model->payment_type]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieSalesSuspendedPayments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $sale_id
     * @param string $payment_type
     * @return mixed
     */
    public function actionUpdate($sale_id, $payment_type)
    {
        $model = $this->findModel($sale_id, $payment_type);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'payment_type' => $model->payment_type]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopxieSalesSuspendedPayments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $sale_id
     * @param string $payment_type
     * @return mixed
     */
    public function actionDelete($sale_id, $payment_type)
    {
        $this->findModel($sale_id, $payment_type)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopxieSalesSuspendedPayments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sale_id
     * @param string $payment_type
     * @return ShopxieSalesSuspendedPayments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sale_id, $payment_type)
    {
        if (($model = ShopxieSalesSuspendedPayments::findOne(['sale_id' => $sale_id, 'payment_type' => $payment_type])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
