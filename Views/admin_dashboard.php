<?php require_once 'assests/admin-header-few-differences.php';
require_once '../Controllers/categoryControllers/CategoryMapper.php';
require_once '../Controllers/subcategoryControllers/SubCategoryMapper.php';
require_once '../Controllers/questionControllers/questionMapper.php';
require_once '../Controllers/UserControllers/userMapper.php';
?>	
	
		<section>

			<div class="gap gray-bg">
				<div class="container-fluid">
				<h3 style="color: black; font-weight: bold; width:fit-content; text-align:center; margin:auto; border-color:#088dcd !important;" class="border-bottom mb-3 pb-2">Here's your dashboard!</h3>
					<div class="row">
						<div class="col-lg-12">
							<div class="row widget-page">
								<div class="col-lg-2 col-sm-6">
									<aside class="sidebar">
										<div class="widget"> <!-- Done (categories) -->
											<h4 class="widget-title">Categories</h4>
											<ul class="naves">
												<?php
													$categories = CategoryMapper::selectall();
													foreach ($categories as $category) {
														echo '<li><a href="category_details.php?id="'.$category['id'].'">'.$category['name'].'</a></li>';
													}
												 ?>
											</ul>
										</div>
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-4 col-sm-6">
									<aside class="sidebar">
										
										<div class="widget"> <!--Done (statitics) -->
											<h4 class="widget-title">Statistics</h4>
											<?php $numQuestions = count(QuestionMapper::selectAllQuestions());
												  $numCategories = count(CategoryMapper::selectall());
												  $numUsers = count(UserMapper::selectAllUsers());
												  $numAnswers = 10; # will be replaced by sara function
												  $numPrivilegedUsers = count(UserMapper::selectPrivilegedUsers()); # function
												  $numSubcategories = count(SubCategoryMapper::selectall());
											 ?>
											<ul class="recent-photos">
												<li>
													<div class="numThing border-bottom m-2">
														<h6 style="font-weight:bold; text-align:center">Questions</h6>
														<h6 style="font-weight:bold; text-align:center; color:#088dcd"><?php echo $numQuestions ?></h6>
													</div>
												</li>
												<li>
													<div class="numThing border-bottom m-2">
														<h6 style="font-weight:bold; text-align:center">Answers</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd"><?php echo $numAnswers ?></h6>
													</div>
												</li>
												<li>
													<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Categories</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd"><?php echo $numCategories ?></h6>
													</div>
												</li>
												<li class="">
													<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Users</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd"><?php echo $numUsers ?></h6>
													</div>
												</li>
												<li>
													<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Priviliged Users</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd"><?php echo $numPrivilegedUsers ?></h6>
													</div>
												</li>
												<li>
												<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Subcategories</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd"><?php echo $numSubcategories ?></h6>
													</div>
												</li>
											</ul>
										</div><!-- recent videos-->
										<div class="widget" style="height:400px;overflow-y:scroll"> <!-- Recommended Categories -->
											<h4 class="widget-title">Recommended Categories</h4>
											<ul class="short-profile">
												<li>
													<div class="reco-cat-data-and-icons d-flex justify-content-between">
														<div class="reco-cat-data">
															<span>Cyber security</span>
															<small style="color:#088dcd" >Ayaragab</small>
															<p>Docker is an important tool in DevOps that every developer should know about!</p>
														</div>
														<div class="icons-reco d-flex justify-content-between">
															<!-- edit it to have exact method name -->
															<a class=" pe-1 pl-1 pb-1 pt-1 " style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=approve_category&username=<?php # $user['username'] ?>"> Approve <i class="fa-solid fa-check" style="font-size:1.1rem"></i> </a>
															<a  class=" pe-2 pl-2 pb-1 pt-1" style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=discard_category&username=<?php # $user['username'] ?>"> Discard <i class="fa-solid fa-x" style="font-size:1.1rem"></i> </a>
														</div>
													</div>
												</li>
												<li>
													<div class="reco-cat-data-and-icons d-flex justify-content-between">
														<div class="reco-cat-data">
															<span>Cyber security</span>
															<small style="color:#088dcd" >Ayaragab</small>
															<p>Docker is an important tool in DevOps that every developer should know about!</p>
														</div>
														<div class="icons-reco d-flex justify-content-between">
															<!-- edit it to have exact method name -->
															<a class=" pe-1 pl-1 pb-1 pt-1 " style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=approve_category&username=<?php # $user['username'] ?>"> Approve <i class="fa-solid fa-check" style="font-size:1.1rem"></i> </a>
															<a  class=" pe-2 pl-2 pb-1 pt-1" style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=discard_category&username=<?php # $user['username'] ?>"> Discard <i class="fa-solid fa-x" style="font-size:1.1rem"></i> </a>
														</div>
													</div>
												</li>
												<li>
													<div class="reco-cat-data-and-icons d-flex justify-content-between">
														<div class="reco-cat-data">
															<span>Cyber security</span>
															<small style="color:#088dcd" >Ayaragab</small>
															<p>Docker is an important tool in DevOps that every developer should know about!</p>
														</div>
														<div class="icons-reco d-flex justify-content-between">
															<!-- edit it to have exact method name -->
															<a class=" pe-1 pl-1 pb-1 pt-1 " style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=approve_category&username=<?php # $user['username'] ?>"> Approve <i class="fa-solid fa-check" style="font-size:1.1rem"></i> </a>
															<a  class=" pe-2 pl-2 pb-1 pt-1" style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=discard_category&username=<?php # $user['username'] ?>"> Discard <i class="fa-solid fa-x" style="font-size:1.1rem"></i> </a>
														</div>
													</div>
												</li>
												<li>
													<div class="reco-cat-data-and-icons d-flex justify-content-between">
														<div class="reco-cat-data">
															<span>Cyber security</span>
															<small style="color:#088dcd" >Ayaragab</small>
															<p>Docker is an important tool in DevOps that every developer should know about!</p>
														</div>
														<div class="icons-reco d-flex justify-content-between">
															<!-- edit it to have exact method name -->
															<a class=" pe-1 pl-1 pb-1 pt-1 " style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=approve_category&username=<?php # $user['username'] ?>"> Approve <i class="fa-solid fa-check" style="font-size:1.1rem"></i> </a>
															<a  class=" pe-2 pl-2 pb-1 pt-1" style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=discard_category&username=<?php # $user['username'] ?>"> Discard <i class="fa-solid fa-x" style="font-size:1.1rem"></i> </a>
														</div>
													</div>
												</li>
												<li>
													<div class="reco-cat-data-and-icons d-flex justify-content-between">
														<div class="reco-cat-data">
															<span>Cyber security</span>
															<small style="color:#088dcd" >Ayaragab</small>
															<p>Docker is an important tool in DevOps that every developer should know about!</p>
														</div>
														<div class="icons-reco d-flex justify-content-between">
															<!-- edit it to have exact method name -->
															<a class=" pe-1 pl-1 pb-1 pt-1 " style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=approve_category&username=<?php # $user['username'] ?>"> Approve <i class="fa-solid fa-check" style="font-size:1.1rem"></i> </a>
															<a  class=" pe-2 pl-2 pb-1 pt-1" style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=discard_category&username=<?php # $user['username'] ?>"> Discard <i class="fa-solid fa-x" style="font-size:1.1rem"></i> </a>
														</div>
													</div>
												</li>
												<li>
													<div class="reco-cat-data-and-icons d-flex justify-content-between">
														<div class="reco-cat-data">
															<span>Cyber security</span>
															<small style="color:#088dcd" >Ayaragab</small>
															<p>Docker is an important tool in DevOps that every developer should know about!</p>
														</div>
														<div class="icons-reco d-flex justify-content-between">
															<!-- edit it to have exact method name -->
															<a class=" pe-1 pl-1 pb-1 pt-1 " style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=approve_category&username=<?php # $user['username'] ?>"> Approve <i class="fa-solid fa-check" style="font-size:1.1rem"></i> </a>
															<a  class=" pe-2 pl-2 pb-1 pt-1" style="height:fit-content; text-align:center" href="approve-or-discard-execute.php?function=discard_category&username=<?php # $user['username'] ?>"> Discard <i class="fa-solid fa-x" style="font-size:1.1rem"></i> </a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-3 col-sm-6">
									<aside class="sidebar">
										<div class="widget friend-list">
										<h4 class="widget-title">Privileged Users</h4>
										<div id="searchDir"></div>
										<ul id="people-list" class="friendz-list">
											<li>
												<figure>
													<img src="images/resources/friend-avatar.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">bucky barnes</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9deaf4f3e9f8efeef2f1f9f8efddfaf0fcf4f1b3fef2f0">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f0d0e1d010a1c2f08020e0603410c0002">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar3.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">jason borne</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="107a71637f7e7250777d71797c3e737f7d">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar4.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Cameron diaz</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a707b697574785a7d777b737634797577">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5dfd4c6dadbd7f5d2d8d4dcd99bd6dad8">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar6.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">andrew</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d667468696547606a666e6b2964686a">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar7.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">amy watson</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="660c071509080426010b070f0a4805090b">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cea4afbda1a0ac8ea9a3afa7a2e0ada1a3">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3c3f2c303b2d1e39333f3732703d3133">[email&#160;protected]</a></i>
												</div>
											</li>
										</ul>
									</div><!-- friends list sidebar -->
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-3 col-sm-6">
									<aside class="sidebar">
									<div class="widget">
											<h4 class="widget-title">Recently registered users</h4>
											<ul id="people-list" class="friendz-list">
											<li>
												<figure>
													<img src="images/resources/friend-avatar.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">bucky barnes</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9deaf4f3e9f8efeef2f1f9f8efddfaf0fcf4f1b3fef2f0">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f0d0e1d010a1c2f08020e0603410c0002">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar3.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">jason borne</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="107a71637f7e7250777d71797c3e737f7d">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar4.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Cameron diaz</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a707b697574785a7d777b737634797577">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5dfd4c6dadbd7f5d2d8d4dcd99bd6dad8">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar6.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">andrew</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d667468696547606a666e6b2964686a">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar7.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">amy watson</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="660c071509080426010b070f0a4805090b">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cea4afbda1a0ac8ea9a3afa7a2e0ada1a3">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3c3f2c303b2d1e39333f3732703d3133">[email&#160;protected]</a></i>
												</div>
											</li>
										</ul>
										</div><!-- who's following --
									</aside>
								</div><!-- sidebar -->
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</section>
<?php require_once 'assests/footer.php'; ?>	
