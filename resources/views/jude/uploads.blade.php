<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/form-common.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2016 16:00:25 GMT -->
<head>
<title>Unicorn Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/icheck/flat/blue.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/unicorn.css" />

</head>
<body data-color="grey" class="flat">
	<div id="wrapper">
		<div id="header">
			<h1>
				<a href="index-2.html">Unicorn Admin</a>
			</h1>
			<a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
		</div>
		<div id="user-nav">
			<ul class="btn-group">
				<li class="btn"><a title="" href="#"><i class="fa fa-user"></i>
						<span class="text">Profile</span></a></li>
				<li class="btn dropdown" id="menu-messages"><a href="#"
					data-toggle="dropdown" data-target="#menu-messages"
					class="dropdown-toggle"><i class="fa fa-envelope"></i> <span
						class="text">Messages</span> <span class="label label-danger">5</span>
						<b class="caret"></b></a>
					<ul class="dropdown-menu messages-menu">
						<li class="title"><i class="fa fa-envelope-alt"></i>Messages<a
							class="title-btn" href="#" title="Write new message"><i
								class="fa fa-share"></i></a></li>
						<li class="message-item"><a href="#"> <img
								alt="User Icon" src="img/demo/av1.jpg" />
								<div class="message-content">
									<span class="message-time"> 3 mins ago </span> <span
										class="message-sender"> Nunc Cenenatis </span> <span
										class="message"> Hi, can you meet me at the office
										tomorrow morning? </span>
								</div>
						</a></li>
						<li class="message-item"><a href="#"> <img
								alt="User Icon" src="img/demo/av1.jpg" />
								<div class="message-content">
									<span class="message-time"> 3 mins ago </span> <span
										class="message-sender"> Nunc Cenenatis </span> <span
										class="message"> Hi, can you meet me at the office
										tomorrow morning? </span>
								</div>
						</a></li>
						<li class="message-item"><a href="#"> <img
								alt="User Icon" src="img/demo/av1.jpg" />
								<div class="message-content">
									<span class="message-time"> 3 mins ago </span> <span
										class="message-sender"> Nunc Cenenatis </span> <span
										class="message"> Hi, can you meet me at the office
										tomorrow morning? </span>
								</div>
						</a></li>
					</ul></li>
				<li class="btn"><a title="" href="#"><i class="fa fa-cog"></i>
						<span class="text">Settings</span></a></li>
				<li class="btn"><a title="" href="login.html"><i
						class="fa fa-share"></i> <span class="text">Logout</span></a></li>
			</ul>
		</div>
		
		<div id="sidebar">
			<div id="search">
				<input type="text" placeholder="Search here..." />
				<button type="submit" class="tip-right" title="Search">
					<i class="fa fa-search"></i>
				</button>
			</div>
			<ul>
				<li><a href="index-2.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
				<li class="submenu"><a href="#"><i class="fa fa-flask"></i>
						<span>UI Lab</span> <i class="arrow fa fa-chevron-right"></i></a>
					<ul>
						<li><a href="interface.html">Interface Elements</a></li>
						<li><a href="jquery-ui.html">jQuery UI</a></li>
						<li><a href="buttons.html">Buttons &amp; icons</a></li>
					</ul></li>
				<li class="submenu active open"><a href="#"><i
						class="fa fa-th-list"></i> <span>Form elements</span> <i
						class="arrow fa fa-chevron-right"></i></a>
					<ul>
						<li class="active"><a href="form-common.html">Common
								elements</a></li>
						<li><a href="form-validation.html">Validation</a></li>
						<li><a href="form-wizard.html">Wizard</a></li>
					</ul></li>
				<li><a href="tables.html"><i class="fa fa-th"></i> <span>Tables</span></a></li>
				<li><a href="grid.html"><i class="fa fa-th-list"></i> <span>Grid
							Layout</span></a></li>
				<li class="submenu"><a href="#"><i class="fa fa-file"></i>
						<span>Sample pages</span> <i class="arrow fa fa-chevron-right"></i></a>
					<ul>
						<li><a href="invoice.html">Invoice</a></li>
						<li><a href="chat.html">Support chat</a></li>
						<li><a href="calendar.html">Calendar</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="messages.html">Messages</a></li>
					</ul></li>
				<li><a href="charts.html"><i class="fa fa-signal"></i> <span>Charts
							&amp; graphs</span></a></li>
				<li><a href="widgets.html"><i class="fa fa-inbox"></i> <span>Widgets</span></a>
				</li>
			</ul>
		</div>
		<div id="style-switcher">
			<i class="fa fa-arrow-left icon-white"></i> <span>Style:</span> <a
				href="#grey"
				style="background-color: #555555; border-color: #aaaaaa;"></a> <a
				href="#light-blue" style="background-color: #8399b0;"></a> <a
				href="#blue" style="background-color: #2D2F57;"></a> <a href="#red"
				style="background-color: #673232;"></a> <a href="#red-green"
				style="background-image: url('img/demo/red-green.png'); background-repeat: no-repeat;"></a>
		</div>
		<div id="content">
			<div id="content-header">
				<h1>Common Form Elements</h1>
				<div class="btn-group">
					<a class="btn btn-large" title="Manage Files"><i
						class="fa fa-file"></i></a> <a class="btn btn-large"
						title="Manage Users"><i class="fa fa-user"></i></a> <a
						class="btn btn-large" title="Manage Comments"><i
						class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn btn-large" title="Manage Orders"><i
						class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="index-2.html" title="Go to Home" class="tip-bottom"><i
					class="fa fa-home"></i> Home</a> <a href="#">Form elements</a> <a
					href="#" class="current">Common elements</a>
			</div>
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-align-justify"></i>
								</span>
								<h5>Upload Videos</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="get" class="form-horizontal">
									
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Subject</label>
										<div class="col-sm-2 col-md-2 col-lg-3">
											
											<select>
												<option>First option</option>
												<option>Second option</option>
												<option>Third option</option>
												<option>Fourth option</option>
												<option>Fifth option</option>
												<option>Sixth option</option>
												<option>Seventh option</option>
												<option>Eighth option</option>
											</select>
										</div>
										<label class="col-sm-3 col-md-2 col-lg-2 control-label">Age Category</label>
										<div class="col-sm-2 col-md-2 col-lg-3">
											<select>
												<option>First option</option>
												<option>Second option</option>
												<option>Third option</option>
												<option>Fourth option</option>
												<option>Fifth option</option>
												<option>Sixth option</option>
												<option>Seventh option</option>
												<option>Eighth option</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-2 col-lg-2 control-label">Select File</label>
										<div class="col-sm-2 col-md-2 col-lg-3">
											<input type="file" required="yes" />
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-2 col-md-2 col-lg-2"></div>
										<div class="col-sm-2 col-md-2 col-lg-3"></div>
										<div class="col-sm-2 col-md-2 col-lg-3"></div>
										<a href="#" data-toggle="dropdown" class="col-sm-3 col-md-2 col-lg-1 btn btn-primary dropdown-toggle">
											<i class="fa fa-upload icon-white"></i> Upload
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Gallery</h5>
							</div>
							<div class="widget-content">
								<div class="gallery-masonry">
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img1.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Preview" href="#" class="tip-top"><i
													class="fa fa-eye"></i></a>
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> 
												<a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img2.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img3.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img4.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img5.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img6.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img7.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img8.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="img/demo/img9.jpg"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img10.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img11.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img12.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img13.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img14.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img15.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img16.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img17.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img
											src="img/demo/img18.jpg" alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
								</div>
								<span style="font-size: 10px; color: #888888;">All Images
									licensed under <a
									href="http://creativecommons.org/licenses/by-nd/2.0/deed.en">Creative
										Commons BY-ND 2.0</a>, <a
									href="http://www.flickr.com/photos/sbl83/">stilettobootlover_83's</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="footer" class="col-xs-12">
				2012 - 2013 &copy; Unicorn Admin. Brought to you by <a
					href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.custom.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-colorpicker.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.icheck.min.js"></script>
		<script src="js/select2.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/unicorn.js"></script>
		<script src="js/unicorn.form_common.js"></script>
		<script src="js/jquery.masonry.min.js"></script>
		<script>
                $(function(){
                    $('.gallery-masonry').masonry({
                      itemSelector: '.item',
                      isAnimated: true,
                      isFitWidth: true
                    });                    
                });
            </script>
</body>

<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/form-common.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2016 16:00:31 GMT -->
</html>
