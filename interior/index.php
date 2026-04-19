<?php include("connection.php");?>
<!DOCTYPE html>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="overflow-y: hidden;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Designerz Hub</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico">
	<link href="layout/css/bootstrap.css" rel="stylesheet">
<link href="layout/css/style.css" rel="stylesheet">	
<link href="layout/css/animations.css" rel="stylesheet">
<link href="layout/css/custom-animations.css" rel="stylesheet">	
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css">	

<link href="layout/css/css" rel="stylesheet" type="text/css">
<link href="layout/css/css(1)" rel="stylesheet" type="text/css">
	<link href="layout/css/font-awesome.css" rel="stylesheet">
<style type="text/css"></style></head>
<body data-spy="scroll" data-target=".navbar" class="desktop">	
	<!-- PRELOADER -->
	<div id="preloader" style="display: none;">
		<div id="status" style="display: none;">&nbsp;</div>
	</div>
	<!-- HOME -->
	<div id="home">
		<!-- HOME SLIDER -->
		<div class="home-slider main-section gray-bg">
			<div class="text-center">
				<a class="navbar-brand smooth" href="#home">
					<img src="images/logo.png" alt="logo"> 
				</a>
			</div>
			<div class="caroufred green" style="height: 376px;">
				<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1366px; height: 376px; margin: 0px; overflow: hidden;">
                <ul class="gallery uppercase" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 8196px; height: 385px; max-height: 376px;">
<?php 
$slider=mysqli_query($connection,"select slider_pic_id, slider_pic, slider_pic_title from main_slider")or die ("query 1 incorrect.....");

while(list($slider_pic_id,$slider_pic,$slider_pic_title)=mysqli_fetch_array($slider))
{
echo" <li style='width: 683px;'>
	<img src='images/main_slider/$slider_pic' alt='img'> 
  <div class='home-overlay colored-text text-center' style='top: 295px;'>
		<h4><span>$slider_pic_title</span></h4>
		</div></li> ";
}
?>
           </ul></div>
				<div class="carousel_pagination-outer">
					<div id="caroufred_home_slide_pager" class="carousel_pagination left" style="display: table;">
					<a href="#"><span>1</span></a><a href="#" class="selected"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a></div>
				</div>
			</div>
		</div>	
		<!-- END OF home slider -->
		<!-- NAVIGATION -->
		<div class="sticky-wrapper"><div id="navigate" class="my-sticky-element col-xs-12 col-sm-12 col-md-12 col-lg-12">		
			<nav class="navbar main-menu gray-bg" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<i class=" icon-angle-down"></i>
					</button>						
				</div>								               
				<div class="navbar-collapse navbar-ex1-collapse uppercase in">
					<ul class="nav navbar-nav text-center">
						<li class="active">	                   			
							<a href="#home" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Home</span>
							</a>
						</li>
						<li class="">
							<a href="#aboutus">
							<i class="fa fa-circle" ></i> 	                   				
								<span>About</span>
							</a>
						</li>
						<li class="">
							<a href="#services" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Services</span>
							</a>
						</li> 							                  			
						<li class="">
							<a href="#projects" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Products</span>
							</a>						
						</li>							
						<li class="">
			<a href="#contact" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Contact</span>
							</a>
						</li>
						
					</ul>
				</div>			
			</nav>
			<div class="menu_bottom bot_angle_right" style="border-right-width: 1366px;"></div>
		</div></div> 
		<!-- END OF navigation -->
	</div>
	<!-- END OF home -->		
	<!-- PAGES WRAPPER -->
	<div id="page-wrapper">		
		<!-- ABOUT US -->
		<div id="aboutus" class="main-section not-home">
			<!-- WHY US -->
			<div class="container">				
				<div class="title page-title text-center">
					<h1 class="dark-text">Why Us</h1>
					<span class="underline green"></span>
				</div>					
			</div>
			<div class="container text-center pad-bot about-description">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated-scale-up custom-animation-scale-up">
					<p>we pride ourselves in surpassing the focus of design by delivering luxurious and innovative homes that directly correlate to our client’s needs.
					</p>
				</div>
			</div>
			<div class="container pad-bot highlighted">	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-left custom-animation-slide-left">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Innovative</span><span>Design</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-top custom-animation-slide-top">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Unique</span><span>Style</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights  animated-slide-bottom custom-animation-slide-bottom">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Personal</span><span>Attention</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-right custom-animation-slide-right">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Exceptional</span><span>Service</span></h6>
				</div>					
			</div>
			<!-- TESTIMONIALS -->
			<div class="testimonials">
				<div class="about_bottom bot_angle_left" style="border-right-width: 1366px;"></div>
				<div class="container page-title  pad-bot"> 
					<div class="animated-fade colored-text col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 custom-animation-fade">
						<div class="caroufred-text">
							<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 730px; height: 216px; margin: 0px 0px 18px; overflow: hidden;">
                            <ul class="testimonials" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 5110px; height: 216px;">
								
