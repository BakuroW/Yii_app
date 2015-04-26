<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo CHtml::form('','POST');


    echo CHtml::textField('text','valet');

    $a = CHtml::listData($models,'id','title');//Сформировать ассоциативный массив из модели которую мы ему передаем, 2- параметр ключ массива, 3 - значение

    echo CHtml::dropDownList('drop','',$a, array('class'=>'one'));//array(1=>'one',2=>'two')//|| Можно передавать html опции || Можно предавать ajax

    echo CHtml::submitButton('Отправка');
    echo CHtml::endForm();