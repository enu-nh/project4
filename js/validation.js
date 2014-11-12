$(function () { 
  $('#passwd1').passStrengthify();
  $('.passwd1').passStrengthify({
    minimum: 8
  });
  $('#passwd3').passStrengthify({
    levels: ['', 'Bad', 'Okay', 'Good'],
    colours: ['black', 'pink', '#A26FFF', 'orange'],
    tests: [/.{1}/, /.{5}/, /.{10}/]
  });
  $('#passwd4').passStrengthify({
    element: $('#out')
  });
  $('#passwd5').passStrengthify({
    security: 0,
    rawEntropy: true
  });
  $('#passwd6').passStrengthify({
    security: 2,
    rawEntropy: true
  });
  $('#passwd7').passStrengthify({
    minimum: 5,
    labels: {
      passwordStrength: 'パスワード強度'
    }
  });
  
  var validation = $("#signup-form")
		.exValidation({
		    // それぞれの項目に「class="chkrequired chkkatakana"」のように記述しているのと同じことをしています。
			rules: {
				last_name: "chkrequired chknochar",
                first_name: "chkrequired chknochar",
                nickname: "chkhankaku chknochar",
				name_: "laterCall",
				email: "chkrequired chkemail chkhankaku",
                password: "chkrequired chknochar chkmin8 chkmax16",
                repass: "chkrequired chkretype-password"
			},
			customListener: "blur", // onBlur時のみにしてみる
			stepValidation: true,
			errTipCloseBtn: false,
			errTipPos: "left",  // 吹き出しが表示される位置（左右）
			errHoverHide: false, // マウスオーバーで消える
			scrollToErr: true   // 
		});
});