<?php 
$result=mysqli_query($connection,"select client_id,client_pic, client_name, client_details from clients")or die ("query 1 incorrect.....");

while(list($client_id,$client_pic,$client_name,$client_details)=mysqli_fetch_array($result))
{
echo"	<li style='width: 730px;'>
		<p class='testimonials-img'>
		<img src='images/customers/$client_pic' alt='' style='width:120px; height:120px'></p>
		<p class='testimonials-quote text-center italic-text'>
		<cite>— $client_name</cite>
		<cite> $client_details</cite>
		</p></li>";
}
?>
        </ul></div>
		<div id="caroufred_testimonials_pager" class="carousel_pagination left" style="display: table;">
<a href="#"><span>1</span></a><a href="#"><span>2</span></a><a href="#" class="selected"><span>3</span></a></div>
						</div>	
					</div>											
				</div>
				<div class="team_top top_angle_left" style="border-left-width: 1366px;"></div>
			</div>	
			<!-- STAFF -->
			<div class="team blue-bg green">
				<div class="container">					
					<div class="title page-title text-center">
						<h1 class="light-text">Our Team</h1>
						<span class="underline white"></span>
					</div>													
				</div>
				<div class="container pad-bot">
					<div class="team-members">
						<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-slide-left custom-animation-slide-left">
							<div class="block-inner">
								<div class="team-img">
									<img src="images/team1.jpg" alt="team">
									<div class="overlay-img text-center">
										<div class="contact-icons">
											<div class="contact-icons-inner">											
												<a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
												<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
												<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>											
												<a href="http://www.instagram.com/"><i class="icon-instagram"></i></a>											
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="names text-center">								
								<span class="uppercase name">Project Manager | Interior Designer</span>
								<h5 class="text-center colored-text uppercase">Nicole Smith</h5>
								<span>Experienced Project Manager skilled in coordinating cross-functional teams, managing timelines, and delivering complex projects on time and within budget. Passionate about turning ideas into actionable plans with precision and creativity.</span>	
							</div>							
						</div>
<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-scale-up custom-animation-scale-up">
     <div class="block-inner">
     <div class="team-img">
     <img src="images/team1.jpg" alt="team">
     <div class="overlay-img text-center">
     <div class="contact-icons">
     <div class="contact-icons-inner">											
<a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
												<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
												<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>																					
												<a href="http://www.instagram.com/"><i class="icon-instagram"></i></a>											
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="names text-center">
								<span class="uppercase name">Interior Designer</span>
								<h5 class="text-center colored-text uppercase">Jack Preach</h5>	
								<span>Creative Interior Designer with a passion for transforming spaces into functional, stylish environments. Known for blending aesthetics with practicality to craft interiors that reflect each client’s unique personality and lifestyle.</span>									
							</div>							
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-slide-right custom-animation-slide-right">
							<div class="block-inner">
								<div class="team-img">
			<img src="images/team1.jpg" alt="team">
			<div class="overlay-img text-center">
			<div class="contact-icons">
			<div class="contact-icons-inner">											
