<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<?php include '../app/View/layout/headDash.php' ?>

<body>
<?php include '../app/View/layout/asideAdmin.php' ?>




<section class="dashboard">
        <?php include_once '../app/View/layout/navbarDash.php'; ?>
         <div class="dash-content">

         <!----------- wikis------------------>
         <div class="title">
                    <i class="uil uil-newspaper"></i>
                    <span class="text">wikis</span>
                </div>
                <table class="activity-table">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>description</th>
                            <th>author</th>
                            <th>categorie</th>
                            <th>date de creation </th>
                            <th>archiver</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>openai</td>
                            <td>Lorem</td>
                            <td>david</td>
                            <td>technologie</td>
                            <td>2024-01-09</td>
                            <td>non</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
    </section>

     <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="./asset/js/admin.js"></script>
</body>
</html>