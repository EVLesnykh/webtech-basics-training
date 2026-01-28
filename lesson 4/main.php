<?php 
    # echo "Hello, Екатерина! "
?>

<?php 
    # echo 'Это ';
    # echo 'PHP ';
    # echo 'код.';
?>

<?php 
    # Это комментарий
   // echo 'А это рабочий код. ';
// Это второй комментарий
   // echo 'Это второй вывод на экран.';
?>

<?php 
  // $_name //правильно
  // $13 //неправильно
  // $_13 // правильно не
  // $name_13 //правильно не
  // $name-13 //неправильно 
?>

<?php
$name = 'Алевтина';
echo $name;
?>

<?php
$name = 'Петя';
$bool = true;
$num = 15.28;
echo "Привет, $name "; // Привет Петя
echo "Это булевский тип?, $bool "; // Это булевский тип? 1
echo "Это дробь = $num"; // Это дробь = 15.28
?>

<?php
echo 6 + 5 ;
echo 6 - 5 ;
echo 3 * 2 ;
echo 10 / 2 ;
echo 7 % 2 ;
?>

<?php
$heroes = ['Шварценегер', 'Сталлоне', 'Джеки Чан'];
?>


<?php
class User {
    public $name;
    public $date;
    public function show()
    {
        echo $this->name, ' ', $this->date;
    }
}
$alevtina = new User;
$alevtina->name = 'Алевтина';
$alevtina->date = 10;
$alevtina->show(); //Алевтина 10
?>