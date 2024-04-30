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
									<input type="post" placeholder="Search category">
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
							<a class="addnewforum" href="forum-create-topic.php" title=""><i class="fa fa-plus"></i> Add New category</a>
						</div>
						<div class="forum-list">
							<h3 style="color: black; font-weight: bold;" >Categories</h3>
							<table class="table table-responsive">
								<thead>
									<tr>
										<th scope="col">Categories</th>
										<th scope="col">subcategories</th>
										<th scope="col">Questions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="forums-category.html" title="">Mobile App Development</a>
											<p>list your recommended website and when you start to create your website so please check your laptop window and battery &#58;-&#41;</p>
										</td>
										<td>4</td>
										<td>5</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Web Development</a>
											<p>Share your own custom snippets for modifying the winku template beyond it's limits.</p>
										</td>
										<td>10</td>
										<td>3</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Artificial Intelligence</a>
											<p>Questions regarding pricing and refunds should be posted here.</p>
										</td>
										<td>40</td>
										<td>23</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Data Science</a>
											<p>Post your SEO optimizations and tips via this thread.</p>
										</td>
										<td>2</td>
										<td>8</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Machine Learning</a>
											<p>Having issues with your server and your hosting company won't help you? Post a comment on the forum for help.</p>
										</td>
										<td>14</td>
										<td>60</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Blockchain Technology</a>
											<p>Winku have a great features and created with the logic for making easy to create social website.</p>
										</td>
										<td>15</td>
										<td>29</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Cloud Computing</a>
											<p>Useful tips, guides and tricks for beginners.</p>
										</td>
										<td>30</td>
										<td>10</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">DevOps</a>
											<p>Questions regarding pricing and refunds should be posted here.</p>
										</td>
										<td>40</td>
										<td>23</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Game Development</a>
											<p>Post your SEO optimizations and tips via this thread.</p>
										</td>
										<td>2</td>
										<td>8</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">UI/UX Design</a>
											<p>list your recommended website and when you start to create your website so please check your laptop window and battery &#58;-&#41;</p>
										</td>
										<td>4</td>
										<td>5</td>
									</tr>
									<tr>
										<td>
 
											<a href="forums-category.html" title="">Information Technology</a>
											<p>Share your own custom snippets for modifying the winku template beyond it's limits.</p>
										</td>
										<td>10</td>
										<td>3</td>
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