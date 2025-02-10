<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}


// Vérifier si un message de succès doit être affiché
$success_message = '';
if (isset($_SESSION['form_success']) && $_SESSION['form_success']) {
    $success_message = 'Message envoyé avec succès !';
    // Réinitialiser le statut de succès
    unset($_SESSION['form_success']);
}
// Vérifier si un message d'erreur doit être affiché
$error_message = '';
if (isset($_SESSION['form_success']) && $_SESSION['form_success'] === false) {
    $error_message = 'Une erreur est survenue. Veuillez réessayer.';
    // Réinitialiser le statut d'erreur
    unset($_SESSION['form_success']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="mediaquery.css" />
</head>
<body>
  <nav id="desktop-nav">
    <div class="logo">DON-LEE Stanislas</div>
    <div>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <nav id="hamburger-nav">
    <div class="logo">DON-LEE Stanislas</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu-links">
        <li><a href="#about" onclick="toggleMenu()">About</a></li>
        <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
        <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
        <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
      </div>
    </div>
  </nav>
  <section id="profile">
    <div class="section__pic-container">
      <img src="./assets/image/profil.png" alt="DON-LEE Stanislas profile picture" />
    </div>
    <div class="section__text">
      <p class="section__text__p1">Hello, I'm</p>
      <h1 class="title">DON-LEE Stanislas</h1>
      <p class="section__text__p2">Developper Web</p>
      <div class="btn-container">
        <button
          class="btn btn-color-2"
          onclick="window.open('./assets/image/stani.PDF')"
        >
          Download CV
        </button>
        <button class="btn btn-color-1" onclick="location.href='#contact'">
          Contact Info
        </button>
      </div>
      <div id="socials-container">
        <img
          src="./assets/image/linkedin.png"
          alt="My LinkedIn profile"
          class="icon"
          onclick="location.href='https://linkedin.com/'"
        />
        <img
          src="./assets/image/github.png"
          alt="My Github profile"
          class="icon"
          onclick="location.href='https://github.com/'"
        />
      </div>
    </div>
  </section>
  <section id="about">
    <p class="section__text__p1">Get To Know More</p>
    <h1 class="title">About Me</h1>
    <div class="section-container">
      <div class="section__pic-container">
        <img
          src="./assets/image/profil.png"
          alt="Profile picture"
          class="about-pic"
        />
      </div>
      <div class="about-details-container">
        <div class="about-containers">
          <div class="details-container">
            <img
              src="./assets/image/experience.png"
              alt="Experience icon"
              class="icon"
            />
            <h3>Experience</h3>
            <p>Frontend Development<br />Backend Development</p>
          </div>
          <div class="details-container">
            <img
              src="./assets/image/education.png"
              alt="Education icon"
              class="icon"
            />
            <h3>Education</h3>
            <p>Nir'Info</p>
          </div>
        </div>
        <div class="text-container">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quis
            reprehenderit et laborum, rem, dolore eum quod voluptate
            exercitationem nobis, nihil esse debitis maxime facere minus sint
            delectus velit in eos quo officiis explicabo deleniti dignissimos.
            Eligendi illum libero dolorum cum laboriosam corrupti quidem,
            reiciendis ea magnam? Nulla, impedit fuga!
          </p>
        </div>
      </div>
    </div>
    <img
      src="./assets/image/arrow.png"
      alt="Arrow icon"
      class="icon arrow"
      onclick="location.href='#experience'"
    />
  </section>
  <section id="experience">
    <p class="section__text__p1">Explore My</p>
    <h1 class="title">Experience</h1>
    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container">
          <h2 class="experience-sub-title">Frontend Development</h2>
          <div class="article-container">
            <article>
              <img
                src="./assets/image/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>HTML</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img
                src="./assets/image/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>CSS</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img
                src="./assets/image/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>JavaScript</h3>
                <p>Basic</p>
              </div>
            </article>
          </div>
        </div>
        <div class="details-container">
          <h2 class="experience-sub-title">Backend Development</h2>
          <div class="article-container">
            <article>
              <img
                src="./assets/image/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>PHP</h3>
                <p>Intermediate</p>
              </div>
            </article>
            <article>
              <img
                src="./assets/image/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>MySql</h3>
                <p>Basic</p>
              </div>
            </article>
            <article>
              <img
                src="./assets/image/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>Git</h3>
                <p>Intermediate</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <img
      src="./assets/image/arrow.png"
      alt="Arrow icon"
      class="icon arrow"
      onclick="location.href='#projects'"
    />
  </section>
  <section id="projects">
    <p class="section__text__p1">Browse My Recent</p>
    <h1 class="title">Projects</h1>
    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container color-container">
          <div class="article-container">
            <img
              src="./assets/image/project-1.png"
              alt="Project 1"
              class="project-img"
            />
          </div>
          <h2 class="experience-sub-title project-title">Project One</h2>
          <div class="btn-container">
            <button
              class="btn btn-color-2 project-btn"
              onclick="location.href='https://github.com/'"
            >
              Github
            </button>
            <button
              class="btn btn-color-2 project-btn"
              onclick="location.href='https://github.com/'"
            >
              Live Demo
            </button>
          </div>
        </div>
        <div class="details-container color-container">
          <div class="article-container">
            <img
              src="./assets/image/project-2.png"
              alt="Project 2"
              class="project-img"
            />
          </div>
          <h2 class="experience-sub-title project-title">Project Two</h2>
          <div class="btn-container">
            <button
              class="btn btn-color-2 project-btn"
              onclick="location.href='https://github.com/'"
            >
              Github
            </button>
            <button
              class="btn btn-color-2 project-btn"
              onclick="location.href='https://github.com/'"
            >
              Live Demo
            </button>
          </div>
        </div>
        <div class="details-container color-container">
          <div class="article-container">
            <img
              src="./assets/image/project-3.png"
              alt="Project 3"
              class="project-img"
            />
          </div>
          <h2 class="experience-sub-title project-title">Project Three</h2>
          <div class="btn-container">
            <button
              class="btn btn-color-2 project-btn"
              onclick="location.href='https://github.com/'"
            >
              Github
            </button>
            <button
              class="btn btn-color-2 project-btn"
              onclick="location.href='https://github.com/'"
            >
              Live Demo
            </button>
          </div>
        </div>
      </div>
    </div>
    <img
      src="./assets/image/arrow.png"
      alt="Arrow icon"
      class="icon arrow"
      onclick="location.href='#contact'"
    />
  </section>
  <section id="contact">
    <div class="contact-container">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">let's get in touch</h3>
          <p class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur corporis doloribus mollitia.</p>
          <div class="info">
            <div class="information">
              <img src="./assets/image/location.png" class="icon" alt="location not found">
              <p>Ambohimanandray Ambohimanarina</p>
            </div>
            <div class="information">
              <img src="./assets/image/email.png" class="icon" alt="email not found">
              <p>stanisdonlee@gmail.com</p>
            </div>
            <div class="information">
              <img src="./assets/image/téléphone.png" class="icon" alt="phone not found">
              <p>+261 34 47 286 30</p>
            </div>
            <div class="social-media">
              <p>contact with us :</p>
              <div class="social-icons">
                <a href="#">
                  <img src="./assets/image/facebook.png" alt="facebook not found">
                </a>
                <a href="#">
                  <img src="./assets/image/instagram.png" alt="instagram not found">
                </a>
                <a href="0344728630">
                  <img src="./assets/image/whatsapp.png" alt="whatsapp not found">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="./php/contact.php" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <!-- Champ caché pour le jeton CSRF -->
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <div class="input-container" >
              <label for="name">Username</label>
              <input type="text" name="name" class="input">
            </div>
            <div class="input-container" >
              <label for="email">Email</label>
              <input type="email" name="email" class="input">
              
            </div>
            <div class="input-container textarea" >
              <label for="message" >Message</label>
              <textarea name="message" class="input"></textarea>
            </div>
            <input type="submit" value="Send" class="btn">
            <!-- Zone pour afficher le message de succès ou d'erreur -->
            <span class="success-message"><?php echo $success_message; ?></span>
            <span class="error-message"><?php echo $error_message; ?></span>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <p>Copyright &#169; 2023 DON-LEE Stanislas. All Rights Reserved.</p>
  </footer>
  <script src="app.js"></script>
  
</body>
</html>