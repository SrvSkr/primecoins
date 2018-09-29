<?php include 'head.php'?>
<?php include 'header.php'?>

<?php $page = "place_an_ad";?>

<div class="container hero-image"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">
      
    </div>
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
               <div class="col-xs-12 property_header">
                   <h2 class="page-header">Place an Ad</h2>
                   <span>Enter as much information as possible to attract the best matches to your property</span>
                </div>
            </div>
        </div>

</div>

<div class="container page-main-content">
    <div class="placeanad_choose row">
        <div class="col-sm-2"></div>
        <div class="col-xs-6 col-sm-4 choice" id="ad_prop">
            <div></div>
            <p>I am offering accommodation</p>
        </div>
        
        <div class="col-xs-6 col-sm-4 choice" id="ad_ten">
            <div></div>
            <p>I am looking for accommodation</p>
        </div>
    </div>
    
<div class="row mobdf">
    
<div class="col-sm-2"></div>
 <div class="col-sm-8 my_account ad_prop">
    <div class="progress-slider">
        <div class="progressbar bar-1"></div>
        <div class="progressbar bar-2"></div>
        <div class="progressbar bar-3"></div>
    </div>         
    <section class="inner">
      <section class="inner-container">
        <div class="my_account-property-preferences placeanad">
            <h2 id="prop_pref">Basic Information</h2>
            <span>I am posting an ad for...</span>
            <div class="row" style="margin-bottom:30px;">
             <div class="col-sm-5">
                <fieldset>
                    <label>House</label>
                    <label class="switch">
                      <input type="checkbox" id="entire_property">
                      <span class="slider round entire_property house3"></span>
                      <span class="answer-entire_property"></span>
                    </label>
                </fieldset><fieldset>
                    <label>Apartment</label>
                    <label class="switch">
                      <input type="checkbox" id="entire_property">
                      <span class="slider round entire_property apt3"></span>
                      <span class="answer-entire_property"></span>
                    </label>
                </fieldset>
                <fieldset>
                    <label>Room/House Share</label>
                    <label class="switch">
                      <input type="checkbox" id="entire_property">
                      <span class="slider round entire_property"></span>
                      <span class="answer-entire_property"></span>
                    </label>
                </fieldset>
                </div>
                <div class="col-sm-5">
                    <fieldset>
                        <label>Studio</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="">Digs</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label>Student Swap</label>
                        <span class="beta">beta</span>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                </div>  
              </div>
            <div class="thirty"></div>
              <div class="row">
                <div class="col-sm-10 placeanad_basic-information">
                    <form>
                        <fieldset>
                            <label>City/County</label>
                            <select>
                                <option>Please Choose</option>
                                <option>Dublin</option>
                                <option>Galway</option>
                                <option>Limerick</option>
                                <option>Cork</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Area</label>
                            <select>
                                <option>Please Choose</option>
                                <option>Stoneybatter</option>
                                <option>Glasnevin</option>
                                <option>Portobello</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Landlord Status</label>
                            <select>
                                <option>I am a live-out landlord</option>
                                <option>I am an agent</option>
                                <option>I am a tenant subletting a room</option>
                            </select>
                        </fieldset>
                        <fieldset id="bedrooms3" class="inviz">
                            <label>Bedrooms</label>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </fieldset>
                        <fieldset id="addviewing">
                            <label>Set Viewing Times</label>
                            <input style="display:inline" class="moreinputs orig" type="date"><span class="morepls" style="">+</span>
                        </fieldset>
                        
                    </form>
                    </div>
                </div>
            </div>
          <div class="thirty"></div>
            <div class="placeanad_facilities">
                <h2 id="placeanad_features">Facilities and Features </h2>
                <div class="row">
                    <div class="col-sm-12 my-pref_areas">
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>House Alarm</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Wired for Cable TV</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Wired for Broadband</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Washing Machine</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Air Con</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Wheelchair Access</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>En-suite</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Unfurnished</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Dishwasher</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Kitchenware</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Bike Storage</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Pets Allowed</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Balcony</span>
                        </label>
                        
                    </div>
                </div>
            </div>
          <div class="row text-center" style="margin-bottom:15px;margin-top:30px;">
            <a id="next"><button class="amber" id="next">Next</button></a>
            <a href="/my_profile.php?manage_ads"><button class="hg9 inviz">Publish Advert</button></a>
        </div>
        </section>
        <section class="inner-container">        
            <div class="my-account_supporting-documents">
                <h2 id="supp_docs">Lease Details </h2>
                <div class="row">
                    <div class="col-sm-10">
                        <form class="lease-details">
                            <fieldset>
                                <label>Rent Amount</label>
                                <input type="text" placeholder="€">
                            </fieldset>
                            <fieldset>
                                <label>Rent Frequency</label>
                                <select>
                                    <option>Monthly</option>
                                    <option>Bi-Monthly</option>
                                    <option>Quarterly</option>
                                    <option>Weekly</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Deposit Amount</label>
                                <input type="text" placeholder="€">
                            </fieldset>
                            <fieldset>
                                <label>Lease Length</label>
                                <select>
                                    <option>3 Months</option>
                                    <option>6 Months</option>
                                    <option>9 Months</option>
                                    <option selected>1 Year</option>
                                    <option>Not Specified</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Move In Date</label>
                                <input id="" type="text" class="datepicker form-control"placeholder="Please enter a date">
                            </fieldset>
                        </form>
                        
                    </div>
                </div>
            </div>
               <div class="my-account_further-info">
              <h2 id="further_info">Photo Gallery </h2>
              <div class="row">
                <div class="col-sm-12">    
                    <div class="placeanad_gallery">
                         <img src="images/properties/1.jpg">
                         <img src="images/properties/2.jpg">
                         <img src="images/properties/3.jpg">
                         <img src="images/properties/5.jpg">
                         <img src="images/properties/4.jpg">
                         <img src="images/properties/6.jpg">
                        <div><p>+</p><span>Add a photo</span></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="placeanad_location">
                <h2 id="placeanad_loc">Location </h2>
                <div class="row">
                    <div class="col-xs-12">
                        <iframe style="width:100%;height:150px"frameborder="0" style="border:0"
                          src="https://www.google.com/maps/embed/v1/place?q=Greenmount%20Lane%2C%20Harolds%20Cross%2C%20Dublin%206W&key=AIzaSyB3h_smoqmWYGgyteBdUaac4SRqhAd-klI&zoom=14" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="row text-center" style="margin-bottom:15px;margin-top:30px;">
                <a id="next"><button class="amber" id="next">Next</button></a>
                <a href="/my_profile.php?manage_ads"><button class="hg9 inviz">Publish Advert</button></a>
            </div>
        </section>
        <section class="inner-container">
            <div class="my-account_social-accounts">
                <h2 id="social_accounts">Property Details </h2>
                <div class="row">
                    <div class="col-sm-10">
                        <form class="lease-details">
                            <fieldset>
                                <label>BER Rating</label>
                                <select>
                                    <option>A1</option>
                                    <option>A2</option>
                                    <option>A3</option>
                                    <option>B1</option>
                                    <option>B2</option>
                                    <option>B3</option>
                                    <option>C1</option>
                                    <option>C2</option>
                                    <option>C3</option>
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>E1</option>
                                    <option>E2</option>
                                    <option>F</option>
                                    <option>G</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Heating</label>
                                <select>
                                    <option>Gas</option>
                                    <option>Oil</option>
                                    <option>Electric</option>
                                    <option>Other</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Furnishings</label>
                                <select>
                                    <option>Furnished</option>
                                    <option>Part-furnished</option>
                                    <option>Unfurnished</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Property Size</label>
                                <input placeholder="size in m2" type="text">
                            </fieldset>
                            <fieldset>
                                <label>Maximum People</label>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Searching as...</label>
                                <select>
                                    <option>Single Tenant</option>
                                    <option>Friends</option>
                                    <option>Couple</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Accepts Students</label>
                                <label class="switch">
                                  <input type="checkbox" id="entire_property">
                                  <span class="slider round entire_property"style="width:40px"></span>
                                  <span class="answer-entire_property"></span>
                                </label>
                            </fieldset>
                            <fieldset>
                                <label>Parking Available</label>
                                <label class="switch">
                                  <input type="checkbox" id="entire_property">
                                  <span class="slider round entire_property"style="width:40px"></span>
                                  <span class="answer-entire_property"></span>
                                </label>
                            </fieldset>
                            <div class="row">
                    <div class="col-sm-12 my-pref_areas landlordreqs">
                        <label>* Required</label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Landlord References</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Work References</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Proof of Funds</span>
                        </label>
                        
                    </div>
                </div>
                    <fieldset>
                        <label>Property Description</label>
                        <textarea placeholder="Enter some information about the property" class=""></textarea>
                    </fieldset>
                    <fieldset>
                        <label>Neighbourhood Description</label>
                        <textarea placeholder="Enter some information about the neighbourhood" class=""></textarea>
                    </fieldset>
                    <fieldset>
                        <label>Local Transport Description</label>
                        <textarea placeholder="Enter some information about the transport links" class=""></textarea>
                    </fieldset>                        
                    </div>
                </div>
            </div>
            <div class="row text-center" style="margin-bottom:15px;margin-top:30px;">
                <a id="next" class="lastnext"><button class="amber" id="next">Next</button></a>
                <a href="/my_profile.php?manage_ads"><button class="hg9 inviz">Publish Advert</button></a>
            </div>
         </section>
        </section>
         
        </div>
        
        
        
        
        <!-- Here -->
        
        
        
