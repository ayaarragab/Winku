<?php
session_start();
require_once '../Views/assests/admin-header-few-differences.php';
require_once '../Controllers/questionControllers/questionToUser.php';
?>
		<section>
			<div class="gap gray-bg">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="row" id="page-contents">
								<div class="col-lg-3">
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="loadMore">
									<h3 style="color: black; font-weight: bold;" >Here's your dashboard:</h3>

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
include('assests/footer.php')?>