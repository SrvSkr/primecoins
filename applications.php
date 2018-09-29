<?php include 'head.php'?>
<?php include 'header.php'?>

<?php $page = "applications";

$q = $_SERVER['QUERY_STRING'];


if (strpos($q,'landlord') !== false) {
    $type = "landlord";
    $adresponses="Your Ad Responses";
    $landlordvisible = "display:block;";
    $tenantvisible = "display:none;";
    $link = "/single-property_6.php";
    $size = "col-sm-7";
} else {
    $type = "tenant";
    $adresponses = "Properties Applied for";
    $landlordvisible = "display:none;";
    $tenantvisible = "display:block;";
    $my = "My&nbsp;";
    $link = "/my_profile.php";
    $offset = "col-sm-offset-2";
    $size = "col-sm-offset-2 col-sm-5";
}

?>


<div class="container hero-image"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">
      
    </div>
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
               <div class="col-sm-offset-2 col-sm-5 property_header">
                   <h2 class="page-header"><?php echo $adresponses;?></h2>
                </div>
                <div class="col-sm-5 property_header-price">
                    <a href="/my_profile.php?manage_ads"><button class="btn btn-primary">Manage My Ads</button></a>
                    <a href="<?php echo $link;?>"><button class="btn btn-primary">View <?php echo $my;?>Ad</button></a>
                </div>
            </div>
        </div>

</div>


