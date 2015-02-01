<?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/function.php'); ?>
<!doctype html>
<html lang="ja-JP">
  <head>
    <link rel="stylesheet" href="/css/megamenu.css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/exvalidation.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/js/themes/default.css">
    <link rel="stylesheet" href="/js/themes/default.date.css">
    <link rel="stylesheet" href="/js/themes/default.time.css">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex" />
    <meta name="description" content="">
    <title>test</title>
  </head>
<body class="<?php echo $body_class; ?>">
<div id="wrapper">
<?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/header.php'); ?>
<div id="contents">
  <div class="inner">
    <section class="section">
      <h1 class="h1-ttl01"><img src="/images/login_h001.gif" alt="ログイン"></h1>
      <p class="txt-set01">既に会員の方はこちらからログインしてください。会員でない方は<a href="#">新規会員登録ページ</a>で会員登録をお願いいたします。</p>
      <div class="login-box">
        <form action="login-by-email.php" method="post" id="login-form">
          <table>
            <tr>
              <th>E-mail</th>
              <td><input type="text" name="email" id="email"></td>
              <th>パスワード</th>
              <td class="last"><input type="password" name="password" id="password"></td>
            </tr>
          </table>
          <div class="btngroup"><input type="submit" name="email-login" value="ログイン" class="btn07"></div>
        </form>
      </div>
    </section>
  </div>
</div>
<?php include '../footer.php'; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/jquery-accessibleMegaMenu.js"></script>
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/exvalidation.js"></script>
  <script src="/js/exchecker-ja.js"></script>
  <script src="/js/validation.js"></script>
<script src="/js/style.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=212800035595968&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>