<meta charset="UTF-8">
<?php
include ('database.php');

 $group_id = $_POST['group_id'];
 $group_name = $_POST['group_name']; 
 $spec_id = $_POST['spec_id']; 

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO groups(group_id, group_name, spec_id)
 VALUES("'.$group_id.'", "'.$group_name.'", "'.$spec_id.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_groups.html"><button>Внести ще один предмет</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Занести дані в іншу таблицю</button></a></b></p></center>';
echo '<center><p><b><a href="index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
