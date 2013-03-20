<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>-</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <style>
      *{
        margin:0;
        padding:0;
      }
      body{
        font-family: Verdana, Tahoma, "Myriad Pro", Arial, sans-serif;
        font-size:11px;
        /*background:#f4f4f4 url(./images/bg.gif) repeat top left;*/
        color:#333;
        text-shadow:1px 1px 1px #fff;
        /*overflow-y:scroll;*/
      }
      h1{
        font-size:56px;
      }
      h2{
        font-size:20px;
        padding:0px 0px 40px 0px;
        color:#aaa;
      }
      h2 span{
        color:#ffa800;
      }
      a{
        color:#777;
      }
      a:hover{
        color:#222;
      }
      p{
        padding:5px 0px;
      }
      .wrapper{
        margin:20px auto;
        /*width:960px;
        min-height:550px;*/
      }
      .box{
        width:49%;
      }
      .left{
        float:left;
      }
      .right{
        float:right;
      }
      .clear{
        clear:both;
      }
      a.back{
        color:#777;
        position:fixed;
        top:5px;
        right:10px;
        text-decoration:none;
      }
      /* Form Style */
      form {
        -webkit-border-radius: 10px;
        border-radius: 10px;
      }
      .form_wrapper{
        background:#fff;
        border:1px solid #ddd;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        margin:0 auto;
        width:300px;
        font-size:14px;
        -moz-box-shadow:1px 1px 7px #ccc;
        -webkit-box-shadow:1px 1px 7px #ccc;
        box-shadow:1px 1px 7px #ccc;
      }
      .form_wrapper h3{
        padding:20px 30px 20px 30px;
        background-color:#444;
        color:#fff;
        font-size:25px;
        border-bottom:1px solid #ddd;
      }
      .form_wrapper form{
        display:none;
        background:#fff;
      }
      .form_wrapper .column{
        width:47%;
        float:left;
      }
      form.active{
        display:block;
      }
      form.login{
        width:300px;
      }
      form.register{
        width:550px;
      }
      form.forgot_password{
        width:300px;
      }
      .form_wrapper a{
        text-decoration:none;
        color:#777;
        font-size:12px;
      }
      .form_wrapper a:hover{
        color:#000;
      }
      .form_wrapper label{
        display:block;
        padding:10px 30px 0px 30px;
        /*margin:10px 0px 0px 0px;*/
      }
      .form_wrapper input[type="text"],
      .form_wrapper input[type="password"]{
        border: solid 1px #E5E5E5;
        background: #FFFFFF;
        margin: 5px 30px 0px 30px;
        padding: 3px;
        display:block;
        font-size:14px;
        width:76%;
        background: 
          -webkit-gradient(
            linear,
            left top,
            left 25,
            from(#FFFFFF),
            color-stop(4%, #EEEEEE),
            to(#FFFFFF)
          );
        background: 
          -moz-linear-gradient(
            top,
            #FFFFFF,
            #EEEEEE 1px,
            #FFFFFF 25px
            );
        -moz-box-shadow: 0px 0px 8px #f0f0f0;
        -webkit-box-shadow: 0px 0px 8px #f0f0f0;
        box-shadow: 0px 0px 8px #f0f0f0;
      }
      .form_wrapper input[type="text"]:focus,
      .form_wrapper input[type="password"]:focus{
        background:#feffef;
      }
      .form_wrapper .bottom{
        background-image: url(./images/latih-tempur-adas.jpg);
        background-color:#444;
        border-top:1px solid #ddd;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin-top:10px;
        clear:both;
        color:#fff;
        opacity: 0.9;
        text-shadow:1px 1px 1px #000;
      }
      .form_wrapper .bottom a{
        display:block;
        clear:both;
        padding:10px 30px;
        text-align:right;
        color:#ffa800;
        text-shadow:1px 1px 1px #000;
      }
      .form_wrapper a.forgot{
        float:right;
        font-style:italic;
        line-height:24px;
        color:#ffa800;
        text-shadow:1px 1px 1px #fff;
      }
      .form_wrapper a.forgot:hover{
        color:#000;
      }
      .form_wrapper div.remember{
        float:left;
        width:250px;
        margin:20px 0px 0px 30px;
        font-size:11px;
      }
      .form_wrapper div.remember input{
        float:left;
        margin:2px 5px 0px 0px;
      }
      .form_wrapper span.error{
        color:red;
        font-size:11px;
        font-style:italic;
        display:none;
        margin:4px 30px;
      }
      .form_wrapper input[type="submit"] {
        background: #e3e3e3;
        border: 1px solid #ccc;
        color: #333;
        font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
        font-size: 14px;
        font-weight: bold;
        padding: 8px 0 9px;
        text-align: center;
        width: 120px;
        cursor:pointer;
        float:right;
        margin:15px 20px 20px 10px;
        text-shadow: 0px 1px 0px #fff;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -moz-box-shadow: 0px 0px 2px #fff inset;
        -webkit-box-shadow: 0px 0px 2px #fff inset;
        box-shadow: 0px 0px 2px #fff inset;
      }
      .form_wrapper input[type="submit"]:hover {
        background: #d9d9d9;
        -moz-box-shadow: 0px 0px 2px #eaeaea inset;
        -webkit-box-shadow: 0px 0px 2px #eaeaea inset;
        box-shadow: 0px 0px 2px #eaeaea inset;
        color: #222;
      }
      form h3 {
        background: url(./images/konvoi-ad-ss.jpg);
        opacity: 0.8;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
      }
      .vegas-background {
        image-rendering: optimizeQuality;
        -ms-interpolation-mode: bicubic;
        z-index: -2;
        opacity:0.3;
      }
      img {
        border: 0;
      }
      .vegas-overlay {
        background-image: url(./images/bg-pattern.png);
        z-index: -1;
        opacity:0.3;
      }
      .mlink {
        font-family: 'Bebas Neue','Arial Narrow', Arial, sans-serif;
        font-size:18px;
        text-transform: uppercase;
        font-weight: normal;
        white-space: nowrap;
        color: white;
        text-decoration: none;
        margin: 0px 20px;
        text-shadow: 0px 1px 1px gray;
        outline: none;
        float:right;
      }
      a.mlink:hover {
        color: gold;
      }
    </style>
    <link rel="stylesheet" href="./themes/patri/jquery-ui-1.8.14.custom.css">
    <script src="./js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
      $(window).resize(function(){
        var content = $('.content'),
          ww = $(window),
          l = (ww.width() - content.outerWidth())/2,
          t = (ww.height() - content.outerHeight())/2;
        content.css({left: l, top: t, position: 'absolute'});
		
      });

 $(function() {
        $('#form_wrapper').find('input[type=""]')
          .click(function(e){
            e.preventDefault();
            $.ajax({
              url: 'checkuser.php',
              type: 'post',
              data: $('#login').serialize(),
              success: function(data) {
                if (data == 'login') {
                  window.location.href = 'index.php';
                } else {
                  $('.error').text('Error! Login tidak dikenali/tidak aktif.').show();
                  setTimeout(function() { $('.error').text('').hide(); }, 2500);
                }
              }
            });
          });
        
        $(window).resize();
      });
    </script>
	<script language="javascript">
		  var text_username = 'Username Tidak Boleh Kosong!';
		  var text_password = 'Password Tidak Boleh Kosong!';

		  var cancel_url = '';
		  function checkValues(){
		  // javascript checks deactivated
		    if (document.getElementById('txtUsername').value.length < 1) {
	        alert(text_username);
	        document.getElementById('txtUsername').focus();
	        return false;
	  	  }
    
	  	  if (document.getElementById('txtPassword').value.length < 1) {
	  	      alert(text_password);
	  	      document.getElementById('txtPassword').focus();
	  	      return false;
	  	  }
	  	  return true;
	  	}
	  </script>
  </head>
  <body>

    <div class="wrapper">
      <!--h1 style='margin-bottom:100px;font-size:40px;'>SISTEM INFORMASI PEMBEKALAN ANGKUTAN TNI AD</h1-->
      <div class="content" style='width:302px'>
        <div id="form_wrapper" class="form_wrapper">
          <form class="login active" name="masuk" action="redirect.php" method="post"  onSubmit="javascript:return checkValues();">
            <h3>&nbsp;</h3>
            <div>
              <label>Username:</label>
              <input id="txtUsername" name="txtUsername" type="text" />
            </div>
            <div>
              <label>Password:</label>
             <input id="txtPassword" name="txtPassword" type="password" />
            </div>
          
            <div class="bottom">
              <input type="submit" value="Login"></input>
              <div class="clear"></div>
            </div>
          </form>
          
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </body>
</html>
