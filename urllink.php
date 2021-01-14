<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>リンク自動作成結果</title>
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
<?php
  $linkname=$_POST["linkname"];
  $url=$_POST["url"];
  $newtag=$_POST["newtag"];
  if($newtag=="1"){
    $tag="<a href=\"{$url}\" target=\"_blank\">{$linkname}</a>";
  } 
  else{
    $tag="<a href=\"{$url}\">{$linkname}</a>";
  }
  $tag=htmlentities($tag, ENT_QUOTES, 'UTF-8');
?>
<center><h2>リンクタグ自動作成システム結果</h2>
<table>
<p><div id="hoge"><?php echo $tag ?></div></p>
<p><button onclick="copyText()">タグをコピー</button></p>
<p><A HREF="javascript:history.back()">前のページに戻る</A></p>
</table>
</center>
 
<script>
   function copyText(){
       var ta = document.createElement("textarea")
       ta.value = document.getElementById("hoge").innerText;
       document.body.appendChild(ta)
       ta.select()
       document.execCommand("copy")
       ta.parentElement.removeChild(ta)
   }
   </script>
</body>
</html>

