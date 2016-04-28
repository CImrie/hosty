<?php
include('shared/header.php');

include('partials/inputform.php');
if (
    isset($_GET['url'])
    &&
    isset($_GET['ip'])
) {
    include('partials/results.php');
}

include('shared/footer.php');