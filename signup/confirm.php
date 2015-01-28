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
          <h1 class="h1-ttl01"><img src="/images/signup_confirm_h001.gif" alt="内容確認"></h1>
          <p class="txt-set01">入力いただいた情報に問題がなければ登録を完了してください。</p>
          <div class="signup-form01">
            <form id="signup-form" action="confirm.php">
              <table>
                <tbody>
                  <tr>
                    <th>氏名</th>
                    <td class="item2"><span class="last-name">京都</span><span class="first-name">太郎</span>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>ニックネーム</th>
                    <td>
                      ニックネームに入力したテキスト
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>E-mail</th>
                    <td>
                      kyoto.daisuki@kyoto.jp
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>パスワード</th>
                    <td>xmxm8QjP</td>
                    <td>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="btngroup">
                <a href="#" class="btn07">内容修正</a>
                <input class="btn07" type="submit" value="登録完了">
              </div>
            </form>
          </div>
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