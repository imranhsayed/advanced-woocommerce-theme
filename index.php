<?php

get_header();

?>
<div id="primary">
	<main id="main" class="site-main mt-5" role="main">
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();

				the_title();
				the_content();
			}

			// Previous/next page navigation.

		}
		?>
	</main>
</div>
<?php

get_footer();
