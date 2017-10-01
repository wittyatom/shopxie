<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieSalesSuspendedItemsTaxes;
use app\models\ShopxieSalesSuspendedItemsTaxesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieSalesSuspendedItemsTaxesController implements the CRUD actions for ShopxieSalesSuspendedItemsTaxes model.
 */
class ShopxieSalesSuspendedItemsTaxesController extends Controller
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
     * Lists all ShopxieSalesSuspendedItemsTaxes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieSalesSuspendedItemsTaxesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieSalesSuspendedItemsTaxes model.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @param string $name
     * @param string $percent
     * @return mixed
     */
    public function actionView($sale_id, $item_id, $line, $name, $percent)
    {
        return $this->render('view', [
            'model' => $this->findModel($sale_id, $item_id, $line, $name, $percent),
        ]);
    }

    /**
     * Creates a new ShopxieSalesSuspendedItemsTaxes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieSalesSuspendedItemsTaxes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line, 'name' => $model->name, 'percent' => $model->percent]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieSalesSuspendedItemsTaxes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @param string $name
     * @param string $percent
     * @return mixed
     */
    public function actionUpdate($sale_id, $item_id, $line, $name, $percent)
    {
        $model = $this->findModel($sale_id, $item_id, $line, $name, $percent);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line, 'name' => $model->name, 'percent' => $model->percent]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopxieSalesSuspendedItemsTaxes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @param string $name
     * @param string $percent
     * @return mixed
     */
    public function actionDelete($sale_id, $item_id, $line, $name, $percent)
    {
        $this->findModel($sale_id, $item_id, $line, $name, $percent)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopxieSalesSuspendedItemsTaxes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @param string $name
     * @param string $percent
     * @return ShopxieSalesSuspendedItemsTaxes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sale_id, $item_id, $line, $name, $percent)
    {
        if (($model = ShopxieSalesSuspendedItemsTaxes::findOne(['sale_id' => $sale_id, 'item_id' => $item_id, 'line' => $line, 'name' => $name, 'percent' => $percent])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
