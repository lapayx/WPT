
<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<section>
	<div class="container">
		<div class="row">

			<?php get_sidebar(); // подключаем sidebar.php ?>

			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?> content">

				<div class="slide">
					<div class="col-sm-2 pmn">
						<img src="<?php echo get_theme_root_uri(); ?>/creade/images/photo.jpg" alt="" class="img-responsive">
					</div>
					<div class="col-sm-10">
						<h5>Немного обо мне</h5>
						<p>Меня зовут Сергей Тарасенко и я занимаюсь UX/UI и web-дизайном. В свободное время делиюсь свои опытом в блоге и на YouTube канале.</p>
						<p>
							Подпишись на обновления:
						</p>
						<ul class="ul-ui ul-lsn ul-line">
							<li class="vk"><a href="/">VK.com</a></li>
							<li class="youtube"><a href="/">YouTube</a></li>
							<li class="telegram"><a href="/">Telegram</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="content-block">
					<div class="content-wrapper">

						<h3><?php printf('Поиск по строке: %s', get_search_query()); ?></h3>
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
						<?php if( get_theme_mod('them_preview_image_size')== 'left') {

							  get_template_part('loop'); 
								}
							else
							{
							  get_template_part('loop3');
							}
						 ?>
						<?php endwhile; // конец цикла

						else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
						<?php pagination(); // пагинация, функция нах-ся в function.php ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>