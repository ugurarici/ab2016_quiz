<?php

// Burası karşılama sayfası
// burada kullanıcıya karşılama mesajı, kaç soru yanıtlayacağı ve başlama butonunu göstereceğiz


include "inc/header.php";
require "inc/questions.php";
?>
	<h1>Quiz</h1>
	<p>Quiz sistemine hoşgeldin! Bu alanda 
	<?=count($questions)?> 
	soru göreceksin,<br>sonuçları görmeden önce bilgilerini girmen gerekeceğini unutma.</p>
	<p>Bol şans!</p>
	<a href="question.php"><button>Başla!</button></a>
<?php include("inc/footer.php"); ?>