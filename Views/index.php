<?php
include('assests/header.php');
require_once '../Controllers/questionControllers/add_question_logic.php';
session_start();
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
									<?php
									if ($_SESSION['username']) {

										echo '<div class="central-meta item">';
										echo '<div class="user-post">';
										echo '<div class="title-and-ellipse d-flex ">';
										echo '<a href="question_detail.php"><h5 style="font-weight: bold; width: 70%; color: rgb(45, 45, 45); font-size: 1.6rem;">'.$questionObj->getTitle().'</h5></a>';
										echo '<i id="ellipse-element" class="fa-solid fa-ellipsis-vertical cursor-pointer" style="font-size:30px; margin-top:2px"></i></div>';
										echo '											<div class="d-flex ff">
										<ul id="op-list" class="options-list" style="display: none;">
											<li><i class="fa-solid fa-pen"></i><span class="p-2">Edit</span></li>
											<li><i class="fa-solid fa-trash"></i><span class="p-2">Delete</span></li>
											<li><i class="fa-solid fa-flag"></i><span class="p-2">Report</span></li>
											<li><i class="fa-solid fa-bookmark"></i><span class="p-2">Bookmark</span></li>
										</ul>
									</div>';
									echo '<div class="friend-info">
									<div class="friend-name">
										<ins><a title="" href="time-line.php" style="font-size: 1rem;">Janice Griffith</a></ins>
										<span>published:'.$questionObj->getPublishedDate().'</span>
									</div>
								</div>';
								echo '<div class="description" style="display: none;"> <!-- do it with query string when he enters a question a new page opens with question details -->
								<p style="font-size: 0.99rem;" >'.$questionObj->getBody().'</p>
							</div>';
							echo '<div class="coment-area" style="display: none;"> <!-- Answers --> 
							<ul class="we-comet">
								<li>
									<div class="comet-avatar">
										<img src="images/resources/comet-1.jpg" alt="">
									</div>
									<div class="we-comment">
										<div class="coment-head">
											<h5><a href="time-line.php" title="">Jason borne</a></h5>
											<span>1 year ago</span>
										</div>
										<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
									</div>
									<div class="we-video-info m-0 p-0">
										<ul>
											<li>
												<span class="views" data-toggle="tooltip" title="views">
													<i class="fa fa-eye"></i>
													<ins>1.2k</ins>
												</span>
											</li>
											<li>
												<span class="like" data-toggle="tooltip" title="like">
													<i class="ti-heart"></i>
													<ins>2.2k</ins>
												</span>
											</li>
											<li data-toggle="tooltip" title="share">
												<span>
													<span><i class="fa-solid fa-share-from-square"></i></span>
													<ins>300</ins>
												</span>
											</li>
										</ul>
									</div>
								</li>
								<li>
										<div class="comet-avatar">
												<img src="images/resources/comet-2.jpg" alt="">
										</div>
										<div class="we-comment">
												<div class="coment-head">
													<h5><a href="time-line.php" title="">alexendra dadrio</a></h5>
													<span>1 month ago</span>
													<a class="we-reply" href="#" title="Reply"></a>
												</div>
												<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
										</div>
										<div class="we-video-info m-0 p-0">
											<ul>
												<li>
													<span class="views" data-toggle="tooltip" title="views">
														<i class="fa fa-eye"></i>
														<ins>1.2k</ins>
													</span>
												</li>
												<li>
													<span class="like" data-toggle="tooltip" title="like">
														<i class="ti-heart"></i>
														<ins>2.2k</ins>
													</span>
												</li>
												<li data-toggle="tooltip" title="share">
													<span>
														<span><i class="fa-solid fa-share-from-square"></i></span>
														<ins>300</ins>
													</span>
												</li>
											</ul>
										</div>
								</li>
								<li>
										<div class="comet-avatar">
												<img src="images/resources/comet-3.jpg" alt="">
										</div>
										<div class="we-comment">
											<div class="coment-head">
												<h5><a href="time-line.php" title="">Olivia</a></h5>
												<span>16 days ago</span>
											</div>
											<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>																</div>
											<div class="we-video-info m-0 p-0">
												<ul>
													<li>
														<span class="views" data-toggle="tooltip" title="views">
															<i class="fa fa-eye"></i>
															<ins>1.2k</ins>
														</span>
													</li>
													<li>
														<span class="like" data-toggle="tooltip" title="like">
															<i class="ti-heart"></i>
															<ins>2.2k</ins>
														</span>
													</li>
													<li data-toggle="tooltip" title="share">
														<span>
															<span><i class="fa-solid fa-share-from-square"></i></span>
															<ins>300</ins>
														</span>
													</li>
												</ul>
											</div>
								</li>
								</li>
								<li>
									<div class="comet-avatar">
										<img src="images/resources/comet-1.jpg" alt="">
									</div>
									<div class="we-comment">
										<div class="coment-head">
											<h5><a href="time-line.php" title="">Donald Trump</a></h5>
											<span>1 week ago</span>
										</div>
										<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
											<i class="em em-smiley"></i>
										</p>
									</div>
									<div class="we-video-info m-0 p-0">
										<ul>
											<li>
												<span class="views" data-toggle="tooltip" title="views">
													<i class="fa fa-eye"></i>
													<ins>1.2k</ins>
												</span>
											</li>
											<li>
												<span class="like" data-toggle="tooltip" title="like">
													<i class="ti-heart"></i>
													<ins>2.2k</ins>
												</span>
											</li>
											<li data-toggle="tooltip" title="share">
												<span>
													<span><i class="fa-solid fa-share-from-square"></i></span>
													<ins>300</ins>
												</span>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" title="" class="showmore underline">more comments</a>
								</li>
								<li class="post-comment">
									<div class="comet-avatar">
										<img src="images/resources/comet-1.jpg" alt="">
									</div>
									<div class="newpst-input">
										<form method="post">
											<textarea rows="2" style="font-size: large;" placeholder="Add an answer!"></textarea>
											<div class="attachments">
												<ul>
													<li>
														<i class="fa fa-image"></i>
														<label class="fileContainer">
															<input type="file">
														</label>
													</li>
													<li>
														<button type="submit">Ask</button>
													</li>
												</ul>
											</div>
										</form>
									</div>
								</li>
							</ul></div>';									}
									?>
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