<?php 
	include 'INCLUDES/userdetails.php';
?>
<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-12.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								<?php echo $fname; ?>
								<small><?php echo $role; ?></small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="O_stocks.php">
							<i class="fa fa-database"></i>
							<span>Stocks</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="O_requests.php">
							<i class="fa fa-upload"></i>
							<span>Requests</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="O_purchased.php">
							<i class="fa fa-shopping-cart"></i>
							<span>Purchased</span>
						</a>
					</li>
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
