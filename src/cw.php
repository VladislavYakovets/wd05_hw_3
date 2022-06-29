<?php
/**
*echo "<br/>";
*echo "Vladislav";
*echo "<br/>";
*echo "Sergeevich";
*echo "Yakovets";
*/

  /**echo "Hello world!";
  echo "<br/>";
  echo "Hello world!!!";
  echo "<br/>";
  echo 10;
  echo "<br/>";
  $abc =1;
  echo $abc;
  $Prod_Case =10;
  // snake case
  $prodCase = 10;
  // camel case
  echo "<br/>";
  $bool = true;
  $bool2 = false;
  $string = " tratata";

  echo $string;




// dfdsfdsf
/**
 * много строчный коммент 
 * echo вывод строки 
 * $ создает переменные 
 * = присвоение
 * 
 * 
 */
/** 
*$a = 10;
*$b = 3;

*echo $a + $b + 10 + 30;

 * echo '<br>';

*echo $a * $b ;

*  echo '<br>';

*echo var_dump($a/$b);

*  echo '<br>';

*echo $a % $b;

*  echo '<br>';

*echo $a ** $b;

*  echo '<br>';
*/

//$c = false;
//$d = true;
//$e = null;
//$float = 0.0;
/** 
 * if($float){
  *  echo "its true";
  *}

* оператор xor истинно если хотя бы один тру, но не оба сразу 
* если строка не пустая то = true , если пустая  или имеет Null  или пустой массив то = false

*/
/** 
*if($float){
*    echo "its true";
*  } elseif($c) {
 *   echo "its falst";
 * }
*else {
*  echo "its false";
*}
* elseif -- доп условие можно делать бесконечно
*/

//$a = 'cat';
//$string ="пупа ";
//$string2 ='лупа';

//echo $string." и ".$string2;

//echo "<br>";

// " -- вставляет значение переменной, '-- просто воспринимает как текст
// \" -- если нужны просто ковычки в ковычках -- называется экранирование 
// . -- для сложения строк 

//$x = 100;
//$y = 10;
//$y += 23; // $y += 23 -- используется дл + - * /

//echo $y;

//echo "<br>";

//$q= 0;

//if(++$q){       // ++$q прибавляет 1 потом + значение $q++ знчение обрабатывает а потом + 1 
//  echo "ok";
//} else{
//  echo" no ok";
//}

// $res = rand(0, 100);

// echo $res;

// if
//   ($res % 2 === 0)
//   {
//     echo " чет";
// }
//   else {
//   echo " не чет";
// }

// echo '<br>';

// if($res <=10 && $res >= 0){
//   echo " от 1 до 10";
// } 
//   elseif ($res <= 40 && $res >= 10){
//   echo " от 10 до 40";
// } 
//   elseif ($res <= 70 && $res >= 40){
//   echo " от 40 до 70";
// } 
//   elseif ($res <= 100 && $res >= 70){
//     echo "от 70 до 100 ";
//   }

// Задание 
// 1.чет или не чет 
// 2. к какому диапазону принадлежит


// echo '<br>';
// $rander = 48; 
// $day = rand(0, 7);
// echo $rand;
// echo '<br>';
// echo $day;
// if($rand >=0 && $rand <=50){
//   if($day >=1 && $rand <=5){
//     $rander *= 1.20;
//     echo " cena = $rander ";
//   } 
//     elseif($day >=5 && $rand <=7){
//     $rander *= 1.30;
//     echo " cena = $rander ";
//   }
// } 

// $string = 'ololo';
// $string = 'ololololo';

// var_dump($string == $string2);   ---- сверка строки

 //echo '<br>';

// $str = '1';
// $str = intval($str);
// var_dump($str);
// $str = '3';
// echo '<br>';
// $str2 = floatval($str2);
// var_dump($str2);
// echo '<br>';
// $str2 = boolval($str2);
// var_dump($str2);

// Преобразование типов 

// $str = '1';
// $str2 = '3';

// $str = (float) $str;
// var_dump((int)$str);

// define('MY_CONST', 100500); // создание константы через define 
// echo MY_CONST;

// echo '<br>';

// const MY_CONST2 = 35656756;
// echo MY_CONST2;

// HW1 

// $res = rand(0, 100);
//   echo $res ;
//   echo '<br>';

// $res2 = rand(0, 100);
//   echo $res2 ;
//   echo '<br>';

// $res3 = rand(0, 100);
//   echo $res3 ;
//   echo '<br>';

