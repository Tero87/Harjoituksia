<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{ font: 14px sans-serif; color: yellow; text-shadow: 1px 1px red;  font-family: cursive; font-weight: bold; font-style: oblique; background-color: black; 
        }
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
        table{
            color:blue;
        }
        .wrapper2{width: 350px; padding: 20px; 
            
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="wrapper2 mx-auto pt-5">
            <img class="img-fluid" src="img/12.jpg" style="height: 420px;" width="300px">
        </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Comic book database</h2>
                        <a href="welcome.php" class="btn btn-secondary  pull-right "></i> Return</a>
                        <a href="create.php" class="btn btn-success pull-right pl-2"><i class="fa fa-plus"></i> Add new book</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    // Initialize the session
                    session_start();
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM wantedlist";
                    if($result = $pdo->query($sql)){
                        if($result->rowCount() > 0){
                            echo '<table class="table table-bordered table-striped" style="color: yellow;;">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>User</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Author</th>";
                                        echo "<th>Genre</th>";
                                        echo "<th>Action</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch()){
                                    echo "<tr>";
                                        echo "<td>" . $row['omistaja_id'] . "</td>";
                                        echo "<td>" . $row['book_n'] . "</td>";
                                        echo "<td>" . $row['author'] . "</td>";
                                        echo "<td>" . $row['genre'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['book_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['book_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['book_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            unset($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    // Close connection
                    unset($pdo);
                    ?>
                </div>
            </div>        
        </div>
    </div>
       
</body>
</html>