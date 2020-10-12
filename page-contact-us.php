<div class="container contact">
  <?php get_header(); ?>
  <main>
    <article>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
    <article>
      <div class="form-wrapper">
        <h1>Leave us a message</h1>
        <form class="contact-us" method="POST" name="form">
          <input type="text" name="first-name" placeholder="First">
          <input type="text" name="last-name" placeholder="Last">
          <input type="email" name="email" placeholder="Email">
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" placeholder="Your message..."></textarea>
          <button type="submit">
            <i class="fas fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </article>
  </main>
  <?php get_footer(); ?>
</div>

<?php
if (isset($_POST)) {
  $firstname = $_POST['first-name'];
  $lastname = $_POST['last-name'];
  $subject = $_POST['subject'];
  $from = $_POST['email'];
  if (isset($firstname) && isset($lastname)) {
    $from = "{$firstname} {$lastname} <{$from}>";
  };
  $message = $_POST['message'];

  $to = "info@electricairstudios.com";
  $subject = "EAS Inquiry: " . $subject;
  $headers = "From: info@electricairstudios.com" . "\r\n";
  $headers .= "Return-Path: " . $from . "\r\n";
  $headers .= "Reply-To: " . $from . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP" . phpversion();
  wp_mail($to, $subject, $message, $headers);
}
?>