<a href="#"><i class="icon-twitter"></i></a>
<a href="#"><i class="icon-facebook"></i></a>											
<a href="#"><i class="icon-google-plus"></i></a>							
<a href="#"><i class="icon-instagram"></i></a>
			</div></div>
			</div></div>
			</div>	
	<div class="names text-center">
	<span class="uppercase name">CAD Operator</span>
<h5 class="text-center colored-text uppercase">David Harper</h5>			
	<span>Detail-oriented CAD Operator with expertise in creating precise technical drawings and blueprints for architectural and engineering projects. Skilled in AutoCAD and other design software, ensuring accuracy and efficiency in every phase of the drafting process.</span>						
				</div></div>
				</div></div>
                
<div class="team_bottom top_angle_right" style="border-left-width: 1366px;">
</div></div>	
</div>
		<!-- END OF about us -->		
		<!-- Services -->
<div id="services" class="main-section not-home">
  <div class="services gray-light-bg">
    <div class="container">
      <div class="title page-title text-center">
        <h1 class="dark-text">Our Services</h1>
        <span class="underline green"></span>
      </div>
      <div class="intro text-center pad-bot">
        <p>Discover our comprehensive interior design and construction services. Hover over each service to explore detailed insights or submit a query below!</p>
      </div>
    </div>

    <div class="container pad-bot">
      <div class="content green">
        <!-- Service 1: Concept -->
        <div class="service">
          <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-top">
            <div class="service-icon colored-background"><i class="fa fa-pencil"></i></div>
            <h5 class="uppercase">Concept</h5>
            <p>The starting point of every project, blending style, color, and mood.</p>
            <div class="service-details">
              <p>Our concept phase lays the foundation for your dream space with these key elements:</p>
              <ul>
                <li><i class="fa fa-check"></i> <strong>Planning:</strong> We begin by assessing your space and needs, creating a detailed layout that optimizes functionality and flow. This includes spatial analysis, zoning, and preliminary sketches tailored to your lifestyle.</li>
                <li><i class="fa fa-check"></i> <strong>Circulation:</strong> Ensuring seamless movement is key. We design pathways and transitions between rooms, prioritizing accessibility and comfort, so your space feels intuitive and inviting.</li>
                <li><i class="fa fa-check"></i> <strong>3D Visualization:</strong> See your ideas come to life with cutting-edge 3D renderings. We provide realistic visuals to help you envision the final look, from furniture placement to lighting effects.</li>
                <li><i class="fa fa-check"></i> <strong>Construction:</strong> Early consideration of construction feasibility ensures your concept is buildable. We align design with structural realities, collaborating with engineers for a solid foundation.</li>
                <li><i class="fa fa-check"></i> <strong>Materials:</strong> We select high-quality, sustainable materials that match your aesthetic and budget, from luxurious woods to eco-friendly textiles, setting the tone for durability and style.</li>
                <li><i class="fa fa-check"></i> <strong>Color:</strong> Color schemes are crafted to evoke emotion and harmony. We curate palettes that reflect your personality, balancing bold accents with soothing neutrals.</li>
                <li><i class="fa fa-check"></i> <strong>Lighting:</strong> Lighting design enhances ambiance and functionality. We plan natural and artificial light sources, from statement chandeliers to subtle recessed fixtures, to elevate your space.</li>
              </ul>
            </div>
            <div class="service-description"></div>
          </div>

          <!-- Service 2: Design -->
          <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-right">
            <div class="service-icon colored-background"><i class="fa fa-picture-o"></i></div>
            <h5 class="uppercase">Design</h5>
            <p>Transforming requirements into a conceptual masterpiece.</p>
            <div class="service-details">
              <p>We refine your vision through these detailed phases:</p>
              <ul>
                <li><i class="fa fa-check"></i> <strong>Conceptual Design:</strong> Initial sketches and mood boards capture your ideas, blending creativity with practicality to outline the project’s direction.</li>
                <li><i class="fa fa-check"></i> <strong>Design Development:</strong> We refine sketches into detailed plans, incorporating feedback to perfect layouts, finishes, and furnishings for a cohesive look.</li>
                <li><i class="fa fa-check"></i> <strong>Permit Documents:</strong> Detailed drawings and specifications are prepared for regulatory approval, ensuring compliance with local codes and safety standards.</li>
                <li><i class="fa fa-check"></i> <strong>Construction Drawings:</strong> Precise blueprints guide the build, detailing every element from walls to electrical layouts for flawless execution.</li>
                <li><i class="fa fa-check"></i> <strong>Interior Design:</strong> Final touches like decor, upholstery, and accessories are curated to bring the space to life, reflecting your unique style.</li>
              </ul>
            </div>
            <div class="service-description"></div>
          </div>
        </div>

        <!-- Service 3: Construction -->
        <div class="service">
          <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-left">
            <div class="service-icon colored-background"><i class="fa fa-cogs"></i></div>
            <h5 class="uppercase">Construction</h5>
            <p>Expert site management and construction services.</p>
            <div class="service-details">
              <p>We bring your design to reality with these critical steps:</p>
              <ul>
                <li><i class="fa fa-check"></i> <strong>Interior Construction:</strong> Skilled craftsmen build non-load-bearing elements like partitions and cabinetry, ensuring precision and quality.</li>
                <li><i class="fa fa-check"></i> <strong>Space Planning:</strong> We optimize every square foot, balancing aesthetics and utility to create functional, beautiful interiors.</li>
                <li><i class="fa fa-check"></i> <strong>Ceiling Plans:</strong> Detailed ceiling designs, including soffits and recessed lighting, enhance the space’s architecture and ambiance.</li>
                <li><i class="fa fa-check"></i> <strong>Lighting Design:</strong> Custom lighting solutions, from task to accent, are installed to highlight features and create mood.</li>
                <li><i class="fa fa-check"></i> <strong>Materials Selection:</strong> We oversee the sourcing and application of materials, ensuring they meet design specs and durability standards.</li>
                <li><i class="fa fa-check"></i> <strong>FF&E:</strong> Furniture, fixtures, and equipment are procured and installed, completing the space with style and comfort.</li>
              </ul>
            </div>
            <div class="service-description"></div>
          </div>

          <!-- Service 4: Installation -->
          <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-bottom">
            <div class="service-icon colored-background"><i class="fa fa-building"></i></div>
            <h5 class="uppercase">Installation</h5>
            <p>Final delivery and setup for a seamless reveal.</p>
            <div class="service-details">
              <p>Our white-glove installation includes:</p>
              <ul>
                <li><i class="fa fa-check"></i> <strong>Furniture Delivery:</strong> We coordinate delivery and placement of all furnishings, ensuring everything fits perfectly.</li>
                <li><i class="fa fa-check"></i> <strong>Rug Laying:</strong> Rugs are expertly positioned to anchor the space and enhance comfort underfoot.</li>
                <li><i class="fa fa-check"></i> <strong>Artwork Hanging:</strong> Art and decor are hung with precision, adding personality and flair to your interiors.</li>
                <li><i class="fa fa-check"></i> <strong>Lighting Setup:</strong> Every bulb is installed, from chandeliers to sconces, to illuminate your space beautifully.</li>
                <li><i class="fa fa-check"></i> <strong>Final Styling:</strong> We add the finishing touches—pillows, plants, and accessories—to make your space feel complete and lived-in.</li>
              </ul>
            </div>
            <div class="service-description"></div>
          </div>
        </div>

      <!-- Ask Us Anything! Section -->
        <div class="service-query-form text-center pad-bot">
          <div class="query-header">
            <h3 class="uppercase colored-text">Ask Us Anything!</h3>
            <p>Have a question or design idea? Drop us a message or upload your inspiration below—we’re here to help!</p>
          </div>
          <form method="post" enctype="multipart/form-data" id="serviceQueryForm" class="contact-form">
            <fieldset>
              <div class="form-container">
                <div class="form-column left-column">
                  <input type="text" name="name" placeholder="Your Name" class="input-text" id="queryName" required>
                  <input type="email" name="email" placeholder="Your Email" class="input-text" id="queryEmail" required>
                </div>
                <div class="form-column right-column">
                  <textarea rows="4" name="query" placeholder="Your Query or Message" class="input-text" id="queryMessage" required></textarea>
                  <div class="file-upload-wrapper">
                    <input type="file" name="design_upload" id="designUpload" accept="image/*,application/pdf" class="input-file">
                    <label for="designUpload" class="file-label"><i class="fa fa-upload"></i> Upload Your Design</label>
                    <span class="file-name">No file chosen</span>
                  </div>
                </div>
              </div>
              <div class="btn-wrapper text-center">
                <button type="submit" name="submit_query" class="uppercase btn btn-primary btn-large btn-input" id="querySubmit">
                  <span>Submit Query</span>
                  <i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </fieldset>
          </form>
          <div class="query-bg-effect"></div>
        </div>
      </div>
    </div>
  </div>
