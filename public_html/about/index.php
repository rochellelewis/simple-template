<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "About Us";

/*load the HTML head tag: head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<body class="sfooter content-layout">
	<div class="sfooter-content">

		<!-- insert header and navbar -->
		<?php require_once(dirname(__DIR__) . "/php/partials/header.php");?>

		<!-- begin main content page layout -->
		<main class="container p-t-nav">

			<!-- insert the page title up top -->
			<?php require_once(dirname(__DIR__) . "/php/partials/page-title.php");?>

			<!-- begin main content area -->
			<div class="row row-flex content-wrap">

				<!-- page content -->
				<div class="col-sm-9 col-sm-push-3 content-panel">
					<div>
						<h2>Feel the Fuzzy!</h2>
						<p>The premise here is simple: take all of the parts of this website that repeat <em>consistently</em> from page to page, and separate them into separate files of their own. In this example, the <strong>navbar</strong>, the <strong>footer</strong>, the <strong>side-panel</strong>, the <strong>page title panel</strong> (including breadcrumb links), and the entire <strong>HTML &lt;head&gt; tag</strong> all live in separate files of their own. Each web page then <em>includes</em>, or <em>injects</em> the content from each of these separate files onto the page using the PHP <code>require_once()</code> statement. Automagically!</p>
						<p>There are a lot of custom classes and custom styling going on here - but don't let that distract you from the simple premise. This site also uses PHP to <em>dynamically resolve internal dependency links</em>. Instruction on this can be found on the <a href="https://bootcamp-coders.cnm.edu/class-materials/php/relative-path/" target="_blank">Relative Path Using PHP</a> page on bootcamp-coders. All this really entails is adding a few snippets of code to the top of your pages, to the top of your HTML &lt;head&gt; tag file, and adding a tiny little file to your <strong>public_html/</strong> directory. Easy-peasy.</p>
						<h3>Senator Arlo Approved...</h3>
						<p>This sample site also has the contact form up and working! (It won't send mail anywhere interesting tho.) View this project on <a href="https://github.com/rlewis2892/simple-template" target="_blank">GitHub</a> to see the mailer in action. Remember, the
							<a href="https://bootcamp-coders.cnm.edu/class-materials/php/email/" target="_blank">Sending Email in PHP</a> and <a href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/" target="_blank">jQuery Validated Contact Form for PWP</a> documentation is always available on bootcamp-coders.</p>
						<p>One important note is that all sensitive mailer data has been sectioned off in another file called <strong>mail-config.php</strong>, and that has been gitignored. You may want to also adopt this practice for security. See the <strong>mailer.php</strong> file.</p>
					</div>
				</div>

				<!-- side panel -->
				<div class="col-sm-3 col-sm-pull-9 side-panel">
					<?php require_once(dirname(__DIR__) . "/php/partials/side-panel.php");?>
				</div>

			</div><!--/.row-flex-->
		</main>

	</div><!--/.sfooter-content-->

	<!-- insert footer -->
	<?php require_once(dirname(__DIR__) . "/php/partials/footer.php");?>

</body>
</html>
