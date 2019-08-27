<?php include "./include/header.html" ?>
	
	<!-- Container -->
	<div class="container">
		
		<!-- Header -->
		<header>
				<div class="head-top">
					<a href="#" class="menu-btn"><span></span></a>
					<div class="top-menu">
						<ul>
							<li><a href="resume.php" class="lnk">Resume</a></li>
							<li class="active"><a href="contacts.php" class="btn">Contacts</a></li>
						</ul>
					</div>
				</div>
			</header>
		
		<!-- Wrapper -->
		<div class="wrapper">
		
			<!-- Started -->
			<div class="section started">
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<div class="h-title glitch-effect" data-text="Contacts">Contacts</div>
							<div class="h-subtitle typing-bread">
								<p><a href="index.php">Home</a> / <a href="contacts.php">Contacts</a></p>
							</div>
							<span class="typed-bread"></span>
						</div>
					</div>
				</div>
				<a href="#" class="mouse_btn"><span class="ion ion-mouse"></span></a>
			</div>
			
			<!-- Contacts Info -->
			<div class="section contacts">
				<div class="content">
					<div class="contact_form">
						<form id="cform" method="post">
							<div class="group-val">
								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="group-val">
								<input type="text" name="email" placeholder="Email" />
							</div>
							<div class="group-val ct-gr">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<a href="#" class="btn fill" onclick="$('#cform').submit(); return false;" data-text="Send Message">Send Message</a>
						</form>
						<div class="alert-success">
							<p>
								Thanks, your message is sent successfully. We will contact you shortly!
							</p>
						</div>
					</div>
				</div>
			</div>
		
		</div>
		
		<?php include "./include/footer.html" ?>