<?php


class MyController extends Controller {


    public $defaultAction = 'one'; //экшин по умолчанию

    public  function actionOne() {

        $models = Page::model()->findAll(array('order'=>'title ASC'));

        $this->render('one',array('models'=>$models));

    }


}