    <div class="header">
        <div id="goToHead">
          <img src=<?php  echo BASE_URL.'img'.DS.'gimnazia.jpg';?> width="400" height="130">
        </div>
            <div id="menuHead">
             <a href="<?php echo BASE_URL.'account'.DS.'about.php';?>">
                  <div style="margin-right:5%">
                     Про нас
                    </div>
            </a>
                <a href="<?php echo BASE_URL.'blocks'.DS.'feedback.php';?>">
                 <div>Школяру</div>
                </a>
            </div>
        <?php
 if(isLoggedIn())
 {
     echo '<div class="warning clr">Вітаю, ви зайшли як<strong> '.$_SESSION['user']['login'].'</strong>
     <a href="'.BASE_URL.'account'.DS.'logout.php">Exit</a>
           </div>';
}
?>

    </div>


