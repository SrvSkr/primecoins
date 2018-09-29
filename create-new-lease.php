<?php include 'head.php'?>
<?php include 'header.php'?>

<?php $page = "template";?>


<div class="container hero-image"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">
      
    </div>
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
               <div class="col-sm-8 property_header">
                   <h2 class="page-header">Create a New Lease</h2>
                </div>
                <div class="col-sm-2 property_header-price">
                </div>
            </div>
        </div>

</div>


<div class="container page-main-content">
    <div class="row">
        <div class="col-sm-2"></div>
        
        <div class="col-sm-8 offer">
            <h3>You are offering this accommodation to:</h3><br>
            <div class="row applicant" style="<?php echo $landlordvisible;?>">
                <div class="col-sm-3 my-tenancy_image">
                    <a href="/single-tenant.php"><img src="images/people/male_2.jpg"></a>
                    <div></div>
                </div>
                <div class="col-sm-4 my-tenancy_details">
                    <label>Name</label>
                    <span>Pádraig de Paor</span>
                    <label>Age</label>
                    <span>29</span>
                    <label>Employment Status</label>
                    <span>Self-Employed (Website Designer)</span>
                    <label>Viewing Booked:</label>
                    <span>22/04/18 @ 11:30am</span>
                </div>
                <div class="col-sm-5 my-tenancy_details">
                    <label>Work References</label>
                    <span>Yes</span>
                    <label>Landlord References</label>
                    <span>No</span>
                </div>
            </div>
            <div class="separator"></div>
            <div class="row">
                <div class="col-sm-5">
                    <h3>Create Lease</h3><br>
                    <fieldset>
                       <label>Lease Length</label><br>
                       <input type="text">
                       <select>
                           <option>months</option>
                           <option>years</option>
                       </select>
                    </fieldset>
                   <fieldset>
                       <label>Move In Date</label><br>
                       <input type="date">
                   </fieldset>
                   <fieldset>
                       <label>Rent Amount</label><br>
                       <input type="text" placeholder="€">
                       <select>
                           <option>per month</option>
                           <option>per annum</option>
                           <option>per week</option>
                       </select>
                   </fieldset>
                </div>
                <div class="col-sm-1 text-center"style="padding-top:15px"><h5>or</h5></div>
                <div class="col-sm-5">
                    <h3>Use Existing Lease</h3><br>
                    <fieldset>
                       <label>Select existing lease</label><br>
                       <input type="text">
                       <select>
                           <option>Please Choose</option>
                           <option>EXISTING LEASE 1 -- Your Reference</option>
                           <option>EXISTING LEASE 2 -- Your Reference</option>
                       </select>
                    </fieldset>
                </div>
            </div>
            <div class="separator"></div>
            <div class="row text-center">
                <a href="my_profile.php?manage_tenancies"><button class="btn btn-success">Confirm Lease</button></a>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'?>