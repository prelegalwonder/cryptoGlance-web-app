<?php
include('includes/inc.php');
include("includes/header.php");
?>
         
   <div id="dashboard-wrap" class="container sub-nav">
   
    <?php
    require_once('includes/rigwatch.php');
    $rigWatch = new RigWatch();
    
    // Overview
    if (count($rigWatch->getMiners()) > 0) {
        include("templates/panel-overview.php");
    
        // Miners
        foreach ($rigWatch->getMiners() as $minerId => $miner) {
            $minerId++; // Doing this because minerID 0 means all devices in ajax calls
            include("templates/panel-rig.php");
        }
        
        include("templates/modals/switch-pool.php");
    }
   
    ?>

      <?php //require_once("templates/panel-pool.php"); ?>

      <?php //require_once("templates/panel-news_feed.php"); ?>
      
      <?php //require_once("templates/panel-subreddit_feed.php"); ?>
                           
      <?php //require_once("templates/panel-coinwatcher.php"); ?>

      <?php
      if (count($rigWatch->getWallets()) > 0) {
        include("templates/panel-wallet.php");
      }
      ?>
      
   </div>
   <!-- /container -->

   <div class="container">
      <?php require_once("includes/footer.php"); ?>
   </div>
      

<?php //require_once("templates/modals/switch_pool.php"); ?>

<?php //require_once("templates/modals/delete_prompt.php"); ?>