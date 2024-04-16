<?php
include 'app/db_connection.php';

if (isset($_POST['submit'])) {
    $Name = $_POST['username'];
    $Email = $_POST['user_email'];
    $Password = $_POST['user_password'];
    $Phone = $_POST['PHONE'];
    $City = $_POST['CITY'];

    $pass = password_hash($Password, PASSWORD_DEFAULT);

    $email_check = "SELECT * FROM users WHERE user_email = ?";
    $email_stmt = $conn->prepare($email_check);
    $email_stmt->bind_param("s", $Email);
    $email_stmt->execute();

    $email_stmt->store_result();
    if ($email_stmt->num_rows() > 0) {
?>
        <script>
            alert("User Already Registered!")
        </script>
<?php
    } else {

        //template for sql query
        $sql = "INSERT INTO users(username, user_email, user_password, PHONE, CITY) VALUES (?,?,?,?,?)";

        //preparing the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssis", $Name, $Email, $pass, $Phone, $City);
        $result = $stmt->execute();

        if ($result) {
            header("location:sub.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - ABCDK</title>
    <link rel="stylesheet" href="assets/style.css" media="all" type="text/css">
    <script type="text/javascript">
        function validate() {
            var pwd1 = document.getElementById("user_password");

            if (pwd1.value.length < 6) {
                alert("Password must have more than 6 characters");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>


    <header class="showcase">

4
        <div class="logo">
            <img src="assets/ABCDK.jpg">
        </div>

        <div class="showcase-content">
            <div class="formm">
                <form action="signup.php" method="post">
                    <h2>CREATE NEW ACCOUNT</h2>

                    <div class="info">
                        
                        <input type="text" class="email" placeholder="Enter username" id="username" name="username" required>

            
                        <input type="email" class="email" placeholder="Enter email" id="email" name="user_email" required>

                        
                        <input type="password" class="email" placeholder="Enter password" id="password" name="user_password" required>


                        <input id="eph" type="tel" class="email" name="PHONE" placeholder="Enter your Phone number"  required><br><br>
                        <input type="text" class="email" name="CITY" placeholder="Enter your City" required>

                    </div>
                    <div class="btn">
                        <button class="btn-primary" type="submit" name="submit">Sign Up</button>
                    </div>
                </form>

            </div>

            <div class="signup">
                <p>Already have an account</p>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>
    <script>  
        
            const Econtact = document.getElementById("eph");
                Econtact.addEventListener("input", (e) => {
                    const Evalue = e.currentTarget.value; 
                if (Evalue.length!=10){
                    Econtact.setCustomValidity("Phone Number must be 10 digits.");
                    Econtact.reportValidity();
                } else { Econtact.setCustomValidity(""); }
            });  
    </script>

</body>

</html>