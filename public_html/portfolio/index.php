<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "About";

/*load the HTML head tag: head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">

		<!-- insert header and navbar -->
		<?php require_once(dirname(__DIR__) . "/php/partials/header.php");?>

		<!-- begin main content page layout -->
		<main class="container p-t-50">
			<div class="row row-flex">
				<section class="col-sm-4">
					side panel
				</section>
				<section class="col-sm-8">
					main content
				</section>
			</div>
		</main>

	</div><!--/.sfooter-content-->

	<!-- insert footer -->
	<?php require_once(dirname(__DIR__) . "/php/partials/footer.php");?>

</body>
</html>
