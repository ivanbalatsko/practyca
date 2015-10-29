<link rel="stylesheet" type="text/css" href="base.css">
<?php
 //
include 'database.php';
 
 //--STUDENTS---------------------------------------------------------------

//Якщо була натиснута силка на видалення, видаляємо запис 
if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM students WHERE (student_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}

// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM students";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

// Виводимо дані з таблиці 
  echo '<table class="delete_students" border="1">';
  echo '<caption><b>СТУДЕНТИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID СТУДЕНТА</th>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>ПРІЗВИЩЕ</th>';
  echo '<th>ІМ`Я</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['student_id'] . '</td>';
    echo '<td>' . $row['group_id'] . '</td>';
    echo '<td>' . $row['student_surname'] . '</td>';
    echo '<td>' . $row['student_name'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["student_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--GROUPS---------------------------------------------------------------

if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM groups WHERE (group_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}

// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM groups";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

// Виводимо дані з таблиці 
  echo '<table class="delete_groups" border="1">';
  echo '<caption><b>ГРУПИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>НАЗВА ГРУПИ</th>';
  echo '<th>ID СПЕЦІАЛЬНОСТІ</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['group_id'] . '</td>';
    echo '<td>' . $row['group_name'] . '</td>';
    echo '<td>' . $row['spec_id'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["group_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

//--SPECIALITIES---------------------------------------------------------------


if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM specialities WHERE (spec_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}


// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM specialities";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);

 // Виводимо дані з таблиці 
  echo '<table class="delete_specialities" border="1">';
  echo '<caption><b>СПЕЦІАЛЬНОСТІ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID СПЕЦІАЛЬНОСТІ</th>';
  echo '<th>КОД СПЕЦІАЛЬНОСТІ</th>';
  echo '<th>НАЗВА СПЕЦІАЛЬНОСТІ</th>';
  echo '<th>ВИДАЛЕННЯ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['spec_id'] . '</td>';
    echo '<td>' . $row['spec_code'] . '</td>';
    echo '<td>' . $row['spec_name'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_data.php?del=".$row["spec_id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");

// Закриваємо з'єднання 
mysql_close();
 
/* Виводимо кнопку повернення */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href='index.html'><button class='back'>НАЗАД</button></a></div>");
 
?>