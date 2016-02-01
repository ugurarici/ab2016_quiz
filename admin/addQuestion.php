<?php


//buraya yeni soru için form gelsin
// form geldiyse yenisini eklesin

if($_POST){
	die(var_dump($_POST));
}

?>
<meta charset="utf-8">
<form action="" method="post">
Soruyu yazınız:<br>
	<input name="question"><br>
	Seçenekleri yazınız ve doğru olanın başındaki topa tıklayınız.<br>
	<?php for($i=1;$i<=4;$i++): ?>
		<input type="radio" name="correctAns" value="<?=$i?>">&nbsp;<input type="text" name="answer[<?=$i?>]"><br>
	<?php endfor; ?>
	<input type="submit" value="Ekle">
</form>