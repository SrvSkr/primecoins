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
if($id == 1)
{
	$transactions = SendPc::all();
}
else
{
	$transactions = SendPc::where('sender_id',  $id)->orWhere('receiver_id', $id)->get();
}
// echo '<pre>';
// print_r($transactions);
// foreach ($transactions as $key => $value) {
// 	echo '<pre>';
// print_r($value);
// }
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
								<li class="active">Transactions</li>
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
	
	        <section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Sender</th>
							<th>Receiver</th>
							<th>Amount</th>
							<th>Description</th>
							<th>Sent At</th>
						</tr>
						</thead>
						<tfoot>

						<tr>
							<th>Sender</th>
							<th>Receiver</th>
							<th>Amount</th>
							<th>Description</th>
							<th>Sent At</th>
						</tr>
						</tfoot>
						<tbody>
						<?php
							foreach ($transactions as $key => $value) {
								$user_sender = User::find($value->sender_id);
								$user_receiver = User::find($value->receiver_id);
								$originalDate = $value->created_at;
								$newDate = date("d-m-Y", strtotime($originalDate));
							?>
							<tr>
							<td>{{$user_sender->email}}</td>
							<td>{{$user_receiver->email}}</td>
							<td>{{$value->amount}}</td>
							<td>{{$value->description}}</td>
							<td>{{$newDate}}</td>
						</tr>
							<?php
							}
						?>
						
						
						</tbody>
					</table>
				</div>
			</section>
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	
 @include('includes.footer')
 <script src="js/lib/datatables-net/datatables.min.js"></script>
 <script>
		$(function() {
			$('#example').DataTable();
		});
	</script>
</body>
</html>