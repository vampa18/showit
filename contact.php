<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ratisisvelashvili2016@gmail.com";
    $email_subject = "Customer Help";
 
    function died($error) {
        // your error code can go here
        echo "ვწუხვართ მაგრად თქვენს მიერ გამოგზავნილ წერილში იყო შეცდომა(ები). ";
        echo "შეცდომები:.<br /><br />";
        echo $error."<br /><br />";
        echo "გთხოვთ დაბრუნდეთ და შეასწოროთ ისინი.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('სამწუხაროდ წარმოიშვა შეცდომა თქვენს მიერ გამოგზავნილ ფორმაში.გთხოვთ ცადოთ თავიდან.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'თქვენს მიერ მითითებული იმეილი არ არის ხელმისაწვდომი.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'თქვენს მიერ მითითებული სახელი არ არის ხელმისაწვდომი.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'თქვენს მიერ მითითებული გვარი არ არის ხელმისაწვდომი.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'თქვენს მიერ მითითებული მესიჯი არ არის ხელმისაწვდომი.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "ფორმის დეტალები იხილით ქვევით.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
გმადლობთ რომ დაგვიკავშირდით.გთხოვთ დაელოდოთ პასუხს.
 
<?php
 
}
?>