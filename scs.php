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
        <h1 class="typing title-heading">SCS Scheme</h1>
      </div>
    </header>

    <!-- Side Nav -->

    <?php @include("include/side-nav.php"); ?>

    <!-- Main -->

    <main id="main">
      <div class="container">

        <div class="title-heading">
          <h2>SCS <span class="text-secondary">Scheme</span></h2>
        </div>

        <!-- SCS Shcheme -->

        <div class="heading">
          <h3>
            Introduction To Scion Coalition Scheme
          </h3>
          <p>
            The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order
            to give
            willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior
            web developers, scions generally aim to complete training within six to nine months. The course is intensive
            and therefore the level of learning achieved is extensive in a short space of time. For more information
            please follow the link below.
          </p>
        </div>

        <!-- Treehouse -->

        <div class="heading">
          <div class="title-heading">
            <img class="about-img" src="img/treehouse.png" alt="Treehouse">
            <h3>
              Treehouse
            </h3>
          </div>

          <p>
            Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to
            C#
            programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing
            them to track their progress and see how much they've covered in certain areas.
          </p>
          <div class="btn">
            Treehouse Score: 17,530
          </div>
        </div>

        <!-- Netmatters -->

        <div class="heading">
          <div class="title-heading">
            <img class="about-img" src="img/netmatters-ltd.png" alt="Netmatters">
            <h3>
              Netmatters
            </h3>
          </div>

          <p>
            Established in 2008
            <br>
            Norfolk's leading technology compan
            <br>
            Winner of the Princess Royal Training Award
            <br>
            Winner of EDP Skills of Tomorrow Award
            <br>
            80+ staff, 2 locations across Norfolk
            <br>
            Digital Marketing, Website & Software development & IT Support
            <br>
            Broad spectrum of clients, working nationwide
            <br>
            Operate to strict company values
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