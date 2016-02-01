

<meta charset="utf-8">
<?php

$con = new PDO("mysql:host=localhost;dbname=ab2016_quiz","root","root");
$con->exec("SET NAMES 'UTF8'");

foreach($con->query('SELECT * FROM questions') as $row) {
    echo $row['question'] . '<br/>';
}
?>
<a href="addQuestion.php">Yeni Soru Ekle</a>