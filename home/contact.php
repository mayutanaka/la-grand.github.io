<?php
if($_POST["submit"]) {
    $recipient="mayu5tanaka@gmail.com";
    $subject="contact-subject";
    $sender=$_POST["contact-name"];
    $senderEmail=$_POST["contact-email"];
    $message=$_POST["contact-message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mayu Tanaka | Contact</title>
    <!-- <link rel="icon" href="data/louisville_fire-01.png"> -->
    <!-- CSS imports -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='css/style.css'/>
  </head>
  <body class="page-fade">
    <script>document.body.className += ' fade-out';</script>
    <!-- Nav Menu -->
    <div class="nav">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about-me.html">ABOUT ME</a></li>
        <li><a href="resume.html">RESUME</a></li>
        <li><a href="project-samples.html">PROJECT SAMPLES<a></li>
        <li class="current-page"><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
    <!-- Contact form -->
    <div class="accordian">
      <?=$thankYou ?>
      <form class="needs-validation">
        <div class="form-group">
          <label for="contact-name">*Name</label>
          <input type="text" class="form-control form-control-sm" id="contact-name" name="contact-name" placeholder="First Last" required>
        </div>
        <div class="form-group">
          <label for="contact-email">*Email address</label>
          <input type="email" class="form-control form-control-sm" id="contact-email" name="contact-email" placeholder="name@example.com" required>
        </div>
        <div class="form-group">
          <label for="contact-subject">Subject</label>
          <input type="text" class="form-control form-control-sm" id="contact-subject" name="contact-subject" placeholder="Site Inquiry">
        </div>
        <div class="form-group">
          <label for="contact-message">*Message</label>
          <textarea class="form-control form-control-sm" rows="10" id="contact-message" name="contact-message" placeholder="" required>
        </div>
        <button class="btn btn-sm" type="submit">Submit</button>
      </form>
    </div>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
    <!-- JS imports -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="src/main.js"></script>
  </body>
</html>
