<?php get_template_part('includes/header'); ?>

<style>
  form.p_form br {
    display: none;
  }
  form.p-form .btn {
    background-color: #9ebfb9;
  }
  form.p-form .btn:hover,
  form.p-form .btn:focus {
    background-color: #9ebfb9;
    color: white;
  }
  form.p-form .btn,
  form.p-form .btn:visited {
    background-color: #9ebfb9;
    color: #dedede;
  }
  section#pricing h3,
  section#pricing h4, 
  section#pricing h5 {
    text-align: center;
  }
  section#pricing h3 {
    border-bottom: 4px solid #da72ae;
    text-transform: uppercase;
  }
  section#pricing h4 {
    /*border-bottom: 4px solid #da72ae;*/
    font-style: italic;
    min-height: 35px;
  }
  section#pricing h4 small {
    font-size: 60%;
  }
  section#pricing h5 {
    font-style: italic;
  }
  section#pricing div.content {
    background-color: rgba(218,114,174,0.2);
    min-height: 400px;
    padding: 5px 20px;
  }
  section#pricing p,
  section#pricing ul {
    font-size: 0.8em;
    /*list-style-type: none;*/
  }
  section#sign-up div.content {
    background-color: rgba(158,191,185,0.2);
    margin-top: 40px;
    padding: 5px 20px;
  }
</style>
<div class="container">
  <section class="row">
    <div class="col-xs-12">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
  </section><!-- /.row -->

  <section id="pricing" class="row">
    <div class="col-xs-4">
      <div class="content">
        <h3>Micro Business</h3>
        <h4>FREE</h4>
        <h5>2 users</h5>
        <ul>
          <li>Contact and account management</li>
          <li>Customer activity tracking</li>
          <li>Tasks</li>
          <li>Pro-forma emails</li>
          <li>Lead management</li>
          <li>Sales funnel</li>
          <li>Email support</li>
        </ul>
      </div>
    </div>
    <div class="col-xs-4">
      <div class="content">
        <h3>Small Business</h3>
        <h4>&pound; 50<br/><small>per month, billed annually</small></h4>
        <h5>5 users</h5>
        <p>All free features plus:</p>
        <ul>
          <li>Up to 50 custom fields per record type</li>
          <li>Pre-built workflows</li>
          <li>Your own branding</li>
        </ul>
      </div>
    </div>
    <div class="col-xs-4">
      <div class="content">
        <h3>Custom</h3>
        <h4>
          <a href="#sign-up">
            <span class="dashicons dashicons-email-alt" style="font-size:25px;position:relative;top:-3px;right:2px;text-decoration:none;"></span> Contact Us</a>
        </h4>
        <h5>More users</h5>
        <ul>
          <li>Data migration</li>
          <li>Custom reports</li>
          <li>Deploy your own workflows</li>
        </ul>
      </div>
    </div>
  </section><!-- /.row -->

  <section id="sign-up" class="row">
    <div class="col-xs-12">
      <div class="content">
      <h2>Start your free trial</h2>
      <?php echo do_shortcode('[p_form register id="690" msg_pattern="inOnly" msg_name="omny.enquiry.json" redirect_to="/register/thanks"][/p_form]'); ?>
    </div><!-- /#content -->
    </div>
  </section><!-- /.row -->

</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
