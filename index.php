<?php

    class Demo {
        public $name = 'Kamal Azad';
        public  $city = 'Sonir Akra'; //Property;
        function add(){
            echo 'In Add';
        }
        function hello(){
            echo 'In hello';
        }
    }

    $demo = new Demo; //object
//    $demo->add();
    echo $demo ->name;

//    add();

//    function demo($firstName=null, $lastName=null){
////       $firstName = 'Mehedi';
////       $lastName = 'Hasan';
//       $fullName = $firstName. " " .$lastName;
//
////       echo $fullName;
//        return $fullName;
//    }
//    echo '<br/>...................<br/>';
//     echo demo('Sakib');
//
//    echo '<br/>...................<br/>';
//     $res = demo('Sojib','Khan');
//     echo 'Full Name is: '.$res;
//
//    echo '<br/>...................<br/>';
//     $res = demo('Chulmul','Panday');
//     echo '<h1>'. $res.'</h1>';


//    $data = [];
//    $data[0][0] = 10;
//    $data[0][1] = 20;
//    $data[0][2] = 30;
//
//    $data[1][0] = 40;
//    $data[1][1] = 50;
//    $data[1][2] = 60;
//
//    $data[2][0] = 70;
//    $data[2][1] = 80;
//    $data[2][2] = 90;
//
//    $data[3][0] = 100;
//    $data[3][1] = 110;
//    $data[3][2] = 120;
//
//    foreach ($data as $value){
////        echo $value[0].' '.$value[1].' '.$value[2].'<br/>';
//        foreach ($value as $v_value){
//            echo $v_value .' ';
//        }
//        echo "<br/>";
//    }



//    $data =[
//        'name'    => 'Mosiur',
//        'city'    => 'Mirpur-10',
//        'country' => 'Bangladesh',
//        'phone'   => '017222',
//        'gender'  => 'Male'
//        ];
//
//    echo "<pre>";
//    var_dump($data);

//    echo '<pre>';
//    print_r($data);
//    echo '</pre>';

//    echo $data['name'];
//
//foreach ($data as $value){
//    echo $value. '<br/>';
//}

// $data = [];
//
// $data[0] = 10;
// $data[1] = 20;
// $data[2] = 30;
//
// $data['name'] = 'Mosiur';
// $data['city'] = 'Mirpur-10';
// $data['country'] = 'Bangladesh';
//
// echo $data['city'];



//  echo "Arithmetic Operator Practice"."<br/>";
//  $addition = 50;
//  $addition1 = 40;
//  echo "Addition 50 + 40 = ";
//  echo  $addition + $addition1."<br/>";
//
//  echo "Subtraction 50 - 40 = ";
//  echo $addition - $addition1;
