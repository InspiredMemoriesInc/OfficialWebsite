<?php
session_start();

$_POST['razorpay_payment_id'] = $_SESSION['payment_id'];
$html = "<p>Your payment was successful</p>
<p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
echo $html;
echo "<meta http-equiv='refresh' content='5;url=../devlabs/onComplete.php'>";

$email = $_SESSION['email1'];
$to = $email;
$subject = 'Developer Labs Registration Confirmation';
$from = "IM Developer Labs";
$reply = "devlabs@inspiredmemories.in";

$headers = "From: " . strip_tags($reply) . "\r\n";
$headers .= "Reply-To: ". strip_tags($reply) . "\r\n";
$headers .= "CC: office@inspiredmemories.in\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = file_get_contents("email.html");

mail($to, $subject, $message, $headers);
?>

<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBGQSmaf5n10obiKFOL6S_WOPYEWZFWGgs",
            authDomain: "devlabs-df5ac.firebaseapp.com",
            databaseURL: "https://devlabs-df5ac.firebaseio.com",
            projectId: "devlabs-df5ac",
            storageBucket: "",
            messagingSenderId: "523219563814"
        };
        firebase.initializeApp(config);
    </script>
    <!-- JQuery v1.11.3 -->
    <script src="../devlabs/js/jquery.min.js"></script>

    <script>
        var database = firebase.database();
        InitTransaction();

        function randomString(length) {
            return Math.round((Math.pow(36, length + 1) - Math.random() * Math.pow(36, length))).toString(36).slice(1);
        }

        function InitTransaction() {
            console.log("<?php echo $_POST['razorpay_payment_id'] = $_SESSION['payment_id'];?>");
        userid = randomString(10);
            data = {
                paymentId: "<?php echo $_POST['razorpay_payment_id'] = $_SESSION['payment_id'];?>",
                name: "<?php echo $name = $_SESSION['name1']?>",
                college: "<?php echo $college = $_SESSION['college1']?>",
                phone: "<?php echo $phone = $_SESSION['phone1']?>",
                email: "<?php echo $email = $_SESSION['email1']?>",
                semester: "<?php echo $sem = $_SESSION['sem1']?>",
                branch: "<?php echo $branch = $_SESSION['branch1']?>",
                purpose: "<?php echo $purpose = $_SESSION['purpose1']?>",
                know: "<?php echo $know = $_SESSION['know1'];?>",
                twitter: "<?php echo $twitter = $_SESSION['twitter1']?>",
                linkedin: "<?php echo $linkedin = $_SESSION['linkedin1']?>",
                hometown: "<?php echo $hometown = $_SESSION['hometown1']?>",
                field: "<?php echo $field = $_SESSION['field1']?>",
                learn: "<?php echo $learn = $_SESSION['learn1']?>",
                aboutus: "<?php echo $aboutus = $_SESSION['aboutus1']?>",
                lab: "<?php echo $lab = $_SESSION['lab1']?>"
                
            }
            firebase.database().ref('devlabs/registrations/initialized/<?php echo $_POST['razorpay_payment_id'] = $_SESSION['payment_id'];?>').set(data);
        }
    </script>