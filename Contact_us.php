<?php
include('includes/contact_us_inc.php'); // linking ma3 el php code ely fl includes file
?>
<div id="contact" class="Contact_us">
      <br><br><br><br>
      <h5 class="h5" id="contact">Contact Us</h5>
      <div class="border-1"></div>
      <form id="validate" class="contact-us" action="homepage.php" method="post">

        <input class="contact-us-form-text" type="text" name="user_name" value=""required placeholder="Enter your name..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="name-v" value="">

        <input class="contact-us-form-text" type="email" name="email" value=""required placeholder="Enter your email..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="email-v" value="">

        <input class="contact-us-form-text" type="text" name="subject" value=""required placeholder="Enter the subject..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="subject-v" value="">

        <input class="contact-us-form-text" type="text" name="message" value=""required placeholder="Enter the message..">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="message-v" value="">

        <input class="contact-us-form-text" type="text" name="phone_number" value="" required placeholder="Enter the phone number +(20)...">
        <div class="input_errors"> <p>  </p>  </div>
        <input type="hidden" name="phone-v" value="valid">


        <input type="submit" class="contact-us-form-btn" name="submit" value="Submit">

        
      </form>
      <?php
          include "contact.php";

if(isset($_POST['submit'])){
    $c=new contact();
    $c->addmessage();
} ?>
    </div>