</div><!-- PHP for Form Submission with Debugging -->
<?php
// Database connection
$connection = mysqli_connect("127.0.0.1", "root", "", "interior");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<script>console.log('Database connected successfully');</script>";
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_query'])) {
    echo "<script>console.log('Form submitted');</script>";

    // Capture form data
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $query = mysqli_real_escape_string($connection, $_POST['query']);
    $upload_dir = "uploads/designs/";
    $design_file = "";

    // Debug form data
    echo "<script>console.log('Name: $name, Email: $email, Query: $query');</script>";

    // Create upload directory if it doesn't exist
    if (!file_exists($upload_dir)) {
        if (mkdir($upload_dir, 0777, true)) {
            echo "<script>console.log('Upload directory created');</script>";
        } else {
            echo "<script>alert('Failed to create upload directory'); console.log('Directory creation failed');</script>";
        }
    }

    // Handle file upload
    if (isset($_FILES['design_upload']) && $_FILES['design_upload']['error'] == UPLOAD_ERR_OK) {
        $file_name = basename($_FILES['design_upload']['name']);
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'pdf'];

        echo "<script>console.log('File uploaded: $file_name');</script>";

        if (in_array($file_ext, $allowed_ext)) {
            $new_file_name = uniqid() . "." . $file_ext;
            $target_file = $upload_dir . $new_file_name;

            if (move_uploaded_file($_FILES['design_upload']['tmp_name'], $target_file)) {
                $design_file = $new_file_name;
                echo "<script>console.log('File moved to: $target_file');</script>";
            } else {
                echo "<script>alert('Error uploading file'); console.log('File move failed');</script>";
            }
        } else {
            echo "<script>alert('Only JPG, PNG, and PDF files are allowed'); console.log('Invalid file type: $file_ext');</script>";
        }
    } else {
        echo "<script>console.log('No file uploaded or upload error: " . $_FILES['design_upload']['error'] . "');</script>";
    }

    // Insert data into database
    $sql = "INSERT INTO service_queries (name, email, query, design_file, submission_date) 
            VALUES ('$name', '$email', '$query', '$design_file', NOW())";

    echo "<script>console.log('SQL Query: $sql');</script>";

    if (mysqli_query($connection, $sql)) {
        echo "<script>alert('Query submitted successfully! We will get back to you soon.'); console.log('Query inserted');</script>";
    } else {
        $error = mysqli_error($connection);
        echo "<script>alert('Error submitting query: $error'); console.log('Query error: $error');</script>";
    }
} else {
    echo "<script>console.log('Form not submitted or submit_query not set');</script>";
}

