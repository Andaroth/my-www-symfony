<?php include(V."elem.alltop.php"); ?>
<main>
  <section class="landing">
    <div class="box firstbox">
      <h2 class="hidden">Axel Fiolle</h2>
      <div>
        <h3><strong>Web developper</strong> in love with virtual things</h3>
        <p>The worldwide web is like an interconnected dream. I'm living in the <strong>Internet Of Things</strong>.</p>
        <p><strong>Trust me your dreams</strong> I'll make them real</p>
        <a href="#contact" class="btn smallbtn contactlink">Get in touch</a>
      </div>
    </div>
    <a href="#presentation" id="landingscroll" class="scroller landingscroll scrollback">&and;</a>
  </section>
  <section id="presentation" class="presentation">
    <i class="fas fa-trophy" aria-label="trophy"><span class="jhide">&#127942;</span></i>
    <h2>10 years of coding</h2>
    <!--<p>I started making websites when I was just a kid. <br>With more than <strong>ten years of experience in web design and developement</strong>, I can help you to <strong>create your own website</strong> and assert your presence online.</p>-->
    <p class="mbottom">I design <b>dreams and experiences</b> since I was just a kid.<br> <!--Bit by bit I build the future of <strong>web interfaces</strong>, for the glory and for the record. <br>-->With more than <strong>ten years of experience in web design and developement</strong>, I can help you to <strong>create your own website</strong> and assert your presence online.</p>
    <a href="./?page=about" class="btn smallbtn">About me<span class="hidden"> about me</span></a>
  </section>
  <section id="skills" class="skills">
    <h2><i class="fas fa-graduation-cap" aria-label="graduation-cap"><span class="jhide">&#127891;</span></i> Face my skills</h2>
    <h3>A little graphic worth <a href="./?page=about">a long talk</a></h3>
    <div id="canvagrid" class="canvagrid grid two-c">
      <div id="chartTrigger">
        <h4>Front-end</h4>
        <ul class="jhide">
          <li>Excellent in HTML and CSS</li>
          <li>Really good using JS with and without jQuery</li>
        </ul>
        <canvas id="frontendChart" class="homeChart"></canvas>
      </div>
      <div>
        <h4>Back-end</h4>
        <ul class="jhide">
          <li>Confirmed PHP do-er</li>
          <li>Can build apps with NodeJS</li>
        </ul>
        <canvas id="backendChart" class="homeChart"></canvas>
      </div>
      
    </div>
    <a href="./?page=portfolio" class="btn shadebtn">Check what I made</a>
    
  </section>
</main>
<?php include(V."elem.footer.php"); ?>
