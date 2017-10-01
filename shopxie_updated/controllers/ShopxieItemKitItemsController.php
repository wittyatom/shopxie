<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieItemKitItems;
use app\models\ShopxieItemKitItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieItemKitItemsController implements the CRUD actions for ShopxieItemKitItems model.
 */
class ShopxieItemKitItemsController extends Controller
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
     * Lists all ShopxieItemKitItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieItemKitItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieItemKitItems model.
     * @param integer $item_kit_id
     * @param integer $item_id
     * @param string $quantity
     * @return mixed
     */
    public function actionView($item_kit_id, $item_id, $quantity)
    {
        return $this->render('view', [
            'model' => $this->findModel($item_kit_id, $item_id, $quantity),
        ]);
    }

    /**
     * Creates a new ShopxieItemKitItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieItemKitItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_kit_id' => $model->item_kit_id, 'item_id' => $model->item_id, 'quantity' => $model->quantity]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieItemKitItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $item_kit_id
     * @param integer $item_id
     * @param string $quantity
     * @return mixed
     */
    public function actionUpdate($item_kit_id, $item_id, $quantity)
    {
        $model = $this->findModel($item_kit_id, $item_id, $quantity);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_kit_id' => $model->item_kit_id, 'item_id' => $model->item_id, 'quantity' => $model->quantity]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopxieItemKitItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $item_kit_id
     * @param integer $item_id
     * @param string $quantity
     * @return mixed
     */
    public function actionDelete($item_kit_id, $item_id, $quantity)
    {
        $this->findModel($item_kit_id, $item_id, $quantity)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopxieItemKitItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $item_kit_id
     * @param integer $item_id
     * @param string $quantity
     * @return ShopxieItemKitItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_kit_id, $item_id, $quantity)
    {
        if (($model = ShopxieItemKitItems::findOne(['item_kit_id' => $item_kit_id, 'item_id' => $item_id, 'quantity' => $quantity])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
