<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieSalesReturnItems;
use app\models\ShopxieSalesReturnItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieSalesReturnItemsController implements the CRUD actions for ShopxieSalesReturnItems model.
 */
class ShopxieSalesReturnItemsController extends Controller
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
     * Lists all ShopxieSalesReturnItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieSalesReturnItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieSalesReturnItems model.
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
     * Creates a new ShopxieSalesReturnItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieSalesReturnItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sale_id' => $model->sale_id, 'item_id' => $model->item_id, 'line' => $model->line]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieSalesReturnItems model.
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
     * Deletes an existing ShopxieSalesReturnItems model.
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
     * Finds the ShopxieSalesReturnItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $sale_id
     * @param integer $item_id
     * @param integer $line
     * @return ShopxieSalesReturnItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sale_id, $item_id, $line)
    {
        if (($model = ShopxieSalesReturnItems::findOne(['sale_id' => $sale_id, 'item_id' => $item_id, 'line' => $line])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
