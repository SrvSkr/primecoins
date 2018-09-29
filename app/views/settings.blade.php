<!DOCTYPE html>
<html>
@include('includes.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<style>
.jconfirm-box-container {
  float: right;

  position: relative;
  left: -30%; /* or right 50% */
  text-align: left;
}
.btn-default{
	background-color: black !important;
}
</style>
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
								<li class="active">Security & Settings</li>
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
	    <div class="col-md-12">
  			<div  class="box-typical box-typical-padding">
				<p>
					<h3 style="text-align: left;">Change password</h3>
				</p>


				<form id="chPasswordForm" method="post" action="chPasswordPost">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Old Password</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="oldPassword"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">New Password</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="newPassword"></p>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3" style="text-align:center;">
							<p class="form-control-static"><input type="submit" class="form-control btn btn-primary" id="chPasswordSubmit" value="Submit"></p>
						</div>
					</div>
					
				</form>


			</div><!--.box-typical-->
	</div><!--.page-content-->

		    <div class="col-md-12">
  			<div  class="box-typical box-typical-padding">
				<p>
					<h3 style="text-align: left;">Change email</h3>
				</p>


				<form id="chEmailForm" method="post" action="chEmailPost">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">New Email Address?</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="NewEmail" id="NewEmail"></p>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3" style="text-align:center;">
							<p class="form-control-static"><input type="submit" class="form-control btn btn-primary" id="submitNewEmail" value="Submit"></p>
						</div>
					</div>
					
				</form>


			</div><!--.box-typical-->
	</div><!--.page-content-->

		    <div class="col-md-12">
  			<div  class="box-typical box-typical-padding">
				<p>
					<h3 style="text-align: left;">Add Second Wallet Password</h3>
				</p>


				<form>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Second Password</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="inputPassword"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Confirm Password</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="inputPassword"></p>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3" style="text-align:center;">
							<p class="form-control-static"><input type="submit" class="form-control btn btn-primary" id="inputPassword" value="Submit"></p>
						</div>
					</div>
					
				</form>


			</div><!--.box-typical-->
	</div><!--.page-content-->

	
 @include('includes.footer')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
 <script type="text/javascript">
 // $('#chPasswordSubmit1').hide();submitNewEmail
 	$(document).on("click","#chPasswordSubmit",function(e) {
 		e.preventDefault();
        $.confirm({
		    title: 'Confirm!',
		    content: 'Do you want to change the password?',
		    draggable: true,
		    buttons: {
		        confirm: {
		            btnClass: 'btn-blue',
		            action: function(){
		            	// $('#chPasswordForm').submit();
		            	 $.post("chPasswordPost",{old: $('#oldPassword').val(),new: $('#newPassword').val()},function(res)
		            	 {
		            	 	if(res.success == 1)
		            	 	{
		            	 		$.alert('Password has been successfully changed.');
		            	 		$('#oldPassword').val('');
		            	 		$('#newPassword').val('');
		            	 	}
		            	 	else
		            	 	{
		            	 		$.alert('Old Password do not match.');
		            	 	}
					    });
		            }
		        },
		        cancel: {
		            btnClass: 'btn-red', // multiple classes.
		
		        },
		    }
		});
    });
     $(document).on("click","#submitNewEmail",function(e) {
 		e.preventDefault();
        $.confirm({
		    title: 'Confirm!',
		    content: 'Do you want to change the email?',
		    draggable: true,
		    buttons: {
		        confirm: {
		            btnClass: 'btn-blue',
		            action: function(){
		            	$('#chEmailForm').submit();
		            	
		            }
		        },
		        cancel: {
		            btnClass: 'btn-red', // multiple classes.
		
		        },
		    }
		});
    });
 </script>
</body>
</html>