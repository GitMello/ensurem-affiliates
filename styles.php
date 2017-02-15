<?php $title="Style Guide"; ?>
<?php include('includes/topnav.php'); ?>
    <header>
      <div class="container no-pad">
        <h1>Default Header</h1>
      </div>
    </header>
    <article class="container">
        <h1>Headline H1</h1>
        <h2>Headline H2</h2>
        <h3>Headline H3</h3>
        <h4>Headline H4</h4>
        <h5>Headline H5</h5>
        <h6>Headline H6</h6>
        <p>This here is a little something called a paragraph. Inside of this paragraph we have a <a href="#">link</a>. Cool, huh?</p>
    </article>
    <article class="no-pad">
      <!-- grid -->
      <div class="grid dark text-white" style="padding:1em">
        <p>.grid to hold rows, add .fluid for 100% width</p>
        <!-- row -->
        <div class="row mid" style="padding:1em">
          <p class="text-white">.row to hold columns</p><p class="text-white">Use .col-[sm | md | lg]-[1-12] to create columns to hold content areas</p>

          <div class="col-sm-12 col-md-8 light" style="padding:3px;box-sizing:border-box;"><p class="text-dark">col-sm-12 col-md-8</p>
            <div class="col-pad primary"><p>.col to hold content</p></div>
            <div class="col-sm-12 col-md-8 alt text-white opacity-hover-50-opaque"><p>columns inside of columns</p><p>col-sm-12 col-md-8</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-12 col-md-4 alt text-white opacity-hover-50-opaque"><p>col in col</p><p>col-sm-12 col-md-4</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-12 col-md-4 alt text-white opacity-hover-50-opaque"><p>col-sm-12 col-md-4</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-12 col-md-8 alt text-white opacity-hover-50-opaque"><p>col-sm-12 col-md-8</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-6 alt text-white opacity-hover-50-opaque"><p>col-sm-6</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-6 alt text-white opacity-hover-50-opaque"><p>col-sm-6</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>

          </div>

          <!-- aside -->
          <div class="col-sm-12 col-md-4 accent" style="padding:3px;box-sizing:border-box;"><p>col-sm-12 col-md-4</p>
            <div class="col-pad primary"><p>col &lt;p&gt;</p></div>

            <div class="col-sm-6 alt text-white opacity-hover-50-opaque"><p>col in col</p><p>col-sm-6</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-6 alt text-white opacity-hover-50-opaque"><p>col in col</p><p>col-sm-6</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-12 alt text-white opacity-hover-50-opaque"><p>col-sm-12</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-6 alt text-white opacity-hover-50-opaque"><p>col-sm-6</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>
            <div class="col-sm-6 alt text-white opacity-hover-50-opaque"><p>col-sm-6</p>
              <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
            </div>

          </div>
          <!-- end aside -->

        </div>
        <!-- end row -->
      </div>
      <!-- end grid -->


      <!-- grid -->
      <div class="grid fluid dark text-white" style="padding:1em">
        <p>new .grid with .fluid added for 100% width - also removes margin from .col</p>
        <!-- row -->
        <div class="row mid" style="padding:1em">
          <p class="text-white">new .row</p>

          <div class="col-sm-6 col-md-3 alt" style="padding:3px;box-sizing:border-box;"><p>col-sm-6 col-md-3</p>
            <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
          </div>
          <div class="col-sm-6 col-md-3 alt" style="padding:3px;box-sizing:border-box;"><p>col-sm-6 col-md-3</p>
            <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
          </div>
          <div class="col-sm-6 col-md-3 alt" style="padding:3px;box-sizing:border-box;"><p>col-sm-6 col-md-3</p>
            <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
          </div>
          <div class="col-sm-6 col-md-3 alt" style="padding:3px;box-sizing:border-box;"><p>col-sm-6 col-md-3</p>
            <div class="col-pad primary"><p>col &lt;p&gt;</p></div>
          </div>

        </div>
        <!-- end row -->
      </div>
      <!-- end grid -->
    </article>
    <?php include('includes/footer.php'); ?>
