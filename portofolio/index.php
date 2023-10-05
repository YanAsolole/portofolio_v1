  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Portofolio</title>
  </head>

  <body>
    <!-- Start Navbar -->
    <nav class="navigation">
      <div class="logonama"><a href="#">Alfian Dwi Anggoro</a></div>

      <div class="menu-toggle">
        <ion-icon name="menu-outline"></ion-icon>
      </div>

      <div class="nav-list">
        <ul>
          <li><a href="#aboutt">About</a></li>
          <li><a href="#projectt">Projects</a></li>
          <li><a href="#contact">Contacts</a></li>
        </ul>
      </div>
    </nav>
    <!-- end navbar -->


    <!-- Start Main -->
    <section class="main">
      <div class="text">
        <span>BACKEND DEVELOPER</span>
        <h1>
          Hello, my name <br />
          is Alfian Dwi Anggoro
        </h1>
        <p>
          "I am a student at SMK Negeri 1 Cibinong, majoring
          in RPL Rekayasa Perangkat Lunak or Software Engineering. I am 17 years
          old. For more information about me, please scroll down or click the
          button below "
        </p>
        <div class="button">
          <a href="#projectt" class="project">Projects</a>
          <a href="#aboutt" class="about">About me</a>
        </div>
      </div>
      <div class="orang">
        <img src="image/orang.png" alt="" />
      </div>
      <div class="boxhide"></div>
    </section>
    <div class="motifkuning">
      <img src="image/kuningbg.png" alt="" />
    </div>
    <!-- End Main -->
    <section class="aboutt" id="aboutt">
      <div class="content">
        <div class="wrap">
          <h3>About <span>me</span></h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dignissimos officia tempore, blanditiis quam impedit, modi culpa veniam sapiente ipsam, suscipit earum molestias quasi dolore quis nobis! Quisquam, vero.
          </p>
        </div>
        <div class="pict">
          <div class="motif">
            <img src="image/motif.png" alt="">
          </div>
          <div class="vector">
            <img src="image/vector.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="projectt" class="projectt">
      <h1>My recent <span>works</span></h1>
      <div class="container-card">
        <div class="card">
          <div class="image">
            <img src="image/bulbul.png" alt="" />
          </div>
          <h2>bulbul</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
        </div>
        <div class="card">
          <!-- <div class="image">
            <img src="images/img1.jpg" alt="" />
          </div> -->
          <h2>Soon !</h2>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p> -->
        </div>
        <div class="card">
          <!-- <div class="image">
            <img src="images/img3.jpg" alt="" />
          </div> -->
          <h2>Soon !</h2>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p> -->
        </div>
        <div class="card">
          <!-- <div class="image">
            <img src="images/img4.jpg" alt="" />
          </div> -->
          <h2>Soon !</h2>
          <!-- <p>Lorem ipsum door sit amet consectetur adipisicing elite.</p> -->
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="content">
        <div class="container-left">
          <h1>Got a project in <br><span>mind?</span></h1>
          <img src="image/vector2.png" alt="">
        </div>
        <div class="container-right">
          <form action="send_form.php" method="post">
            <div class="box-slide">
              <div class="box">
                <label for="">Your Name</label>
                <input type="text" name="yourname" placeholder="name">
              </div>
              <div class="box">
                <label for="">Your Email</label>
                <input type="text" name="youremail" placeholder="Email">
              </div>
            </div>
            <div class="box-column">
              <label for="">Your Message</label>
              <textarea name="yourmessage" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="button">
              <input type="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer>
      <div class="icon">
        <div class="icon-body">
          <a href="#">
            <ion-icon name="home-outline"></ion-icon>
            <span>Home</span>
          </a>
        </div>
        <div class="icon-body">
          <a href="#aboutt">
            <ion-icon name="person-outline"></ion-icon>
            <span>About me</span>
          </a>
        </div>
        <div class="icon-body">
          <a href="#contact">
            <ion-icon name="call-outline"></ion-icon>
            <span>Contact</span>
          </a>
        </div>
      </div>
      <div class="sosmed-container">
        <div class="sosmed">
          <div class="facebook">
            <a href="https://github.com/YanAsolole" target="_blank">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </div>
        </div>
        <div class="sosmed">
          <div class="instagram">
            <a href="https://instagram.com/alfndwi7_?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </div>
        </div>
        <div class="sosmed">
          <div class="twitter">
            <a href="https://open.spotify.com/user/nfcg0b5e56pebk7nbtuaa70ir?si=Zoftp1O3Rry7n9LKjsXAeA&utm_source=copy-link" target="_blank">
              <ion-icon class="ri-spotify-fill"></ion-icon>
            </a>
          </div>
        </div>
        <div class="sosmed">
          <div class="youtube">
            <a href="mailto:alfianyt282@gmail.com">
              <i class="ri-mail-line"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- <span>Terms of Service - Privacy Policy</span> -->
      <p>Terms of Service - Privacy Policy</p>
    </footer>
    <script>
      const navigation = document.querySelector(".nav-list");

      document.querySelector('.menu-toggle').onclick = () =>{
        navigation.classList.toggle('active');
      }
    </script>
    <!-- <script src="script.js"></script> -->
    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>

  </html>