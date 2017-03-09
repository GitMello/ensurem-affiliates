<?php $title="Contact Us"; ?>
<?php include('../includes/topnav.php'); ?>

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
        <label class="flex relative">
          <span>First Name*</span>
          <input  placeholder="Your first name?" type="text" tabindex="1" required="required">
        </label>
        <label class="flex relative">
          <span>Last Name*</span>
          <input placeholder="Your last name?" type="text" tabindex="2" required="required">
        </label>
        <label class="flex relative">
          <span>Email*</span>
          <input placeholder="Your email?" type="email" tabindex="3" required="required">
        </label>
        <label class="flex relative">
          <span>Telephone*</span>
          <input placeholder="Your phone #?" type="tel" tabindex="4" required="required">
        </label>
        <label class="flex relative">
          <span>Message*</span>
          <textarea cols="21" placeholder="Type your message..." type="email" tabindex="5" required="required"></textarea>
        </label>
        <button name="submit" type="submit" id="contact"><i class="fa fa-send"></i> | Send</button>
      </form>
    </div>
  </article>

<?php include(includes.'footer.php'); ?>
