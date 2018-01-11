<?php
namespace frontend\controllers;
use yii\web\Controller;
class DefaultController extends Controller
{
    public $defaultAction = 'index'; //设置默认控制器
    public function actionIndex()
    {
        echo "test Index Page 前台首页";
    }
    
}


