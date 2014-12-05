		<header id="common-header" class="cf">
			<div class="inner">
				<div id="logo">
					<a href="/">trippost</a>
				</div>
				<div id="nav">
					<div id="gnav">
						<ul class="nav-menu">
							<li class="nav-item"><a href="/search/index.php">検索</a></li>
							<?php include "include/gnav-member.php"; ?>
						</ul>
					</div>
				</div>
			</div>
			<?php if($body_class == 'home'): ?>
			<div id="mainVisual">
				<div class="inner">
					<div class="fl">
						<h2>キャッチコピーエリア</h2>
						<p>○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。○○○は旅行に興味を持っているユーザが、旅行をするまでの手助けをするサービスです。</p>
					</div>
					<div class="fr">
						<h2>新規ユーザ登録</h2>
						<a href="/signup/index.php">メールで登録</a>
						<a href="/signup/index.php">Instagramで登録</a>
					</div>
				</div>
			</div>
			<!-- #mainVisual -->
		<?php endif; ?>
		</header>