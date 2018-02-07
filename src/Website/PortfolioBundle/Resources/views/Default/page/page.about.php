<?php include(V."elem.alltop.php"); ?>
<main>
  <section id="about" class="about fullh">
    <h2 class="hidden"><i class="fa fa-id-card" aria-label="scope"><span class="jhide">&#128301;</span></i> About me</h2>
    <img class="pdp" src="<?= IMG ?>elem/myface.jpg" alt="My face">
    <h3><strong class="normal">Web-stack developer</strong> passionate about new technologies</h3>
    <p>Since I was 12 years old, I've always been interested in the virtual world. <br>I learned to handle any design tool and also mastering <strong>the art of code</strong>. </p>
    <p>My natural taste of unknown and my initiative made me discover a lot of wonders, I'd be glad to help you getting online and expands all over the Internet !</p>
    <a href="#mozaic" class="btn scrollback">My dev's journey</a>
  </section>
  <section id="mozaic" class="mozaic">
    <h2><i class="fa fa-link" aria-label="link"><span class="jhide">&#128279;</span></i> Trip to knowledge</h2>
    <h3>Being at the right place at the right moment</h3>
    <div id="journey" class="grid two-c journey">
      <div class="skill-tile nomaxhskill jpacity"><h4>Junior Web Developer at BeCode, 2017-2018</h4><img class="ico small" src="<?= IMG.'ico/becodeorg.png' ?>" alt="BeCode"></div>
      <div class="skill-tile nomaxhskill jpacity hidden">Co-founder of <strong>SmartEntrepreneuriat</strong></div>
      <div class="skill-tile nomaxhskill jpacity hidden">Co-founder of <strong>l'Agence du Web</strong></div>
      <div class="skill-tile nomaxhskill jpacity"><h4>Studied at Albert Jacquard, 2013 to 2016</h4><img class="ico small" src="<?= IMG.'ico/heaj.png' ?>" alt="HEAJ"></div>
    </div>
    <h3 class="clearfix">Discovering a lot of things</h3>
    <div id="mozaicTrigger"></div>
    <div id="learned" class="grid three-c learned">
      <div class="skill-tile jpacity">
        <i class="devicon-html5-plain devicon big"><span class="alt-tile">Quite an elite in <strong>HTML5</strong></span></i>
      </div>
      <div class="skill-tile jpacity">
        <i class="devicon-css3-plain devicon big"><span class="alt-tile">Really good at <strong>CSS, SCSS and SASS</strong></span></i>
      </div>
      <div class="skill-tile jpacity">
        <i class="devicon-javascript-plain devicon big"><span class="alt-tile"><strong>JavaScript</strong> with and without <strong>jQuery</strong></span></i>
      </div>
      <div class="skill-tile jpacity">
        <i class="devicon-php-plain devicon big"><span class="alt-tile"><strong>PHP</strong> is nice to focus on</span></i>
      </div>
      <div class="skill-tile jpacity">
        <i class="devicon-nodejs-plain devicon big"><span class="alt-tile"><strong>NodeJS</strong> is really cool, I like how it works</span></i>
      </div>
      <div class="skill-tile nopacity">
        <i class="devicon-python-plain devicon big"><span class="alt-tile">Can use <strong>Python</strong> for RaspBerry</span></i>
      </div>
      <div class="skill-tile nopacity hidden">
        <i class="devicon-react-plain devicon big"><span class="alt-tile">Started <strong>ReactJS</strong> a few moments ago, still discovering</span></i>
      </div>
    </div>
    <p class="clearfix">I started coding in 2005 !</p>
    <a href="./?page=portfolio" class="btn shadebtn">Discover my latest work</a>
  </section>
</main>
<?php include(V."elem.footer.php"); ?>
