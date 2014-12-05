<?php include(dirname(__FILE__)."/../include/config.php"); ?>
<!doctype html>
<html lang="ja-JP">
<head>
<link rel="stylesheet" href="../css/common.css">
<meta charset="UTF-8">
<meta name="description" content="">
<title>test</title>
</head>
<body class="<?php echo $body_class; ?>">
<?php include('../include/header.php'); ?>
<div id="contents">
  <div class="inner">
    <div class="login-box">
    <form action="login-by-email.php" method="post">
      <table>
        <tr>
          <th>E-mail</th>
          <td><input type="text" name="email"></td>
        </tr>
        
          <th>パスワード</th>
          <td><input type="password" name="password"></td>
      </table>
      <input type="submit" name="email-login" value="ログイン" class="btnGreen">
    </form>
    </div>
  </div>
</div>
<?php include('../include/footer.php'); ?>
</body>
</html>