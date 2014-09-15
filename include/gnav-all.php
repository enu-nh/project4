<?php if($body_class !== 'home'): ?>
<li class="nav-item"><a href="<?php echo $home_url."/signup/index.php"; ?>">サインアップ</a></li>
<?php endif; ?>
<li class="nav-item">
	<a href="">ログイン</a>
	<div class="cities-menu sub-nav">
		<div class="cities-list sub-nav-group">
			<h3>メールアドレス</h3>
			<p><input type="text" value="" ></p>
			<h3>パスワード</h3>
			<p><input type="text" value="" ></p>
		</div>
		<div class="cities-list sub-nav-group">
			<p><input type="submit"></p>
		</div>
	</div>
</li>