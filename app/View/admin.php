<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    
    <link rel="stylesheet" href="./asset/css/adminStyle.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <!-- links bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- link css -->
    <title>Admin Dashboard </title>
</head>
<body>
    <nav>
        <div class="logo-name">
            
            <span class="logo_name">welcome <b style="color:brown;"> <?php echo $_SESSION['username']; ?></b></span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
               
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">categories</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">statistiques</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-tag"></i>
                    <span class="link-name">tag</span>
                </a></li>

                <!-- <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li> -->
                
                <!-- <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
                <li><a href="?uri=/logout/logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
                <!-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li> -->
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="./asset/images/profile-img.jpg" alt="">
           
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <!-- <i class="uil uil-tachometer-fast-alt"></i> -->
                    <i class="uil uil-chart"></i>
                    <span class="text">statistiques</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-newspaper"></i>
                        <span class="text">Total Wiki's</span>
                        <span class="number">70</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-user"></i>
                        <span class="text">utilisateurs</span>
                        <span class="number">20</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="text">Total Categories</span>
                        <span class="number">10</span>
                    </div>
                </div>
            </div>
            <!-- <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                  
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                      
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
         
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
          
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div> -->



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





<!----------- categories------------------>
                <div class="title">
                <i class="uil uil-files-landscapes"></i>
                    <span class="text">categories</span>
                </div>
                <table class="activity-table">
                    <thead>
                        <tr>
                            <th>id categorie</th>
                            <th>name categories</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>technology</td>    
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>history</td>
                        </tr>
                    </tbody>
                </table>




<!----------- tags------------------>
                <div class="title">
                    <i class="uil uil-tag"></i>
                    <span class="text">tags</span>
                </div>
                <table class="activity-table">
                    <thead>
                        <tr>
                            <th>id tag</th>
                            <th>name tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>programming</td>    
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>design</td>
                        </tr>
                    </tbody>
                </table>





            </div>
        </div>
    </section>


     <!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="./asset/js/admin.js"></script>
</body>
</html>