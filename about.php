<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1f2dc43538.js" crossorigin="anonymous"></script>
  <title>Darren Lindsay Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="body">

  <div class="grid">

    <!-- Top Nav -->

    <?php @include("include/mobile-menu.php"); ?>

    <!-- Header -->

    <header class="grid-item alt">
      <video class="header-vid" src="img/aurora-borealis.mp4" autoplay loop muted></video>
      <div class="heading">
        <h1 class="typing title-heading">About Me</h1>
      </div>
    </header>

    <!-- Side Nav -->

    <?php @include("include/side-nav.php"); ?>

    <!-- Main -->

    <main id="main">
      <div class="container">

        <div class="title-heading">
          <h2>About <span class="text-secondary">Me</span></h2>
        </div>

        <div class="heading">
          <h3>
            Introduction
          </h3>
          <div class="heading-container">
            <p>
              I am a web developer with a passion for technology and enjoy challenging myself to learn new things to
              expand my skillset, enabling me to adapt throughout my journey as a developer. I have a great
              sense of responsibility and the ability to maintain and exhibit the traditional values of achieving
              results.
            </p>
            <img class="header-img" src="img/portrait.png" alt="">
          </div>
        </div>

        <div class="heading">
          <h3>
            Experience
          </h3>
          <p>
            I started creating websites as personal projects. I have worked on a
            number of different websites, with years of experience as a solo developer. Take a look at my
            portfolio to see what I have done.
          </p>
          <a class="btn" href="index.php#main">
            Portfolio
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <div class="heading">
          <h3>
            Hobbies
          </h3>
          <h4><em>Gaming</em></h4>
          <p>
            I am a big gamer, from AAA to solo indie titles. One of my favourite
            developers are FromSoftware with BloodBorne being one of my top games of all time.
          </p>
          <p>
            I wanted to start learning how to make games so I began with Unreal Engine however, I was soon
            overwhelmed with
            the amount there was to learn. I learned the basics during my free time and continued until I
            developed my first small game. It was a platform type, navigating a ball around an obstacle course. It was a
            huge personal achievement. Since then, I have developed my skills further and worked on a number of
            different mobile games for charity.
          </p>


          <h4><em>Sport</em></h4>
          <p>
            As a England and Harlequins supporter, my main sport is Rugby. Not much gets me away from technology but,
            watching the Six Nations is one of the most exciting sporting events. I also enjoy watching the Football
            World Cup, Summer
            Olympic Games and the Ashes Cricket.
          </p>
        </div>

      </div>
    </main>

    <!-- Footer -->

    <footer>
      <div class="back-to-top">
        <a class="text-light" href="#body">
          <i class="icon fa-solid fa-arrow-up"></i>
          Back To Top
        </a>
      </div>
    </footer>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="js/sticky/sticky.js"></script>
  <script src="js/mobileMenu.js"></script>
  <script src="js/typingEffect.js"></script>
</body>

</html>