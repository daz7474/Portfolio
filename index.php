<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <script src="https://kit.fontawesome.com/1f2dc43538.js" crossorigin="anonymous"></script>
  <title>Darren Lindsay Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="body">

  <div class="grid">

    <!-- Top Nav -->

    <?php @include("include/mobile-menu.php"); ?>

    <!-- Header -->

    <header class="grid-item">
      <video class="header-vid" src="img/aurora-borealis.mp4" autoplay loop muted></video>
      <div class="heading">
        <h1 class="typing title-heading"></h1>

        <img class="header-img" src="img/portrait.png" alt="">

        <a class="text-light scroll-down" href="#main">
          Scroll Down
          <i class="icon fa-solid fa-arrow-down"></i>
        </a>
      </div>
    </header>

    <!-- Side Nav -->

    <?php @include("include/side-nav.php"); ?>

    <!-- Main -->

    <main id="main">
      <div class="container">

        <div class="title-heading">
          <h2>Portfolio</h2>
        </div>

        <div class="projects-container" id="projects">

          <!-- Netmatters Hompage -->

          <div class="item">
            <a href="http://netmatters.darren-lindsay.netmatters-scs.co.uk/" target="_blank">
              <div class="card card-brand-secondary">
                <img class="card-img" src="img/netmatters-homepage.png" alt="">
                <h2>
                  Netmatters<span class="text-secondary"> Homepage</span>
                </h2>
                <p>
                  Recreation of the Netmatters homepage from scratch. Includes interactive elements and a responsive
                  design.
                </p>

                <p>
                  <span class="icon-html5"></span>
                  <span class="icon-css3"></span>
                  <span class="icon-sass"></span>
                  <span class="icon-javascript"></span>
                  <span class="icon-php"></span>
                  <span class="icon-mysql"></span>
                </p>
              </div>
            </a>
          </div>

          <!-- Charity Website -->

          <div class="item">
            <a href="https://www.sociabilityonline.org/" target="_blank">
              <div class="card card-brand-secondary">
                <img class="card-img" src="img/Sociability.png" alt="">
                <h2>
                  Charity<span class="text-secondary"> Website</span>
                </h2>
                <p>
                  Sociability are a charity who provides a safe and welcoming environment for people who often find it
                  difficult to
                  socialise.
                </p>

                <p>
                  <span class="icon-html5"></span>
                  <span class="icon-css3"></span>
                  <span class="icon-sass"></span>
                  <span class="icon-javascript"></span>
                  <span class="icon-php"></span>
                  <span class="icon-mysql"></span>
                </p>
              </div>
            </a>
          </div>

          <!-- Company Admin Panel -->

          <div class="item">
            <a href="http://laravel.darren-lindsay.netmatters-scs.co.uk/login" target="_blank">
              <div class="card card-brand-secondary">
                <img class="card-img" src="img/Company-Admin-Panel.png" alt="">
                <h2>
                  Company Admin<span class="text-secondary"> Panel</span>
                </h2>
                <p>
                  Manage companies and employees with this admin panel created using Laravel. Includes CRUD operations for companies, employees and users.
                </p>

                <p>
                  <span class="icon-html5"></span>
                  <span class="icon-css3"></span>
                  <span class="icon-sass"></span>
                  <span class="icon-javascript"></span>
                  <i class="project-icon fa-brands fa-laravel" aria-hidden="true"></i>
                  <span class="icon-mysql"></span>
                </p>
              </div>
            </a>
          </div>

          <!-- Sociability Pinball -->

          <div class="item">
            <a href="https://play.google.com/store/apps/details?id=com.sociability.pinball&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
              target="_blank">
              <div class="card card-brand-secondary">
                <img class="card-img" src="img/Sociability-Pinball-Header.png" alt="">
                <h2>
                  Sociability<span class="text-secondary"> Pinball</span>
                </h2>
                <p>
                  A simple game of pinball made using Unreal Engine 4 with visual scripting includes different colour
                  pinballs and tables to unlock through progression
                </p>

                <p>
                  <span class="icon-unrealengine"></span>
                  <span class="icon-blender"></span>
                  <span class="icon-adobephotoshop"></span>
                  <span class="icon-adobeillustrator"></span>
                </p>
              </div>
            </a>
          </div>

          <!-- Movie Review App -->

          <div class="item">
            <a href="https://play.google.com/store/apps/details?id=com.sociabilityonline.sociabilitymoviereviewjournal&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
              target="_blank">
              <div class="card card-brand-secondary">
                <img class="card-img" src="img/Movie-Review.png" alt="">
                <h2>
                  Movie Review<span class="text-secondary"> App</span>
                </h2>
                <p>
                  An app that lets you browse a huge library of movies or tv shows and create reviews. Uses an API from
                  The Movie Database
                </p>

                <p>
                  <span class="icon-html5"></span>
                  <span class="icon-css3"></span>
                  <span class="icon-javascript"></span>
                  <span class="icon-php"></span>
                  <span class="icon-mysql"></span>
                </p>
              </div>
            </a>
          </div>

          <!-- Image Fetch Array -->

          <div class="item">
            <a href="https://daz7474.github.io/JavaScript-Array/" target="_blank">
              <div class="card card-brand-secondary">
                <img class="card-img" src="img/Random-image-generator.png" alt="">
                <h2>
                  Image Fetch<span class="text-secondary"> Array</span>
                </h2>
                <p>
                  Web application that generates a random image using an API that can store images to multiple emails.
                  Includes
                  client-side email
                  validation.
                </p>

                <p>
                  <span class="icon-html5"></span>
                  <span class="icon-css3"></span>
                  <span class="icon-sass"></span>
                  <span class="icon-javascript"></span>
                </p>
              </div>
            </a>
          </div>
        </div>

        <!-- Skills -->

        <div class="section">

          <div class="title-heading">
            <h2>Skills</h2>
          </div>

          <div class="heading-skills">

            <div class="skills-item">
              <div class="skills-content">
                <span class="icon-html5"></span>
                <h3>HTML</h3>
                <p>
                  HTML is the standard markup language for documents designed to be displayed
                  in
                  a web browser. It defines the content and structure of web content.
                </p>
              </div>
            </div>

            <div class="skills-item">
              <div class="skills-content">
                <span class="icon-css3"></span>
                <h3>CSS</h3>
                <p>
                  Cascading Style Sheets (CSS) is a style sheet language used for specifying the presentation and
                  styling
                  of
                  a document written in a markup language such as HTML.
                </p>
              </div>
            </div>

            <div class="skills-item">
              <div class="skills-content">
                <span class="icon-sass"></span>
                <h3>Sass</h3>
                <p>
                  Sass is a preprocessor scripting language that is interpreted or
                  compiled into CSS. Sass extends the use of CSS by implementing features such as variables and mixins.
                </p>
              </div>
            </div>

            <div class="skills-item">
              <div class="skills-content">
                <span class="icon-javascript"></span>
                <h3>JavaScript</h3>
                <p>
                  JavaScript is a programming language for creating dynamic features to web pages. It works alongside
                  HTML
                  and CSS to provide user interaction.
                </p>
              </div>
            </div>

            <div class="skills-item">
              <div class="skills-content">
                <span class="icon-php"></span>
                <h3>PHP</h3>
                <p>
                  PHP is an open-source, server-side programming language that is suited for web development and can be
                  embedded into HTML. PHP gives you the flexibility to connect and work with
                  databases.
                </p>
              </div>
            </div>

            <div class="skills-item">
              <div class="skills-content">
                <i class="project-icon-large fa-brands fa-laravel" aria-hidden="true"></i>
                <h3>Laravel</h3>
                <p>
                Laravel is a PHP framework used for web application development. It provides a structured way to build applications by offering a set of features such as routing, authentication, sessions, and caching.
                </p>
              </div>
            </div>

          </div>

        </div>

        <!-- Contact -->

        <div class="container" id="form">

          <div class="contact-form">

            <div class="contact-info">
              <h2>
                Contact <span class="text-primary">Me</span>
              </h2>

              <p>
                If you would like to get in contact with me for any work opportunities or to discuss anything related
                to
                my
                work, please fill out this contact form
              </p>

              <i class="icon fa-solid fa-envelope"></i>
            </div>

            <form class="form" id="contact-form" action="include/insert-contact.php" method="post">

              <div class="contact-name">
                <input class="input name-item is-required" id="contact-first-name" type="text" name="contact-first-name"
                  placeholder="First Name*">

                <input class="input name-item is-required" id="contact-last-name" type="text" name="contact-last-name"
                  placeholder="Last Name*">
              </div>

              <span class="error-message" id="error-contact-first-name"></span>
              <span class="error-message" id="error-contact-last-name"></span>

              <input class="input is-required" id="contact-email" type="email" name="contact-email" placeholder="Email*">
              <span class="error-message" id="error-contact-email"></span>

              <input class="input" id="contact-subject" type="text" name="contact-subject" placeholder="Subject">
              <span class="error-message" id="error-contact-subject"></span>

              <textarea class="textarea is-required" id="contact-msg" name="contact-msg" placeholder="Message*"></textarea>
              <span class="error-message" id="error-contact-msg"></span>

              <button class="btn btn-form" id="contact-submit" type="submit">
                Submit
              </button>

              <div id="success-message"></div>
              <div id="error-general" class="error-message"></div>
            </form>
          </div>

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

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="js/sticky/sticky.js"></script>
  <script src="js/mobileMenu.js"></script>
  <script src="js/typingEffect.js"></script>
  <script src="js/formValidation.js"></script>
</body>

</html>