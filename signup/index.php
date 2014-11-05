<?php include '../header.php'; ?>
	<div id="contents">
			<div class="inner">
				<h2>新規会員登録</h2>
				<div class="formarea">
					<form action="confirm.php">
						<ul>
							<li><p class="question">氏名<span class="attention">(必須)</span></p><p class="answer"><span class="half first"><span class="txt">性</span><input type="text"></span><span class="half"><span class="txt">名</span><input type="text"></span><span class="attention">英字のみ使用出来ます</span></p></li>
							<li><p class="question">ニックネーム</p><p class="answer"><input type="text"><span class="attention">英字のみ使用出来ます</span></p></li>
							<li><p class="question">E-mail<span class="attention">(必須)</span></p><p class="answer"><input type="text"></p></li>
							<li><p class="question">パスワード<span class="attention">(必須)</span></p><p class="answer"><input type="password"><span class="attention">8〜16文字で入力してください</span></p></li>
							<li><p class="question">パスワード<span class="attention">(確認・必須)</span></p><p class="answer"><input type="password"></p></li>
							<li><p class="kiyaku">※<a href="">利用規約</a>に同意の上、会員登録をお願いします。</p></li>
						</ul>
						<input type="submit" value="登録する">
					</form>
				</div>
			</div>
	</div>
	<!-- /#contents -->
<?php include '../footer.php'; ?>