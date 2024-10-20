<!DOCUTYPE HTML>
<html lang="ja">
	
<head>
 <meta charset="UTF-8">
 <title>お問い合わせフォームを作る</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<h1>お問い合わせフォーム</h1>
	<form method="post" action="mail_confirm.php">
		
		
	<div>
		<label>名前</label><br>
			<input type="text"  class="text" size="35" name="name"
			value= "<?php echo $_POST['name']; ?>">
	</div>
	
	<div>
		<label>メールアドレス</label><br>
			<input type="text" class="text" size="35" name="mail"
			value="<?php echo $_POST['mail']; ?>">
	</div>
		
	<div>
		<label>年齢</label><br>
		<select class="dropdown" name ="age">
			<option><?php echo $_POST['age']; ?></option>
				<script>
					for(var a = 1; a <= 80; a++) {
						document.write("<option value="+a+">"+a+"歳</option>");
					}
			</script>
		</select>
	</div> 
	
		
	<div>
	<label>コメント<br>
		<textarea rows="7" cols="35" name="comments" >
		<?php echo $_POST['comments']; ?>			
		</textarea>
	</div>
		
	<div>
		<input type="submit" class="submit" value="送信する">
	</div>

	
	</form>
		
</body>