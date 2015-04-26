<?php

//    foreach($models as $model){

//        $title =  CHtml::encode($model->title);
//        /*echo $title;*/
//           echo CHtml::link($title,//первый параметр это текст нашей ссылки
//                array('page/view','id'=>$model->id),//потом передаем урл
//                array('target' => '_blank', 'id' => 'my', 'adf'=>3)//передаем HTML атрибуты и значения
//            );
//
//           echo CHtml::normalizeUrl(array('page/view','id'=>$model->id));//генирирует относительный путь внури приложения
//           echo '<hr />';
//    }

      $this->renderPartial('/part/_part', array('models' => $models));


?>
<!--<a href="http://yii_lern.local/index.php?r=page/view&id=5">link</a>-->