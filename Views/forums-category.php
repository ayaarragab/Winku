<?php
include('assests/header.php')
?>	
	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="forum-warper">
							<div class="post-filter-sec">
								<form method="post" class="filter-form">
									<input type="post" placeholder="Search subcategory">
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
						<h3 style="color: black; font-weight: bold;" >Subcategories</h3>
						<div class="forum-list">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th scope="col">subcategories</th>
										<th scope="col">Questions</th>
										<th scope="col">Answers</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="forum-open-topic.html" title="">Custom CSS Tweaks</a>
											<h6>Started by: <a href="#" title="">Karly King</a></h6>
										</td>
										<td>7</td>
										<td>2</td>
									</tr>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="forum-open-topic.html" title="">Free Photography on photodune</a>
											<h6>Started by: <a href="#" title="">Peter Phillips</a></h6>
										</td>
										<td>9</td>
										<td>2</td>
									</tr>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="forum-open-topic.html" title="">Free videos on video hive</a>
											<h6>Started by: <a href="#" title="">Joseph Johnson</a></h6>
										</td>
										<td>4</td>
										<td>5</td>
									</tr>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											<a href="forum-open-topic.html" title="">Freebees themes on themeforest</a>
											<h6>Started by: <a href="#" title="">Joseph Johnson</a></h6>
										</td>
										<td>3</td>
										<td>1</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar full-style">
							<div class="widget" style="display: none;">
								<div class="singin">
									<h4 class="widget-title">Login</h4>
									<form method="post">
										<input type="text" placeholder="User Name">
										<input type="password" placeholder="Password">
										<div class="checkbox">
										  <label>
											<input type="checkbox" checked="checked"><i class="check-box"></i>
											 <span>Remember Me</span>
										  </label>
										</div>
										<button type="submit">Log In</button>
									</form>
								</div>	
							</div>
							<div class="widget">
								<h4 class="widget-title">Forum Statistics</h4>
								<ul class="forum-static">
									<li>
										<a href="#" title="">Categories</a>
										<span>13</span>
									</li>
									<li>
										<a href="#" title="">Users</a>
										<span>50</span>
									</li>
									<li>
										<a href="#" title="">Subcategories</a>
										<span>14</span>
									</li>
									<li>
										<a href="#" title="">Questions</a>
										<span>32</span>
									</li>
									<li>
										<a href="#" title="">Tags</a>
										<span>50</span>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h4 class="widget-title">Recent Topics</h4>
								<ul class="recent-topics">
									<li>
										<a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
										<span>2 hours, 16 minutes ago</span>
										<i>The Community</i>
									</li>
									<li>
										<a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
										<span>2 hours, 16 minutes ago</span>
										<i>The Community</i>
									</li>
									<li>
										<a href="#" title="">The new Goddess of War trailer was launched at E3!</a>
										<span>2 hours, 16 minutes ago</span>
										<i>The Community</i>
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