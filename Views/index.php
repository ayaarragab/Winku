<?php
session_start();
include_once('assests/header.php');
require_once '../Controllers/questionControllers/questionToUser.php';
?>		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											<h4 class="widget-title">Followed categories</h4>
											<ul class="naves">
												<li><a href="forums-category.php">Web Development</a></li>
												<li><a href="forums-category.php">Mobile App Development</a></li>
												<li><a href="forums-category.php">Artificial Intelligence</a></li>
												<li><a href="forums-category.php">Data Science</a></li>
												<li><a href="forums-category.php">Machine Learning</a></li>
												<li><a href="forums-category.php">Blockchain Technology</a></li>
												<li><a href="forums-category.php">Cloud Computing</a></li>
												<li><a href="forums-category.php">DevOps</a></li>
												<li><a href="forums-category.php">Game Development</a></li>
												<li><a href="forums-category.php">UI/UX Design</a></li>												
											</ul>
										</div><!-- Shortcuts -->										
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="loadMore">
									<h3 style="color: black; font-weight: bold;" >Top Questions</h3>
									<?php questionToUser::showAllQuestions() ?>
									</div>
								</div>
								<div class="col-lg-3"></div><!-- centerl meta -->
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</section>
<?php
include('assests/footer.php')
?>