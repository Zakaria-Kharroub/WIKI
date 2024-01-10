<nav style="margin-right:50px;">
        <div class="logo-name">
            
            <span class="logo_name">welcome <b style="color:brown;"> <?php echo $_SESSION['username']; ?></b></span>
        </div>
        <div class="menu-items" >
            <ul class="nav-links">
                <!-- statistiques  -->
                 <li><a href="?uri=admin">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">statistiques</span>
                </a></li>

                <!-- categories -->
                <li><a href="?uri=admin/categorie">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">categories</span>
                </a></li>
                <!-- tags -->
                <li><a href="?uri=admin/tag">
                    <i class="uil uil-tag"></i>
                    <span class="link-name">tag</span>
                </a></li>

                <!-- wikis -->
                <li><a href="?uri=admin/wikiAdmin">
                    <i class="uil uil-newspaper"></i>
                    <span class="link-name">wiki</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="?uri=/logout/logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

            </li>
            </ul>
        </div>
    </nav>