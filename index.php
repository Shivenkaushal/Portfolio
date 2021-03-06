
<?php
  if($_POST){
    $emailTo="shivenkaushal39@gmail.com";
    $subject=$_POST['subject'];
    $content=$_POST['content'];
    $headers='From: '.$_POST['email'];

    if(mail($emailTo,$subject,$content,$headers)){
      header("Location: https://boastful-dependenci.000webhostapp.com/test/personalwebsite/");
    }else{
      header("Location: https://boastful-dependenci.000webhostapp.com/test/personalwebsite/");
    }
  }



?>

<!doctype html>
<html lang="eng" class="no-js">

<!-- head -->

<head>
  <meta charset="UTF-8" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="icon" style="border-radius: 20px;" href="img/ezgif.com-gif-maker.webp" type="image">

  <!-- title -->

  <title>Mr. Shiven Kaushal Portfolio</title>

  <!-- meta -->

  <meta name="viewport" content="width=device-width, user-scalable=no">

  <!-- linking css -->

  <link rel="stylesheet" href="css/style.css" />

  <!-- lightbox css -->

  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/lightbox.min.css">

  <!-- particleground javascript -->

  <script type='text/javascript' src='js/jquery.particleground.js'></script>
  <script type='text/javascript' src='js/demo.js'></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- body with right click off  -->

<body oncontextmenu="return false;">
  <div class="pre">
  <div class="preloader">
      <img src="img/0_4Gzjgh9Y7Gu8KEtZ.gif">
  </div>
