<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="toolbar"></header>
		<nav class="sidebar">
			<div class="sidebar__selected"></div>
			<div class="sidebar__selected-submenu"></div>
		</nav>
		<main class="content">
			<?php $sticky = get_option( 'sticky_posts' ); ?>
			<?php if ( ! empty( $sticky ) ): ?>
			<?php wp_editor( get_post_field( 'post_content', $sticky[0] ), 'content' ); ?>
			<?php endif; ?>
		</main>
		<nav class="metadata"></nav>
		<?php wp_footer(); ?>
	</body>
</html>
