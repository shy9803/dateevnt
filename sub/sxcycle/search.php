<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>천간/지지/간지</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- CSS 스타일시트 -->
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
  <link rel="stylesheet" href="../css/common.css" type="text/css">
  <link rel="stylesheet" href="../css/subcommon.css" type="text/css">
</head>
<body>
  <!-- 헤더 영역 연결 -->
  <?php include('./header.php'); ?>

  <!-- 메인 영역 -->
  <main>
    <!-- 서브 헤더 영역 연결 -->
    <?php include('./subhead.php'); ?>

    <!-- 별도 페이지(현재 php) -->
    <article class="twfsearch">
      <h3>검색</h3>
      
      <p>
        <label for="twfsearch">연도입력</label>
        <input type="search" name="search" id="twfsearch" placeholder="2025">
      </p>

      <div class="result">결과값 출력</div>
    </article>
  </main>

  <!-- 푸터 영역 연결 -->
  <?php include('./footer.php'); ?>
</body>
</html>