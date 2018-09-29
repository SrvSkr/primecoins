<?php $page = "homepage";?>


<div class="container hero-image home"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">

    </div>
    <div class="container head-container">
        <h1>A Better Way for Landlords and Tenants to Connect</h1>
    </div>
    <h5 class="searching">What are you searching for?</h5>
    <div class="container-fluid page-header home">
        <div class="container" style="max-width:750px">
            <div class="row" class="homepage-choices_container">
                
                <div class="<?php echo $page;?>-choices-1 col-sm-4 choice selected">
                    <div></div>
                    <div>
                        <h3 class="page-header">Accommodation</h3>
                    </div>
                    <i class="fa fa-angle-right moreoptions"></i>
                </div>
                <div class="<?php echo $page;?>-choices-2 col-sm-4 choice">
                    <div></div>
                    <div>
                       <h3 class="page-header">Tenants/Housemates</h3>
                    </div>
                    <i class="fa fa-angle-right moreoptions"></i>
                </div>
                <div class="<?php echo $page;?>-choices-3 col-sm-4 choice ">
                    <div></div>
                    <div>
                        <h3 class="page-header">Swap Accommodation</h3>
                    </div>
                    <i class="fa fa-angle-right moreoptions"></i>
                </div>
                
            </div>
        </div>

</div>
<div class="overlay"></div>
<div class="container-fluid homepage_choices_cont_2">
    <div class="container homepage_choices">
    <div id="choice_tenant" class="picked">    
            <?php include 'content/homepage-search-options.php';?>
        </div>
         <div id="choice_landlord">    
            <?php include 'content/homepage-search-options_landlord.php';?>
        </div>
         <div id="choice_student">    
            <?php include 'content/homepage-search-options_student.php';?>
        </div>
    </div>   
</div>
    
    
    
    
</div><!-- end of the hero container -->



