<?php
$url = $_GET['url'];
$ip = $_GET['ip'];
?>
<div class="panel panel-success">
    <div class="panel-heading">
        www.<?php echo $url ?>
    </div>
    <div class="panel-body">
        <?php echo ("<iframe src='/partials/crawler.php?url=$url&ip=$ip&www=true' style='width:100%; height:50%;'></iframe>"); ?>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <?php echo $url ?>
    </div>
    <div class="panel-body">
        <?php echo ("<iframe src='/partials/crawler.php?url=$url&ip=$ip&www=false' style='width:100%; height:50%;'></iframe>"); ?>
    </div>
</div>