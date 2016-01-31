<?php

// test sonuçlandığı zaman sonuç verilerini ve yeniden başlama butonunu gösterdiğimiz alandır
session_start();
include "inc/header.php";
?>
<h1>Sonucunuz</h1>
<p>
<strong>Toplam Soru:</strong> <?=$_SESSION['totalQuestionsCount']?><br>
	<strong>Doğru Yanıt:</strong> <?=$_SESSION['correctAnswersCount']?><br>
	<strong>Yanlış Yanıt:</strong> <?=($_SESSION['totalQuestionsCount']-$_SESSION['correctAnswersCount'])?><br>
	<strong>Süre:</strong> <?=($_SESSION['finishedAt']-$_SESSION['startedAt'])?>sn<br>
</p>
<p>
	Kendinizi yeniden test etmek için teste tekrar başlayabilirsiniz ;)kıps
</p>
<a href="destroy.php"><button>Tekrar Dene</button></a>
<?php include("inc/footer.php"); ?>