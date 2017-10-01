<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieReceivingsItems;
use app\models\ShopxieReceivingsItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieReceivingsItemsController implements the CRUD actions for ShopxieReceivingsItems model.
 */
class ShopxieReceivingsItemsController extends Controller
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
     * Lists all ShopxieReceivingsItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieReceivingsItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieReceivingsItems model.
     * @param integer $receiving_id
     * @param integer $item_id
     * @param integer $line
     * @return mixed
     */
    public function actionView($receiving_id, $item_id, $line)
    {
        return $this->render('view', [
            'model' => $this->findModel($receiving_id, $item_id, $line),
        ]);
    }

    /**
     * Creates a new ShopxieReceivingsItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieReceivingsItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'receiving_id' => $model->receiving_id, 'item_id' => $model->item_id, 'line' => $model->line]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieReceivingsItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $receiving_id
     * @param integer $item_id
     * @param integer $line
     * @return mixed
     */
    public function actionUpdate($receiving_id, $item_id, $line)
    {
        $model = $this->findModel($receiving_id, $item_id, $line);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'receiving_id' => $model->receiving_id, 'item_id' => $model->item_id, 'line' => $model->line]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopxieReceivingsItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $receiving_id
     * @param integer $item_id
     * @param integer $line
     * @return mixed
     */
    public function actionDelete($receiving_id, $item_id, $line)
    {
        $this->findModel($receiving_id, $item_id, $line)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopxieReceivingsItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $receiving_id
     * @param integer $item_id
     * @param integer $line
     * @return ShopxieReceivingsItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($receiving_id, $item_id, $line)
    {
        if (($model = ShopxieReceivingsItems::findOne(['receiving_id' => $receiving_id, 'item_id' => $item_id, 'line' => $line])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
