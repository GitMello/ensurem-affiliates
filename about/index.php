<?php $title="About Us"; ?>
<?php include('../includes/topnav.php'); ?>

  <header id="about-hero" class="l-fullpage-header flex flex-center just-center text-center flex-wrap text-shade link-no-shad link-hover-dark">
    <div class="l-fullpage-header-content no-pad-sides butt-link-light-lg">
      <h2>Choice. Freedom. Security. <span class="smart-break">A better quality of life for all…</span></h2>
      <hr>
      <h1>We Believe</h1>
      <a href="#life-insurance"><i class="fa fa-chevron-circle-down"></i> | Meet the Team</a>
      <a href="#life-insurance"><i class="fa fa-chevron-circle-right"></i> | Our Story</a>
    </div>
  </header>

  <a id="we-believe" class="anchor"></a>
  <article class="we-believe alt text-center text-white">
    <div class="container-900">
      <h1>We Believe...</h1>
      <hr>
      <h3>The <strong>American Dream</strong> <span class="smart-break">is still alive</span></h3>
      <h3><strong>Financial Security</strong> is essential <span class="smart-break">to a better quality of life</span></h3>
      <h3><strong>Freedom</strong> is about having choices</h3>
      <h3><strong>Family</strong> is the bedrock <span class="smart-break">of this great country</span></h3>
      <h3>Knowledge &amp; <strong>Education</strong> allow us <span class="smart-break">to make better choices</span></h3>
      <h3>Our dependents deserve <span class="smart-break">to feel <strong>secure</strong></span></h3>
      <hr>
      <h2>Welcome to <em>YOUR</em> <span class="smart-break">Insurance Marketplace</span></h2>
      <h1 class="brand-light"><?php echo $coname;?></h1>
    </div>
  </article>

  <a id="team" class="anchor"></a>
  <article class="team relative">
    <div class="container text-center butt-link-mini">
      <h2>Meet The Team</h2>
      <ul>
        <li>
          <img src="/assets/team/team-1.jpg" alt="<?php echo $team1;?>">
          <h2><?php echo $team1;?></h2>
          <a href="#modal-team-1">Read Bio</a>
          <a href="#modal-team-2">Read Bio</a>
        </li>
        <li>
          <img src="/assets/team/team-1.jpg" alt="<?php echo $team1;?>">
          <h2><?php echo $team1;?></h2>
          <a href="#modal-team-1">Read Bio</a>
          <a href="#modal-team-2">Read Bio</a>
        </li>
      </ul>
    </div>

    <!-- MODALS -->
      <div id="modal-team-1" class="modal white butt-link">
        <div class="container">
          <img src="/assets/team/team-1.jpg" alt="<?php echo $team1;?>">
          <h2><?php echo $team1;?></h2>
          <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
          <?php echo $team1bio;?>
          <a href="#team">close this modal</a>
        </div>
      </div>

      <div id="modal-team-2" class="modal primary text-white butt-link-light link-hover-primary">
        <h2>this another modal</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Donec elementum ligula eu sapien consequat eleifend. Donec nec dolor erat, condimentum sagittis sem. Praesent porttitor porttitor risus, dapibus rutrum ipsum gravida et. Integer lectus nisi, facilisis sit amet eleifend nec, pharetra ut augue. Integer quam nunc, consequat nec egestas ac, volutpat ac nisi. Sed consectetur dignissim dignissim. Donec pretium est sit amet ipsum fringilla feugiat. Aliquam erat volutpat. Maecenas scelerisque, orci sit amet cursus tincidunt, libero nisl eleifend tortor, vitae cursus risus mauris vitae nisi. Cras laoreet ultrices ligula eget tempus. Aenean metus purus, iaculis ut imperdiet eget, sodales et massa. Duis pellentesque nisl vel massa dapibus non lacinia velit volutpat. Maecenas accumsan interdum sodales. In hac habitasse platea dictumst. Pellentesque ornare blandit orci, eget tristique risus convallis ut. Vivamus a sapien neque. Morbi malesuada massa ac sapien luctus vulputate.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Donec elementum ligula eu sapien consequat eleifend. Donec nec dolor erat, condimentum sagittis sem. Praesent porttitor porttitor risus, dapibus rutrum ipsum gravida et. Integer lectus nisi, facilisis sit amet eleifend nec, pharetra ut augue. Integer quam nunc, consequat nec egestas ac, volutpat ac nisi. Sed consectetur dignissim dignissim. Donec pretium est sit amet ipsum fringilla feugiat. Aliquam erat volutpat. Maecenas scelerisque, orci sit amet cursus tincidunt, libero nisl eleifend tortor, vitae cursus risus mauris vitae nisi. Cras laoreet ultrices ligula eget tempus. Aenean metus purus, iaculis ut imperdiet eget, sodales et massa. Duis pellentesque nisl vel massa dapibus non lacinia velit volutpat. Maecenas accumsan interdum sodales. In hac habitasse platea dictumst. Pellentesque ornare blandit orci, eget tristique risus convallis ut. Vivamus a sapien neque. Morbi malesuada massa ac sapien luctus vulputate.</p>
        <a href="#team">close this modal</a>
      </div>
  </article>



<?php include(includes.'footer.php'); ?>
