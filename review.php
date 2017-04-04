<?php include("template/header.php");?>

    <!-- .container is main centered wrapper -->
    <div class="container">
      <h3>COOL, you like us!</h3>
        <div class="row">
          <div class="six columns" style="padding-bottom:20px;">
            <p>You know what's even <strong>cooler?</strong> Leaving reviews.</p>
            <p>We're a small family business and our reviews are our lifeline. If you are enjoying your visit today I would be eternally grateful if you help spread the word. It should take less than 60 seconds and in exchange you will receive my eternal gratitude #staycool</p>
            <?php if (preg_match('/iPhone|iPad|iPod/i', $_SERVER['HTTP_USER_AGENT'])) {
              echo '</br><a class="button button-primary" href="click.php?url=tripadvisor">Review on TripAdvisor</a>';

} else {
    echo '
              <div id="TA_cdswritereviewlg800" class="TA_cdswritereviewlg">
              <ul id="4xgF7IwYM" class="TA_links qmqGNsr">
              <li id="7Feu42p" class="meCI0wOSrwx">
              </li>
              </ul>
              </div>';
}?>
<div id="TA_cdsratingsonlynarrow666" class="TA_cdsratingsonlynarrow">
      <ul id="CQv9QK20u8b" class="TA_links MgYqjPZga5">
      <li id="hBqCV9" class="zC2llq0">
      <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a>
      </li>
      </ul>
      </div>
      <script src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=666&amp;locationId=7061335&amp;lang=en_US&amp;border=false&amp;display_version=2"></script>




          </div>

          <div class="one-half column">
            <p>Don't have an account on TripAdvisor? No probs fam, we got you covered:</p>
              <a class="button button-primary" href="click.php?url=google">Review on Google</a>
              <!-- <a class="button button-primary" href="https://www.tripadvisor.com/UserReviewEdit-g293917-d7061335-a_referredFromLocationSearch.true-a_ReviewName.-a_type.-e-wpage1-Overstand-Chiang_Mai.html">TripAdvisor</a> -->
              <a class="button button-primary" href="click.php?url=facebook">Review on Facebook</a>
          </div>
        </div>
    </div>

    <script src="https://www.jscache.com/wejs?wtype=cdswritereviewlg&amp;uniq=800&amp;locationId=7061335&amp;lang=en_US&amp;lang=en_US&amp;display_version=2"></script>


<?php include("template/header.php"); ?>
