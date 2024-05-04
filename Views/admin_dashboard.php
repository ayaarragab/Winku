<?php require_once 'assests/admin-header-few-differences.php'; ?>	
	
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
										<div class="widget">
											<h4 class="widget-title">Who's follownig</h4>
											<ul class="followers">
												<li>
													<figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
													<div class="friend-meta">
														<h4><a href="time-line.html" title="">Kelly Bill</a></h4>
														<a href="#" title="" class="underline">Add Friend</a>
													</div>
												</li>
												<li>
													<figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
													<div class="friend-meta">
														<h4><a href="time-line.html" title="">Issabel</a></h4>
														<a href="#" title="" class="underline">Add Friend</a>
													</div>
												</li>
												<li>
													<figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
													<div class="friend-meta">
														<h4><a href="time-line.html" title="">Andrew</a></h4>
														<a href="#" title="" class="underline">Add Friend</a>
													</div>
												</li>
												<li>
													<figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
													<div class="friend-meta">
														<h4><a href="time-line.html" title="">Sophia</a></h4>
														<a href="#" title="" class="underline">Add Friend</a>
													</div>
												</li>
												<li>
													<figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
													<div class="friend-meta">
														<h4><a href="time-line.html" title="">Allen</a></h4>
														<a href="#" title="" class="underline">Add Friend</a>
													</div>
												</li>
											</ul>
										</div><!-- who's following -->
										<div class="widget">
											<h4 class="widget-title">Socials</h4>
											<ul class="socials">
												<li class="facebook">
													<a href="#" title=""><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
												</li>
												<li class="twitter">
													<a href="#" title=""><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
												</li>
												<li class="google">
													<a href="#" title=""><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
												</li>
											</ul>
										</div><!-- socials-->
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-4 col-sm-6">
									<aside class="sidebar">
										
										<div class="widget"> <!--Done (statitics) -->
											<h4 class="widget-title">Statistics</h4>
											<ul class="recent-photos">
												<li>
													<div class="numThing border-bottom m-2">
														<h6 style="font-weight:bold; text-align:center">Questions</h6>
														<h6 style="font-weight:bold; text-align:center; color:#088dcd">150</h6>
													</div>
												</li>
												<li>
													<div class="numThing border-bottom m-2">
														<h6 style="font-weight:bold; text-align:center">Answers</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd">500</h6>
													</div>
												</li>
												<li>
													<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Categories</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd">50</h6>
													</div>
												</li>
												<li class="">
													<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Users</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd">50</h6>
													</div>
												</li>
												<li>
													<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Priviliged Users</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd">1000</h6>
													</div>
												</li>
												<li>
												<div class="numThing border-bottom">
														<h6 style="font-weight:bold; text-align:center">Subcategories</h6>
														<h6 style="font-weight:bold; text-align:center;color:#088dcd">1000</h6>
													</div>
												</li>
											</ul>
										</div><!-- recent videos-->
										<div class="widget"> <!-- Recommended Categories -->
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
											</ul>
										</div><!-- profile intro -->
										<div class="widget">
											<h4 class="widget-title">Recent Activity</h4>
											<ul class="activitiez">
												<li>
													<div class="activity-meta">
														<i>10 hours Ago</i>
														<span><a href="#" title="">Commented on Video posted </a></span>
														<h6>by <a href="time-line.html">black demon.</a></h6>
													</div>
												</li>
												<li>
													<div class="activity-meta">
														<i>30 Days Ago</i>
														<span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
													</div>
												</li>
												<li>
													<div class="activity-meta">
														<i>2 Years Ago</i>
														<span><a href="#" title="">Share a video on her timeline.</a></span>
														<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
													</div>
												</li>
											</ul>
										</div><!-- recent activites -->
										
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
										<div class="chat-box">
											<div class="chat-head">
												<span class="status f-online"></span>
												<h6>Bucky Barnes</h6>
												<div class="more">
													<span><i class="ti-more-alt"></i></span>
													<span class="close-mesage"><i class="ti-close"></i></span>
												</div>
											</div>
											<div class="chat-list">
												<ul>
													<li class="me">
														<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="you">
														<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="me">
														<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
												</ul>
												<form class="text-box">
													<textarea placeholder="Post enter to post..."></textarea>
													<div class="add-smiles">
														<span title="add icon" class="em em-expressionless"></span>
													</div>
													<div class="smiles-bunch">
														<i class="em em---1"></i>
														<i class="em em-smiley"></i>
														<i class="em em-anguished"></i>
														<i class="em em-laughing"></i>
														<i class="em em-angry"></i>
														<i class="em em-astonished"></i>
														<i class="em em-blush"></i>
														<i class="em em-disappointed"></i>
														<i class="em em-worried"></i>
														<i class="em em-kissing_heart"></i>
														<i class="em em-rage"></i>
														<i class="em em-stuck_out_tongue"></i>
													</div>
													<button type="submit"></button>
												</form>
											</div>
										</div>
									</div><!-- friends list sidebar -->
										<div class="widget">
											<h4 class="widget-title">Twitter feed</h4>
											<ul class="twiter-feed">
												<li>
													<i class="fa fa-twitter"></i>
													<span>
														<i>jhon william</i>
														@jhonwilliam
													</span>
													<p>tomorrow with the company we were working and 5 child run away from the working place. <a href="#" title="">#daydream5k</a> </p>
													<em>2 hours ago</em>
												</li>
												<li>
													<i class="fa fa-twitter"></i>
													<span>
														<i>Kelly watson</i>
														@kelly
													</span>
													<p>tomorrow with the company we were working and 5 child run away from the working place. <a href="#" title="">#daydream5k</a> </p>
													<em>2 hours ago</em>
												</li>
												<li>
													<i class="fa fa-twitter"></i>
													<span>
														<i>Jony bravo</i>
														@jonibravo
													</span>
													<p>tomorrow with the company we were working and 5 child run away from the working place. <a href="#" title="">#daydream5k</a> </p>
													<em>2 hours ago</em>
												</li>
											</ul>
										</div><!-- twitter feed-->
										
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-3 col-sm-6">
									<aside class="sidebar">
										<div class="advertisment-box">
										<h4 class="">advertisment</h4>
										<figure>
											<a title="Advertisment" href="#"><img alt="" src="images/resources/ad-widget.jpg"></a>
										</figure>
									</div>
										<div class="widget">
											<h4 class="widget-title">Recent Photos</h4>
											<ul class="recent-photos">
												<li>
													<a class="strip" href="images/resources/recent-11.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-1.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-2.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-3.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-44.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
													<img src="images/resources/recent-4.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-55.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-5.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-6.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-77.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-7.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-88.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-8.jpg" alt=""></a>
												</li>
												<li>
													<a class="strip" href="images/resources/recent-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
														<img src="images/resources/recent-9.jpg" alt=""></a>
												</li>
											</ul>
										</div><!-- recent photos-->
										<div class="widget">
											<h4 class="widget-title">Your page</h4>	
											<div class="your-page">
												<figure>
													<a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
												</figure>
												<div class="page-meta">
													<a href="#" title="" class="underline">My page</a>
													<span><i class="ti-comment"></i>Messages <em>9</em></span>
													<span><i class="ti-bell"></i>Notifications <em>2</em></span>
												</div>
												<div class="page-likes">
													<ul class="nav nav-tabs likes-btn">
														<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
														 <li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
													  <div class="tab-pane active fade show " id="link1" >
														<span><i class="ti-heart"></i>884</span>
														  <a href="#" title="weekly-likes">35 new likes this week</a>
														  <div class="users-thumb-list">
														  	<a href="#" title="Anderw" data-toggle="tooltip">
																<img src="images/resources/userlist-1.jpg" alt="">  
															</a>
															<a href="#" title="frank" data-toggle="tooltip">
																<img src="images/resources/userlist-2.jpg" alt="">  
															</a>
															<a href="#" title="Sara" data-toggle="tooltip">
																<img src="images/resources/userlist-3.jpg" alt="">  
															</a>
															<a href="#" title="Amy" data-toggle="tooltip">
																<img src="images/resources/userlist-4.jpg" alt="">  
															</a>
															<a href="#" title="Ema" data-toggle="tooltip">
																<img src="images/resources/userlist-5.jpg" alt="">  
															</a>
															<a href="#" title="Sophie" data-toggle="tooltip">
																<img src="images/resources/userlist-6.jpg" alt="">  
															</a>
															<a href="#" title="Maria" data-toggle="tooltip">
																<img src="images/resources/userlist-7.jpg" alt="">  
															</a>  
														  </div>
													  </div>
													  <div class="tab-pane fade" id="link2" >
														  <span><i class="ti-eye"></i>445</span>
														  <a href="#" title="weekly-likes">440 new views this week</a>
														  <div class="users-thumb-list">
														  	<a href="#" title="Anderw" data-toggle="tooltip">
																<img src="images/resources/userlist-1.jpg" alt="">  
															</a>
															<a href="#" title="frank" data-toggle="tooltip">
																<img src="images/resources/userlist-2.jpg" alt="">  
															</a>
															<a href="#" title="Sara" data-toggle="tooltip">
																<img src="images/resources/userlist-3.jpg" alt="">  
															</a>
															<a href="#" title="Amy" data-toggle="tooltip">
																<img src="images/resources/userlist-4.jpg" alt="">  
															</a>
															<a href="#" title="Ema" data-toggle="tooltip">
																<img src="images/resources/userlist-5.jpg" alt="">  
															</a>
															<a href="#" title="Sophie" data-toggle="tooltip">
																<img src="images/resources/userlist-6.jpg" alt="">  
															</a>
															<a href="#" title="Maria" data-toggle="tooltip">
																<img src="images/resources/userlist-7.jpg" alt="">  
															</a>  
														  </div>
													  </div>
													</div>
												</div>
											</div>
										</div><!-- page like widget -->
										<div class="widget">
											<div class="banner medium-opacity bluesh">
											<div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
											<div class="baner-top">
												<span><img alt="" src="images/book-icon.png"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own favourit page.
												</p>
												<span>like them all</span>
												<a data-ripple="" title="" href="#">start now!</a>
											</div>
										</div>											
										</div><!-- creat page-->
										
									</aside>
								</div><!-- sidebar -->
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</section>
<?php require_once 'assests/footer.php'; ?>	
