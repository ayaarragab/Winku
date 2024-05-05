<?php
session_start();
include_once('assests/header.php');
require_once '../Controllers/associativeClasses/subcategoryUser/SubCategoryUsersMapper.php';
require_once '../Controllers/subcategoryControllers/SubCategoryMapper.php';
require_once '../Controllers/UserControllers/userMapper.php';
require_once '../Models/User.php';

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
							<a class="addnewforum" style="" href="create_a_subcategory.php?username=<?php echo $_SESSION['username'] ?>" title=""><i class="fa fa-plus"></i> Create a subcategory!</a>
						</div>
						<h3 style="color: black; font-weight: bold;" >Subcategories</h3>
						<div class="forum-list">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th scope="col">subcategories</th>
										<th scope="col">Questions</th>
										<th scope="col">Answers</th>
										<th scope="col">Members</th>
										<?php
										if (isset($_GET['adminOrNot']) && $_GET['adminOrNot'] == true) {
											echo '<th scope="col">Reports</th>';
										} 
										?>
									</tr>
								</thead>
								<tbody>
											<?php
											if (isset($_GET['adminOrNot']) && $_GET['adminOrNot'] == 1) {
											echo '<a class="addnewforum p-1 follow-cat"  href="execute.php?function=&categoryId=&categoryName=" title=""><span style="color:white">Delete</span></a>';
										}
										else {
											if (isset($_SESSION['id'])) {
												$user = UserMapper::retrieveObject($_SESSION['id']);
												if(isset($_GET['function']) && (isset($_GET['subcategoryId']) || isset($_GET['subcategoryName']))) {
													// Get the value of the 'function' parameter
													$functionToExecute = $_GET['function'];
												
													if ($functionToExecute == 'joinSubcategory') {
													   $user->userToSubcategory->joinSubcategory($_GET['subcategoryId'], $_SESSION['id']);
													}
													elseif ($functionToExecute == 'leaveSubcategory') {
														$user->userToSubcategory->leaveSubcategory($_GET['subcategoryId'], $_SESSION['id']);
													}
													elseif ($functionToExecute == 'reportSubcategory') {
														if (SubCategoryUsersMapper::isJoined($_SESSION['id'], $_GET['subcategoryId'])) {
															$user->userToSubcategory->reportSubcategory($_GET['subcategoryName']);
														}
														else {
															echo "You cannot report it as you did not join it";
														}
													}
												}
											}
												$subcategories = SubCategoryMapper::selectall();
												for ($i=0; $i < count($subcategories); $i++) { 
														echo '<tr>';
														echo '<td>';
														echo '<div class="catName-and-follow-button d-flex m-0 p-0">';
														echo '<a href="subcategory.php?subcategoryId="'.$subcategories[$i]['id'].'">'.$subcategories[$i]['name'].'</a>';
														if (SubCategoryUsersMapper::isJoined($_SESSION['id'], $subcategories[$i]['id'])) {
															echo '<a class="addnewforum me-2  p-1 unfollow-cat" style="margin-left:20px" href="subcategories.php?subcategoryId=';
															echo $subcategories[$i]['id'].'&function=leaveSubcategory">';
															echo '<span style="color:white">Leave</span></a>';
														}
														else {
															echo '<a class="addnewforum d-block p-1 follow-cat" style="margin-left:20px" href="subcategories.php?subcategoryId=';
															echo $subcategories[$i]['id'].'&function=joinSubcategory">';
															echo '<span style="color:white">Join</span></a>';								
															}

															// report button
															echo '<a class="addnewforum d-block p-1 follow-cat" style="margin-left:20px" href="subcategories.php?subcategoryName=';
															echo $subcategories[$i]['name'].'&function=reportSubcategory&subcategoryId='.$subcategories[$i]['id'].'">';
															echo '<span style="color:white">Report</span></a></div>';
														echo '<div class="icon-and-starter d-flex"><i class="fa fa-comments"></i><h6 class="m-0 p-0" >Started by: <a href="#" title="">';
														echo $subcategories[$i]['ownerUsername'].'</a></h6></div>';
														echo '</td>';
														echo '<td>'.$subcategories[$i]['numberOfQuestions'].'</td>';
														echo '<td>'.$subcategories[$i]['numberOfAnswers'].'</td>';
														echo '<td>'.SubCategoryUsersMapper::getNumMembersPerSubcategory($subcategories[$i]['id']).'</td>';
														echo '</tr>';
												}
										} 
										?>
										<?php
										if (isset($_GET['adminOrNot']) && $_GET['adminOrNot'] == 1) {
											echo '<td>0</td>';
										} 
										 ?>
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
include_once('assests/footer.php')
?>