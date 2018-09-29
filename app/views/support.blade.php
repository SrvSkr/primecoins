<!DOCTYPE html>
<html>
@include('includes.head')
<body class="with-side-menu control-panel control-panel-compact">

@include('includes.header')

	<div class="mobile-menu-left-overlay"></div>

@include('includes.sidebar')
<?php
$id = Auth::id();
$user = User::find($id);
?>
	<div class="page-content">
	    <div class="container-fluid">
	    <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<font size="5" color="purple">Your Primecoin</font> Wallet Online
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
								<li class="active">Enquiry Support</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
	        <div class="row">
	            
	            <div class="col-xl-12">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number">{{$user->wallet_amount}} PC</div>
	                                <div class="caption"><div>Total Balance In PC</div></div>
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
	                                <div class="number"><i class="fa fa-eur" aria-hidden="true"></i> 0.00</div>
	                                <div class="caption"><div>Total Value In EUR</div></div>
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
						  <div  style="width:90%;padding-left: 2%;">
			       <form class="sign-box" action="postSupport" method="post">
                    <div class="sign-avatar" style="color: #5675a7 !important;">
                        <i class="font-icon font-icon-help fa-5x"></i>
                    </div>
                    <header class="sign-title"><h3 style="color: #5675a7 !important;"><strong>Enquiry Support</strong></h3></header>
                    <br><br>
                    @if(Session::has('failure'))
                        <div class="alert-box success col-sm-8 offset-sm-2">
                            <h6 style="color:red;">{{ Session::get('failure') }}</h6>
                        </div>
                    @endif
                     @if(Session::has('success'))
                        <div class="alert-box success col-sm-11 offset-sm-1">
                            <h6 style="color:green;">{{ Session::get('success') }}</h6>
                        </div>
                        <br/><br/>
                    @endif
                    <div class="form-group row">
						<label class="col-sm-2 form-control-label">Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="name" placeholder="Name" required></p>
						</div>
					</div>
					 <div class="form-group row">
						<label class="col-sm-2 form-control-label">Contact No</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="contact_no" placeholder="Contact No" required></p>
						</div>
					</div>

					 <div class="form-group row">
						<label class="col-sm-2 form-control-label">Subject</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="subject" placeholder="Subject" required></p>
						</div>
					</div>
					 <div class="form-group row">
						<label class="col-sm-2 form-control-label">Body</label>
						<div class="col-sm-10">
							<p class="form-control-static"><textarea class="form-control" name="body" placeholder="Body" required></textarea></p>
						</div>
					</div>
                   <!--  <div class="col-sm-10 offset-sm-1" style="padding-bottom: 20px;">
                        <input type="text" class="form-control" name="send_to" placeholder="Send to?" required/>
                        </div>
                    <div class="col-sm-10 offset-sm-1" style="padding-bottom: 20px;">    
                        <input type="number" class="form-control" name="amount" placeholder="Amount" required/>
                    </div>
                    <div class="col-sm-10 offset-sm-1" style="padding-bottom: 20px;">
                        <textarea type="password" class="form-control" name="description" placeholder="Description"></textarea>
                    </div> -->
                    <div class="col-sm-11 offset-sm-1" style="padding-bottom: 20px;">
                        <input type="submit" class="btn btn-primary" name="Send Enquiry" value="Send Enquiry"/>
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
                    <!-- <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p> -->
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