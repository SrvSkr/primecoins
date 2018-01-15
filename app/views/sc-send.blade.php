<!DOCTYPE html>
<html>
@include('includes.head')
<body class="with-side-menu control-panel control-panel-compact">

@include('includes.header')

	<div class="mobile-menu-left-overlay"></div>

@include('includes.sidebar')
	<div class="page-content">
	    <div class="container-fluid">
	     <div class="row">
	     <font size="5" color="purple">Your Primecoin</font> Wallet Online
	     	<br><br><br>
	     </div>
	        <div class="row">
	            
	            <div class="col-xl-12">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number">0.00 SC</div>
	                                <div class="caption"><div>Total Balance In SC</div></div>
	                                <div class="percent">
	                                    <!-- <div class="arrow up"></div>
	                                    <p>15%</p> -->
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">$0.00</div>
	                                <div class="caption"><div>Total Value In USD</div></div>
	                                <div class="percent">
	                                    <!-- <div class="arrow down"></div>
	                                    <p>11%</p> -->
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-12">
	                    <div class="panel panel-primary" style=" box-shadow: 2px 4px #888888;">
						  <div class="panel-leftheading" style="width:5px !important;">
						      <h3 class="panel-lefttitle"></h3>
						  </div>
						  <div class="panel" style="text-align: center;">
						  <div  style="display: inline-block;margin: ">
						       <form class="sign-box" action="login" method="post">
                    <div class="sign-avatar">
                        <i class="fa fa-paper-plane fa-5x"></i>
                    </div>
                    <header class="sign-title">Send PC</header>
                    <br><br>
                    <div class="col-sm-4 offset-sm-4" style="padding-bottom: 20px;">
                        <input type="text" class="form-control" name="email" placeholder="E-Mail or Phone"/>
                        </div>
                    <div class="col-sm-4 offset-sm-4" style="padding-bottom: 20px;">    
                        <input type="text" class="form-control" name="email" placeholder="E-Mail or Phone"/>
                    </div>
                    <div class="col-sm-4 offset-sm-4" style="padding-bottom: 20px;">
                        <input type="password" class="form-control" name="password" placeholder="Password"/>
                    </div>

                    <!-- <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
                </div>
						      
						  </div>
						    <div class="clearfix">
						    </div>
							</div>
	                    </div>
	                    <div style="height:50px;" class="col-sm-12"></div>
	                    <!-- <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number">104</div>
	                                <div class="caption"><div>New clients</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>5%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div> --><!--.col-->
	                    <!-- <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">29</div>
	                                <div class="caption"><div>Here is an example of a long name</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div> --><!--.col-->
	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->
	
	        
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	
 @include('includes.footer')
</body>
</html>