</div>
  <a href="#home" style="font-weight: 500; cursor: pointer; position: fixed; bottom: 4%; padding: 5px; right: 3%; color: white; background-color: rgba(1,1,1,0.7); border-radius: 20px;"> <span style="cursor: pointer; transform: rotate(-90deg);" class="material-icons">
    double_arrow
    </span></a>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" style="cursor: pointer;" class="closebtn" onclick="closeNav()"> &times;</a>
    <a onclick="closeNav()" style=" display: flex; justify-content: space-evenly;" href="#home"> <p>HOME</p>  <span style="font-size: 4rem;" class="material-icons">house</span></a>
    <a onclick="closeNav()" style="display: flex; justify-content: space-evenly;" href="#biography"> <p>BIOGRAPHY</p><span style="font-size: 4rem;" class="material-icons">description</span></a>
    <a onclick="closeNav()" style="display: flex; justify-content: space-evenly;" href="#projects"> <p>PROJECTS</p><i style="font-size: 4rem" class="fas fa-user-edit"></i></a>
    <a onclick="closeNav()" style="display: flex; justify-content: space-evenly;  "href="#cert"><p>CERTIFICATES</p> <span style="font-size: 4rem;" class="material-icons">badge</span></a>
    <a onclick="closeNav()" style="display: flex; justify-content: space-evenly;"href="#gallery"><p>GALLERY</p> <i style="font-size: 4rem" class="fas fa-image"></i></a>
    <a onclick="closeNav()"style="display: flex; justify-content: space-evenly;" href="#contact"><p>CONTACT</p> <span style="font-size: 4rem;" class="material-icons">contact_page</span></a>
  </div>

  <span style="font-size:30px; cursor:pointer; position: fixed; padding: 2px 10px; 
  margin: 20px 0px; background-color: black; color: white; right: 2%" onclick="openNav()">&#9776;</span>
  
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>

  <!-- full page progress bar -->
  <div id="progressbar"></div>
  <div id="scrollpath"></div>

  <a id="home"></a>

  <!-- Jquery Plugin Particleground Section 1 -->

  <div id="particles">

    <!-- My Introduction -->

    <div data-aos="zoom-out" id="intro">
      <h1>Shiven Kaushal</h1>
      <div class="container slideanim">

        <p style="font-size: 200%; font-weight: bold; font-family: 'Dancing Script', cursive;">I am <span
            class="typed-text" style="font-family: Racing Sans One;"></span><span class="cursor">&nbsp;</span></p>
      </div>
      <script src="js/main.js"></script>
      <a href="https://github.com/Shivenkaushal" target="_blank" class="btn"><i style="font-size: 200%; cursor: pointer;"
          class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/shivenkaushal210708/" target="_blank" class="btn"><i style="font-size: 200%; cursor: pointer;" class="fab fa-linkedin-in"></i></a>
    </div>
  </div>

  <!-- Some style to parralax -->

  <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;" data-aos="zoom-in-down">
    <h3 style="text-align:center;">Parallax Demo</h3>
    <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the
      foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere
      mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim.
      Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam
      vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales
      tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam
      sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit
      proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>

  <a id="biography"></a>
  
  <!-- biography section 2 -->

  <div id="section2">

    <!-- about me -->

    <div id="aboutme">

      <!-- heading -->

      <h1 data-aos="zoom-in-up">Biography</h1>

      <!-- content -->

      <p data-aos="fade-up">I am shiven kaushal. I started my coding due to Pandemic on April 2020. I was Glad to start my coding journey
        by Whitehat jr.. I started learning coding with code.org and learned ml5.js and p5.js in my classes. I learned
        little bit of HTML5 in my classes. From then onwards I gave my full focus on HTML5, CSS and Vanilla JavaScript.
        Now I am learning php for backend and firebase for database. I made some websites for my practice and for my
        family members.</p>

      <!-- progress bar -->

      <div data-aos="zoom-in-up" class="circleBar">

        <!-- Container for circular progress bar -->

        <div class="container ">

          <!-- child container for circular progress bar -->

          <div id="space">

            <!-- progress bar of html5 -->

            <div>
              <div class="round" style="
              margin: 0px 2rem;" data-value="0.97" data-size="160" data-thickness="4">

                <strong>97% <p style="font-size:100%;">HTML5</p></strong>
              </div>
            </div>

            <!-- progress bar of css -->

            <div>
              <div class="round" style="
              margin: 0px 2rem;" data-value="0.80" data-size="160" data-thickness="4">

                <strong>80% <p style="font-size:100%;">CSS</p></strong>
              </div>
            </div>

            <!-- progress bar of javascript -->

            <div>
              <div class="round" style="
              margin: 0px 2rem;" data-value="0.60" data-size="160" data-thickness="4">

                <strong>60%<p style="font-size:100%;">JavaScript</p></strong>
              </div>

            </div>

            <!-- progress bar of PHP -->

            <div>
              <div class="round" style="
              margin: 0px 2rem;" data-value="0.3" data-size="160" data-thickness="4">

                <strong>30%<p style="font-size:100%;">PHP</p></strong>
              </div>
            </div>
          </div>

        </div>

        <!-- javascript for progress bar -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
          setTimeout(function(){
            $('.pre').fadeToggle();
          },1500)
        </script>
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.min.js"></script>

        <script src="js/function.js"></script>

      </div>
    </div>

    <!-- some additional style for parallax -->

    <div style="color: #777;background-color:black;text-align:center;padding:50px 80px;text-align: justify;">
      <h3 style="text-align:center;">Parallax Demo</h3>
    </div>

    <a id="projects"></a>

    <!-- project section3 -->

    <div id="section3">

      <!-- heading -->

      <h1 >Projects</h1>

      <!-- child container for section 3 -->

      <div id="aboutme2">

        <!-- images of projects -->

        <a href="https://shivenkaushal.github.io/Firebase-blog/" target="_blank"><img id="hello" style="cursor: pointer;" data-aos="zoom-in-up" src="projects/blog.PNG"></a>
        <a href="https://shivenkaushal.github.io/mother-day/" target="_blank"><img id="hello" style="cursor: pointer;" data-aos="zoom-in-up" src="projects/Capture.PNG"></a>
        <a href="https://boastful-dependenci.000webhostapp.com/" target="_blank"><img id="hello" style="cursor: pointer;" data-aos="zoom-in-up" src="projects/singlepage.webp"></a>
        <a href="img/coder.webp" target="_blank"><img id="hello" style="cursor: pointer;"  data-aos="zoom-in-up"src="projects/tutionwebsite.webp"></a>
        <a href="https://shivenkaushal.github.io/wowbook-website/" target="_blank"><img id="hello" style="cursor: pointer;"  data-aos="zoom-in-up"src="projects/wowbook.webp"></a>
      </div>
    </div>
  </div>
  </div>

  <!-- some style for parallax -->

  <div style="color: #777;background-color:black;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;">Parallax Demo</h3>
  </div>

  <a id="cert"></a>

  <!-- Gallery section 4 -->

  <div id="section4">

    <!-- heading -->

    <h1 data-aos="zoom-in-up">Certificates</h1>

    <!-- child container for certificate -->

    <div id="readme">
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/cybersecurity.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Cybersecurity</p> Introduction to cybersecurity certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" src="certificates/html.jpg">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> HTML5 Essential certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/css.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> CSS essential certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" src="certificates/javascript.jpg">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> JavaScript Essential certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/effectivelistening.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> Effective listening certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" src="certificates/classicjavascript.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> Javascript skill badge
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/excel.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> excel skill badge
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" src="certificates/react.PNG">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> react skill badge
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/ui.uxdeveloper (2).webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Whitehatjr.</p> Android and ios app developer certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" src="certificates/trial.jpg">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Whitehatjr.</p> trial certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/ui.uxdeveloper (1).webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Whitehatjr.</p> UI/UX developer certificate
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" src="certificates/hackathon.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Whitehatjr.</p> Hackathon certificate
        </h1>
      </div>

      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-left" id="img" src="certificates/word.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Linkedin</p> word skill badge
        </h1>
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img draggable="false" data-aos="flip-right" id="img" style="border-radius: 20px;" src="certificates/cybersecuritybadge.webp">
        <h1 style="font-size: 120%;">
          <p style="color: #D1D400; font-weight: bold;">Cisco</p> cybersecurity badge
        </h1>
      </div>
      </div>
      </div>

    <!-- some style for parallax -->

    <div style="color: #777;background-color:black;text-align:center;padding:50px 80px;text-align: justify;">
      <h3 style="text-align:center;">Parallax Demo</h3>
    </div>

    <a id="gallery"></a>

      <!-- Gallery section3 -->

      <div id="section5">

        <!-- heading -->
  
        <h1 data-aos="zoom-in-up" data-aos-duration="3000">Gallery</h1>
  
        <!-- child container for section 3 -->
  
        <div id="aboutme1">
          
  
          <!-- images of projects -->
  
          <a href="img/coder.wepb" data-lightbox="mygallery"><img data-aos="fade-right"
            data-aos-duration="5 000" id="hello" style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-left"data-aos-duration="3000"style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-right" data-aos-duration="3000" style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-left"data-aos-duration="3000"style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-right"data-aos-duration="3000" style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-left"data-aos-duration="3000"style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-right"data-aos-duration="3000" style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-left"data-aos-duration="3000"style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-right"data-aos-duration="3000" style="cursor: pointer;" src="img/coder.webp"></a>
          <a href="img/coder.webp" data-lightbox="mygallery"><img id="hello" data-aos="fade-left"data-aos-duration="3000" style="cursor: pointer;" src="img/coder.webp"></a>
        </div>
      </div>
    </div>
    </div>
  
    <!-- some style for parallax -->
  
    <div style="color: #777;background-color:black;text-align:center;padding:50px 80px;text-align: justify;">
      <h3 style="text-align:center;">Parallax Demo</h3>
    </div>

    <a id="contact"></a>

    <!-- contact page -->

    <div class="contact-section">

      <!-- heading -->

      <h1 data-aos="zoom-in-up">Contact Us</h1>

      <!-- form section -->

      <form class="contact-form" method='POST' data-aos="zoom-in-up">

        <!-- input -->

        <input type="text" class="contact-form-text" name="name" placeholder="Your name">
        <input type="email" class="contact-form-text" name="email" placeholder="Your email">
        <input type="text" class="contact-form-text" name="subject" placeholder="subject">

        <!-- submit button -->

        <button type='submit' class="contact-form-btn">Submit</button>
      </form>
</div>

      <!-- adding javascript -->
      
      <script type='text/javascript' src='js/lightbox-plus-jquery.min.js'></script>

      <script>
        let progress = document.getElementById('progressbar');
        let totalheight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function () {
          let progressheight = (window.pageYOffset / totalheight) * 100;
          progress.style.height = progressheight + "%";
        }


      </script>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1500
  });
</script>
</html>