<?php require_once 'assests/admin-header-few-differences.php'; 
require_once '../Controllers/questionControllers/questionToAdmin.php';
?>
<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
                                    <div class="widget admin-cat"> <!-- Done (categories) -->
											<h4 class="widget-title">Categories</h4>
											<ul class="naves">
												<!-- <li><a href="category_details.php?id=(put the category id here)"> -->
												<li><a href="category_details.php?id=">Web Development</a></li>
												<li><a href="forums-category.php">Mobile App Development</a></li>
												<li><a href="category_details.php?id=">Artificial Intelligence</a></li>
												<li><a href="category_details.php?id=">Data Science</a></li>
												<li><a href="forums-category.php">Machine Learning</a></li>
												<li><a href="category_details.php?id=">Blockchain Technology</a></li>
												<li><a href="forums-category.php">Cloud Computing</a></li>
												<li><a href="category_details.php?id=">DevOps</a></li>
												<li><a href="forums-category.php">Game Development</a></li>
												<li><a href="category_details.php?id=">UI/UX Design</a></li>												
											</ul>
										</div>									
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="loadMore">
									<h3 style="color: black; font-weight: bold;" >Users Questions</h3>
									<?php questionToAdmin::showAllQuestionsToAdmin() ?>
									</div>
								</div>
								<div class="col-lg-3"></div><!-- centerl meta -->
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</section><?php require_once 'assests/footer.php'; ?>	
