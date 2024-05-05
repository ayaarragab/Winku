<?php
session_start();
include_once('assests/header.php');
require_once '../Controllers/questionControllers/questionToUser.php';
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\associativeClasses\categoryUser\categoryusersMapper.php';
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
											<?php
												$categories = CategoryusersMapper::getUserFollowedCategories($_SESSION['id']);
												foreach ($categories as $category) {
													echo '<li><a href="subcategories.php?subcategoryId=' . $category['id'] . '">' . $category['name'] . '</a></li>';
												}
												?>												
											</ul>
										</div><!-- Shortcuts -->										
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="loadMore">
										<?php
										if (isset( $_SESSION['id']) && $_SESSION['id'] == $_GET['id']) {
											questionToUser::showOneQuestion($_GET['id'], true);
										}
										else {
											questionToUser::showOneQuestion($_GET['id'], false);
										}
										 ?>
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