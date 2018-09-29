</div> <!-- #page-wrap -->

<footer>
<div class="container">
    <div class="row">
    <div class="col-sm-4 what-we-offer">
        <h2>What we Offer</h2>
        <p>GafHunt.ie is a new, simpler, quicker and cheaper way for tenants to find the right rental property and for landlords to find the best tenant.<br><br>Currently, tenants are reuiqred to go through property listings and send out multiple applications, work and landlord references. They attend multiple viewings and waste a lot of time pursuing properties that are often assigned to other tenants.</p>
    </div>
    <div class="col-sm-4 what-we-offer" style="margin-top:56px;">
        <p>GafHunt.ie solves these issues by turning the process on its head. Instead of chasing multiple landlords and properties, tenants now will create a profile and upload their references to one location.<br><br>They will then set their rental preferences and general requirements (lease length, no. bedrooms etc) lnd can then apply with just one click to properties. Landlords can then search for appropriate tenants through our database of tenant profiles.</p>
    </div>
    <div class="col-sm-4">
        <ul>
            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="/page.php">Contact</a></li>
            <li><a href="/page.php">Legal/Privacy</a></li>
            <li><a href="/page.php">Sitemap</a></li><li>&nbsp;</li>
            <li class="longli"><strong>Our Facebook Groups</strong></li>
            <li><a href="https://www.facebook.com/groups/1607597689487462/">Dublin</a></li>
            <li><a href="https://www.facebook.com/groups/RentLimerick/">Limerick</a></li>
            <li><a href="https://www.facebook.com/groups/MoveCork/?ref=bookmarks">Cork</a></li>
            <li><a href="https://www.facebook.com/groups/385939841504195/">Galway</a></li>
            <li><a href="https://www.facebook.com/groups/RentinWaterford">Waterford</a></li>
        </ul>
    </div>
    </div>
        
