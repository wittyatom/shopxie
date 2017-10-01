<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieSalesSuspendedItems;
use app\models\ShopxieSalesSuspendedItemsSearchItems;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieSalesSuspendedItemsController implements the CRUD actions for ShopxieSalesSuspendedItems model.
 */
class ShopxieSalesSuspendedItemsController extends Controller
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
     * Lists all ShopxieSalesSuspendedItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieSalesSuspendedItemsSearchItems();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieSalesSuspendedItems model.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @return mixed
     */
    public function actionView($sale_id, $item_id, $line)
    {
        return $this->render('view', [
            'model' => $this->findModel($sale_id, $item_id, $line),
        ]);
    }

    /**
     * Creates a new ShopxieSalesSuspendedItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieSalesSuspendedItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieSalesSuspendedItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @return mixed
     */
    public function actionUpdate($sale_id, $item_id, $line)
    {
        $model = $this->findModel($sale_id, $item_id, $line);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopxieSalesSuspendedItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @return mixed
     */
    public function actionDelete($sale_id, $item_id, $line)
    {
        $this->findModel($sale_id, $item_id, $line)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopxieSalesSuspendedItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @return ShopxieSalesSuspendedItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sale_id, $item_id, $line)
    {
        if (($model = ShopxieSalesSuspendedItems::findOne(['sale_id' => $sale_id, 'item_id' => $item_id, 'line' => $line])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
