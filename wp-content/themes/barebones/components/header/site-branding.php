		<div class="site-branding">
			<h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>

			<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
				endif; ?>
		</div><!-- .site-branding -->
