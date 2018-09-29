<?php include 'head.php'?>
<?php include 'header.php'?>

<?php
$q = $_SERVER['QUERY_STRING'];
echo $q;
if($q == "landlord"){
    $tenant="";
    $landlord="selected";
    $student="";
    $Lviz="viz";
    $tenInviz = "inviz";
} elseif($q == "student"){
    $tenant="";
    $landlord="";
    $Sviz = "viz";
    $student="selected";
    $tenInviz = "inviz";
} else {
    $tenant = "selected";
    $landlord="";
    $viz="viz";
    $student="";
    $tenInviz = "";
}
?>

<?php $page = "advanced-search";?>


<div class="container hero-image"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">
      
    </div>
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
               <div class="col-sm-8 property_header">
                   <h2 class="page-header">Advanced Search</h2>
                </div>
                <div class="col-sm-2 property_header-price">
                </div>
            </div>
        </div>
</div>


<div class="container page-main-content"style="background:#fafafa;">
    <div class="row">
    <section class="dropdown-search container-fluid onshow">
        <h4 class="adv_searching text-center">What are you searching for?</h4>
        <div class="dropdown-search_inner container">
            <div class="row" style="background-color:#fafafa">
                <div class="dropdown-search-choice-1 <?php echo $tenant;?>">
                    <span>Accommodation</span>
                </div>
                <div class="dropdown-search-choice-2 <?php echo $landlord;?>">
                    <span>Tenants/Housemates</span>
                </div>
                <div class="dropdown-search-choice-3 <?php echo $student;?>">
                    <span>Swap Accommodation</span><span class="beta"style="color:white!important">Beta</span>
                </div>
            </div>
            <div class="row dropdown-search-options <?php echo $viz; echo " ";echo $tenInviz;?>" id="prop-search-3">
                <div class="col-sm-4">
                    <fieldset>
                        <label>I am looking for...</label>
                        <select id="type"class="housetype">
                            <option value="room">Room / House Share</option>
                            <option value="student">Digs</option>
                            <option value="house">Entire House</option>
                            <option value="apt">Apartment</option>
                            <option value="student">No Preference</option>
                        </select>
                    </fieldset>
                    <fieldset id="bedrooms"class="inviz">
                        <label>No. of Bedrooms</label>
                        <select id="type">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>6+</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Photos</label>
                        <select id="type">
                            <option value="apartment">Has photos</option>
                            <option value="house">I don't mind</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Parking</label>
                        <select id="type">
                            <option value="apartment">Has parking</option>
                            <option value="house">I don't mind</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Couples Accepted</label>
                        <label class="switch">
                          <input type="checkbox" id="couples">
                          <span class="slider round couples"></span>
                          <span class="answer-couples"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-sm-4">
                    <fieldset>
                        <label>City/County</label>
                        <select>
                            <option value="apartment">Dublin</option>
                            <option value="house">Cork</option>
                            <option value="student">Galway</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Furnished</label>
                        <select>
                            <option value="apartment">Furnished</option>
                            <option value="house">Unfurnished</option>
                            <option value="student">I don't mind</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Available From</label><br>
                        <input type="datetime"class="datepicker">
                    </fieldset>
                    <fieldset>
                        <label>Internet Available</label>
                        <select id="type">
                            <option value="apartment">Yes</option>
                            <option value="house">I don't mind</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Open for Viewings&nbsp;&nbsp;<input type="checkbox"></label><br>
                        <small style="font-size:10px;">Search for properties with Open Viewings coming up</small>
                    </fieldset>
                    <a href="/search-results_property.php">
                        <button class="hidden-xs btn-success">Search</button>
                    </a>
                </div>
                <div class="col-sm-4">
                    
                    <fieldset>
                        <label>Area</label>
                        <select>
                            <option value="apartment">Shankill</option>
                            <option value="house">Stoneybatter</option>
                            <option value="student">Glasnevin</option>
                            <option value="student">Crumlin</option>
                        </select>
                    </fieldset>
                    
                    <fieldset>
                         <label>Maximum Cost per Month</label>
                            <p class="homepage-max_price">€<span id="outputdd1">500</span></p>
                            <div class="slidecontainer">
                              <input type="range" min="500" max="2500" value="500" class="" id="myRangedd1">
                            </div>
                    </fieldset>
                    <fieldset>
                        <label>Lease Length</label>
                        <select id="type">
                            <option value="apartment">3 months</option>
                            <option value="apartment">6 months</option>
                            <option value="apartment">9 months</option>
                            <option value="apartment">12 months</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Max no. people</label>
                        <select id="type">
                            <option value="apartment">2</option>
                            <option value="apartment">3</option>
                            <option value="apartment">4</option>
                            <option value="apartment">5</option>
                        </select>
                    </fieldset>
                    <a href="/search-results_property.php">
                        <button class="hidden-xs-up btn-success">Search</button>
                    </a>
                    

                </div>
            </div>
            <div class="row dropdown-search-options <?php echo $Lviz;?> inviz" id="tenant-search-3">
                <div class="col-sm-4">
                    <fieldset>
                        <label>Seeking</label>
                        <select id="type" class="housetype2">
                            <option>Please Select</option>
                            <option value="apt">Apartment</option>
                            <option value="house">House</option>
                            <option value="student">Digs</option>
                            <option value="student">Room(s) / Houseshare</option>
                            <option value="student">Housemates / Team up search</option>
                        </select>
                    </fieldset>
                    <fieldset id="bedrooms2"class="inviz">
                        <label>No. of Bedrooms</label>
                        <select>
                            <option value="apartment">1</option>
                            <option value="house">2</option>
                            <option value="house">3</option>
                            <option value="house">4</option>
                            <option value="house">4+</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Room Type Sought</label>
                        <select>
                            <option value="apartment">Any</option>
                            <option value="house">Single Room</option>
                            <option value="student">Twin Room</option>
                            <option value="student">Shared Room</option>
                            <option value="student">Double Room</option>
                            <option value="student">Master Room</option>
                            <option value="student">En Suite Room</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Employment Status</label>
                        <select>
                            <option value="apartment">Full Time</option>
                            <option value="apartment">Part Time</option>
                            <option value="house">No Preference</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Available From</label><br>
                        <input type="datetime"class="datepicker">
                    </fieldset>
                    <fieldset>
                        <label style="float:left;">Age Range</label>
                        <select class="age-range-l">
                            <option value="apartment">18</option>
                            <option value="house">21</option>
                            <option value="house">25</option>
                            <option value="house">30</option>
                            <option value="house">50</option>
                            <option value="house">No Min.</option>
                        </select>
                        <select class="age-range-r">
                            <option value="apartment">25</option>
                            <option value="house">30</option>
                            <option value="house">50</option>
                            <option value="house">No Max.</option>
                        </select>
                    </fieldset>
                    
                </div>
                <div class="col-sm-4">
                    <fieldset>
                        <label>City/County</label>
                        <select>
                            <option value="apartment">Dublin</option>
                            <option value="house">Cork</option>
                            <option value="student">Galway</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Gender</label>
                        <select>
                            <option value="apartment">No Preference</option>
                            <option value="house">Female</option>
                            <option value="student">Male</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Searching As</label>
                        <select>
                            <option value="apartment">Single Tenant</option>
                            <option value="house">Group of Friends</option>
                            <option value="student">Couple</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Available Days...</label>
            <p class="seeking-checkboxes">Please Choose...</p>
                        <div class="seeking-checkboxes small">
                            <label>Monday
                                <input checked type="checkbox">
                            </label>
                            <label>Tuesday
                                <input checked type="checkbox">
                            </label>
                            <label>Wednesday
                                <input type="checkbox" checked>
                            </label>
                            <label>Thursday
                                <input type="checkbox" checked>
                            </label>
                            <label>Friday
                                <input type="checkbox" checked>
                            </label>
                            <label>Saturday
                                <input type="checkbox" checked>
                            </label>
                            <label>Sunday
                                <input type="checkbox" checked>
                            </label>
                            <div class="close">&times;</div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label>Hobbies & Interests</label>
                        <textarea placeholder="Enter hobbies &amp; interests here. Separate with comma" class="form-control" id="hobbies" value="blue,red"></textarea>
                        <div class="hobbies_results">
                        </div>
                    </fieldset>
                    <a href="/search-results_tenant.php">
                        <button class="hidden-xs btn-success">Search</button>
                    </a>
                </div>
                <div class="col-sm-4">
                    <fieldset>
                        <label>Area</label>
                        <select>
                            <option value="apartment">Shankill</option>
                            <option value="house">Stoneybatter</option>
                            <option value="student">Glasnevin</option>
                            <option value="student">Crumlin</option>
                        </select>
                    </fieldset>
                    
                    <fieldset>
                        <label>Language</label>
                        <select>
                            <option value="apartment">I don't mind</option>
                            <option value="house">English</option>
                            <option value="student">Irish</option>
                            <option value="student">French</option>
                            <option value="student">Spanish</option>
                            <option value="student">Polish</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Work References</label>
                        <label class="switch">
                          <input type="checkbox" id="work">
                          <span class="slider round work"></span>
                          <span class="answer-workrefs"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label>Proof of Funds</label>
                        <label class="switch">
                          <input type="checkbox" id="proof">
                          <span class="slider round proof"></span>
                          <span class="answer-proofoffunds"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label>Landlord Preferences</label>
                        <label class="switch">
                          <input type="checkbox" id="prefs">
                          <span class="slider round prefs"></span>
                          <span class="answer-landlordprefs"></span>
                        </label>
                    </fieldset>
                    <a href="/search-results_property.php">
                        <button class="hidden-xs-up btn-success">Search</button>
                    </a>

                </div>
            </div>
            <div class="row dropdown-search-options <?php echo $Sviz;?> inviz" id="swap-search-3">
                <div class="col-sm-4">
                    <fieldset>
                        <label>Your City/County</label>
                        <select id="type">
                            <option value="apartment">Cork</option>
                            <option value="house" selected>Dublin</option>
                            <option value="student">Galway</option>
                            <option value="student">Limerick</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Your Area</label>
                        <select>
                            <option value="apartment">Artane</option>
                            <option value="apartment">Drumcondra</option>
                            <option value="apartment">Glasnevin</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-sm-4">
                    <fieldset>
                        <label>City/County Sought</label>
                        <select id="type">
                            <option value="apartment">Cork</option>
                            <option value="house" selected>Dublin</option>
                            <option value="student">Galway</option>
                            <option value="student">Limerick</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label>Area Sought</label>
                        <select>
                            <option value="apartment">Artane</option>
                            <option value="apartment" selected>Drumcondra</option>
                            <option value="apartment">Glasnevin</option>
                        </select>
                    </fieldset>
                    <a href="/search-results_tenant.php">
                        <button class="hidden-xs btn-success">Search</button>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/search-results_property.php">
                        <button class="hidden-xs-up btn-success">Search</button>
                    </a>
                

                </div>
            </div>
            
            
        </div>
    </section>
    </div>
</div>



<?php include 'footer.php'?>