</div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Login to Your Account</h2><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
				  </form>
                    <div style="display:flex;margin:30px;">
                    <a href="/my_profile.php"><button class="btn-primary btn">Login</button></a><a href="/register.php"><button class="btn-success btn">Register</button></a>
                    </div>
				  <div class="login-help">
					<a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
    </div>
    <div class="modal fade" id="viewings-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Set Viewing</h2><br>
                    <div class="viewingsmodal-container">
                        <div class="open selected" style="width:100%">Open Viewing</div>
                        <div class="length">
                            <label style="width:58%">Length of Viewings</label>
                            <select>
                                <option>5 mins</option>
                                <option>10 mins</option>
                                <option>15 mins</option>
                                <option>20 mins</option>
                                <option>30 mins</option>
                                <option>1 hour</option>
                            </select>
                        </div>
                        <div class="date">
                           <select>
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option selected>5</option>
                               <option>6</option>
                               <option>7</option>
                               <option>8</option>
                               <option>9</option>
                               <option>10</option>
                               <option>11</option>
                               <option>12</option>
                               <option>13</option>
                               <option>14</option>
                               <option>15</option>
                               <option>16</option>
                               <option>17</option>
                               <option>18</option>
                               <option>19</option>
                               <option>20</option>
                               <option>21</option>
                               <option>22</option>
                               <option>23</option>
                               <option>24</option>
                               <option>25</option>
                               <option>26</option>
                               <option>27</option>
                               <option>28</option>
                               <option>29/option>
                               <option>30</option>
                               <option>31</option>
                            </select>
                            <select>
                                <option>January</option>
                                <option selected>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                            <select>
                                <option>2018</option>
                                <option>2019</option>
                            </select>
                        </div>
                        <button style="display: block;margin:0 auto" data-dismiss="viewings-modal" class="btn-success">Save</button>     
                    </div>
				  
				</div>
			</div>
    </div>
    <div class="modal fade" id="viewings-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Your Viewing</h2><br>
                    <div class="viewingsmodal-container">
                        <p style="text-align:center;font-size:14px;color:#333;">Your viewing is set for:<br>13<sup>th</sup> May 2018 at 11:45am</p>
                        <button style="display:block;margin:0 auto;"  data-dismiss="modal" class="btn-success">OK</button>     
                    </div>
				  
				</div>
			</div>
    </div> 
    <div class="modal fade" id="viewings-modal-cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Cancel Viewing</h2><br>
                    <div class="viewingsmodal-container">
                        <p style="text-align:center;font-size:14px;color:#333;">Are you sure you want to cancel the viewing?</p>
                        <div style="display:flex;flex-direction: row">
                            <button style="display:block;margin:0 auto;"  data-dismiss="modal" class="btn-danger">Cancel Viewing</button>  
                            <button style="display:block;margin:0 auto;"  data-dismiss="modal" class="btn-primary">Dismiss</button> 
                        </div>
                    </div>
				  
				</div>
			</div>
    </div> 
    <div class="modal fade" id="delete-app-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Delete Application?</h2><br>
                    <div class="viewingsmodal-container"style="text-align:center;">
                        <button data-dismiss="modal" aria-label="Close"class="btn-danger">Delete</button>     
                    </div>
				  
				</div>
			</div>
    </div>
    <div class="modal fade" id="viewings-modal-indiv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Invite to Viewing</h2><br>
                    <div class="viewingsmodal-container">
                        <div class="date">
                           <select>
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option selected>5</option>
                               <option>6</option>
                               <option>7</option>
                               <option>8</option>
                               <option>9</option>
                               <option>10</option>
                               <option>11</option>
                               <option>12</option>
                               <option>13</option>
                               <option>14</option>
                               <option>15</option>
                               <option>16</option>
                               <option>17</option>
                               <option>18</option>
                               <option>19</option>
                               <option>20</option>
                               <option>21</option>
                               <option>22</option>
                               <option>23</option>
                               <option>24</option>
                               <option>25</option>
                               <option>26</option>
                               <option>27</option>
                               <option>28</option>
                               <option>29/option>
                               <option>30</option>
                               <option>31</option>
                            </select>
                            <select>
                                <option>January</option>
                                <option selected>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                            <select>
                                <option>2018</option>
                                <option>2019</option>
                            </select>
                        </div>
                        <div class="length">
                            <label>Time</label>
                            <select>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                            </select>
                            <select>
                                <option>00</option>
                                <option>15</option>
                                <option>30</option>
                                <option>45</option>
                            </select>
                        </div>
                        <div class="length">
                            <label style="width:58%">Length of Viewing</label>
                            <select>
                                <option>5 mins</option>
                                <option>10 mins</option>
                                <option>15 mins</option>
                                <option>20 mins</option>
                                <option>30 mins</option>
                                <option>1 hour</option>
                            </select>
                        </div>
                        
                        <button  data-dismiss="viewings-modal" class="btn-success">Save</button>     
                    </div>
				  
				</div>
			</div>
    </div>
    <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container contact">
					<h2>Contact Tenant</h2><br>
				  <form>
					<input type="text" name="user" placeholder="Subject">
                    <textarea placeholder="Your message"></textarea>
				  </form>
					<div class="apply">
                        <a href="#"><button class="btn-success register_continue">Send</button></a>
                        <a href="#"><button class="register_go-back">Go Back</button></a>
                    </div>
                   <div class="applied_success">
                       <p style="">Message Sent</p>
                       <i class="fa fa-check-circle" aria-hidden="true"></i>
                       <a href="#"><button class="register_go-back">Close</button></a>
                  </div>
				</div>
			</div>
    </div>
    <div class="modal fade" id="apply-modal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h2>Register Your Interest</h2>
                    <div class="apply">
                        <a href="#"><button class="amber register_continue">Continue</button></a>
                        <a href="#"><button class="register_go-back">Go Back</button></a>
                    </div>
               <div class="applied_success">
                   <p style="">Application Successful!</p>
                   <i class="fa fa-check-circle" aria-hidden="true"></i>
                   <a href="#"><button class="register_go-back">Close</button></a>
              </div>
				</div>
			</div>
    </div>
    
<?php include 'functions.php';?>
    <script src="https://use.fontawesome.com/a962cc9c7d.js"></script>
    <script src="js/scripts.js?ver=<?php echo date(is);?>"></script>
    <script type="text/javascript">
      
    </script>
    
</footer>

</body>
</html>