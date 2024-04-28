<?php
include('assests/header.php');
require_once '../Controllers/add_question_logic.php';
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
								<div class="col-lg-6 ask">
                                    <h3 style="color: black; font-weight: bold;" >Ask a question</h3>
									<div class="central-meta">
										<div class="new-postbox">
											<div class="newpst-input">
												<form action="index.php" method="POST">
                                                    <h5 style="color: black; font-weight: bold;" >Write the question title</h5>
													<textarea name="title" rows="1" style="font-size: large;" placeholder="e.g. What are the princiles of industry today?"></textarea>
                                                    <h5 style="color: black; font-weight: bold;" >Write the question body</h5>
													<textarea  name="body" rows="4" style="font-size: large;" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt molestiae temporibus, earum nihil dolorum odio illo. Blanditiis eligendi ipsum quam sequi corrupti, est expedita explicabo aliquam, porro qui repudiandae minus."></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
														</ul>
													</div>
													<h5 style="color: black; font-weight: bold;" >Tags</h5>
													<textarea name="tags" rows="1" style="font-size: large;" placeholder="e.g. #web #python #oop"></textarea>
                                                    <button style="border-radius: 10px;" name="" class="mt-4" type="submit">Ask</button>
												</form>
											</div>
										</div>
									</div><!-- add post new box -->
								</div>
								<div class="col-lg-3"></div>
								</div><!-- centerl meta -->
							</div>	
						</div>
					</div>
			</div>
	
	</section>

<?php
include('assests/footer.php')
?>