<!-- PHP CODES -->
<?php

    include("connect.php");     // Database connection page included


    // Operation control when the button is pressed
    if(isset($_POST["submit"]))
    {
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];


        // Transferring data from form to database
        $add = "INSERT INTO students(full_name, email, gender) VALUES('$fullName','$email','$gender')";
        $addRun = mysqli_query($connect, $add);


        // Checking the correct sending of data to the database
        if($addRun){
            echo 'Record successfully added.';
        }
        else
        {
            echo 'Failed to add record!';
 
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
        <!-- BOOTSTRAP LIBRARY INTEGRATED -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- INTEGRATING THE CSS FILE -->
        <link rel="stylesheet" href="style.css">
        <!-- Webpage title -->
        <title>Form</title>
    </head>

    <body>  

        <section id="home" class="text-warning">
            <div class="img-overlay">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card-bg-primary">   

                                <!-- Card header codes -->
                                <div class="card-header text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                    </svg>
                                    <h2 class="card-title mt-2">FORM INPUT</h2>
                                    <p>Please fill the form.</p>
                                </div>

                                <!-- Card body codes -->
                                <div class="card-body">
                                    <!-- HTML form codes. -->
                                    <form action="form.php" method="POST">

                                        <!-- Full name -->
                                        <div class="mb-5">
                                            <p class="d-inline-block me-2">FULLNAME</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-body-text" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
                                            </svg>
                                            <input type="text" class="form-control form-control-lg" placeholder="Full name" name="fullName">
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-5">
                                            <p class="d-inline-block me-2">EMAİL</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill mb-2" viewBox="0 0 16 16">
                                                <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
                                            </svg>
                                            <input type="email" class="form-control form-control-lg" placeholder="E-mail address" name="email">
                                        </div>

                                        <!-- Gender radio buttons -->
                                        <div class="mb-5">
                                            <p>GENDER</p>
                                            <!-- Male radio button -->
                                            <div class="form-check mb-3">
                                                <input type="radio" id="radio1" name="gender" class="form-check-input" value="male">
                                                <label for="radio1" class="form-check-label me-2">Male</label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                                </svg>
                                            </div>
                                            <!-- Female radio button -->
                                            <div class="form-check mb-3">
                                                <input type="radio" id="radio1" name="gender" class="form-check-input" value="female">
                                                <label for="radio1" class="form-check-label me-2">Female</label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <!-- Add to database button -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-check-circle-fill mb-3 me-2" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        
                                        <button type="submit" class="btn btn-warning mb-3" name="submit">SUBMIT</button>

                                    </form>
                                </div>

                                <!-- Card footer codes -->
                                <div class="card-footer mt-3">
                                    <!-- Button to view table in database -->
                                    <a href="students.php" class="btn btn-outline-warning d-block">FORM RESULTS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- JAVASCRIPT LIBRARY INTEGRATED -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
    </body>
</html> <!-- END OF HTML CODE BLOCK -->