mysqli_close($connection);
?>

				<!-- PROJECTS -->
		<div id="projects" class="main-section not-home">
			<div class="pad-bot">
				<div class="container">								
					<div class="title page-title text-center">
						<h1 class="dark-text">Products</h1>
						<span class="underline green"></span>
					</div>				
				</div>	
				<div class="green animated-fade custom-animation-fade">
					<div class="portfolioFilter text-center uppercase">
						<span>Filter:</span>
	<a href="#" data-filter="*" class="current">All</a>
	<a href="#" data-filter=".kitchen">Kitchen &amp; Bath</a>
	<a href="#" data-filter=".livingrooms">Living Rooms</a>
	<a href="#" data-filter=".beedrooms">Bedrooms</a>
	<a href="#" data-filter=".offices">Offices</a>
	<a href="#" data-filter=".outdoors">Outdoors</a>
					</div>
<div id="container" class="portfolioContainer text-center isotope" style="position: relative; overflow: hidden; height: 662px;">  
<div class="kitchen isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">        
<div class="isotope-img" style="max-height: 187px;">
<img src="images/kitchen_bath1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/kitchen_bath1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Dining Hall</p>
								<h6 class="tile-bg-title colored-text">"Dolphin"</h6>
								<p>Experience a luxurious dining atmosphere with elegant decor, comfortable seating, and a delightful ambiance perfect for gatherings.</p>									
							</div>
						</div>
						<div class="offices isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(341px, 0px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/offices1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/offices1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Offices</p>
								<h6 class="tile-bg-title colored-text">"Angelo"</h6>
								<p>Designed for productivity and comfort, our office spaces feature modern furnishings, ample lighting, and a professional ambiance to enhance work efficiency. </p>									
							</div>
						</div>
						<div class="livingrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(682px, 0px, 0px);">    
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/livingroom2.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/livingroom2.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Living Rooms</p>
								<h6 class="tile-bg-title colored-text">"Marina"</h6>
								<p>Experience ultimate comfort and style with our beautifully designed living rooms, featuring cozy seating, elegant decor, and a warm ambiance for relaxation. </p>									
							</div>
						</div>
						<div class="kitchen isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1023px, 0px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/kitchen_bath2.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/kitchen_bath2.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Kitchen &amp; Bath</p>
								<h6 class="tile-bg-title colored-text">"Shark"</h6>
								<p>Enhance your home with a modern kitchen and bath, designed for functionality and elegance, featuring premium fixtures, sleek finishes, and ample storage. </p>									
							</div>
						</div>
						<div class="beedrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 331px, 0px);">        
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/bedroom1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/bedroom1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Bedrooms</p>
								<h6 class="tile-bg-title colored-text">"Moon"</h6>
								<p>Relax in a serene and cozy bedroom designed for ultimate comfort, featuring stylish decor, soft lighting, and a peaceful ambiance for restful sleep. </p>									
							</div>
						</div>
						<div class="outdoors isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(341px, 331px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/outdoors1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/outdoors1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Outdoors</p>
								<h6 class="tile-bg-title colored-text">"Forest"</h6>
								<p>Transform your outdoor space into a refreshing retreat with lush greenery, stylish seating, and a tranquil ambiance perfect for relaxation and gatherings. </p>									
							</div>
						</div>
						<div class="livingrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(682px, 331px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/livingroom1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/livingroom1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Living Rooms</p>
								<h6 class="tile-bg-title colored-text">"Jenny"</h6>
								<p>Elevate your living space with a perfect blend of style and comfort, featuring elegant furniture, warm lighting, and a cozy atmosphere for relaxation and gatherings. </p>									
							</div>
						</div>
						<div class="beedrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1023px, 331px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/bedroom2.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/bedroom2.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Bedrooms</p>
								<h6 class="tile-bg-title colored-text">"Dreamy"</h6>
								<p>Step into a tranquil retreat designed for restful nights and peaceful mornings, featuring soft textures, soothing colors, and a cozy ambiance. </p>									
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="portfolio_bottom bot_angle_left blue-bg" style="border-right-width: 1366px;"></div>
		</div>		
		<!-- END OF projects -->	
			
		<!-- CONTACT -->
		<div id="contact" class="main-section not-home green">	
			<div class="contact pad-bot blue-bg">
				<div class="container">
					<div class="title page-title text-center">
						<h1 class="light-text">Contact</h1>
						<span class="underline white"></span>
					</div>	
				</div>																
				<div class="container">
					<!-- ADDRESSES AND SOCIALS -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 smxs-margin animated-slide-top custom-animation-slide-top">																				
						<h6 class="uppercase colored-text">Address</h6>
						<p class="address">
							Nallasopara
							<br>
							706/C CD Height
							<br>
							India
							<br>
							<abbr title="Phone">P:</abbr>
							<span>(+91)9158381629</span>
							<br>
							<abbr title="Fax">F:</abbr>
							<span>(+91)9175149336</span>
							<br>
							e-mail: <a href="mailto:office@example.com">Head_office@example.com</a>
						</p>
						<h6 class="uppercase colored-text">Socials</h6>
						<div class="footer-icons">							
							<a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
							<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
							<a href="http://www.linkedin.com/"><i class="icon-linkedin"></i></a>
							<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>																							
						</div>
					</div>
					<!-- CONTACT FORM -->
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated-fade custom-animation-fade">
  <form method="post" action="sendmail.php" class="contact-form" id="contactForm">
    <fieldset>
      <input type="text" name="name" placeholder="Name" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="namecon" required>
      <input type="email" name="email" placeholder="E-mail" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="emailcon" required>
      <textarea rows="6" name="comments" placeholder="Message" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="commentcon" required></textarea>
      <div class="btn-wrapper">
        <input type="submit" value="Submit" class="uppercase btn btn-primary btn-large btn-input" id="sendcon">
      </div>
    </fieldset>
  </form>
