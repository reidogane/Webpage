<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Rei Dogane & The Sidemen</title>
  <link rel="stylesheet" href="https://reidogane.github.io/webpage/cmn/css/style.css">
  <link rel="stylesheet" href="https://reidogane.github.io/webpage/cmn/css/responsive.css">
  <script src="https://kit.fontawesome.com/3c7edd67b2.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="container">
     <div class="header-logo"><a href="https://reidogane.github.io/webpage/index.html">Rei Dogane & The Sidemen</a></div>
       <div class="header-list">
        <ul>
         <a href="https://reidogane.github.io/webpage/news.html"><li>News</li></a>
         <a href="https://reidogane.github.io/webpage/biography.html"><li>Biography</li></a>
         <a href="https://reidogane.github.io/webpage/live.html"><li>Live</li></a>
         <a href="https://reidogane.github.io/webpage/music.html"><li>Music</li></a>
         <a href="https://reidogane.github.io/webpage/gallery.html"><li>Gallery</li></a>
         <a href="https://reidogane.github.io/webpage/contact.html"><li>Contact</li></a>
        </ul>
       </div>
     </div>
    </div>
  </header>

  <div class="page-main">
    <div class="thanks-message">Thank you.</div>
    <div class="display-contact">

      <div class="container">  
        <div class="form-title">入力内容</div>

        <div class="form-item">- First Name -</div>
        <?php echo $_POST['first-name']; ?>

        <div class="form-item">- Last Name -</div>
        <?php echo $_POST['last-name']; ?>

        <div class="form-item">- Email -</div>
        <?php echo $_POST['email']; ?>

        <div class="form-item">- Country -</div>
        <?php echo $_POST['country']; ?>

        <div class="form-item">- Subject -</div>
        <?php echo $_POST['subject']; ?>

        <div class="form-item">■ 名前</div>
        <?php echo $_POST['first-name']; ?>
      </div>

    </div>
  </div>

  <footer>
    <div class="container">
      <div class="footer-social-icons">

        <a href="https://twitter.com/rei_dogane" class="x-twitter">
          <i class="fa-brands fa-square-x-twitter fa-3x" style="color: black;"></i>
        </a>

        <a href="https://www.instagram.com/reidogane/" class="instagram">
          <i class="fa-brands fa-square-instagram fa-3x" style="color:black;"></i>
        </a>

      </div>

      <div class="footer-content">
        <figure class="footer-image">
          <a href="https://reidogane.github.io/webpage/biography.html"><img src="https://reidogane.github.io/webpage/cmn/img/photo5.jpg" width="500" height="375"></a>
          <div class="footer-text">
            <h4>Rei Dogane & The Sidemen</h4>
            <br>
            <p>Rei Dogane & The Sidemen is a 4-piece rock 'n' roll band.</p>
            <p>In 2019, the band was formed in Kobe City, Hyogo Prefecture, Japan.</p>
            <p>The band consists of Rei Dogane (Vo. & Gt.),<br>Haru (Gt.), Jiyu (Ba.), and Shunya (Dr.).</p>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="footer-copyright">
        <p>Copyright © Rei Dogane & The Sidemen All Rights Reserved.</p>
      </div>
    </div>
  </footer>

</body>
</html>
