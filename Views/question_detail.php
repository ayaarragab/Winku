<?php
include_once('assests/header.php');
require_once '../Controllers/questionControllers/questionToUser.php';
?>	
		<section>
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
												<li><a href="forums-category.html">Web Development</a></li>
												<li><a href="forums-category.html">Mobile App Development</a></li>
												<li><a href="forums-category.html">Artificial Intelligence</a></li>
												<li><a href="forums-category.html">Data Science</a></li>
												<li><a href="forums-category.html">Machine Learning</a></li>
												<li><a href="forums-category.html">Blockchain Technology</a></li>
												<li><a href="forums-category.html">Cloud Computing</a></li>
												<li><a href="forums-category.html">DevOps</a></li>
												<li><a href="forums-category.html">Game Development</a></li>
												<li><a href="forums-category.html">UI/UX Design</a></li>												
											</ul>
										</div><!-- Shortcuts -->										
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="loadMore">
										<?php questionToUser::showOneQuestion($_GET['id']) ?>
								</div>
								<div class="col-lg-3"></div>
								</div><!-- centerl meta -->
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</section>
<?php
include('assests/footer.php')
?>	