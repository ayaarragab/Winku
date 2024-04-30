<?php
include('assests/header.php')
?>	
	<section>
		<div class="ext-gap bluesh high-opacity">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-banner">
							<h1>Recommend a category!</h1>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="index-2.html">Home</a>
							  <span class="breadcrumb-item active">Forum</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area animated -->
	
	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="forum-warper">
							<div class="post-filter-sec">
								<form method="post" class="filter-form">
									<input type="post" placeholder="Search post">
									<button><i class="ti-search"></i></button>
								</form>
								<div class="purify">
									<span>filter by</span>
									<select>
										<option>Assending A-Z</option>
										<option>Desending Z-A</option>
										<option>Desending (date)</option>
										<option>Asending (date)</option>
									</select>
									<a href="#" title="">purify</a>
								</div>
							</div>
						</div>
						<div class="forum-form">
							<h5 class="f-title"><i class="ti-info-alt"></i>Recommend a category</h5>
							<form method="post" action="add_category.php">
								<div class="form-group">	
								  <input type="text" name="category_name" id="input" required="required"/>
								  <label class="control-label" for="input">Category name</label><i class="mtrl-select"></i>
								</div>										
								<div class="form-group">	
								  <textarea rows="4" id="textarea" name="category_description" required="required"></textarea>
								  <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
								</div>
								<div class="submit-btns">
									<button type="button" class="mtr-btn"><span>Cancel</span></button>
									<button type="submit" class="mtr-btn"><span>Post Topic</span></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar full-style">
							<div class="widget">
								<h4 class="widget-title">Forum Statistics</h4>
								<ul class="forum-static">
									<li>
										<a href="#" title="">Forums</a>
										<span>13</span>
									</li>
									<li>
										<a href="#" title="">Registered Users</a>
										<span>50</span>
									</li>
									<li>
										<a href="#" title="">Topics</a>
										<span>14</span>
									</li>
									<li>
										<a href="#" title="">Replies</a>
										<span>32</span>
									</li>
									<li>
										<a href="#" title="">Topic Tags</a>
										<span>50</span>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h4 class="widget-title">Featured Topics</h4>
								<ul class="feature-topics">
									<li>
										<i class="fa fa-star"></i>
										<a href="#" title="">What is your favourit season in summer?</a>
										<span>2 hours, 16 minutes ago</span>
									</li>
									<li>
										<i class="fa fa-star"></i>
										<a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
										<span>2 hours, 16 minutes ago</span>
									</li>
									<li>
										<i class="fa fa-star"></i>
										<a href="#" title="">Summer is Coming! Picnic in the east boulevard park</a>
										<span>2 hours, 16 minutes ago</span>
									</li>
								</ul>
							</div>
						</aside>	
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="getquot-baner">
			<span>Want to join our awesome forum and start interacting with others?</span>
			<a href="#" title="">Sign up</a>
		</div>
	</section>

<?php
include('assests/footer.php')
?>