<div class="container page-main-content homep">
        <div class="featured-tenants">
            <h2 class="text-center"> Featured Tenants</h2>
            <div class="row">
                
                <div class="col-sm-4 featured_tenant">
                    <img src="images/people/male_1.jpg">
                    <div class="featured_tenant-name">
                        <a href="/single-tenant_m1.php"><h6>Patrick Murphy</h6></a>
                    </div>
                    <div class="featured_tenant-details">
                        <span>29 year old male</span>
                        <span>Store cashier</span>
                        <span>References Available</span>
                        <span>Searching for a housemate</span>
                    </div>
                    <div class="featured_tenant-view_more">
                        <a href="/single-tenant_m1.php">View Profile</a>
                    </div>
                    <div class="featured_tenant-star">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="/single-tenant_m1.php">
                        <div class="featured_tenant-gradient"></div>
                    </a>
                </div>
            
                
                <div class="col-sm-4 featured_tenant">
                    <img src="images/people/group_1.jpg">
                    <div class="featured_tenant-name">
                        <a href="/single-tenant_m2.php"><h6>John Smith</h6></a>
                    </div>
                    <div class="featured_tenant-details">
                        <span>22 year old male</span>
                        <span>Unemployed</span>
                        <span>References Available</span>
                        <span>Searching for a 1-bed apt. with 1 other</span>
                    </div>
                    <div class="featured_tenant-view_more">
                        <a href="/single-tenant_m2.php">View Profile</a>
                    </div>
                    <div class="featured_tenant-star">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="/single-tenant_m2.php"><div class="featured_tenant-gradient"></div></a>
                </div>
                
                <a href="/single-tenant_f1.php">
                <div class="col-sm-4 featured_tenant">
                    <img src="images/people/female_1.jpg">
                    <div class="featured_tenant-name">
                        <a href="/single-tenant_f1.php"><h6>Siobhán O'Leary</h6></a>
                    </div>
                    <div class="featured_tenant-details">
                        <span>34 year old female</span>
                        <span>IT Specialist</span>
                        <span>References Available</span>
                        <span>Looking to swap a room in Dublin for one in Galway</span>
                    </div>
                    <div class="featured_tenant-view_more">
                        <a href="/single-tenant_f1.php">View Profile</a>
                    </div>
                    <div class="featured_tenant-star">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="/single-tenant_f1.php"><div class="featured_tenant-gradient"></div></a>
                </div>
                </a>
            </div>
            <div class="row second-row" style="margin-top:15px">
                
                <div class="col-sm-4 featured_tenant">
                    <img src="images/people/female_2.jpg">
                    <div class="featured_tenant-name">
                        <a href="/single-tenant_f2.php"> <h6>Aoife Flanagan</h6></a>
                    </div>
                    <div class="featured_tenant-details">
                        <span>33 year old female</span>
                        <span>Fuel injection engineer</span>
                        <span>References Available</span>
                        <span>Searching for an apt. in Galway with 2 others</span>
                    </div>
                    <div class="featured_tenant-view_more">
                        <a href="/single-tenant_f2.php">View Profile</a>
                    </div>
                    <div class="featured_tenant-star">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="/single-tenant_f2.php"><div class="featured_tenant-gradient"></div></a>
                </div>
                </a>
                <div class="col-sm-4 featured_tenant">
                    <img src="images/people/male_2.jpg">
                    <div class="featured_tenant-name">
                        <a href="/single-tenant.php"> <h6>Pádraig de Paor</h6></a>
                    </div>
                    <div class="featured_tenant-details">
                        <span>28 year old male</span>
                        <span>Window Cleaner</span>
                        <span>References Available</span>
                        <span>Searching for a housemate</span>
                    </div>
                    <div class="featured_tenant-view_more">
                        <a href="/single-tenant.php">View Profile</a>
                    </div>
                    <div class="featured_tenant-star">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="/single-tenant.php"> <div class="featured_tenant-gradient"></div></a>
                </div>
                
                <div class="col-sm-4 featured_tenant">
                    <img src="images/people/group_3.jpg">
                    <div class="featured_tenant-name">
                        <a href="single-tenant_f3.php"><h6>Éilis Ní Faoláin</h6></a>
                    </div>
                    <div class="featured_tenant-details">
                        <span>30 year old female</span>
                        <span>Architect</span>
                        <span>References Available</span>
                        <span>Searching Alone</span>
                    </div>
                    <div class="featured_tenant-view_more">
                        <a href="single-tenant_f3.ph">View Profile</a>
                    </div>
                    <div class="featured_tenant-star">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="single-tenant_f3.php"> <div class="featured_tenant-gradient"></div></a>
                </div>
                </a>
            </div>
        </div>
    
        <div class="featured-properties">
             <h2 class="text-center"> Featured Properties</h2>
            <div class="row">
                <div class="col-sm-4 featured_property">
                    <a href="/single-property.php"><img src="images/properties/1.jpg" data-src="images/properties/4.jpg"></a>
                    <div class="featured_property-name">
                        <a href="/single-property.php"><h6><span>Manor Villas</span><br>
                            Harolds Cross, Dublin 6W</h6></a>
                    </div>
                    <div class="featured_property-details">
                        <span>Apartment</span>
                        <span>3 Bedrooms</span>
                        <span>1 year Lease</span>
                        <span>Up to 6 people</span>
                    </div>
                    <div class="featured_property-price">
                        <p>€2,400</p><span>monthly</span>
                    </div>
                    <a href="/single-property.php"><div class="featured_tenant-gradient"></div></a>
                    <div class="featured_tenant-view_more">
                        <a href="/single-property.php">View Property</a>
                    </div>
                </div>
                <div class="col-sm-4 featured_property">
                    <a href="/single-property_2.php"> <img src="images/properties/4.jpg"></a>
                    <a href="/single-property_2.php"> <div class="featured_property-name">
                        <h6><span>14 Glenmore</span><br>
                        Rathmines, Dublin 6</h6>
                        </div></a>
                    <div class="featured_property-details">
                        <span>Apartment</span>
                        <span>3 Bedrooms</span>
                        <span>1 year Lease</span>
                        <span>Up to 6 people</span>
                    </div>
                    <div class="featured_property-price">
                        <p>€2,400</p><span>monthly</span>
                    </div>
                    <a href="/single-property_2.php"><div class="featured_tenant-gradient"></div></a>
                    <div class="featured_tenant-view_more">
                        <a href="/single-property_2.php">View Property</a>
                    </div>
                </div>
                <div class="col-sm-4  featured_property">
                    <a href="/single-property_3.php"> <img src="images/properties/6.jpg"></a>
                    <a href="/single-property_3.php"> <div class="featured_property-name">
                        <h6><span>17 Mulvoy Apartments</span><br>
                        Ushers Quay Dublin 8</h6>
                        </div></a>
                    <div class="featured_property-details">
                        <span>Apartment</span>
                        <span>3 Bedrooms</span>
                        <span>1 year Lease</span>
                        <span>Up to 6 people</span>
                    </div>
                    <div class="featured_property-price">
                        <p>€1,500</p><span>monthly</span>
                    </div>
                    <a href="/single-property_3.php"><div class="featured_tenant-gradient"></div></a>
                    <div class="featured_tenant-view_more">
                        <a href="/single-property_3.php">View Property</a>
                    </div>
                </div>
                <div class="col-sm-4 featured_property">
                    <a href="/single-property_4.php"> <img src="images/properties/3.jpg" data-src="images/properties/4.jpg"></a>
                    <a href="/single-property_4.php"> <div class="featured_property-name">
                        <h6><span>Viking Harbour Apartments</span><br>
                        Eden Quay, Dublin 8</h6>
                        </div></a>
                    <div class="featured_property-details">
                        <span>Apartment</span>
                        <span>3 Bedrooms</span>
                        <span>1 year Lease</span>
                        <span>Up to 6 people</span>
                    </div>
                    <div class="featured_property-price">
                        <p>€2,250</p><span>monthly</span>
                    </div>
                    <a href="/single-property_4.php"><div class="featured_tenant-gradient"></div></a>
                    <div class="featured_tenant-view_more">
                        <a href="/single-property_4.php">View Property</a>
                    </div>
                </div>
                <div class="col-sm-4 featured_property">
                    <a href="/single-property_5.php">  <img src="images/properties/5.jpg"></a>
                    <a href="/single-property_5.php"> <div class="featured_property-name">
                        <h6><span>Westgate Apartments</span><br>
                        Cork Street, Dublin 8</h6>
                        </div></a>
                    <div class="featured_property-details">
                        <span>Apartment</span>
                        <span>3 Bedrooms</span>
                        <span>1 year Lease</span>
                        <span>Up to 6 people</span>
                    </div>
                    <div class="featured_property-price">
                        <p>€2,250</p><span>monthly</span>
                    </div>
                    <a href="/single-property_5.php"> <div class="featured_tenant-gradient"></div></a>
                    <div class="featured_tenant-view_more">
                        <a href="/single-property_5.php">View Property</a>
                    </div>
                </div>
                <div class="col-sm-4 featured_property">
                    <a href="/single-property_6.php"> <img src="images/properties/2.jpg"></a>
                    <a href="/single-property_6.php"> <div class="featured_property-name">
                        <h6><span>Greenmount Lane</span><br>
                        Harolds Cross, Dublin 6W</h6>
                        </div></a>
                    <div class="featured_property-details">
                        <span>Apartment</span>
                        <span>3 Bedrooms</span>
                        <span>1 year Lease</span>
                        <span>Up to 6 people</span>
                    </div>
                    <div class="featured_property-price">
                        <p>€1,900</p><span>monthly</span>
                    </div>
                    <a href="/single-property_6.php"><div class="featured_tenant-gradient"></div></a>
                    <div class="featured_tenant-view_more">
                        <a href="/single-property_6.php">View Property</a>
                    </div>
                </div>
                
                
                
            </div>
            
        </div>
    
    
</div>

