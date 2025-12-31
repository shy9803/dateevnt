<?php 
  // 외부 데이터 가져오기
  $url = '../../data/cycle.json';
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
  <link rel="stylesheet" href="../../css/sxcycle.css" type="text/css">
</head>
<body>
  <!-- 헤더 영역 연결 -->
  <?php include('../header.php'); ?>

  <!-- 메인 영역 -->
  <main>
    <!-- 서브 헤더 영역 연결 -->
    <?php include('./subhead.php'); ?>

    <!-- 별도 페이지(현재 php) -->
    <article class="twfcycle">
      <h3>간지 목록</h3>
      <span>예&#58; 1984년-갑자년, 2019년-기해년, 2025년-을사년</span>

      <div class="sxcycle_wrap">
        <img src="../../images/sexagenary_cycle_kor.svg" alt="육십간지 이미지">
      </div>

      <div class="list_wrap twfcycle_list_wrap">
        <ul>
          <li>
            <span>순서</span>
            <span>간지</span>
            <span>이모지</span>
            <span>-의 해</span>
            <span>납음</span>
            <span>색상</span>
            <span>음양-오행-십이지 간의 조합</span>
            <span>서력 연도/60의 나머지</span>
          </li>
          <?php 
            // 반복문 실행
            foreach ($data as $item) {
              echo "<li>
                <span>" . $item['order'] . "</span>
                <span>" . $item['name'] . "(" . $item['oname'] . ")" . "</span>
                <span>" . $item['emoji'] . "</span>
                <span>" . $item['yearof'] . "</span>
                <span>" . $item['nayin'] . "</span>
                <span>" . $item['color'] . "</span>
                <span>" . $item['cycle'] . "</span>
                <span>" . $item['cycleyear'] . "</span>
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
  <script src="../data/cycle.json"></script>
</body>
</html>