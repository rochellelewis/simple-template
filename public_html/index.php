<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Simple Template Example - Home";

/*load the HTML head tag: head-utils.php*/
require_once("php/partials/head-utils.php");
?>
<body class="sfooter home">
	<div class="sfooter-content">

		<!-- insert header and navbar -->
		<?php require_once("php/partials/header.php");?>

		<!-- welcome 'hero' section -->
		<section class="welcome p-t-nav">
			<div class="container">
				<div class="jumbotron text-right">
					<h1>Hai PWP!</h1>
					<p class="lead">A simple static website templated using PHP.</p>
				</div>
			</div>
		</section><!--/.welcome-->

		<!-- featurette content -->
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
							<p class="lead m-a-0">There are also some goodies in the CSS as well, tons of custom styles, equal height columns using flexbox, two layouts (home and content pages), a contact form, custom JavaScript fancy-nav, and more. <em class="text-serif">View Source!</em> <i class="fa fa-magic"></i></p>
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