//   if(($res > $res2) && ($res > $res3)){
//     echo " Наибольшее число из введенных = $res ";
//   }elseif(($res2 > $res) && ($res2 > $res3)){
//     echo "Наибольшее число из введенных = $res2";
//   }
//     else{
//       echo "Наибольшее число из введенных = $res3";
//     }

//   echo '<br>';

//HW2
// if(($res == $res2) || ($res == $res3) || ($res2 == $res3) || (($res == $res2) && ($res2 == $res3))){
//   echo "Ошибка";
//   } elseif((($res > $res2) && ($res < $res3)) || (($res < $res2) && ($res > $res))){
//     echo "Среднее число из введенных = $res";
//   } elseif ((($res2 > $res) && ($res2 < $res3)) || (($res2 < $res) && ($res2 > $res3))){
//     echo "Среднее число из введенных = $res2";
//   } 
//   else{
//     echo "Среднее число из введенных = $res3";
//   }

//   echo '<br>';
//   echo '<br>';

// HW3

// $x = rand (-100, 100);
// $y = rand (-100, 100);

//   echo "Точка по оси Х = $x";
//   echo '<br>';
//   echo "Точка по оси Y = $y";
//   echo '<br>';

//   if($x == 0 && $y == 0){
//     echo "Ваша точка находится в центре";
//   } 
//     elseif ($x >= 1 && $y >= 1){
//     echo "Ваша точка находится в 1 четверти";
//   } 
//     elseif ($x <= -1 && $y >= 1){
//     echo "Ваша точка находится во 2 четверти";
//   } 
//     elseif ($x <= -1 && $y <= -1){
//       echo "Ваша точка находится в 3 четверти";
//     }
//     elseif ($x >= 1 && $y <= -1){
//       echo "Ваша точка находится в 4 четверти";
//     }
//     elseif ($x == 0){
//       echo "Ваша точка лежит на оси Y";
//     }
//     elseif ($y == 0){
//       echo "Ваша точка лежит на оси X";
//     }
    


// HW1 

// $res = rand(0, 100);
//   echo $res ;
//   echo '<br>';

// $res2 = rand(0, 100);
//   echo $res2 ;
//   echo '<br>';

// $res3 = rand(0, 100);
//   echo $res3 ;
//   echo '<br>';

//   if(($res > $res2) && ($res > $res3)){
//     echo " Наибольшее число из введенных = $res ";
//   }elseif(($res2 > $res) && ($res2 > $res3)){
//     echo "Наибольшее число из введенных = $res2";
//   }
//     else{
//       echo "Наибольшее число из введенных = $res3";
//     }

//   echo '<br>';

//HW2
// if(($res == $res2) || ($res == $res3) || ($res2 == $res3) || (($res == $res2) && ($res2 == $res3))){
//   echo "Ошибка";
//   } elseif((($res > $res2) && ($res < $res3)) || (($res < $res2) && ($res > $res))){
//     echo "Среднее число из введенных = $res";
//   } elseif ((($res2 > $res) && ($res2 < $res3)) || (($res2 < $res) && ($res2 > $res3))){
//     echo "Среднее число из введенных = $res2";
//   } 
//   else{
//     echo "Среднее число из введенных = $res3";
//   }

//   echo '<br>';
//   echo '<br>';

// HW3

// $x = rand (-100, 100);
// $y = rand (-100, 100);

//   echo "Точка по оси Х = $x";
//   echo '<br>';
//   echo "Точка по оси Y = $y";
//   echo '<br>';

//   if($x == 0 && $y == 0){
//     echo "Ваша точка находится в центре";
//   } 
//     elseif ($x >= 1 && $y >= 1){
//     echo "Ваша точка находится в 1 четверти";
//   } 
//     elseif ($x <= -1 && $y >= 1){
//     echo "Ваша точка находится во 2 четверти";
//   } 
//     elseif ($x <= -1 && $y <= -1){
//       echo "Ваша точка находится в 3 четверти";
//     }
//     elseif ($x >= 1 && $y <= -1){
//       echo "Ваша точка находится в 4 четверти";
//     }
//     elseif ($x == 0){
//       echo "Ваша точка лежит на оси Y";
//     }
//     elseif ($y == 0){
//       echo "Ваша точка лежит на оси X";
//     }
    