<div class="col-sm-8 my_account ad_ten">
    <div class="progress-slider">
        <div class="progressbar bar-1"></div>
        <div class="progressbar bar-2"></div>
        <div class="progressbar bar-3"></div>
    </div>
     <section class="inner inner2">
        <div class="my_account-property-preferences placeanad">
            <h2 id="prop_pref">Property Preferences</h2>
            <span>I am looking for...</span>
            <div class="row">
                <div class="col-sm-5">
                    <fieldset>
                        <label>House</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label>Room(s)/House Share</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label>Apartment</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-sm-5">
                    <fieldset>
                        <label class="">Digs</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="">Team Up Search</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                        <span style="color: white;background-color: #428bca;border-radius: 50%;width: 20px;height: 20px; display: inline-block;text-align: center;margin-left: 10px;"data-toggle="tooltip" title="Team up with others to find accommodation">i</span>
                    </fieldset>
                </div>  
            </div>
            <div class="row">
                <div class="col-sm-10 county_preferences">
                <label>No. of Rooms</label>
                <select id="my_pref_county">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 county_preferences">
                <label>City/County</label>
                <select id="my_pref_county">
                    <option>Dublin</option>
                    <option>-----</option>
                    <option>Carlow</option>
                    <option>Cavan</option>
                    <option>Clare</option>
                    <option>Cork</option>
                    <option>Donegal</option>
                    <option>Galway</option>
                    <option>Kerry</option>
                    <option>Kildare</option>
                    <option>Kilkenny</option>
                    <option>Laois</option>
                    <option>Leitrim</option>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 my-pref_areas">
                    <label>Areas</label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Adamstown</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Artane</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Ashtown</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Aylesbury</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Ayrfield</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Balbriggan</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Baldonnell</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Baldoyle</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Balgriffin</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Ballsbridge</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Ballymun</span>
                    </label>
                    <label class="county_choice">
                        <input type="checkbox" class="my_profile-area_choice">
                        <span>Blackrock</span>
                    </label>

                </div>
            </div>
            <div class="row room-type">
                <div class="col-xs-12">
                    <label class="room-type_label">Room Type</label>
                </div>
                <div class="col-sm-5">

                    <fieldset>
                        <label>Single Room</label>
                        <label class="switch">
                          <input type="checkbox" id="entire_property">
                          <span class="slider round entire_property"></span>
                          <span class="answer-entire_property"></span>
                        </label>
                    </fieldset>
                    <fieldset>
                            <label>Shared Room</label>
                            <label class="switch">
                              <input type="checkbox" id="entire_property">
                              <span class="slider round entire_property"></span>
                              <span class="answer-entire_property"></span>
                            </label>
                        </fieldset>
                        <fieldset>
                            <label>Master Room</label>
                            <label class="switch">
                              <input type="checkbox" id="entire_property">
                              <span class="slider round entire_property"></span>
                              <span class="answer-entire_property"></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-sm-5">
                        <fieldset>
                            <label class="">Twin Room</label>
                            <label class="switch">
                              <input type="checkbox" id="entire_property">
                              <span class="slider round entire_property"></span>
                              <span class="answer-entire_property"></span>
                            </label>
                        </fieldset>
                        <fieldset>
                            <label>Double Room</label>
                            <label class="switch">
                              <input type="checkbox" id="entire_property">
                              <span class="slider round entire_property"></span>
                              <span class="answer-entire_property"></span>
                            </label>
                        </fieldset>
                        <fieldset>
                            <label>Ensuite</label>
                            <label class="switch">
                              <input type="checkbox" id="entire_property">
                              <span class="slider round entire_property"></span>
                              <span class="answer-entire_property"></span>
                            </label>
                        </fieldset>
                    </div>  

                </div>
                <div class="row room-type">
                    <div class="col-xs-12">
                        <fieldset style="margin-bottom:15px;">
                            <label class="room-type_label">Move In Date</label>
                            <input class="datepicker" type="text" placeholder="Please enter a date" style="float:left">
                            <label style="float:left; width:auto;margin-left:10px;"><input style="margin-right:5px"type="checkbox"><small>Immediately available</small></label>
                        </fieldset>
                        <div class="thirty"></div>
                        <label class="room-type_label">What Days of the Week do you Need?</label>
                    </div>
                    <div class="col-sm-10 my-pref_areas">
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Monday</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Tuesday</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Wednesday</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Thursday</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Friday</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Saturday</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice"checked>
                            <span>Sunday</span>
                        </label>

                    </div> 

                </div>
            
            <div class="row text-center" style="margin-bottom:15px;margin-top:30px;">
                <div class="btn btn-success" id="next2">Next</div>
                <a href="/my_profile.php?manage_ads"><div class="hg9 inviz btn btn-primary">Publish Advert</div></a>
            </div> 
        </div>
            <div class="my-account_further-info">
              <h2 id="further_info">Further Information </h2>
              <div class="row">
                <div class="col-sm-12 fi">    
                        <fieldset>
                            <label>Nationality</label>
                            <input type="text">
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Job Title</label>
                            <input type="text" placeholder="Your job title">
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Employment Status</label>
                            <select><option>Full Time</option><option>Part Time</option><option>Self-Employed</option><option>Unemployed</option></select>
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Smoker</label>
                            <select><option>No</option><option>Yes</option></select>
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Housing Assistance Payment Status</label>
                            <select><option>No</option><option>Yes</option><option>Prefer not to Say</option></select>
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Pets</label>
                            <select><option>No</option><option>Yes</option></select>
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Children</label>
                            <select><option>No</option><option>Yes</option></select>
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                        <fieldset>
                            <label>Education Status</label>
                            <select><option>I am not a student</option><option>I am a student</option></select>
                        </fieldset>
                        <fieldset style="padding:5px 0px 0px 20px">
                            <label class="switch">
                              <input type="checkbox" id="prefs">
                              <span class="slider round prefs"></span>
                            </label>
                            <label class="showprof">Show on my public profile</label>
                        </fieldset>
                </div>
              </div>
                 <div class="row room-type languages">
                  <div class="col-sm-10 my-pref_areas">
                        <label>Languages</label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice" checked="checked">
                            <span>English</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Gaeilge</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>French</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Polish</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>German</span>
                        </label>
                        <label class="county_choice">
                            <input type="checkbox" class="my_profile-area_choice">
                            <span>Spanish</span>
                        </label>

                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-10 my_account-bio">
                        <label>Bio</label>
                        <textarea placeholder="Enter some information about yourself…"></textarea>
                    </div>
                    <div class="col-sm-10 my_account-bio">
                        <label>Hobbies &amp; Interests</label>
                        <textarea placeholder="Enter some information about yourself…"></textarea>
                    </div>
                </div>
                <div class="row text-center" style="margin-bottom:15px;margin-top:30px;">
                    <div class="btn btn-success" id="next2">Next</div>
                    <a href="/my_profile.php?manage_ads"><div class="hg9 inviz btn btn-primary">Publish Advert</div></a>
                </div> 
            </div>
            <div class="my-account_supporting-documents">
                <h2 id="supp_docs">Supporting Documents </h2>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="supporting-docs_left"><label>Work References</label></div>
                        <div class="supporting-docs_right"><label class="doc-upload">Upload +<input id="doc_upload_1" type="file"></label></div>
                        <div class="supporting-docs_left"><label>Landlord References</label></div>
                        <div class="supporting-docs_right"><label class="doc-upload">Upload +<input id="doc_upload_1" type="file"></label></div>
                        <div class="supporting-docs_left"><label>Proof of Funds</label></div>
                        <div class="supporting-docs_right"><label class="doc-upload">Upload +<input id="doc_upload_1" type="file"></label></div>

                    </div>
                </div>
                
            
                <h2 id="social_accounts">Social Media Profiles </h2>
                <div class="row">
                    <div class="col-sm-10 fi">
                        <form class="social-accounts">
                            <fieldset>
                                <label>LinkedIn URL</label>
                                <input type="text" placeholder="http://">
                            </fieldset>
                            <fieldset style="padding:5px 0px 0px 20px">
                                <label class="switch">
                                  <input type="checkbox" id="prefs">
                                  <span class="slider round prefs"></span>
                                </label>
                                <label class="showprof">Show on my public profile</label>
                            </fieldset>
                            <fieldset>
                                <label>Facebook URL</label>
                                <input type="text" placeholder="http://">
                            </fieldset>
                            <fieldset style="padding:5px 0px 0px 20px">
                                <label class="switch">
                                  <input type="checkbox" id="prefs">
                                  <span class="slider round prefs"></span>
                                </label>
                                <label class="showprof">Show on my public profile</label>
                            </fieldset>
                            <fieldset>
                                <label>Twitter URL</label>
                                <input type="text" placeholder="http://">
                            </fieldset>
                            <fieldset style="padding:5px 0px 0px 20px">
                                <label class="switch">
                                  <input type="checkbox" id="prefs">
                                  <span class="slider round prefs"></span>
                                </label>
                                <label class="showprof">Show on my public profile</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
                
                <div class="row text-center" style="margin-bottom:15px;margin-top:30px;">
                    <div class="lastnext2 btn btn-success" id="next2">Next</div>
                    <a href="/my_profile.php?manage_ads"><div class="hg9 inviz btn btn-primary">Publish Advert</div></a>
                </div> 
            </div> 
        </section>
        </div>
</div>
</div>

<?php include 'footer.php'?>