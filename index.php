<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>동양의 시간</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- CSS 스타일시트 -->
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/main.css" type="text/css">
</head>
<body>
  <!-- 헤더 영역 연결 -->
  <?php include('./sub/header.php'); ?>

  <!-- 메인 영역 -->
  <main>
    <section id="intro" class="m_sect reveal">
      <h2>사이트 소개</h2>
      <p>절기는 우리나라와 기후가 정확하게 맞지 않지만 농경사회에서 나름의 기준이 되는 중요한 날이었습니다.</p>
      <p>간지는 동아시아에서 쓰이는 역법 체계의 기년법(연도 계산)입니다.</p>
    </section>

    <section id="twfseason" class="m_sect reveal">
      <h2>24절기(二十四節氣)</h2>
      <p>태양의 움직임(황도)에 따라 1년을 24개로 나누어 정한 날들로, 양력을 기준으로 한 고정된 날짜들입니다.</p>
      <div class="m_sect_wrap twf_wrap">
        <article class="twf twf_spring">
          <h3>봄</h3>
          <ul>
            <li>입춘(立春)</li><li>우수(雨水)</li><li>경칩(驚蟄)</li><li>춘분(春分)</li><li>청명(淸明)</li><li>곡우(穀雨)</li>
          </ul>
        </article>
        <article class="twf twf_summer">
          <h3>여름</h3>
          <ul>
            <li>입하(立夏)</li><li>소만(小滿)</li><li>망종(芒種)</li><li>하지(夏至)</li><li>소서(小暑)</li><li>대서(大暑)</li>
          </ul>
        </article>
        <article class="twf twf_fall">
          <h3>가을</h3>
          <ul>
            <li>입추(立秋)</li><li>처서(處暑)</li><li>백로(白露)</li><li>추분(秋分)</li><li>한로(寒露)</li><li>상강(霜降)</li>
          </ul>
        </article>
        <article class="twf twf_winter">
          <h3>겨울</h3>
          <ul>
            <li>입동(立冬)</li><li>소설(小雪)</li><li>대설(大雪)</li><li>동지(冬至)</li><li>소한(小寒)</li><li>대한(大寒)</li>
          </ul>
        </article>
      </div>
      <a href="./sub/twfseason.php" title="24절기 페이지로 이동" class="btn">자세히 보기</a>
    </section>
    
    <section id="sexagenary_cycle" class="m_sect reveal">
      <h2>천간/지지/간지</h2>
      <p>천간과 지지를 조합하여 간지를 만들었습니다.</p>
      <div class="m_sect_wrap sxt_wrap">
        <article class="sxt sxt_sky reveal">
          <h3>천간(天干)</h3>
          <p>십간(十干)라고도 하며, 하늘을 의미하여 총 열 가지가 있습니다.</p>
          <p>연도, 날짜 등 시간의 표시에 두루 쓰였으며, 현대는 순서를 나타내는 일이 남아있기도 합니다.</p>
          <ul>
            <li>갑(甲)</li><li>을(乙)</li><li>병(丙)</li><li>정(丁)</li><li>무(戊)</li><li>기(己)</li><li>경(庚)</li><li>신(辛)</li><li>임(壬)</li><li>계(癸)</li>
          </ul>
        </article>
        <article class="sxt sxt_ground reveal">
          <h3>지지(地支)</h3>
          <p>십이지(十二支)라고도 하며, 땅을 의미하여 총 열두 가지가 있습니다.</p>
          <p>열두 동물을 대응하여, 출생년도의 십이지를 '띠'로 구분하며, 보통 열두 동물에는 쥐, 소, 범(호랑이), 토끼, 용, 뱀, 말, 양, 원숭이, 닭, 개, 돼지 순으로 되어있습니다.</p>
          <ul>
            <li>자(子)</li><li>축(丑)</li><li>인(寅)</li><li>묘(卯)</li><li>진(辰)</li><li>사(巳)</li><li>오(午)</li><li>미(未)</li><li>신(申)</li><li>유(酉)</li><li>술(戌)</li><li>해(亥)</li>
          </ul>
        </article>
        <article class="sxt sxt_skygrd reveal">
          <h3>간지(干支)</h3>
          <p>육십간지(六十干支) 또는 육십갑자(六十甲子)라고도 하며, 천간(天干) 10개와 지지(地支) 12개를 순서대로 조합하여 만들되, 천간과 지지에서 짝수와 홀수를 조합하지 않으므로 총 육십 가지이다.</p>
          <span>예&#58; 1984년-갑자년, 2019년-기해년</span>
          <ul>
            <li>갑자(甲子)</li><li>을축(乙丑)</li><li>병인(丙寅)</li><li>정묘(丁卯)</li><li>무진(戊辰)</li><li>기사(己巳)</li><li>경오(庚午)</li><li>신미(辛未)</li><li>임신(壬申)</li><li>계유(癸酉)</li><li>갑술(甲戌)</li><li>을해(乙亥)</li><li>병자(丙子)</li><li>정축(丁丑)</li><li>무인(戊寅)</li><li>기묘(己卯)</li><li>경진(庚辰)</li><li>신사(辛巳)</li><li>임오(壬午)</li><li>계미(癸未)</li><li>갑신(甲申)</li><li>을유(乙酉)</li><li>병술(丙戌)</li><li>정해(丁亥)</li><li>무자(戊子)</li><li>기축(己丑)</li><li>경인(庚寅)</li><li>신묘(辛卯)</li><li>임진(壬辰)</li><li>계사(癸巳)</li><li>갑오(甲午)</li><li>을미(乙未)</li><li>병신(丙申)</li><li>정유(丁酉)</li><li>무술(戊戌)</li><li>기해(己亥)</li><li>경자(庚子)</li><li>신축(辛丑)</li><li>임인(壬寅)</li><li>계묘(癸卯)</li><li>갑진(甲辰)</li><li>을사(乙巳)</li><li>병오(丙午)</li><li>정미(丁未)</li><li>무신(戊申)</li><li>기유(己酉)</li><li>경술(庚戌)</li><li>신해(辛亥)</li><li>임자(壬子)</li><li>계축(癸丑)</li><li>갑인(甲寅)</li><li>을묘(乙卯)</li><li>병진(丙辰)</li><li>정사(丁巳)</li><li>무오(戊午)</li><li>기미(己未)</li><li>경신(庚申)</li><li>신유(辛酉)</li><li>임술(壬戌)</li><li>계해(癸亥)</li>
          </ul>
        </article>
      </div>
      <a href="./sub/sxcycle.php" title="천간/지지/간지 페이지로 이동" class="btn">자세히 보기</a>
    </section>
      
    <section id="usefulsite" class="m_sect reveal">
      <h2>유용한 사이트</h2>
      <div class="m_sect_wrap ufsite">
        <ul>
          <li>
            <a href="https://encykorea.aks.ac.kr/" title="한국민족문화대백과">
              <img src="./images/site1_logo.png" alt="한국민족문화대백과">
            </a>
            <p>한국민족문화대백과</p>
            <p>절기 등에 대한 설명, 검색으로 조회</p>
          </li>
          <li>
            <a href="https://data.kma.go.kr/climate/solarTerms/solarTerms.do" title="기상청 기상자료개방포털" class="ufsite_sky">
              <img src="./images/site2_logo.png" alt="기상청 기상자료개방포털">
            </a>
            <p>기상청 기상자료개방포털</p>
            <p>24절기에 대한 각 기상정보 조회</p>
          </li>
          <li>
            <a href="https://www.nfm.go.kr/home/index.do" title="국립민속박물관">
              <img src="./images/site3_logo.png" alt="국립민속박물관">
            </a>
            <p>국립민속박물관</p>
            <p>각 자료를 다운로드하여 문헌 확인 가능</p>
          </li>
          <li>
            <a href="https://ko.wikipedia.org/wiki/" title="위키백과" class="ufsite_wiki">
              <img src="./images/site4_logo.png" alt="위키백과">
            </a>
            <p>위키백과</p>
            <p>위키백과에 검색하여 정보 확인 가능</p>
          </li>
          <li>
            <a href="https://terms.naver.com/" title="네이버 지식백과" class="ufsite_wiki">
              <img src="./images/site5_logo.png" alt="네이버 지식백과">
            </a>
            <p>네이버 지식백과</p>
            <p>네이버 지식백과에 검색하여 정보 확인 가능</p>
          </li>
          <li>
            <a href="https://namu.wiki/" title="나무위키" class="ufsite_wiki">
              <img src="./images/site6_logo.png" alt="나무위키">
            </a>
            <p>나무위키</p>
            <p>나무위키에 검색하여 정보 확인 가능</p>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <!-- 푸터 영역 연결 -->
  <?php include('./sub/footer.php'); ?>

  <!-- 스크립트 -->
  <script src="./script/scrollevent.js"></script>
</body>
</html>