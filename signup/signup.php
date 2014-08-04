<?php include '../header.php'; ?>
	<div id="contents">
			<div class="inner">
				<h2>新規会員登録</h2>
				<div class="err">
					<h3>入力内容をご確認ください</h3>
					<p>氏名が入力されていません</p>
					<p>E-mailが入力されていません</p>
					<p>パスワードが入力されていません</p>
					<p>パスワードが一致しません</p>
					<p>生年月日が入力されていません</p>
					<p>性別が入力されていません</p>
				</div>
				<div class="formarea">
					<form action="">
						<ul>
							<li><p class="question">氏名</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">E-mail</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">パスワード</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">パスワード（確認）</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">生年月日</p><p class="answer"><input type="text"></p></li>
							<li><p class="question">性別</p><p class="answer"><input type="radio" name="sex" value="男性" id="signup_men"><label for="signup_men">男性</label><input type="radio" name="sex" value="女性" id="signup_women"><label for="signup_women">女性</label></p></li>
							<li><p class="kiyaku">※<a href="">利用規約</a>に同意の上、会員登録をお願いします。</p></li>
						</ul>
						
						<input type="button" value="登録する">
					</form>
				</div>
			</div>
	</div>
	<!-- /#contents -->
<?php include '../footer.php'; ?>