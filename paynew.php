<?php
include 'app/db_connection.php';

if (isset($_POST['submit'])) {
    $Email = $_POST['user_email'];
    $Card_No = $_POST['cno'];

    $pay = date('y/m/d');

    $email_check = "SELECT * FROM users WHERE user_email = ?";
    $email_stmt = $conn->prepare($email_check);
    $email_stmt->bind_param("s", $Email);
    $email_stmt->execute();

    $email_stmt->store_result();

    //template for sql query
    $sql = "INSERT INTO payment(user_email,card_no,paydate) VALUES (?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $Email, $Card_No, $pay);
    $result = $stmt->execute();

    if ($result) {
        header("location:login.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="assets/sytles.css" rel="stylesheet">
    <script type="text/javascript">
        function validate() {
            var pwd1 = document.getElementById("cno");

            if (pwd1.value.length > 16) {
                alert("card number should be min of 16 digits");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="showcase">
        <div class="logo">
            <img src="assets/ABCDK.jpg" alt="">
        </div>
        <div class="wrapper">
            
            <h2>
                Payment Form</h2>
            <form method="post" onsubmit="return validate()" action="paynew.php">
                <h4>
                    Account</h4>
                <div class="input-group">
                    <div class="input-box">
                        <input type="text" placeholder="First Name" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Last Name" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="email" placeholder="Email Adress" required class="name" name="user_email">
                        <i class="fa fa-envelope icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4>
                            Gender</h4>
                        <input type="radio" id="b1" name="gendar" checked class="radio">
                        <label for="b1">Male</label>
                        <input type="radio" id="b2" name="gendar" class="radio">
                        <label for="b2">Female</label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4> Payment Details</h4>
                        <input type="radio" name="pay" id="bc1" checked class="radio">
                        <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>

                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card Number" required class="name" name="cno" maxlength="16" minlength="16">
                        <i class="fa fa-credit-card icon"></i>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card CVC" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                    <div class="input-box">
                        <h4>Expiry Date</h4>
                        <select>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                        <select>
                            <option> Jan</option>
                            <option> Feb</option>
                            <option> Mar</option>
                            <option> Apr</option>
                            <option> May</option>
                            <option> Jun</option>
                            <option> Jul</option>
                            <option> Aug</option>
                            <option> Sep</option>
                            <option> Oct</option>
                            <option> Nov</option>
                            <option> Dec</option>
                        </select>
                        <select>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <button type="submit" name="submit">PAY NOW</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>