<?php include "../config/config.php" ?>
<?php include "../libs/App.php"; ?>
<?php include "../includes/header.php" ?>
<!-- if the user has not been redirected here -->
<?php
  if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
         echo "<script>window.location.href='http://localhost/trade/admin/404.php'</script>";
        }
    
?>
<?php session_start(); ?>
<?php
// Retrieve the selected package data from the session

$amount=$_SESSION['deposit'];
// deposit amount
// echo $amount;

?>



<body>
    <div class="me-main-wraper">
        <?php include "../includes/main_navigation.php" ?>
        <!-- breadcrumb -->
        <div class="me-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="me-breadcrumb-box">
                            <h1>Transact Now</h1>
                            <p><a href="<?php echo APPURL ?>/home.php">Home</a>Deposit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Account -->
        <div class="me-my-account me-padder-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="me-my-account-profile">
                            <div class="me-my-profile-head">
                                <div class="me-profile-name">
                                    <h4>Pay with Mpesa</h4>
                                </div>
                                <div class="me-my-profile-img">
                                    <div class="me-my-profile-img-main">
                                        <img src="../assets/images/mpessa.png" class="img-fluid" alt="image">
                                        <div class="me-my-profile-svg" data-bs-toggle="modal"
                                            data-bs-target="#me-profile-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.25 55.25">
                                                <path
                                                    d="M52.618,2.631c-3.51-3.508-9.219-3.508-12.729,0L3.827,38.693C3.81,38.71,3.8,38.731,3.785,38.749
                                            c-0.021,0.024-0.039,0.05-0.058,0.076c-0.053,0.074-0.094,0.153-0.125,0.239c-0.009,0.026-0.022,0.049-0.029,0.075
                                            c-0.003,0.01-0.009,0.02-0.012,0.03l-3.535,14.85c-0.016,0.067-0.02,0.135-0.022,0.202C0.004,54.234,0,54.246,0,54.259
                                            c0.001,0.114,0.026,0.225,0.065,0.332c0.009,0.025,0.019,0.047,0.03,0.071c0.049,0.107,0.11,0.21,0.196,0.296
                                            c0.095,0.095,0.207,0.168,0.328,0.218c0.121,0.05,0.25,0.075,0.379,0.075c0.077,0,0.155-0.009,0.231-0.027l14.85-3.535
                                            c0.027-0.006,0.051-0.021,0.077-0.03c0.034-0.011,0.066-0.024,0.099-0.039c0.072-0.033,0.139-0.074,0.201-0.123
                                            c0.024-0.019,0.049-0.033,0.072-0.054c0.008-0.008,0.018-0.012,0.026-0.02l36.063-36.063C56.127,11.85,56.127,6.14,52.618,2.631z
                                            M51.204,4.045c2.488,2.489,2.7,6.397,0.65,9.137l-9.787-9.787C44.808,1.345,48.716,1.557,51.204,4.045z M46.254,18.895l-9.9-9.9
                                            l1.414-1.414l9.9,9.9L46.254,18.895z M4.961,50.288c-0.391-0.391-1.023-0.391-1.414,0L2.79,51.045l2.554-10.728l4.422-0.491
                                            l-0.569,5.122c-0.004,0.038,0.01,0.073,0.01,0.11c0,0.038-0.014,0.072-0.01,0.11c0.004,0.033,0.021,0.06,0.028,0.092
                                            c0.012,0.058,0.029,0.111,0.05,0.165c0.026,0.065,0.057,0.124,0.095,0.181c0.031,0.046,0.062,0.087,0.1,0.127
                                            c0.048,0.051,0.1,0.094,0.157,0.134c0.045,0.031,0.088,0.06,0.138,0.084C9.831,45.982,9.9,46,9.972,46.017
                                            c0.038,0.009,0.069,0.03,0.108,0.035c0.036,0.004,0.072,0.006,0.109,0.006c0,0,0.001,0,0.001,0c0,0,0.001,0,0.001,0h0.001
                                            c0,0,0.001,0,0.001,0c0.036,0,0.073-0.002,0.109-0.006l5.122-0.569l-0.491,4.422L4.204,52.459l0.757-0.757
                                            C5.351,51.312,5.351,50.679,4.961,50.288z M17.511,44.809L39.889,22.43c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0
                                            L16.097,43.395l-4.773,0.53l0.53-4.773l22.38-22.378c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L10.44,37.738
                                            l-3.183,0.354L34.94,10.409l9.9,9.9L17.157,47.992L17.511,44.809z M49.082,16.067l-9.9-9.9l1.415-1.415l9.9,9.9L49.082,16.067z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="me-account-profile-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                                    preserveAspectRatio="none" height="50" width="100%">
                                    <path class="exqute-fill-white"
                                        d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z">
                                    </path>
                                </svg>
                            </div>


                            <div class="me-my-profile-body">
                                <div class="me-account-summary">
                                    <div class="me-account-summary-head">
                                        <div>
                                            <h4>Pay With Mpesa</h4>
                                        </div>
                                    </div>
                                    <div class="me-account-summary-body me-account-money-detail">
                                        <ul>
                                            <form action="" method="post">
                                                <li><img style="width:100%!important; height:auto!important;object-fit:cover !important;"
                                                        src="../assets/images/mpessa.png" alt="">
                                                <li>
                                                    <div class="me-summary-data">
                                                        <input type="number" placeholder="Enter Phone Number" />
                                                        <input type="hidden" value="" />
                                                    </div>
                                                </li>
                                                <button class="me-btn"
                                                    style="background-color: #90C641 !important; color:white !important;">Deposit
                                                    with Mpesa</button>
                                                </li>

                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="me-my-account-profile">
                            <div class="me-my-profile-head">
                                <div class="me-profile-name">
                                    <h4>Pay with Paypal</h4>

                                </div>
                                <div class="me-my-profile-img">
                                    <div class="me-my-profile-img-main">
                                        <img src="../assets/images/group__1_-removebg-preview.png" class="img-fluid"
                                            alt="image">
                                        <div class="me-my-profile-svg" data-bs-toggle="modal"
                                            data-bs-target="#me-profile-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.25 55.25">
                                                <path
                                                    d="M52.618,2.631c-3.51-3.508-9.219-3.508-12.729,0L3.827,38.693C3.81,38.71,3.8,38.731,3.785,38.749
                                            c-0.021,0.024-0.039,0.05-0.058,0.076c-0.053,0.074-0.094,0.153-0.125,0.239c-0.009,0.026-0.022,0.049-0.029,0.075
                                            c-0.003,0.01-0.009,0.02-0.012,0.03l-3.535,14.85c-0.016,0.067-0.02,0.135-0.022,0.202C0.004,54.234,0,54.246,0,54.259
                                            c0.001,0.114,0.026,0.225,0.065,0.332c0.009,0.025,0.019,0.047,0.03,0.071c0.049,0.107,0.11,0.21,0.196,0.296
                                            c0.095,0.095,0.207,0.168,0.328,0.218c0.121,0.05,0.25,0.075,0.379,0.075c0.077,0,0.155-0.009,0.231-0.027l14.85-3.535
                                            c0.027-0.006,0.051-0.021,0.077-0.03c0.034-0.011,0.066-0.024,0.099-0.039c0.072-0.033,0.139-0.074,0.201-0.123
                                            c0.024-0.019,0.049-0.033,0.072-0.054c0.008-0.008,0.018-0.012,0.026-0.02l36.063-36.063C56.127,11.85,56.127,6.14,52.618,2.631z
                                            M51.204,4.045c2.488,2.489,2.7,6.397,0.65,9.137l-9.787-9.787C44.808,1.345,48.716,1.557,51.204,4.045z M46.254,18.895l-9.9-9.9
                                            l1.414-1.414l9.9,9.9L46.254,18.895z M4.961,50.288c-0.391-0.391-1.023-0.391-1.414,0L2.79,51.045l2.554-10.728l4.422-0.491
                                            l-0.569,5.122c-0.004,0.038,0.01,0.073,0.01,0.11c0,0.038-0.014,0.072-0.01,0.11c0.004,0.033,0.021,0.06,0.028,0.092
                                            c0.012,0.058,0.029,0.111,0.05,0.165c0.026,0.065,0.057,0.124,0.095,0.181c0.031,0.046,0.062,0.087,0.1,0.127
                                            c0.048,0.051,0.1,0.094,0.157,0.134c0.045,0.031,0.088,0.06,0.138,0.084C9.831,45.982,9.9,46,9.972,46.017
                                            c0.038,0.009,0.069,0.03,0.108,0.035c0.036,0.004,0.072,0.006,0.109,0.006c0,0,0.001,0,0.001,0c0,0,0.001,0,0.001,0h0.001
                                            c0,0,0.001,0,0.001,0c0.036,0,0.073-0.002,0.109-0.006l5.122-0.569l-0.491,4.422L4.204,52.459l0.757-0.757
                                            C5.351,51.312,5.351,50.679,4.961,50.288z M17.511,44.809L39.889,22.43c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0
                                            L16.097,43.395l-4.773,0.53l0.53-4.773l22.38-22.378c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L10.44,37.738
                                            l-3.183,0.354L34.94,10.409l9.9,9.9L17.157,47.992L17.511,44.809z M49.082,16.067l-9.9-9.9l1.415-1.415l9.9,9.9L49.082,16.067z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="me-account-profile-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                                    preserveAspectRatio="none" height="50" width="100%">
                                    <path class="exqute-fill-white"
                                        d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z">
                                    </path>
                                </svg>
                            </div>
                            <div class="me-my-profile-body">
                                <div class="me-account-summary">
                                    <div class="me-account-summary-head">
                                        <div>
                                            <h4>Pay With Paypal</h4>
                                        </div>
                                    </div>
                                    <div class="me-account-summary-body me-account-money-detail">
                                        <ul>
                                            <li>
                                                <div class="me-summary-data">
                                                    <div class="container">
                                                        <script
                                                            src="https://www.paypal.com/sdk/js?client-id=AaPtTUTioCG745Ji9rlOY3fdVBzYCVARfHRZZ1r7hlQeOtt_UswgGuhnznR7ft0hbPtXmCqFY7GhaCd9&currency=USD">
                                                        </script>
                                                        <!-- Set up a container element for the button -->
                                                        <div id="paypal"
                                                            style="max-width: fit-content!important; max-width:fit-content !important;">
                                                        </div>
                                                        <script>
                                                        paypal.Buttons({
                                                            // Sets up the transaction when a payment button is clicked
                                                            createOrder: (data, actions) => {
                                                                return actions.order.create({
                                                                    purchase_units: [{
                                                                        amount: {
                                                                            value: '<?php echo $amount?>' // Can also reference a variable or function
                                                                        }
                                                                    }]
                                                                });
                                                            },
                                                            // Finalize the transaction after payer approval
                                                            onApprove: (data, actions) => {
                                                                return actions.order.capture().then(
                                                                    function(
                                                                        orderData) {
                                                                        // Payment is successful, do any necessary post-payment actions
                                                                        window.location.href =
                                                                            'deposit_success.php';
                                                                    }).catch(function(error) {
                                                                    // An error occurred during payment capture
                                                                    console.error(
                                                                        'Payment capture error:',
                                                                        error);
                                                                    // Redirect or show an error message to the user
                                                                    window.location.href =
                                                                        'depostit_error.php';
                                                                });
                                                            },
                                                            // Handle any errors that occur during the payment process
                                                            onError: function(error) {
                                                                console.error('Payment error:', error);
                                                                // Redirect or show an error message to the user
                                                                window.location.href = 'deposit_error.php';
                                                            }
                                                        }).render('#paypal');
                                                        </script>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- My Account Modal-->

                <!-- Footer -->
                <?php include "../includes/footer.php" ?>
            </div>
            <?php include "../includes/footer_links.php" ?>
</body>

</html>