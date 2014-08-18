		<header id="common-header" class="cf">
			<div class="inner">
				<div id="logo">
					<a href="/0817/">タイトル</a>
				</div>
				<div id="nav">
					<div id="gnav">
						<ul>
							<li><a href="./cities/">カテゴリ</a></li>
							<li><a href="./search/">検索</a></li>
							<?php if(isset($_SESSION['user'])): ?>
							<li><a href="./logout.php">ログアウト</a></li>
							<?php else: ?>
							<li><a href="/0817/login/">ログイン</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<?php if('www.'.$_SERVER['HTTP_HOST'].'/0817/' == SITE_URL && !isset($_SESSION['user'])): ?>
			<div id="mainVisual">
				<div class="inner">
					<div class="fl">
						<h2>キャッチコピーエリア</h2>
						<p>○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。</p>
					</div>
					<div class="fr">
						<h2>新規ユーザ登録</h2>
						<a href="./signup/">メールで登録</a>
						<a href="./login-by-insta.php">Instagramで登録</a>
					</div>
				</div>
			</div>
			<!-- #mainVisual -->
		<?php endif; ?>
		</header>
				