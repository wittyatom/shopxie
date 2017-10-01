<?php

namespace app\controllers;

use Yii;
use app\models\ShopxieItemsTaxes;
use app\models\ShopxieItemsTaxesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShopxieItemsTaxesController implements the CRUD actions for ShopxieItemsTaxes model.
 */
class ShopxieItemsTaxesController extends Controller
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
     * Lists all ShopxieItemsTaxes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShopxieItemsTaxesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopxieItemsTaxes model.
     * @param integer $item_id
     * @param string $name
     * @param string $percent
     * @return mixed
     */
    public function actionView($item_id, $name, $percent)
    {
        return $this->render('view', [
            'model' => $this->findModel($item_id, $name, $percent),
        ]);
    }

    /**
     * Creates a new ShopxieItemsTaxes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopxieItemsTaxes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'name' => $model->name, 'percent' => $model->percent]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopxieItemsTaxes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $item_id
     * @param string $name
     * @param string $percent
     * @return mixed
     */
    public function actionUpdate($item_id, $name, $percent)
    {
        $model = $this->findModel($item_id, $name, $percent);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'item_id' => $model->item_id, 'name' => $model->name, 'percent' => $model->percent]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopxieItemsTaxes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $item_id
     * @param string $name
     * @param string $percent
     * @return mixed
     */
    public function actionDelete($item_id, $name, $percent)
    {
        $this->findModel($item_id, $name, $percent)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopxieItemsTaxes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $item_id
     * @param string $name
     * @param string $percent
     * @return ShopxieItemsTaxes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($item_id, $name, $percent)
    {
        if (($model = ShopxieItemsTaxes::findOne(['item_id' => $item_id, 'name' => $name, 'percent' => $percent])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
