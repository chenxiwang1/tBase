<?php
namespace backend\controllers;
use yii\web\Controller;
class DefaultController extends Controller
{
    public $defaultAction = 'index'; //设置默认控制器
    public function actionIndex()
    {
        echo "test Index Page web后台首页";
    }
    
}