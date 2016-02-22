<div class="row pagesContainer">
    <div class="col-sm-12">
        <!-- Beginning of the page content    -->
        <?php include('menu.php'); ?>
        
        <section id="contact">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form  id="contact_form" method="post" action="">
                        <div class="row">
                            <div class="col-sm-6 form-group inputContact">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="emailInput" placeholder="EMAIL">
                                <p id="exist" style="color:red;"></p>
                                <?php if($errorsEmail == 'error'){ echo '<p style="color:red;>Please enter a email.</p>';} ?>
                            </div>
                            <div class="col-sm-6 form-group inputContact">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" name="name" placeholder="NAME">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group inputContact">
                                <label for="msg">Message</label>
                                <textarea class="form-control" name="msg" rows="6" placeholder="MESSAGE"></textarea>
                                <?php if($errorsMsg == 'error'){ echo '<p style="color:red;>Please enter a message.</p>';} ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center" style="text-align:center;">
                                <input type="submit" class="" id="submitBtn" name="submitBtn" value="SEND" onclick="process_contact(event)">
								<div id="email_result"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
			
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3" style="margin-top:4em;">
					<div class="row">
						<div class="col-sm-3">
							<div class="icon">
								<a href="https://www.linkedin.com/profile/view?id=211479892&trk=nav_responsive_tab_profile" target="_blank"><img src="images/social/linkedin.png"></a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="icon">
								<a href="https://github.com/tidave85" target="_blank"><img src="images/social/github.png"></a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="icon">
								<a href="https://twitter.com/tidave1985" target="_blank"><img src="images/social/twitter.png"></a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="icon">
								<a href="https://www.behance.net/tidave85" target="_blank"><img src="images/social/behance.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        <!-- End of the page content    -->
    </div>
</div>