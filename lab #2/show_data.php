<link rel="stylesheet" type="text/css" href="base.css">
<?php 
	// підключаємо нашу базу даних
	include 'database.php';
  

//--STUDENTS---------------------------------------------------------------

    // вибираємо всі значання з таблиці "students"
    $qr_result = mysql_query("SELECT * FROM students;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці
  echo '<table class="students" border="1">';
  echo '<caption><b>СТУДЕНТИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID СТУДЕНТА</th>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>ПРІЗВИЩЕ</th>';
  echo '<th>ІМ`Я</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  echo '<a href="index.html"><button class="back">НАЗАД</button></a>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['student_id'] . '</td>';
    echo '<td>' . $data['group_id'] . '</td>';
    echo '<td>' . $data['student_surname'] . '</td>';
    echo '<td>' . $data['student_name'] . '</td>';
    echo '</tr>';
  }
  
    echo '</tbody>';
  echo '</table>';


//--GROUPS---------------------------------------------------------------

    // вибираємо всі значання з таблиці "groups"
    $qr_result = mysql_query("SELECT * FROM groups;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="groups" border="1">';
  echo '<caption><b>ГРУПИ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>НАЗВА ГРУПИ</th>';
  echo '<th>ID ГРУПИ</th>';
  echo '<th>ID СПЕЦІАЛЬНОСТІ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['group_name'] . '</td>';
    echo '<td>' . $data['group_id'] . '</td>';
    echo '<td>' . $data['spec_id'] . '</td>';
    echo '</tr>';
  }
  
  echo '</tbody>';
  echo '</table>';

//--SPECIALITIES---------------------------------------------------------------

    // вибираємо всі значання з таблиці "specialities"
    $qr_result = mysql_query("SELECT * FROM specialities;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="specialities" border="1">';
  echo '<caption><b>СПЕЦІАЛЬНОСТІ</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>ID СПЕЦІАЛЬНОСТІ</th>';
  echo '<th>КОД СПЕЦІАЛЬНОСТІ</th>';
  echo '<th>НАЗВА СПЕЦІАЛЬНОСТІ</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['spec_id'] . '</td>';
    echo '<td>' . $data['spec_code'] . '</td>';
    echo '<td>' . $data['spec_name'] . '</td>';
      
    echo '</tr>';
  }
    echo '</tbody>';
  echo '</table>';


    // закриваємо з'єднання с сервером бази даних
    mysql_close($connect_to_db);
?>

