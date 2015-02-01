$(function () {
  var validation1 = $("#signup-form").exValidation({
      // それぞれの項目に「class="chkrequired chkkatakana"」のように記述しているのと同じことをしています。
      rules: {
        last_name: "chkrequired chknochar chkmax10",
        first_name: "chkrequired chknochar chkmax10",
        nickname: "chkhankaku chknochar chkmax20",
        name_: "laterCall",
        email: "chkrequired chkemail chkhankaku",
        password: "chkrequired chknochar chkmin8 chkmax16",
        repass: "chkrequired chkretype-password"
      },
      customListener: "blur", // onBlur時のみにしてみる
      stepValidation: true,
      errTipCloseBtn: false,
      errTipPos: "left", // 吹き出しが表示される位置（左右）
      errHoverHide: true, // マウスオーバーで消える
      scrollToErr: true // 
    });
});