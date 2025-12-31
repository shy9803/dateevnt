<?php 
  // 외부 데이터 가져오기
  $url = '../../data/season.json';
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
  <title>24절기</title>
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
    <article class="twfseason_list">
      <h3>24절기 목록</h3>
      <div class="list_wrap twfseason_list_wrap">
        <ul>
          <li>
            <span>절기</span>
            <span>일자</span>
            <span>계절</span>
            <span>설명</span>
          </li>
          <?php 
            // 반복문 실행
            foreach ($data as $item) {
              echo "<li>
                <span>" . $item['name'] . "(" . $item['oname'] . ")" . "</span>
                <span>" . $item['month'] . "월 " . $item['day'] . "일" . "</span>
                <span>" . $item['season'] . "</span>
                <span>" . $item['detail'] . "</span>
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
  <script src="../data/season.json"></script>
</body>
</html>