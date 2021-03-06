	<nav class="side-menu">
	<?php
	$email = Auth::user()->email;
	?>
	<div style="float:left;width:100%;padding-left: 5%;">
	                <img src="img/avatar-sign.png" style="height:20%;width:20%;" alt="">
	                <span><strong>{{$email}}</strong></span>
	            </div>
	    <ul class="side-menu-list" style="padding-top: 30% !important;">
	        <li class="grey">
	            <a href="{{ URL::to('dashboard') }}">
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </a>
	        </li>
	        <li class="brown">
	            <a href="{{ URL::to('transactions') }}">
	                <i class="fa fa-exchange"></i>
	                <span class="lbl">Transactions</span>
	            </a>
	        </li>
	        <li class="red">
	            <a href="{{ URL::to('pc-send') }}">
	                <i class="font-icon glyphicon glyphicon-send"></i>
	                <span class="lbl">Send PC</span>
	            </a>
	        </li>
	        <li class="purple">
	            <a href="{{ URL::to('pc-receive') }}">
	                <i class="font-icon font-icon-comments"></i>
	                <span class="lbl">Receive PC</span>
	            </a>
	        </li>
	        <!-- <li class="orange-red">
	            <span>
	                <i class="fa fa-shield"></i>
	                <span class="lbl">Security</span>
	            </span>
	        </li> -->
	        <li class="gold">
	            <a href="{{ URL::to('settings') }}">
	                <i class="fa fa-cogs"></i>
	                <span class="lbl">Security & Settings</span>
	            </a>
	        </li>
	        <li class="blue-dirty">
	            <a href="{{ URL::to('support') }}">
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </a>
	        </li>
	        <li class="magenta opened">
	            <a href="{{ URL::to('logout') }}">
	                <i class="fa fa-sign-out"></i>
	                <span class="lbl">Sign Out</span>
	            </a>
	        </li>
	        
	    </ul>
	
<!-- 	    <section>
	        <header class="side-menu-title">Tags</header>
	        <ul class="side-menu-list">
	            <li>
	                <a href="#">
	                    <i class="tag-color green"></i>
	                    <span class="lbl">Website</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color grey-blue"></i>
	                    <span class="lbl">Bugs/Errors</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color red"></i>
	                    <span class="lbl">General Problem</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color pink"></i>
	                    <span class="lbl">Questions</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color orange"></i>
	                    <span class="lbl">Ideas</span>
	                </a>
	            </li>
	        </ul>
	    </section> -->
	</nav><!--.side-menu-->