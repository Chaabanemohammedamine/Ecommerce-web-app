<?php include 'inc/header.php'; ?>
<?php include 'inc/notification.php'; ?>
 <div class="main">
    <div class="content">
    	<div class="support">
  			<div class="support_desc">
  				<h3>Live Support</h3>
  				<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
  			</div>
  				<img src="web/images/contact.png" alt="" />
  			<div class="clear"></div>
  		</div>
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					  <form action="phpmailer/index.php" method="POST">
                            <div>
                                <span><label>NAME</label></span>
                                <span><input type="text" value="" name="name"></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input type="text" value="" name="email"></span>
                            </div>
                            <div>
                                 <span><label>MOBILE.NO</label></span>
                                <span><input type="text" value="" name="tel" ></span>
                            </div>
                            <div>
                                <span><label>SUBJECT</label></span>
                                <span><textarea name="message" > </textarea></span>
                            </div>
                           <div>
                                   <span><input type="submit"  value="SUBMIT"></span>
                          </div>
                        </form>
				  </div>
  				</div>

			  </div>    	
    </div>
 </div>
<?php include 'inc/footer.php'; ?>