<div class="container page-main-content responses">
<div class="row">  
<div class="col-sm-offset-2 col-sm-8 filters" style="<?php echo $landlordvisible;?>">
    <div class="row" style="<?php echo $landlordvisible;?>">
        <div class="col-sm-10 my-pref_areas" style="margin-bottom:30px;overflow:auto;height:auto">
            <h4>Filters <i class="fa fa-sliders pull-right"></i></h4>
                <label class="county_choice" style="width:20%">
                    <span>Sort by Age</span>
                </label>
                <label class="county_choice" style="width:80%">
                    <select style="width:49%;">
                        <option>No min. age</option>
                        <option>18</option>
                        <option>21</option>
                        <option>25</option>
                        <option>30</option>
                        <option>40+</option>
                    </select>
                
                    <select style="width:49%;">
                        <option>No max. age</option>
                        <option>21</option>
                        <option>25</option>
                        <option>30</option>
                        <option>40</option>
                        <option>50</option>
                    </select>
                </label>
            <div style="width:100%;height:1px;background-color:#ccc;margin:10px 0px;float:left;opacity:0.3"></div>
                <label class="county_choice" style="width:20%;">
                    <span>Sort by Gender</span>
                </label>
                <label class="county_choice" style="width:50%">
                    <select>
                        <option>No preference</option>
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </label>
            <div style="width:100%;height:1px;background-color:#ccc;margin:10px 0px;float:left;opacity:0.3"></div>
                <label class="county_choice">
                    <input type="checkbox" class="my_profile-area_choice">
                    <span>Employment References</span>
                </label>
                <label class="county_choice">
                    <input type="checkbox" class="my_profile-area_choice">
                    <span>Landlord References</span>
                </label>
                <label class="county_choice">
                    <input type="checkbox" class="my_profile-area_choice">
                    <span>Proof of Funds</span>
                </label>
            <div style="width:100%;height:1px;background-color:#ccc;margin:10px 0px;float:left;opacity:0.3"></div>
            <label style="display: block;width: 100%;font-size: 12px;color: #515151;float: left;">Searching as</label>
                <label class="county_choice">
                    <input type="checkbox" class="my_profile-area_choice">
                    <span>Single Tenant</span>
                </label>
                <label class="county_choice">
                    <input type="checkbox" class="my_profile-area_choice">
                    <span>Couples</span>
                </label>
                <label class="county_choice">
                    <input type="checkbox" class="my_profile-area_choice">
                    <span>Group of Friends</span>
                </label>
            <div style="width:100%;height:1px;background-color:#ccc;margin:10px 0px;float:left;opacity:0.3"></div>
                <div style="width:100%;float:left">
                    <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-offset-2 col-sm-8" style="padding-top:30px;">
    <div class="row applicant" style="<?php echo $landlordvisible;?>">
                <div class="col-sm-3 my-tenancy_image">
                    <a href="/single-tenant.php"><img src="images/people/male_2.jpg"></a>
                    <div></div>
                </div>
                <div class="col-sm-3 my-tenancy_details">
                    <label>Name</label>
                    <span>Pádraig de Paor</span>
                    <label>Age</label>
                    <span>29</span>
                    <label>Employment Status</label>
                    <span>Self-Employed (Website Designer)</span>
                    <label>Viewing Booked:</label>
                    <span>22/04/18 @ 11:30am</span>
                </div>
                <div class="col-sm-3 my-tenancy_details">
                    <label>Work References</label>
                    <span>Yes</span>
                    <label>Landlord References</label>
                    <span>No</span>
                    <div class="viewoptions mybtns" style="display:flex; align-items: center;padding-bottom:5px">
                        <a href="/single-tenant_f3.php"> <button class="btn btn-primary">View</button></a>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewings-modal-indiv">Invite</button><br>
                        <button class="btn btn-danger">Decline</button>
                    </div>
                    <a href="create-new-lease.php"><button class="btn btn-success" style="font-size:11px">Offer Accommodation</button></a>
                </div>
    </div>
    <div class="row applicant" style="<?php echo $landlordvisible;?>">
            <div class="separator"></div>
                <div class="col-sm-3 my-tenancy_image">
                    <a href="/single-tenant_f3.php"><img src="images/people/group_3.jpg"></a>
                    <div></div>
                </div>
                <div class="col-sm-3 my-tenancy_details">
                    <label>Name</label>
                    <span>Éilis Ní Faoiláin</span>
                    <label>Age</label>
                    <span>30</span>
                    <label>Employment Status</label>
                    <span>Employed (Architect)</span>
                </div>
                <div class="col-sm-3 my-tenancy_details">
                    <label>Work References</label>
                    <span>Yes</span>
                    <label>Landlord References</label>
                    <span>Yes</span>
                    <div class="viewoptions mybtns" style="display:flex; align-items: center;padding-bottom:5px">
                        <a href="/single-tenant_f3.php"> <button class="btn btn-primary">View</button></a>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewings-modal-indiv">Invite</button><br>
                        <button class="btn btn-danger">Decline</button>
                    </div>
                    <a href="create-new-lease.php"><button class="btn btn-success" style="font-size:11px">Offer Accommodation</button></a>
                </div>
    </div>
    <div class="row" style="<?php echo $tenantvisible;?>">
            <div class="separator"></div>
                <div class="col-sm-3 my-tenancy_image">
                    <a href="/single-property.php"><img src="images/properties/1.jpg"></a>
                    <div></div>
                </div>
                <div class="col-sm-5 my-tenancy_details">
                    <label>Property</label>
                    <span>Manor Villas, Harolds Cross</span>
                    <label>Applied</label>
                    <span>01/02/18</span>
                </div>
                <div class="col-sm-3 my-tenancy_details">
                    <a href="/single-property.php"> <button class="btn btn-primary">View Property</button></a>
                    <button class="btn btn-danger">Delete Application</button>
                </div>
    </div>
    <div class="row" style="<?php echo $tenantvisible;?>">
            <div class="separator"></div>
                <div class="col-sm-3 my-tenancy_image">
                    <a href="/single-property_4.php"><img src="images/properties/4.jpg"></a>
                    <div></div>
                </div>
                <div class="col-sm-5 my-tenancy_details">
                    <label>Property</label>
                    <span>Viking Harbour Apartments</span>
                    <label>Applied</label>
                    <span>31/01/18</span>
                </div>
                <div class="col-sm-3 my-tenancy_details">
                    <a href="/single-property_4.php"> <button class="btn btn-primary">View Property</button></a>
                    <button class="btn btn-danger" data-target="#delete-app-modal" data-toggle="modal">Delete Application</button>
                </div>
    </div>
    </div>
</div>
</div>



<?php include 'footer.php'?>