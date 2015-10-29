<meta charset="UTF-8">
<?php
include ('database.php');

 $spec_id = $_POST['spec_id'];
 $spec_code = $_POST['spec_code']; 
 $spec_name = $_POST['spec_name']; 

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO specialities(spec_id, spec_code, spec_name)
 VALUES("'.$spec_id.'", "'.$spec_code.'", "'.$spec_name.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_specialities.html"><button>Внести ще один предмет</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
