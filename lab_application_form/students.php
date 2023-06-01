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
        <title>Students</title>
    </head>

    <body>

        <section id="home" class="text-warning">
            <div class="img-overlay">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card-bg-primary">   

                                <!-- Card header codes -->
                                <div class="card-header text-center mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                    </svg>
                                    <h2 class="card-title mt-2">FORM RESULTS</h2>
                                </div>

                                <!-- Card body codes -->
                                <div class="card-body">
                                    <!-- Table creation codes -->
                                    <table id="users" class="table table-primary text-dark table-bordered border-dark table-striped table-hover">
                                        <!-- Table header codes -->
                                        <thead class="table table-dark text-warning">
                                            <tr>
                                                <th>id</th>
                                                <th>full_name</th>
                                                <th>email</th>
                                                <th>gender</th>
                                            </tr>
                                        </thead>
                                        
                                        <!-- Table body codes -->
                                        <tbody>
                                            <!-- 
                                                PHP CODES
                                                PHP codes to display database data in table
                                             -->
                                            <?php
                                                
                                                // Database connection page included
                                                include("connect.php");

                                                // Specifying which database to pull data from
                                                $select = "SELECT * FROM students";
                                                $result = $connect->query($select);

                                                // Successful display of data in the table
                                                if($result->num_rows>0)
                                                {
                                                    while($pull = $result->fetch_assoc())
                                                    {
                                                        echo "
                                                        <tr>
                                                            <td>".$pull['id']."</td>
                                                            <td>".$pull['full_name']."</td>
                                                            <td>".$pull['email']."</td>
                                                            <td>".$pull['gender']."</td>
                                                        </tr>
                                                        ";
                                                    }
                                                }
                                                // Data cannot be displayed in the table
                                                else
                                                {
                                                    echo "No data recorded in the database could be found.";
                                                }

                                            ?> <!-- END OF PHP CODE BLOCK -->

                                        </tbody>
                                    </table>

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