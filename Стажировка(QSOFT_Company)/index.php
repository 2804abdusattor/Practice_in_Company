<?php
// $a = [1,2,3,4,5];
// foreach ($a as $b) {
// 	echo $b;
// }
// echo "end";
//
$s=2;

// switch ($s) {
// 	case 1:
// 		echo 1;
// 	case 2:
// 		echo 2;
// 	case 3:
// 		echo 3;
// 		break;

// 	default:
// 		echo "default";

// }
// if (null==0){
// 	echo "true";
// }
// else{
// 	echo "false";
// }

// for ($i=0; $i < 5; $i++) {
// 	if ($i % 2 == 0) {
// 		continue;
// 	}
// 	echo $i;
// }
// $s = 2;
// $itm = [
// 	'key1' => 'value1',
// 	'key2' => 'value2',

// ];
// foreach ($itm as $key => $value) {
// 	if ((int)$value == 0) {
// 		echo $key . '...';
// 	}
// }
// function a($x=0){
// 	echo $x;
// }
// a();
// a(5);
// $a =5;
// function getVal1($a){
// 	return $a++;
// }
// function getVal2($a){
// 	return ++$a;
// }
// echo getVal1(getVal2(getVal2(getVal1(getVal1($a)))));
//
// var_dump(in_array('test', [0,1]));
// $line = '321123';

// echo $line[3]. $line[4] .$line[0];
//
// $itm = [
// 	['sort'=>1],
// 	['sort'=>3],
// 	['sort'=>5],
// 	['name'=>'itm 1']
// ];
// $sum = 0;
// foreach ($itm as $i) {
// 	$sum += $i['sort'];
// }
// echo $sum;
//
// function countBasket($basket){
// 	return count($basket);

// }
// $basket = [
// 	[
// 		'position' => 'Книга по php',
// 		'quantity' => 1,
// 	],
// 	[
// 		'position' => 'Мышь беспровадная',
// 		'quantity' => 12,
// 	],
// ];
// countBasket($basket);
//
?>
<!-- <table>
<tr><th>Товар</th><th>Цена</th><th>Мастер</th></tr> --> <!--ряд с ячейками заголовков-->
<!-- <tr><td>Бетон</td><td>100$</td><td>NICK</td></tr> --> <!--ряд с ячейками тела таблицы-->
<!-- </table> -->

<?php

// $data = array(
//         "Мастер"=> array("Никнейм" => array("Nick","Чебурашка","Black"), "Город"=>array("Москва","Челябинск","Казань"), "Доставка" =>array("ДА","НЕТ","НЕТ")),
//         "Товар"=>array("Товар"=>array("Бетон","Герб","Квадрат"), "Цена"=>array("100$","150","799"),"Мастер"=>array("NICK","NICK","BLACK")));
// foreach ($data as $worker => $items)
// {
// 	echo "<table border=1>";
//     echo "<h1>$worker</h1>";
//     foreach ($items as $key => $value)
//     {
//         foreach ($value as $k =>  $v){
//             echo "<tr>";
//             echo "<th>$k)$key</th>";
//             echo "<td>$k - $v</td>";
//             echo "</tr>";
//         }
//     }
//     echo "</table><br><br>";
// }

// // СОЗДАТЬ БД
// try {
//     // подключаемся к серверу
//     $conn = new PDO("mysql:host=localhost", "root", "root");

//     // SQL-выражение для создания базы данных
//     $sql = "CREATE DATABASE [IF NOT EXISTS] library";
//     // выполняем SQL-выражение
//     $conn->exec($sql);
//     echo "Database has been created";
// }
// catch (PDOException $e) {
//     echo "Database error: " . $e->getMessage();
// }
// // СОЗДАТЬ ТАБЛИЦУ В БД
// try {
//     // подключаемся к серверу
//     $conn = new PDO("mysql:host=localhost;dbname=library", "root", "root");

//     // SQL-выражение для создания таблицы
//     $sql_author_create = "create table author (id integer auto_increment primary key, name varchar(30), email varchar(30), year_birth integer(30));";
//     $sql_book_create = "create table book (id integer auto_increment primary key, name_book varchar(30), author varchar(30), book_realese_year integer(30));";
//     // выполняем SQL-выражение
//     $conn->exec($sql_author_create);
//     $conn->exec($sql_book_create);
//     echo "<br>Tables have been created";
// }
// catch (PDOException $e) {
//     echo "Database error: " . $e->getMessage();
// }
// // Добавить данные в таблицы author,book БД
// try {
//     $conn = new PDO("mysql:host=localhost;dbname=library", "root", "root");

