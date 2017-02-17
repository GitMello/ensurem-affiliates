<?php $title="Contact Us"; ?>
<?php include('includes/topnav.php'); ?>

  <header class="alt">
    <div class="container no-pad">
      <h1>Contact Us</h1>
    </div>
  </header>

  <article class="light text-center">
    <section class="container-900">
      <ul class="l-inline l-feature-list flex just-between flex-start flex-wrap flex-grow-ul butt-link">
        <li>
          <h3>Phone</h3>
          <p><?php echo $contactphone;?></p>
        </li>
        <li>
          <h3>Address</h3>
          <p><?php echo $conamellc;?><br><?php echo $contactaddress;?></p>
        </li>
        <li>
          <h3>Email</h3>
          <p><?php echo $contactemail;?></p>
        </li>
      </ul>
    </section>
  </article>

<?php include('includes/footer.php'); ?>
