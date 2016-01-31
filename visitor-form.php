<?php

// ziyaretçi soruları yanıtladıktan sonra sonucu görmeden önce kendisinin bilgilerini isteyeceğiz

// daha önce giriş yaptıysa form alanları bu bilgilerle dolu gelmeli
include "inc/header.php";
?>
	<h1>Çok az kaldı!</h1>
	<p>Testi tamamladınız. Sonuçlarınızı görebilmek için lütfen bilgilerinizi girin.</p>
	<form action="result.php" method="post">
		Adınız: <input name="name" type="text" required><br>
		E-Postanız: <input name="email" type="email" required><br>
		Telefonunuz: <input name="phone" type="tel" required><br>
		<input type="submit" value="Sonucumu Göster!">
	</form>
<?php include("inc/footer.php"); ?>