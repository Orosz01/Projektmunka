<nav class="navbar navbar-expand-lg topnav sticky">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">&#9776;</span>
  </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ">
        <?php
            foreach($menupontok as $key => $value){
                $active = '';
                if($_SERVER['REQUEST_URI'] == '/Projektmunka/'.$key) $active = 'active';
                if($key == 'logout' ){
                  ?>
                  <li id="ki" class="nav-item <?php echo $active; ?>">
                  <a class="nav-link" href="index.php?page=fooldal&action=logout"><?php echo $value; ?></a>
            </li>
            <?php
                }else{
            ?>
            <li class="nav-item <?php echo $active; ?>">
                    <a class="nav-link" href="index.php?page=<?php echo $key; ?>"><?php echo $value; ?></a>
            </li>
            <?php
                }  
              }
         ?>
      </ul>
    </div>
</nav>