//     // SQL-выражение для добавления данных в таблицу author
//     $sql_add_to_author = "INSERT INTO author (name, email, year_birth) VALUES ('Abdusattor', 'abdusattor@gmail.com',2000)";
//     // SQL-выражение для добавления данных в таблицу book
//     $sql_add_to_book = "INSERT INTO book (name_book, author, book_realese_year) VALUES ('Мертвые души', 'Васильевич Гоголь ',1841)";

//     $affectedRowsNumberAuthor = $conn->exec($sql_add_to_author);
//     $affectedRowsNumberBook = $conn->exec($sql_add_to_book);
//     echo "<br>В таблицу author добавлено строк: $affectedRowsNumberAuthor";
//     echo "<br>В таблицу book добавлено строк: $affectedRowsNumberBook";
// }
// catch (PDOException $e) {
//     echo "Database error: " . $e->getMessage();
// }

// //ОТОБРАЖАТЬ РЕЗУЛЬТАТ ТАБЛИЦЫ БД НА СТРАНИЦЕ

// try {
//     $conn = new PDO("mysql:host=localhost;dbname=library", "root", "root");
//     $sql_show_author = "SELECT * FROM author";
//     echo "<br>--------------------------Author-----------------------------";
//     $result_author = $conn->query($sql_show_author);
//     echo "<table><tr><th>Id</th><th>Name</th><th>Email</th><th>Year of birth</th></tr>";
//     while($row = $result_author->fetch()){
//         echo "<tr>";
//             echo "<td>" . $row["id"] . "</td>";
//             echo "<td>" . $row["name"] . "</td>";
//             echo "<td>" . $row["email"] . "</td>";
//             echo "<td>" . $row["year_birth"] . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
//     echo "<br>--------------------------Book-----------------------------";
//     $sql_show_book = "SELECT * FROM book";
//     $result_book = $conn->query($sql_show_book);
//     echo "<table><tr><th>Id</th><th>Name</th><th>Email</th><th>Year of birth</th></tr>";
//     while($row = $result_book->fetch()){
//         echo "<tr>";
//             echo "<td>" . $row["id"] . "</td>";
//             echo "<td>" . $row["name_book"] . "</td>";
//             echo "<td>" . $row["author"] . "</td>";
//             echo "<td>" . $row["book_realese_year"] . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// }
// catch (PDOException $e) {
//     echo "Database error: " . $e->getMessage();
// }
// -------------------------------
// $data = [
//     'authors' => [
//         301 => [
//         'id' => 301,
//         'name' => 'Александр Сергеевич Пушкин',
//         'email' => 'alexander_pushkin@example.com',
//         'birthYear' => 1799,
//         ],
//         10 => [
//         'id' => 10,
//         'name' => 'Николай Васильевич Гоголь',
//         'email' => 'nikolay_gogol@example.com',
//         'birthYear' => 1809,
//     ],
//         17 => [
//         'id' => 17,
//         'name' => 'Михаил Юрьевич Лермонтов',
//         'email' => 'mikhail_lermontov@example.com',
//         'birthYear' => 1814,
//         ],
//     ],
//     'books' => [
//         [
//             'title' => 'Евгений Онегин',
//             'publishedAt' => '1823—1832',
//             'author' => 301,
//         ],
//         [
//             'title' => 'Полтава',
//             'publishedAt' => '1828—1829',
//             'author' => 301,
//         ],
//         [
//             'title' => 'Мёртвые души',
//             'publishedAt' => '1842',
//             'author' => 10,
//         ],
//         [
//             'title' => 'Сказка о рыбаке и рыбке',
//             'publishedAt' => '1833',
//             'author' => 301,
//         ],
//     ],
// ];

// /* ===== Ваш код ниже ===== */

// echo '=== Авторы ===';
// foreach ($data['authors'] as $id => $value_id) {
//     echo "<br>ID = $id<br>";
//     foreach ($value_id as $records => $value_records) {
//         echo "$records:$value_records<br>";
//     }
// }
// echo '<br>=== Книги ===<br>';
// foreach ($data['books'] as $data_book => $value_book) {
//     foreach ($value_book as $records => $value_records) {
//         echo "$records:$value_records<br>";
//     }
//     echo "<br>";
// }

// function task17($n){
//     $sum = 0;
//     for ($i=0; $i < $n; $i++) {
//         if ($i % 3 == 0){
//             echo "<br>Деления без остатка от 3: $i";
//         }
//         if ($i % 5 == 0) {
//             echo "<br>Деления без остатка от 5 и прибавить к переменной sum: ",$sum+$i;
//         }
//         if ($i % 3 == 0 and $i % 5 == 0) {
//             echo "<br>Делится и на 5 и на 3 - вычитать из sum переменной единицу: ",$sum--;
//         }
//     }
//     echo "<br>sum = $sum";
// }
// task17(35);

  ?>