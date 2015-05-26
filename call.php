<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densitydpi=medium-dpi;" />
<title>KUTBUS</title>
<link rel="stylesheet" href="src/jquery.mobile-1.4.5.min.css" />
<script src="src/jquery-1.11.1.min.js"></script>
<script src="src/jquery.mobile-1.4.5.min.js"></script>
<script src="slider/ninja-slider.js" type="text/javascript"></script>
<link href="slider/ninja-slider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="src/style.css" />
<link rel="stylesheet" type="text/css" href="src/help_style.css" />
<link rel="stylesheet" type="text/css" href="src/snap.css" />
<link rel="stylesheet" type="text/css" href="src/assets/demo.css" />
<script src="src/snap.js"></script>
</head>

<body>
<div id="content" class="snap-content">
  <div data-role="header">
    <div id="top_login">
      <?
    if(!$userid)
	{
?>
      <a href="./login/login_form.php">로그인</a> | <a href="./member/member_form.php">회원가입</a>
      <?
	}
	else
	{
?>
      <?=$usernick?>
      (level:
      <?=$userlevel?>
      ) | <a href="./login/logout.php">로그아웃</a> | <a href="./login/member_form_modify.php">정보수정</a>
      <?
	}
?>
    </div>
    <table width="100%" class="main_table">
      <tr>
        <td width="5%" align="left"><div id="toolbar"> <a href="#" id="open-left"></a></div></td>
        <td width="*" align="center" valign="bottom"><a href="index.php" target="_self">
          <h1>KUTBUS</h1>
          </a></td>
      </tr>
    </table>
    <nav data-role="navbar">
      <ul >
        <li><a href="book.php" target="_self"><img src='image/icon/menu1.png' 
				onmouseover="this.src='image/icon/menu1.png';" 
				onmouseout="this.src='image/icon/menu1.png';" /></a></li>
        <li><a href="howmany.php" target="_self"><img src='image/icon/menu2.png' 
				onmouseover="this.src='image/icon/menu2.png';" 
				onmouseout="this.src='image/icon/menu2.png';" /></a></li>
        <li><a href="time.php" target="_self"><img src='image/icon/menu3.png' 
				onmouseover="this.src='image/icon/menu3.png';" 
				onmouseout="this.src='image/icon/menu3.png';" /></a></li>
        <li><a href="call.php" target="_self"><img src='image/icon/menu4.png' 
				onmouseover="this.src='image/icon/menu4.png';" 
				onmouseout="this.src='image/icon/menu4.png';" /></a></li>
      </ul>
    </nav>
  </div>
  <div data-role="content"> 
    <!--
		<div class="help_menu">
			<div class="help_notice">
				<ul>
				<li><a href="time.php" data-rel="dialog">1. 공지사항</a></li>
				<li><a href="time.php" data-rel="dialog">2. QnA</a></li>
				<li><a href="time.php" data-rel="dialog">3. FAQ</a></li>
				</ul>
			</div>
		</div>
        -->
    <div class="help_icon">

      <h1>병천 콜밴</h1>
      <a href="tel:041-564-8254" target="_parent"><img src="image/icon2/call.png" ></a> <a href="mms:041-564-8254" target="_parent"><img src="image/icon2/mail.png"></a> <img src="image/icon2/map.png" onclick="showDialog()">
      <dialog id="myDialog">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.3149169445965!2d127.28233056085209!3d36.76301204323244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b2ac6c614c717%3A0x820bda83618bd53b!2z7ZWc6rWt6riw7Iig6rWQ7Jyh64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1417965742682" width="300" height="300" frameborder="0" style="border:0"></iframe>
      </dialog>
      <script type="text/javascript" 
			src="//apis.daum.net/maps/maps3.js?apikey=3304223ceba7bdfd5565704ed05bfe8fd75cb11c"></script> 
      <script>
				var container = document.getElementById('map');
				var options = {
					center: new daum.maps.LatLng(36.761082, 127.297390),
					level: 3
				};
			
				var map = new daum.maps.Map(container, options);
			</script> 
      <script>
				var x = document.getElementById("myDialog");
				function showDialog() { 
					x.show(); 
				} 
				function closeDialog() { 
					x.close(); 
				} 
			</script> 



      <h1>아우내 콜밴</h1>
      <a href="tel:080-088-5588" target="_parent"><img src="image/icon2/call.png" ></a> <a href="mms:080-088-5588" target="_parent"><img src="image/icon2/mail.png"></a> <img src="image/icon2/map.png" onclick="showDialog()">
      <dialog id="myDialog">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.3149169445965!2d127.28233056085209!3d36.76301204323244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b2ac6c614c717%3A0x820bda83618bd53b!2z7ZWc6rWt6riw7Iig6rWQ7Jyh64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1417965742682" width="300" height="300" frameborder="0" style="border:0"></iframe>
      </dialog>
      <script type="text/javascript" 
			src="//apis.daum.net/maps/maps3.js?apikey=3304223ceba7bdfd5565704ed05bfe8fd75cb11c"></script> 
      <script>
				var container = document.getElementById('map');
				var options = {
					center: new daum.maps.LatLng(36.854994, 127.264592),
					level: 3
				};
			
				var map = new daum.maps.Map(container, options);
			</script> 
      <script>
				var x = document.getElementById("myDialog");
				function showDialog() { 
					x.show(); 
				} 
				function closeDialog() { 
					x.close(); 
				} 
			</script> 



      <h1>승천 콜밴</h1>
      <a href="tel:080-558-8282" target="_parent"><img src="image/icon2/call.png" ></a> <a href="mms:080-558-8282" target="_parent"><img src="image/icon2/mail.png"></a> <img src="image/icon2/map.png" onclick="showDialog()">
      <dialog id="myDialog">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.3149169445965!2d127.28233056085209!3d36.76301204323244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b2ac6c614c717%3A0x820bda83618bd53b!2z7ZWc6rWt6riw7Iig6rWQ7Jyh64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1417965742682" width="300" height="300" frameborder="0" style="border:0"></iframe>
      </dialog>
      <script type="text/javascript" 
			src="//apis.daum.net/maps/maps3.js?apikey=3304223ceba7bdfd5565704ed05bfe8fd75cb11c"></script> 
      <script>
				var container = document.getElementById('map');
				var options = {
					center: new daum.maps.LatLng(36.777754, 127.196074),
					level: 3
				};
			
				var map = new daum.maps.Map(container, options);
			</script> 
      <script>
				var x = document.getElementById("myDialog");
				function showDialog() { 
					x.show(); 
				} 
				function closeDialog() { 
					x.close(); 
				} 
			</script> 


    </div>



