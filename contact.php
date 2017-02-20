<?php $title="Contact Us"; ?>
<?php include('includes/topnav.php'); ?>

  <header class="alt">
    <div class="container no-pad">
      <h1>Contact Us</h1>
    </div>
  </header>

  <article class="light text-center fa-primary">
    <section class="container">
      <ul class="l-inline l-feature-list flex just-between flex-start flex-wrap flex-grow-ul butt-link-md">
        <li>
          <h2>Phone</h2>
          <h3><i class="fa fa-phone"></i> <span class="text-accent">|</span> <?php echo $contactphone;?></h3>
          <a href="#">Call Now</a>
        </li>
        <li>
          <h2>Address</h2>
          <h3><i class="fa fa-map-marker"></i> <span class="text-accent">|</span> <?php echo $conamellc;?><br><?php echo $addressStreet;?><br><?php echo $addressCityState;?></h3>
        </li>
        <li>
          <h2>Email</h2>
          <h3><i class="fa fa-envelope"></i> <span class="text-accent">|</span> <?php echo $contactemail;?></h3>
          <a href="#">Email Us</a>
        </li>
      </ul>
    </section>
  </article>

  <article class="dark text-white text-center">
    <div class="container">
      <h2>Drop Us A Line!</h2>
      <form class="flex flex-wrap just-center">
        <input type="text" name="First Name" value="" placeholder="First Name">
        <input type="text" name="Last Name" value="" placeholder="Last Name">
        <input type="email" name="Email" value="" placeholder="Email">
        <input type="tel" name="Phone" value="" placeholder="Phone">
        <textarea name="Message" cols="40" rows="1" placeholder="Type your message..."></textarea>
        <input type="submit" name="Send" value="SEND">
      </form>
    </div>
  </article>

<?php include('includes/footer.php'); ?>
