<!-- PHP CODES -->
<?php

    include("connect.php");     // Database connection page included


    // Operation control when the button is pressed
    if(isset($_GET["submit"]))
    {
        $uemail = $_GET["uemail"];
        $upassword = $_GET["upassword"];


        // Transferring data from form to database
        $add = "INSERT INTO form_methods(uemail, upassword) VALUES('$uemail','$upassword')";
        $addRun = mysqli_query($connect, $add);


        // Checking the correct sending of data to the database
        if($addRun){
            $succ_message = "Successfully saved to database with 'GET' method";
        }
        else
        {
            $err_message = 'Registration failed';
 
        }


        // Connection to database terminated
        mysqli_close($connect);
    }

?> <!-- END OF PHP CODE BLOCK -->


<!-- HTML CODES -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- INTEGRATING THE CSS FILE -->
        <link rel="stylesheet" href="style.css">
        <!-- BOOTSTRAP LIBRARY INTEGRATED -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Webpage title -->
        <title>Get Form</title>
    </head>

    <body class="bg-color-body">

        <section class="text-dark">
            <div class="container mt-50">

                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <!-- PHP WARNING CODE BLOCKS -->
                        <?php if (isset($succ_message)) { ?>
                            <div class="alert alert-success" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                </svg>
                                <p class="text-dark"><?php echo $succ_message; ?></p>
                            </div>
                        <?php } ?>

                        <?php if (isset($err_message)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" class="mb-2" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                    <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <p class="text-dark"><?php echo $err_message; ?></p>
                            </div>
                        <?php } ?>
                        <!-- END OF PHP WARNING CODE BLOCKS -->
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 bg-light rounded-4 shadow">
                        <div class="card-bg-primary my-5 mx-5">   

                            <!-- HTML FORM CODES -->
                            <form action="get-form.php" method="get">

                                <div class="mb-5 d-flex justify-content-center">
                                    <h1 class="d-inline-block me-2">
                                        <span class="me-2"><b>LOGIN</b></span>
                                    </h1>
                                </div>

                                <!-- Email -->
                                <div class="mb-5">
                                    <p class="d-inline-block me-2">
                                        <span class="me-2">EMAIL</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" class="mb-2" fill="currentColor" class="bi bi-envelope-open-fill mb-2" viewBox="0 0 16 16">
                                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
                                        </svg>
                                    </p>
                                    <input type="email" class="form-control form-control-lg" placeholder="E-mail address" name="uemail">
                                </div>

                                <!-- Password -->
                                <div class="mb-5">
                                    <p class="d-inline-block me-2">
                                        <span class="me-2">PASSWORD</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                    </p>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="upassword">
                                </div>

                                <!-- Add to database button -->
                                <div class="mb-5 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mb-3 rounded-pill" name="submit">SUBMIT</button>
                                </div>
  
                            </form> <!-- END OF HTML FORM CODE BLOCKS -->

                        </div>
                    </div>
                </div>

            </div>
        </section>

        
        <!-- JAVASCRIPT LIBRARY INTEGRATED -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html> <!-- END OF HTML CODE BLOCK -->