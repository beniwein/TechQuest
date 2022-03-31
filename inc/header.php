<header>
    <div class="layer"></div>
    <div class="container banner-size">
        <img class="header-logo"  src="img/logo.png" >  
        <nav class="nav">
            <?php
                $menuItems = array(
                    array("/", "Home"),
                    array("/questions.php", "Form")
                );
                
                foreach ($menuItems as $item) {
                    echo "<a class='nav-link active' aria-current='page' href='$item[0]'>$item[1]</a>";
                }
                ?>
        </nav>
    </div>
</header>

 