<?php include '../header.php'; ?>
	<div id="contents">
			<div class="inner">
				<h2>新規会員登録</h2>
				<div class="formarea">
					<form action="complete.php">
						<ul>
							<li><p class="question">氏名</p><p class="answer">入力した内容</p></li>
							<li><p class="question">E-mail</p><p class="answer">入力した内容</p></li>
							<li><p class="question">パスワード</p><p class="answer">入力した内容</p></li>
							<li><p class="question">パスワード（確認）</p><p class="answer">入力した内容</p></li>
							<li><p class="confirm">入力いただいた情報に問題がなければ登録を完了してください</p></li>
						</ul>
						
						<p class="fl"><a href="index.php" class="return">修正</a></p>
						<p class="fl"><input type="submit" value="完了"></p>
					</form>
				</div>
			</div>
	</div>
	<!-- /#contents -->
	<?php include '../footer.php'; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo $home_url; ?>js/jquery-accessibleMegaMenu.js"></script>
	<script src="<?php echo $home_url; ?>js/jquery-ui.min.js"></script>
	<script src="<?php echo $home_url; ?>js/style.js"></script>
</body>
</html>