</div>
				</div>																																					
			</div>
		</div>
		<!-- END OF contact -->		
		<div class="copyright green-bg">
			<div class="contact_bottom bot_angle_right" style="border-right-width: 1366px;"></div>
			<div class="container blue">				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bottom-logo">
					<a class="navbar-brand smooth" href="#home">
						<img src="images/logo.png" alt="logo"> 
					</a>
				</div>						
				<div class="text-center col-xs-12 col-sm-12 col-md-8 col-lg-8 rights">@2018 FSCTECH - All Rights Reserved - Web Design &amp; Development by <a href="https://www.youtube.com/channel/UC8-wYlwSva9xQOPiLCBokUA">FSCTECH</a></div>									
			</div>
		</div>
		<!-- END OF copyright -->
	</div>
	<!-- END OF page wrapper -->
	<script src="layout/js/jquery-1.10.2.min.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/modernizr.custom.43083.js"></script>
	<!--enable responsive features in IE8-->
	<!--[if IE 8]>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="layout/js/custom.js"></script>
	<script src="layout/js/retina.js"></script>
	<script src="layout/js/jquery.nicescroll.min.js"></script>
	<script src="layout/js/jquery.easing.1.3.js"></script>	
	<script src="layout/js/waypoints.min.js"></script>
	<script src="layout/js/waypoints-sticky.js"></script>	
	<script type="text/javascript" src="layout/js/jquery.carouFredSel-6.2.1.js"></script>		
	<script src="layout/js/jquery.isotope.min.js"></script>		
	<script src="layout/js/jquery.magnific-popup.min.js"></script>
	<!-- Preloader -->
	<script type="text/javascript">
		//<![CDATA[
			$(window).load(function() { // makes sure the whole site is loaded
				$("#status").fadeOut(); // will first fade out the loading animation
				$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
			})
		//]]>
	</script> 	
	<!-- Contact Form -->
   	<script>   
	   	var ajax = {		
		   	send: function() {				
				var userName = $("input[id=namecon]").val();
				var userEmail = $("input[id=emailcon]").val();
				var userComments = $("textarea[id=commentcon]").val();
				
				if(userName == "" || userEmail == "" || userComments == "")
					alert("Form not complete");
				else {					
					ajax.SetText("Sending...");
					$.post("sendmail.php", {
						name: userName, email: userEmail, comments: userComments	
					}, function(data) {
						if(data == "true") {
							ajax.SetText("Sent!");	
						} else {
							ajax.SetText("Submit");
							alert(data);	
						}
						
						
					});
				}
			
		   	},
		   	   	SetText: function(text) {
			   	   	$("input[id=sendcon]").val(text);
		   	   	}
	   	   }	
   	</script>		

<div id="ascrail2000" class="nicescroll-rails" style="width: 7px; z-index: auto; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 78px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(0, 0, 0); background-clip: padding-box;"></div></div>
</body></html>