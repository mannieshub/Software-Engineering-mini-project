<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        nav {
            background: #EDDCBC;
        }

        button {
            background: #F1BB93;
        }

        .sidebar {
            background-color: #EDDCBC;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 60px;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
    <script>
        $(function() {
            $("#navbar").load("nav_page.php");
        });
    </script>
</head>

<body>
    <div id="navbar"></div>
    <?php
    //echo $_POST['CourseID'];
    if (isset($_POST['CourseID']) && !empty($_POST['CourseID'])) {
        $CourseID = $_POST['CourseID'];

        $newUrl = 'http://noteapinun.trueddns.com:28501/SE_Pro-/testDetailForm.php?CourseID=' . $CourseID;
        unset($_POST['CourseID']);


        $host = "noteapinun.trueddns.com";
        $dbport = "28502";
        $dbname = "se_db";
        $dbusername = "web";
        $dbpassword = "web1234";
        $conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
    }

    ?>
    "<div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card my-4 text-dark bg-white border-info">
                    <div class="card-header text-white bg-info">
                        <div class="card-title">
                            <h4 class="bi bi-person-circle">
                                <?php


                                // Display the CourseID in the card title
                                echo '<span>' . $CourseID . '</span>';
                                ?></h4>
                        </div>
                        <div class="card-subtitle">
                            <?php

                            echo '<span>' . 'Elective Course' . '</span>';
                            ?>
                        </div>

                    </div>
                    <div class="card-body d-flex flex-wrap justify-content-between">
                        <div class="card-title d-flex flex-wrap">
                            <?php
                            $CourseID = str_replace('X', '%', $CourseID);
                            $CourseID = str_replace('x', '%', $CourseID);
                            $sql = "SELECT CourseID, CourseName FROM CourseDB WHERE CourseID LIKE :CourseID AND CourseName NOT LIKE '%Elective%'";
                            $stmt = $conn->prepare($sql);

                            // Bind the CourseID parameter to the placeholder
                            $stmt->bindParam(':CourseID', $CourseID);

                            // Execute the query and fetch all results
                            $stmt->execute();
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // Loop through the results and display each CourseName value
                            foreach ($results as $result) {
                            ?>
                                <form style="margin-bottom: 10px" method="post" action="testDetailForm.php">
                                    <input type="hidden" name="CourseID" value="<?= $result['CourseID'] ?>">
                                    <button class="btn btn-warning text-white mx-3" type="submit" data-bs-toggle="collapse" data-bs-target="#id<?= $row2['0'] ?>-2" aria-expanded="false" aria-controls="collapseExample">
                                        <?= $result['CourseName'] ?>
                                    </button>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>




                </div>
            </div>
            <div class="col-1"></div>
        </div>
</body>

</html>