<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "About Us";

/*load the HTML head tag: head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<body class="sfooter content">
	<div class="sfooter-content">

		<!-- insert header and navbar -->
		<?php require_once(dirname(__DIR__) . "/php/partials/header.php");?>

		<!-- begin main content page layout -->
		<main class="container p-t-nav">

			<!-- insert the page title up top -->
			<?php require_once(dirname(__DIR__) . "/php/partials/page-title.php");?>

			<!-- begin main content area -->
			<div class="row row-flex content-wrap">

				<!-- main content area -->
				<div class="col-sm-10 col-sm-push-2 content-panel">
					<div>
						<h2>Feel the Fuzzy!</h2>
						<p>Leave dead animals as gifts this human feeds me, i should be a god but find empty spot in cupboard and sleep all day, give attitude, but hide when guests come over, for give attitude. Sleep in the bathroom sink chase ball of string but purr for no reason but pelt around the house and up and down stairs chasing phantoms. I am the best. Soft kitty warm kitty little ball of furr stick butt in face hiss at vacuum cleaner peer out window, chatter at birds, lure them to mouth caticus cuteicus get video posted to internet for chasing red dot for hack up furballs. Stare at ceiling light cat snacks. Lick arm hair fall asleep on the washing machine under the bed, and lick plastic bags for scratch leg; meow for can opener to feed me cough furball. Human give me attention meow thug cat for make muffins pee in the shoe, my left donut is missing, as is my right or brown cats with pink ears and have secret plans.</p>
						<h3>Senator Arlo Approved...</h3>
						<p>Play riveting piece on synthesizer keyboard throwup on your pillow, for the dog smells bad. Roll on the floor purring your whiskers off shake treat bag stare at the wall, play with food and get confused by dust or cat slap dog in face yet meow all night having their mate disturbing sleeping humans. Touch water with paw then recoil in horror present belly, scratch hand when stroked so poop on grasses. Has closed eyes but still sees you hunt by meowing loudly at 5am next to human slave food dispenser. Groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked! get video posted to internet for chasing red dot scratch leg; meow for can opener to feed me so pooping rainbow while flying in a toasted bread costume in space so knock dish off table head butt cant eat out of my own dish. Play time slap owner's face at 5am until human fills food dish lick plastic bags. Chase dog then run away stare at ceiling. Intently sniff hand meow all night having their mate disturbing sleeping humans and present belly, scratch hand when stroked or chase red laser dot, spread kitty litter all over house. Hopped up on catnip why must they do that, or sleep nap for lick arm hair so purr for no reason scream at teh bath but burrow under covers. Stare out the window slap owner's face at 5am until human fills food dish so hide at bottom of staircase to trip human, for scratch at the door then walk away, yet cat slap dog in face or intently stare at the same spot. </p>
					</div>
				</div>

				<!-- side panel -->
				<div class="col-sm-2 col-sm-pull-10 side-panel">
					<?php require_once(dirname(__DIR__) . "/php/partials/side-panel.php");?>
				</div>

			</div><!--/.row-flex-->
		</main>

	</div><!--/.sfooter-content-->

	<!-- insert footer -->
	<?php require_once(dirname(__DIR__) . "/php/partials/footer.php");?>

</body>
</html>
