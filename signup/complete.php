<?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/function.php'); ?>
<!doctype html>
<html lang="ja-JP">

<head>
  <link rel="stylesheet" href="/css/megamenu.css">
  <link rel="stylesheet" href="/css/jquery-ui.min.css">
  <link rel="stylesheet" href="/css/exvalidation.css">
  <link rel="stylesheet" href="/css/common.css">
  <link rel="stylesheet" href="/css/layout.css">
  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />
  <meta name="description" content="">
  <title>test</title>
</head>

<body class="<?php echo($body_class); ?>">
  <div id="wrapper">
    <?php include($_SERVER[ 'DOCUMENT_ROOT'] . '/header.php'); ?>
    <div id="contents">
      <div class="inner">
       <section class="section">
         <h1 class="h1-ttl01"><img src="/images/signup_complete_h001.gif" alt="登録完了"></h1>
         <p class="txt-set01">会員登録が完了いたしました。</p>
         <div><a href="/mypage/index.php" class="link-set02">会員ページへ移動</a></div>
         <div><a href="/" class="link-set02">トップページへ移動</a></div>
       </section>
      </div>
    </div>
    <!-- /#contents -->
    <?php include '../footer.php'; ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/jquery-accessibleMegaMenu.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/style.js"></script>
    <div id="fb-root"></div>
    <script>
      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=212800035595968&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>