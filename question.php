<?php

// burası soru sayfası
// kullanıcı geldiğinde sıradaki soruyu seçip göstereceğiz


// kişi geldiğinde
	// ilk defa mı geliyor?
		// başlangıç işlemlerini yap
		// ilk soruyu göster
	// önceki sorudan mı geliyor
		// gelen sorunun yanıtını kontrol et
		// sonraki soruyu göster
	// sonuçtan tekrar için mi geliyor
		// ilk defa geliyormuş gibi yap

// ilk çalıştırma için ayarlar
// oturum başlatacağız
session_start();
require "inc/questions.php";

if( ! isset($_SESSION['isStarted'])):
	$_SESSION['totalQuestionsCount'] = count($questions);
	$_SESSION['answeredQuestionsCount'] = 0;
	$_SESSION['correctAnswersCount'] = 0;
	$_SESSION['isStarted'] = true;
	$_SESSION['startedAt'] = time();
endif;



// gelen yanıtı kontrol et
if(isset($_POST['answer'])){
	if($questions[$_SESSION['answeredQuestionsCount']]['answer'] == $_POST['answer']){
		// yanıt doğruymuş, doğru sayısını arttır
		$_SESSION['correctAnswersCount']++;
	}
	if(($_SESSION['answeredQuestionsCount']+1)==$_SESSION['totalQuestionsCount']){
		$_SESSION['finishedAt'] = time();
		header("Location: result.php");
		return;
	}
	$_SESSION['answeredQuestionsCount']++;
}



// aktif soruyu çekelim
$activeQuestion = $questions[$_SESSION['answeredQuestionsCount']];

include "inc/header.php";
?>
<form action="question.php" method="post">
	<h1>Soru 
	<?=$_SESSION['answeredQuestionsCount']+1?>
	</h1>
	<p><?=$activeQuestion['question']?></p>
	<ul>
		<?php
		foreach ($activeQuestion['options'] as $key => $option):?>
		<input value="<?=$key?>" name="answer" type="radio"> <?=$option?><br>
		<?php endforeach; ?>
	</ul>
<input type="submit" value="Yanıtla">
</form>
<?php include("inc/footer.php"); ?>