<?php include 'head.php'?>
<?php include 'header.php'?>

<?php $page = "my_account";
$q = $_SERVER['QUERY_STRING'];

if($q == "manage_ads"){
    $default = "";
    $manage = "active";
    $tens = "";
    $defaultin = "";
    $managein = "in";
    $defaulttens="";
}else if($q == "manage_tenancies"){
    $default = "";
    $manage = "";
    $tens = "active";
    $defaultin = "";
    $managein = "";
    $defaulttens = "in";
} else {
    $default = "active";
    $manage="";
    $tens="";
    $defaultin = "in";
    $managein = "";
    $defaulttens = "";
}
?>



<div class="container hero-image"><!-- Main image banner -->
    
    
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
               <div class="col-xs-7 property_header">
                   <h2 class="page-header">My Account</h2>
                </div>
                <div class="col-xs-5 property_header-price">
                    <a href="/place_an_ad.php"><button class="btn-success">Place an Ad</button></a>
                </div>
            </div>
        </div>
</div>

<div class="container page-main-content">
    <ul class="nav nav-tabs">
        <li class="<?php echo $default;?>"><a data-toggle="tab" href="#edit_account">Edit Account</a></li>
         <li class="<?php echo $manage;?>"><a data-toggle="tab" href="#manage_ads">My Ads</a></li>
        <li class="<?php echo $tens;?>"><a data-toggle="tab" href="#manage_tenancies">My Tenancies</a></li>
        <li><a data-toggle="tab" href="#messages">Messages <span class="new_message">1</span></a></li>
    </ul>
    <div class="tab-content"> 
        <div id="edit_account" class="tab-pane fade <?php echo $default; echo" ";echo $defaultin;?>">
           <?php include 'content/edit_my-account.php';?>
        </div>
        <div id="manage_tenancies" class="tab-pane fade <?php echo $tens; echo " ";echo $defaulttens;?>">
            <?php include 'content/manage_tenancies.php';?>
        </div>
        <div id="manage_ads" class="tab-pane fade <?php echo $manage; echo" "; echo $managein;?>">
            <?php include 'content/manage_ads.php';?>
        </div>
        <div id="messages" class="tab-pane fade">
            <?php include 'content/messages.php';?>
        </div>
        
    </div>
</div>

<?php include 'footer.php'?>