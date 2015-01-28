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
          <h1 class="h1-ttl01"><img src="/images/signup_index_h001.gif" alt="新規会員登録"></h1>
          <p class="txt-set01"><a href="#">利用規約</a>に同意の上、会員登録をお願いします。<br><span class="req">※</span>印は入力必須項目になります。<br>既に会員の方は<a href="/login/">ログインページ</a>からログインしてください。</p>
          <div class="signup-form01">
            <form id="signup-form" action="confirm.php">
              <table>
                <tbody>
                  <tr>
                    <th>氏名<span class="req">※</span></th>
                    <td class="item2"><span class="last-name">性<input type="text" name="last_name" class="form-size01"></span><span class="first-name">名<input type="text" name="first_name" class="form-size01"></span></td>
                    <td class="item3"><span class="attention">半角英数字のみ使用出来ます</span></td>
                  </tr>
                  <tr>
                    <th>ニックネーム</th>
                    <td><input type="text" id="nickname" name="nickname" class="form-size02"></td>
                    <td><span class="attention">ニックネームを入力しない場合、画面には氏名が表示されます。</span></td>
                  </tr>
                  <tr>
                    <th>E-mail<span class="req">※</span></th>
                    <td><input type="text" id="email" name="email" class="form-size02"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>パスワード<span class="req">※</span></th>
                    <td><input type="password" id="password" name="password" class="form-size02"></td>
                    <td><span class="attention">半角英数字8〜16文字で入力してください。</span></td>
                  </tr>
                  <tr>
                    <th>再入力<span class="req">※</span></th>
                    <td><input type="password" id="repass" name="repass" class="form-size02"></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <div class="btngroup"><input class="btn07" type="submit" value="入力内容を送信"></div>
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
    <script src="/js/exvalidation.js"></script>
    <script src="/js/exchecker-ja.js"></script>
    <script src="/js/validation.js"></script>
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