// $massiv = array (1,2,4, 'sdsdds',false);
// echo '<pre>';
// print_r ($massiv);
// echo '</pre>';
// echo '<br>';
// $massiv2 = [1,2,3,4, 'qwqwwq', false]; 
// echo '<pre>';
// print_r ($massiv2);
// echo '</pre>';

// $massiv3 = [
//   2 => 'fdsfdsf',
//   3 => 'sdfdsqqqqq'
// ];
// echo '<pre>';
// print_r ($massiv3);
// echo '</pre>';

// $massiv4 = [
//   'a1' => '222',
//   'a2' => '333',
//   null => '444',
//   123 => '555', // cчитается нулевым элементом
//   234
// ];

// echo '<pre>';         //Выдает чистый массив без названия переменных
// print_r ($massiv4);   //Выдает чистый массив без названия переменных
// echo '</pre>';        //Выдает чистый массив без названия переменны

// echo $massiv4['a2'];
// echo '<br>';
// echo $massiv4['a1'];
// echo '<br>';
// echo $massiv4['123'];

// $massiv4[] = 'a2';

// 1 Создайте массив четных чисел от 0 до 10 
// 2 Создайте ассоциативный массив членов семьи 

// $massiv = [
//   0,2,4,6,8,10
// ];

// $massiv2 = [
//   'me' => 'Vlad',
//   'mom' => 'Elena',
//   'dad' => 'Sergey',
//   'brother' => 'Arteom',
//   'dog' => 'Jessi'
// ];

//   echo '<pre>';
//     print_r ($massiv);
//   echo '</pre>';

//   echo '<br>';

//   echo '<pre>';
//     print_r ($massiv2);
//   echo '</pre>';

//
//
// <?p ? > ---- вызов php 
//
//

// $post = [
//   'title' => 'My first page',
//   'content' => 'lorum lorum lorum forum forum forum',
//   'img' => 'https://klike.net/uploads/posts/2021-01/1611131113_2.jpg'
// ];

// $array = [
//   1,2,3,4,
//   [1,1,1,1,1]
// ];

//   echo '<pre>';
//     print_r ($array);
//   echo '</pre>';

//   echo $array [3][4];
//   $level1 = $array[2];
//   $level2 = $level1 [3];


  // $array = [
  //   'frontend' => "HTML , CSS , JS",
  //     [
  //       'backend' => "PHP and other",
  //         [
  //           'database' => " data and base ",
  //         ]
  //     ]
  // ];

  // $array = [
  //   'front-end' => ["HTML" , "CSS" , "JS"],
  //   'back-end' => ["PHP", "and other"],
  //   'data-base' => [" data and base"],
  // ];

  // echo '<pre>';
  //   print_r ($array['front-end'][1]." ".$array['back-end'][0]);
  // echo '</pre>';

// вверху выводит конкретные слова из массива 

// $array = [
//     "WD04" => [ 
//       ['Ivan','Ivanov'],
//       ['Sergey', 'Serov']
//     ],
//     "WD05" => [ 
//       ['Olga', 'Erosh',],
//       ['Max', 'Mad']
//     ],
//     "WD06" => [ 
//       ['Nastya', 'Sell',],
//       ['Egor', 'Egorov']
//     ],
//     ];

//     echo '<pre>';
//     print_r ($array['WD04'][0][0]." ".$array['WD04'][0][1]);
//     echo '<br>';
//     print_r ($array['WD04'][1][0]." ".$array['WD04'][1][1]);
//     echo '<br>';
//     print_r ($array['WD05'][0][0]." ".$array['WD05'][0][1]);
//     echo '<br>';
//     print_r ($array['WD05'][1][0]." ".$array['WD05'][1][1]);
//     echo '<br>';
//     print_r ($array['WD06'][0][0]." ".$array['WD06'][0][1]);
//     echo '<br>';
//     print_r ($array['WD06'][1][0]." ".$array['WD06'][1][1]);
//     echo '</pre>';


// $mass = [ 1,2,5,4,7];
// $mass[5] = 10;

// sort($mass);
// foreach ($mass as $mas) {
//     echo "$mas ".'<br>';
// }

//     echo '<br/>';
//     echo '<br/>';

// $array =["love", "PHP", "I"];
// echo '<pre>';
// print_r ($array[2]." ".$array[0]." ".$array[1]);
// echo '</pre>';

// echo '<br/>';
// echo '<br/>';

// $tasks = [
// 	['Learn PHP programming', 2],
// 	['Practice PHP', 2],
// 	['Work', 8],
// 	['Do excercise', 1],
// ];

