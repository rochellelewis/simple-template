<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Simple Template Example - Home";

/*load the HTML head tag: head-utils.php*/
require_once("php/partials/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">

		<!-- insert header and navbar -->
		<?php require_once("php/partials/header.php");?>

		<section class="welcome p-t-50">
			<div class="container">
				<div class="jumbotron text-center">
					<h1>&lt;C0ded by Dog&gt;</h1>
					<p class="lead">A simple static website templated using PHP.</p>
				</div>
			</div>
		</section><!--/.welcome-->

		<section class="home-features">
			<div class="container">
				<div class="row row-flex">
					<div class="col-sm-6 col-md-4">
						<div class="featurette vertical-center">
							<p class="h1">Built with PWP in mind...</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-8">
						<div>
							<p class="lead">This example of a simple, static website was created with PWP in mind. It uses the PHP require_once() statement to inject content from separate files into the pages. This example also dynamically resolves internal dependency paths using PHP too. Sweet!</p>
							<p class="lead">There are also some goodies in the CSS as well, like equal height columns using flexbox rules, two layouts, a contact form, and more.</p>
							<!--<p class="lead">Check out the source code on <a href="https://github.com/rlewis2892/simple-template" target="_blank">GitHub</a></p>
							<p class="lead">RTFM here: <a href="https://bootcamp-coders.cnm.edu/class-materials/front-end-architecture/" target="_blank">Intro to Templating</a></p>-->
						</div>
					</div>
				</div>
			</div>
		</section><!--/.home-features-->

	</div><!--/.sfooter-content-->

	<!-- insert footer -->
	<?php require_once("php/partials/footer.php");?>

</body>
</html>
