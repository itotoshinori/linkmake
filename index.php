<html lng="ja">
<head>
<meta charset="utf-8">
<title>リンク自動作成　入力画面</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<header>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
    	</button>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample1">
			<ul class="nav navbar-nav">
				<li><a href="https://guarded-spire-64417.herokuapp.com/">HP</a></li>
				<li><a href="http://titonet384.sakura.ne.jp/imagelink/">画像リンク</a></li>
				<li><a href="http://titonet384.sakura.ne.jp/uploads/">画像up</a></li>
        <li class="active"><a href="http://titonet384.sakura.ne.jp/linkmake/">リンクタグ</a></li>
        <li><a href="http://titonet384.sakura.ne.jp/mail/mail.html">メール</a></li>
			</ul>
		</div>
	</div>
</nav>
</header>
<body>
<center><h3>リンクタグ自動作成システム1</h3>
<br>
<form method="POST" action="urllink.php">
<table align="center">
<tr>
<td>リンクを表示する文字：</td>
<td><input type="text" name="linkname" size="30" /></td>
</tr>
<tr>
<td>URLを入力して下さい：</td>
<td><input type="text" name="url" size="30" /></td>
</tr>
<tr>    
<td colspan="2" aligin="right">
新しいタグで開く：
<input type="checkbox" name="newtag" value="1">
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="送信" />
<input type="reset" value="リセット" /></td>
</form>
</body>


</html>