// echo $tasks[0][1];

// echo '<br/>';
// echo '<br/>';

// $colors = [
// 	"red" => '#ff000',
// 	"green" => '#00ff00',
// 	"blue" => '#0000ff',
// ];

// $colors = ["black" => '#000000'] + $colors;

// echo '</pre>';
// print_r($colors);
// echo '</pre>';

// echo '<br/>';
// echo '<br/>';

// Проверка на наличие ключей

// $arr = [
// 	'one' => 'value 1',
// 	'two' => 'value 2',
// 	'three' => 'value 3'
// ];

// if (isset($arr['one'])){
//   echo "Ключ найден";
// } else
// {
//     echo "Ключ не найден";
// }

// ПОИСК ПОЛОЖИТЕЛЬНЫХ ЭЛЕМЕНТОВ МАССИВА ЧЕРЕЗ ФОРИЧ

// <?php
// $arr = [2, 4, -4, 12, -3, 1];
// $values = [];

// foreach($arr as $v)
// {
//     if($v > 0)
//         $values[] = $v;
// }

// var_dump($values);

// список ключей массивов
// $user = [
// 	'username' => 'admin',
// 	'email' => 'admin@phptutorial.net',
// 	'is_active' => '1'
// ];

// $properties = array_keys($user, admin);

// print_r($properties);




// $posts = [
//   [
//       'title' => ' Моя первая страница 1',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//   ],
//   [
//       'title' => ' Моя первая страница 2',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//   ],
//   [
//       'title' => ' Моя первая страница 3',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//   ],
//   [
//       'title' => ' Моя первая страница 4',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//   ],
//   [
//       'title' => ' Моя первая страница 5',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//   ]
// ];

// foreach($posts as $post){
//   echo "<pre>";
//   print_r ($post);
//   echo "</pre>";
//     foreach($post as $key => $item){
//       echo $key." ".$item." "."<br>";
//     };
    
// };
// echo "------------------------------------";
// echo "<br>";
// for($i=0; $i< count($posts); $i++){
//   $post = $posts[$i];
//   foreach($post as $key => $item){
//     echo $key." ".$item." "."<br>";
    
// };
// };

// $a = 1024;
// $var = 2;
// $counter = 0;

//   while($var < $a){
//     $var*=2; // $var = $var *2;
//     $counter++;
//     echo"<br>--------------";
//     echo($var." ".$counter." ".$a);
//     if($var == 256){
//       break; // остановка цикла при условии, при countinue прекращает досрочно итерацию
//     }
// }

// $b = [ ];
// $var = 0;
// $end = 1000;

// while($var <= $end){
//   if($var%2 == 0){
//     $b[] = $var;
//     $var++;
//   };
//     $var++;
//   };

// print_r($b);

//   $array = [Ivanov, Petrov, Sidorov, Polyakov];

//   foreach($array as $key => $element){

//     echo $key." ". $element."<br>";
// };




// $rand = rand(0,100);
//   while($rand <= 80){
//     echo $rand."<br>";
//     $rand = rand(0,100);

// };


// echo "<br>";

// $rand = [];
// for($i=0; $i<4; $i++){
//   echo "Student"." "."№"." ".$i." ".$array[$i]."<br>";
// };



//дз циклы смотрим 
// дз таблица умножения через for и while

// $posts = [
  //   [
  //       'title' => ' Моя первая страница 1',
  //       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
  //       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
  //   ],
  //   [
  //       'title' => ' Моя первая страница 2',
  //       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
  //       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
  //   ],
  //   [
  //       'title' => ' Моя первая страница 3',
  //       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
  //       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
  //   ],
  //   [
  //       'title' => ' Моя первая страница 4',
  //       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
  //       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
  //   ],
  //   [
  //       'title' => ' Моя первая страница 5',
  //       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
  //       'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
  //   ]
  // ];
  // ?>
  
  // <!DOCTYPE html>
  // <html lang="en">
  // <head>
  //   <meta charset="UTF-8">
  //   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  //   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  //   <title>Document</title>
  // </head>
  // <body>
  //   <?php foreach ($posts as $post): ?>
  //   <div>
  //     <h1><?php echo $post['title']?></h1>
  //     <img style="width:100px" src = "<?php echo $post['img']?>" alt = "">
  //     <p><?php echo $post['content']?></p>
  //   </div>
  //   <?php endforeach; ?>
    
  // </body>
  // </html>
  