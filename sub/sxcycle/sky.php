<?php 
  // 외부 데이터 가져오기
  $url = '../../data/sky.json';
  $json_string = file_get_contents($url);

  if($json_string === false) {
    die('데이터 불러오기 실패');
  }

  // JSON 데이터 디코딩
  $data = json_decode($json_string, true);
  if($data === null) {
    die('JSON 디코딩 실패');
  }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>천간/지지/간지</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
  <!-- CSS 스타일시트 -->
  <link rel="stylesheet" href="../../css/reset.css" type="text/css">
  <link rel="stylesheet" href="../../css/common.css" type="text/css">
  <link rel="stylesheet" href="../../css/subcommon.css" type="text/css">
  <link rel="stylesheet" href="../../css/listwrap.css" type="text/css">
</head>
<body>
  <!-- 헤더 영역 연결 -->
  <?php include('../header.php'); ?>

  <!-- 메인 영역 -->
  <main>
    <!-- 서브 헤더 영역 연결 -->
    <?php include('./subhead.php'); ?>

    <!-- 별도 페이지(현재 php) -->
    <article class="twfsky">
      <h3>천간 목록</h3>
      <div class="list_wrap twfsky_list_wrap">
        <ul>
          <li>
            <span>천간</span>
            <span>음양</span>
            <span>색상</span>
            <span>연도 일의 자리 수</span>
          </li>
          <?php 
            // 반복문 실행
            foreach ($data as $item) {
              echo "<li>
                <span>" . $item['name'] . "(" . $item['oname'] . ")" . "</span>
                <span>" . $item['lightdark'] . "</span>
                <span>" . $item['color'] . "</span>
                <span>" . $item['yearnum'] . "</span>
              </li>";
            }
          ?>
        </ul>
      </div>
    </article>
  </main>

  <!-- 푸터 영역 연결 -->
  <?php include('../footer.php'); ?>

  <!-- data 파일 연결 -->
  <script src="../data/sky.json"></script>
</body>
</html>