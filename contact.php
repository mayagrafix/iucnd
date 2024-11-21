<?php include("includes/header.php"); ?>

<!-- Contact Form Code -->
<?php

$name = $subject = $email = $message = $error = "";
$name_error = $subject_error = $email_error = $message_error = "";

if ( isset( $_POST[ "submit" ] ) ) {

    $name = htmlspecialchars( stripslashes( trim( $_POST[ "name" ] ) ) );
    $subject = htmlspecialchars( stripslashes( trim( $_POST[ 'subject' ] ) ) );
    $email = htmlspecialchars( stripslashes( trim( $_POST[ 'email' ] ) ) );
    $message = htmlspecialchars( stripslashes( trim( $_POST[ 'message' ] ) ) );

    if ( !preg_match( "/^[A-Za-z .'-]+$/", $name ) ) {
        $name_error = 'Invalid name';
    }

    if ( !preg_match( "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email ) ) {
        $email_error = 'Invalid email';
    }

    if ( !preg_match( "/^[A-Za-z .'-]+$/", $subject ) ) {
        $subject_error = 'Invalid subject';
    }

    if ( strlen( $message ) === 0 ) {
        $message_error = 'Your message should not be empty';
    }
}

if ( isset( $_POST[ 'submit' ] ) && empty( $name_error ) && empty( $email_error ) && empty( $subject_error ) && empty( $message_error ) ) {

    $error = "no error";

} else {

    $error = "error";

}


?>
<!-- End Contact Form Code --> 

<!-- Data Section -->
<div class="container"> 
  <!-- 1st row -->
  <div class="row"> 
    <!-- Contact Details -->
    <div class="col-12 col-md-6 mt-4">
      <div class="card bg-verylightpurple h-100">
        <div class="card-header m-0"> Contact Details </div>
        <div class="card-body">
          <h5 class="card-text text-center">Inter University Centre for Nanomaterials and Devices,<br>
            Cochin University of Science and Technology,<br>
            Cochin, Kerala-682022, India.<br>
            Tel.: +91 484 2577804.<br>
            <br>
            Email: <a href="mailto:directoriucnd@cusat.ac.in">directoriucnd@cusat.ac.in</a></h5>
        </div>
      </div>
    </div>
    <!-- End Contact Details --> 
    <!-- Contact Form -->
    <div class="col-12 col-md-6 mt-4">
      <div class="card bg-verylightpurple h-100">
        <div class="card-header m-0">Keep in Touch</div>
        <div class="card-body">
          <form action="<?php echo htmlspecialchars(stripslashes($_SERVER["PHP_SELF"]));?>" method="POST">
            <div class="form-group mt-3 px-3">
            <label for="nameField">Full Name: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="nameField" value="<?php if($error == "error") echo $name; ?>" placeholder="Name">
            <?php

            if ( !empty( $name_error ) ) {
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\">" . $name_error . "</div>";
            }

            ?>
            <label for="emailField" class="mt-2">Email: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="email" id="emailField" value="<?php if($error == "error") echo $email; ?>" placeholder="name@example.com">
            <?php

            if ( !empty( $email_error ) ) {
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\">" . $email_error . "</div>";
            }

            ?>
            <label for="subjectField" class="mt-2">Subject: <span class="text-danger">*</span> </label>
            <input type="text" class="form-control" name="subject" id="subjectField" value="<?php if($error == "error") echo $subject; ?>" placeholder="Subject">
            <?php

            if ( !empty( $subject_error ) ) {
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\">" . $subject_error . "</div>";
            }

            ?>
            <label for="messageField" class="mt-2">Message: <span class="text-danger">*</span></label>
            <br>
            <textarea name="message" class="form-control" id="messageField" placeholder="Message"><?php if($error == "error") echo $message; ?>
</textarea>
            <?php

            if ( !empty( $message_error ) ) {
                echo "<div class=\"alert alert-danger mt-2\" role=\"alert\">" . $message_error . "</div>";
            }

            ?>
            <input type="submit" class="btn orangebutton mt-4 px-3 w-100" name="submit" value="Send Message">
            <?php

            if ( $error == "no error" ) {

                $to = "directoriucnd@cusat.ac.in";
                $from_email = "directoriucnd@cusat.ac.in";
                $message = wordwrap( $message, 70, "\r\n" );
                $messageFormat = "From : " . $name . ".\r\nMessage :\r\n" . $message;

                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email" . "\r\n";

                $a = mail( $to, $subject, $messageFormat, $headers );
                if ( $a ) {
                    echo "<div class=\"alert alert-success mt-2\" role=\"alert\">Your message has been sent. We will get in touch with you shortly.</div>";
                } else {
                    echo "<div class=\"alert alert-danger mt-2\" role=\"alert\">Something went wrong. Your message has not been sent. Please try again.</div>";
                }
            }

            ?>
          </form>
        </div>
      </div>
    </div>
    <!-- End Contact Form --> 
  </div>
  <!-- End 1st row --> 
  
</div>
<!-- End Data Section -->
</div>
<?php include("includes/footer.php"); ?>
