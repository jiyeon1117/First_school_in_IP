<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>첫 등교는 ip로!</title>
  <script src="js/header-color-change.js"></script>
  <script src="js/click_btn.js"></script>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="css/QandA.css">
  <link rel="stylesheet" href="css/Qw.css">
  <link rel="stylesheet" href="css/QnA.css">
  <link rel="shortcut icon" href="images/web_logo.png">
</head>

<body>
  <div class="container">
    <aside id="aisdeLeft"></aside>
    <section id="section">
      <div class="navbar">
        <!-- 로고 -->
        <a href="index.html"><img class="logo-image" src="images/logo.png"></a>
        <div class="leftmenu">
          <div class="tab">
            <li class="menu"><a href="roadview.html">로드뷰</a></li>
            <li class="menu"><a href="map.html">교무실 맵</a></li>
            <li class="menu"><a href="QandA.html" id="click">Q&A</a></li>
          </div>
        </div>
      </div>
    </section>
    <aside id="aisdeRight"></aside>
  </div>

  <!-- 배너 -->
  <img id="banner" src="images/small-banner.jpg">
  <p class="small-banner-title">Q & A</p>
  <p class="small-banner-text">궁금한 사항을 글로 작성하세요!</p>

  <form method = "post" action = "src/db_upload.php">
    <table style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
      <tr class="content">
      <td height=25 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
      </tr>
      <tr>
      <td bgcolor=white>
      <table class = "table2">
        <tr>
          <td>제목</td>
          <td><input id="title" type="text" name="title" size="10" placeholder="제목" required> </td>
        </tr>

        <tr>
          <td>카테고리</td>
          <td><input id="categorie" type="text" name="categorie" size=10 placeholder="카테고리" required></td>
        </tr>

        <tr>
          <td>내용</td>
          <td><input id="content" type="text" name="content" size="50" placeholder="내용" required></td>
        </tr>
        </table>

        <center>
        <input type = "submit" value="작성" class="apply" onclick="location.href='submitaction.php'">
        </center>
      </td>
      </tr>
    </table>
    </form>
  </body>
</html>