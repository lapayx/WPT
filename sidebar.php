<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { // если в сайдбаре есть что выводить ?>
	<aside class="col-md-3 hidden-xs hidden-sm sidebar">
		<?php dynamic_sidebar('sidebar'); // выводим сайдбар, имя определено в functions.php ?>
	</aside>
<?php } ?>
