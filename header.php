<header id="common-header" class="cf">
  <div id="logo">
    <a href="/"><img src="/images/img_logo.gif" alt="Trippost"></a>
  </div>
  <nav class="gnav type-on">
    <ul>
      <li class="menu-search"><a href="/search/">コンテンツを探す</a></li><li class="menu-posts"><a href="/posts/add.php">コンテンツを投稿</a></li><li class="menu-my"><a href="/mypage/">マイページ</a></li><li class="menu-out"><a href="#" title="ログアウト"><img src="/images/bg_gnav_04.gif" alt="ログアウト"></a></li>
    </ul>
  </nav>
  <nav class="gnav type-off">
    <ul>
      <li class="menu-search"><a href="/search/">コンテンツを探す</a></li><li class="menu-posts"><a href="/posts/add.php">コンテンツを投稿</a></li><li class="menu-my"><a href="/mypage/">マイページ</a></li><li class="menu-in"><a href="#">ログイン</a></li>
    </ul>
  </nav>
  <?php if($body_class=='home' ): ?>
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