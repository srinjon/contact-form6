<?php
/**
 * Plugin Name:My Plugin
 */
$path=preg_replace('/wp-content.*$/','',__DIR__);
require_once($path.'/wp-load.php');
function userinf(){
   
    if(isset($_POST['submit'])){
        global $wpdb;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $wpdb->insert('wp_contactform',array(
            'fname'=>$fname,
            'lname'=>$lname,
            'email'=>$email,
            'number'=>$number,
            'message'=>$message
        ));
    }
?>
<form action="" method="post">
   <label>First Name:</label>
   <input type="text" name="fname" />
   <br>
   <label>Last Name:</label>
   <input type="text" name="lname" />
   <br>
   <label>Email Id:</label>
   <input type="email" name="email" />
   <br>
   <label>Phone No.</label>
   <input type="number" name="number" />
   <br>
   <label>Your Message.</label>
   <textarea placeholder="Enter your questions or comments" name="message"></textarea>
   <br>
   <input type="submit" name="submit" value="Submit" />
</form>
<?php
}
add_shortcode('userinfo','userinf');
?>