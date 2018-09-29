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
	                                <div class="number">{{$user->wallet_amount}} PC</div>
	                                <div class="caption"><div>Total Balance in PC</div></div>
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
						  <div class="panel-rightbody">
						      <p>Personal address to receive Primecoins.</p>
						      <p><strong>{{$user->wallet_id}}</strong></p>
						      <p style="text-align: left"><img src="img/qr.png" style="width:10%;height:10%;"></p>
						  </div>
						    <div class="clearfix">
						    </div>
							</div>
	                    </div>
	                    <div style="height:50px;" class="col-sm-12"></div>
	                    <div class="col-sm-12">
	                    <div class="panel panel-danger" style=" box-shadow: 2px 4px #888888;">
						  <div class="panel-leftheading green-success" style="width:5px !important;">
						      <h3 class="panel-lefttitle"></h3>
						  </div>
						  <div class="panel-rightbody">
						     <div class="col-sm-2">
						     
						     <span class="fa-stack fa-lg">
							  <i class="fa fa-television fa-2x" aria-hidden="true" style="position:absolute !important;"></i>
							  <i class="fa fa-mobile fa-stack-2x" aria-hidden="true" style="padding-left: 39px;padding-top: 11px;"></i>
							</span>
						     </div>
						     <div class="col-sm-10">
						     Welcome! Thankyou for joining the network, bandaging over 991k+ users of Primecoin wallets.
						     </div>
						      
						  </div>
						    <div class="clearfix">
						    </div>
							</div>
	                    </div>
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