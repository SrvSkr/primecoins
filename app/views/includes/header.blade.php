	<header class="site-header">
	    <div class="container-fluid">
	<?php
		$id = Auth::id();
		$user = User::find($id);
	?>
	        <a href="{{ URL::to('dashboard') }}" class="site-logo">
	        <strong><img src="img/pclogo.png" style="width: :100%"></strong>
	            <!-- <img class="hidden-md-down" src="img/logo-2.png" alt=""> 
	            <img class="hidden-lg-up" src="img/logo-2-mob.png" alt=""> -->
	        </a>
	
	        <!-- <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button> -->
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	            <div class="site-header-shown" style=" border-color: coral;border-style: solid; color:coral;   position: absolute;right: 120px;top: 25px;min-width:80px; text-align:center;">
	            <strong>{{$user->wallet_amount}} PC </strong>
	            </div>
	                <div class="site-header-shown" style="    position: absolute;right: 25px;top: 25px;">
	                    
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-sign.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
<!-- 	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a> -->
	                            <a class="dropdown-item" href="{{ URL::to('settings') }}"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <!-- <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a> -->
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="{{ URL::to('logout') }}"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	            
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->