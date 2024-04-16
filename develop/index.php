<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "top",
  "gnav_set" => "top",
  "page_class" => "",
  "url" => "",
  "title" => "",
  "keywords" => "",
  "description" => "",
  "add_stylesheet" => ["css/top.css"],
  "add_script" =>  ["js/top.js"],
  "canonical_page_id" => "",
  "logo_text" => ""
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <div class="top-mv pc">
    <figure><img src="./images/top/mv01-pc.jpg" alt="" class="w_100 pc"></figure>
  </div>
  <div class="top-mv sp tb">
    <figure><img src="./images/top/mv01-sp.jpg" alt="" class="w_100 sp tb"></figure>
  </div>
<!--//top-mv -->
  
  <!-- バナースライド -->
  <div class="top-banner">
    <div class="container">
      <!-- バナー上 -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=kansai&PROP_CD=horikoshicho&BANNER=first"></script>
      <!-- バナー下 -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=kansai&PROP_CD=horikoshicho&BANNER=second"></script>
    </div>
  </div><!-- / バナースライド -->

  <!-- INFORMATION -->
  <section id="information-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>INFORMATION</h2>
      </div>
      <div class="information-box">
        <div class="information-box-wrapper">
          <div id="topics" class="informationTopics" data-area-cd="kansai" data-prop-cd="horikoshicho"></div>
        </div>
      </div>
    </div>
  </section><!-- / INFORMATION -->

  <!-- <section id="contents-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>CONTENTS</h2>
      </div>
      <div class="contents-link">
        <a href="./concept.html">
          <figure><img src="./images/top/img_concept.jpg" alt="コンセプト"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">CONCEPT</p>
              <h3>コンセプト</h3>
            </div>
        </a>
        <a href="./location01.html">
          <figure><img src="./images/top/img_location.jpg" alt="ロケーション"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">LOCATION</p>
              <h3>ロケーション</h3>
            </div>
        </a>
        <a href="./access.html">
          <figure><img src="./images/top/img_access.jpg" alt="アクセス"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">ACCESS</p>
              <h3>アクセス</h3>
             </div>
        </a>
         <div class="ComingSoon">
          <div class="contents-link__ttl">
             <p class="f-en">Coming Soon</p>
          </div>
         </div>
        </div>
    </div>
  </section> -->
  <!-- / CONTENTS -->


  
  <div class="container ma_to20 ma_bo20">
    <p class="caption">※距離表示については地図上の概測距離を、徒歩分数表示については80ｍを1分として算出し、端数を切り上げたものです。<br>
※掲載の航空写真は天王寺区国分町付近上空から西方面を撮影（2023年10月）したものに現地部分の光などCG合成・加工をしたものです。また、周辺環境は将来変わる場合があります。<br>
※1：5駅7路線とは、徒歩5分のOsaka Metro谷町線、徒歩6分のOsaka Metro御堂筋線「天王寺」駅、JR大阪環状線・関西本線・阪和線「天王寺」駅、徒歩9分の近鉄南大阪線「大阪阿倍野橋」駅、阪堺電気軌道上町線「天王寺駅前」駅、徒歩10分のOsaka Metro谷町線「四天王寺前夕陽ケ丘」駅のことです。<br>
※2.標高：約11.2m／※掲載の標高は「国土地理院ウェブサイト」にて検索（2023年12月現在）したものです。（計測値／シティハウス天王寺堀越町：天王寺区堀越町5丁目）
</p>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
