<?php

class BookController extends Controller
{
    public function actionIndex(){//$id = 3


/*        echo 'ID book: ';
        $a = Book::model()->findByPk(6);
        echo $a->title;*/




/*        echo 'Вывод через array: ';
        $array = array(2,5);
        $a = Book::model()->findAllByPk($array);
        foreach($a as $one){

            echo $one->title;
            echo '<hr />';
        }*/


/*      echo 'find: ';
        $num = 4;
        $a = Book::model()->find('id<:num',array(':num' => $num));
        echo $a->title;
        */

        /*echo 'find: ';
        $num = 6;
        $a = Book::model()->findAll('id<:num',array(':num' => $num));
        foreach($a as $one){
            echo $one->title;
            echo '<hr />';
        }*/

/*
        $a = Book::model()->findByAttributes(array('id' => array (2,3,5), 'title' => 'Война и мир'));
        echo $a->title;*/


/*        $a = Book::model()->findAllByAttributes(array('id' => array (2,3,5), 'title' => array('Война и мир','Анна Каренина')));
        foreach($a as $one){
            echo $one->title;
            echo '<hr />';
        }*/

/*        $num = 5;
        $a = Book::model()->findAllBySql('SELECT title FROM {{book}} WHERE id = :num', array(':num' => $num));
        foreach($a as $one){
            echo $one->title;
            echo '<hr />';
        }*/

/*        $num = 5;
        $a = Book::model()->count('id = :num', array(':num' => $num));
        echo $a;*/


/*        $num = 5;
        $a = Book::model()->countBySql('SELECT count(title) FROM {{book}} WHERE id <= :num', array(':num' => $num));
        echo $a;*/


/*        $num = 1;
        $a = Book::model()->exists('id >= :num', array(':num' => $num));
        if($a){
            echo 'Exist';
        }else{
            echo 'Don't exist';
        }*/


        /*$array = array(10);
        $num = 5;
        $a = Book::model()->updateByPk($array, array('title' => 'Hobbit'));//update by id..
        if($a){
            echo 'Update';
        }else{
            echo 'Can not update';
        }*/

/*        $array = array(2,5);
        $num = 5;
        $a = Book::model()->updateAll(array('title' => 'Metro 2033'), 'title = :title', array(':title' => ":title"));//update by id..
        if($a){
            echo 'Update';
        }else{
            echo 'Can not update';
        }*/

        /*$array = array(2,5);
        $num = 5;
        $a = Book::model()->deleteByPk(15);//update by id..
        if($a){
            echo 'Deleted';
        }else{
            echo 'Can not Deleted';
        }*/


/*        $array = array(2,5);
        $num = 5;
        $title = 'Anna Kaenina';
        $a = Book::model()->deleteAll('title = :title', array(':title' => $title));//update by id..
        if($a){
            echo 'Deleted';
        }else{
            echo 'Can not Deleted';
        }*/


        /** Повторные записи*/

/*        $b = new Book;
        $b->title = 'Огогь из нутри';
        $b->year = '1960';
        $b->author = 'Кастанеда';

        $b->save(false);

        echo $b->id = false;
        $b->isNewRecord = true;//new record

        $b->title = 'Колесо времени';
        $b->year = '1963';
        $b->author = 'Кастанеда';
        $b->save(false);*/

        /** Повторные записи*/


        /** Условия для поиска*/


        $criteria = new CDbCriteria;

        $criteria->condition = 'id <= :id';
        $criteria->params = array(':id' => 10);
        $criteria->limit = '10';
        $criteria->order = 'id DESC';

        $a = Book::model()->findAll($criteria);

        foreach($a as $one){
            echo $one->title;
            echo '<hr />';
        }



        /*$id = ($_GET['id']);*/

/*        $model = Book::model()->findByPk($id);
        $a = $this->render('index',array('model'=>$model), true);
        echo $a;*/

    }

}