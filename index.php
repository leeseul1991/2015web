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
    <div class="img1">
      <h1 align="center" style="color: #de6c00;"><br>
        현재 대기인원 </h1>
      <br>
      <br>
      <br>
      <div class="read_more"><a href="video.php" target="_self">확인하기</a></div>
    </div>
    <div id="ninja-slider">
      <ul>
        <li>
          <div data-image="slider/img/lg/kut.png"></div>
        </li>
        <li>
          <div data-image="slider/img/lg/view.png"></div>
        </li>
        <li>
          <div data-image="slider/img/lg/dasan.png"></div>
        </li>
        <li><a data-image="slider/img/lg/damhun.png" href="#"></a></li>
      </ul>
    </div>
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