<!--
    <div class="help_icon">
      <h1>SNS</h1>
      <a target="blank" id="sns_twitter" href="http://twitter.com/share" title="트위터에 이 페이지 공유하기"><img src="image/icon2/twt.png"></a> <a target="blank" id="sns_facebook" href="http://www.facebook.com/share.php" title="페이스북에 이 페이지 공유하기"><img src="image/icon2/fb.png"></a> <a target="blank" id="sns_me2day" href="http://me2day.net/posts/new" title="미투데이에 이 페이지 공유하기"><img src="image/icon2/kakao.png"></a> </div>
--!>
  </div>





  <div class="mypage_footer">
    <table width="100%" height="40px">
      <tr>
        <td width="35%" valign="top"><h1>KUTBUS </h1></td>
        <td width="*" valign="middle"><span>개인정보 처리방침 | 이용약관 | 제휴문의</span></td>
      </tr>
    </table>
    <p style="padding-left: 20px;"> 대표: 이슬<br>
      사업자등록번호: 123-45-678910<br>
      통신판매업 신고번호: 충남천안 제 2014-127호<br>
      주소: 730-360 충청남도 천안시 동남구 병천면 충절로 1600<br>
    </p>
    <span style="font-size: 9px">Copyrightⓒ 2001 Lee Seul / Yun Jinok. All rights reserved.</span> </div>
</div>
<div class="snap-drawers">
  <div class="snap-drawer snap-drawer-left">
    <div align="center" style="padding:30px"> <a href="index.php" target="_self"><img src="image/kutbus_logo.png"></a></div>
    <h4>메뉴</h4>
    <ul>
      <li><a href="book.php" target="_self">수요조사</a></li>
      <li><a href="howmany.php" target="_self">대기인원</a></li>
      <li><a href="time.php" target="_self">버스시간표</a></li>
      <li><a href="call.php" target="_self">콜밴</a></li>
    </ul>
  </div>
</div>
<script type="text/javascript" src="src/snap.js"></script> 
<script type="text/javascript" src="src/assets/demo.js"></script> 
<script type="text/javascript">
			var snapper = new Snap({
				element: document.getElementById('content'),
				disable: 'right'
			});
	</script>
</body>
</html>
