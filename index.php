<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet"type="text/css"href="./css/style.css">
<title>ラーメン店アンケート</title>
</head>
<body>
<p>ラーメン店アンケート<br>
<form action="check.php" method="post">
 
	<p> <FONT COLOR="RED"> ※</FONT>は必須項目です<br>&nbsp;&nbsp;&nbsp;
	
	  <label for="myname">氏名<FONT COLOR="RED">※</FONT>：</label>
	  <input id="myname" type="text" name="myname" size="35" maxlength="255" value=""placeholder="全角１０文字まで">
	</p>

	<p>性別：<br>&nbsp;&nbsp;&nbsp;
		<input type="radio" name="gender" id="gender_male" value="male"checked="checked">
		<label for="gender_male">男性</label>
		<input type="radio" name="gender" id="gender_female" value="female">
		<label for="gender_female">女性</label>
	</p>

	<p>年齢<br>&nbsp;&nbsp;&nbsp;
	<select name="age" id="age">
	<?php
	   for($i=5;$i<=80;$i++){
	     print('<option value="'.$i.'">'.$i.'</option>');
	   }
	?>
	</select>歳
	</p>
	<p>郵便番号:<br>&nbsp;&nbsp;&nbsp;
	 〒<input type="text" id="postcode1" name="postcode1" maxlength="3"placeholder="3桁">
    <input type="text" id="postcode2" name="postcode2" maxlength="4"placeholder="4桁"><br />
    </p>
    <p>Eメールアドレス<FONT COLOR="RED">※</FONT>:<br>&nbsp;&nbsp;&nbsp;
    <input type="email" id="email"name="email"placeholder="半角で入力してください"><br>
    </p>

	<p>一番好きなラーメン<br>&nbsp;&nbsp;&nbsp;
	<select name="ramen" id="ramen">
	<?php
	  $ramens=array('醤油ラーメン','塩ラーメン','味噌ラーメン','豚骨ラーメン');
	  foreach($ramens as $ramen){
	  print('<option value="'.$ramen.'">'.$ramen.'</option>');
	  }
	  ?>
	  </select>
	  </p>

	<p>お好きなトッピング（複数選択可）;<br>&nbsp;&nbsp;&nbsp;
	
	<input type="checkbox"name="category[]"id="menma"value="メンマ">
	<label for="menma">メンマ</label>
	<input type="checkbox"name="category[]"id="tya"value="チャーシュー">
	<label for="tya">チャーシュー</label>
	<input type="checkbox"name="category[]"id="yaki" value="焼きのり">
	<label for="pet">焼きのり</label>
	<input type="checkbox"name="category[]"id="tama"value="煮玉子">
	<label for="tama">煮玉子</label>
	<input type="checkbox"name="category[]"id="negi"value="ネギ">
	<label for="negi">ネギ</label>
	</p>
	<p>ご意見・ご感想：<br  >&nbsp;&nbsp;&nbsp;
	<textarea name="kanso" rows="4" cols="40"placeholder='ご自由にお書きください'></textarea><br>
	<input type="submit" value="送信"><input type="reset" value="取消">
	</form>


	




