<?php get_header(); ?>
<!-- Hotel gallery Images-->
<main class="hotel-view">
	<div class="gallery">
		<figure class="gallery__item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hotel-1.jpg" alt="Photo of hotel 1" class="gallery__photo">
		</figure>
		<figure class="gallery__item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hotel-2.jpg" alt="Photo of hotel 2" class="gallery__photo">
		</figure>
		<figure class="gallery__item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hotel-3.jpg" alt="Photo of hotel 3" class="gallery__photo">
		</figure>
	</div>
	<!-- Hotel Overview-->
	<div class="overview">
		<h1 class="overview__heading">
			Hotel Las Paslmas
		</h1>
		<!-- Hotel Star count-->
		<div class="overview__stars">
			<svg class="overview__icon-star">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
			</svg>
			<svg class="overview__icon-star">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
			</svg>
			<svg class="overview__icon-star">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
			</svg>
			<svg class="overview__icon-star">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
			</svg>
			<svg class="overview__icon-star">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
			</svg>
		</div>
		
		<!-- Hotel location-->
		<div class="overview__location">
			<svg class="overview__icon-location">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-location-pin"></use>
			</svg>
			<button class="btn-inline">Albufeira, Portugal</button>
		</div>

		<!-- Hotel rating-->
		<div class="overview__rating">
			<div class="overview__rating-average">8.6</div>
			<div class="overview__rating-count">429 Votes</div>
		</div>
	</div>

	<div class="detail">
		<div class="description">
			<p class="paragraph">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quam consequuntur commodi non? Ipsa, quibusdam rem suscipit tenetur corrupti beatae saepe in explicabo quidem! Est expedita ab saepe assumenda reprehenderit!
			</p>
			<p class="paragraph">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quam consequuntur commodi non? Ipsa, quibusdam rem suscipit tenetur corrupti beatae saepe!
			</p>
			<ul class="list">
				<li class="list__item">Close to the beach</li>
				<li class="list__item">Breakfast included</li>
				<li class="list__item">Free airport shuttle</li>
				<li class="list__item">Free wifi in all rooms</li>
				<li class="list__item">Air conditioning and heating</li>
				<li class="list__item">Pets allowed</li>
				<li class="list__item">We speak all languages</li>
				<li class="list__item">Perfect for families</li>
			</ul>

			<div class="recommend">
				<p class="recommend__count">
					Lucy and 3 others recommended this hotel.
				</p>

				<div class="recommend__friends">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user-3.jpg" alt="Friend 1" class="recommend__photo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user-4.jpg" alt="Friend 2" class="recommend__photo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user-5.jpg" alt="Friend 3" class="recommend__photo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user-6.jpg" alt="Friend 4" class="recommend__photo">
				</div>
			</div>
		</div>

		<div class="user-reviews">
			<figure class="review">
				<blockquote class="review__text">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa dolorum, neque repudiandae aliquam tempora reiciendis soluta, iste architecto nesciunt fugiat
				</blockquote>
				<figcaption class="review__user">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user-1.jpg" alt="" class="review__photo">
					<div class="review__user-box">
						<p class="review__user-name">Nick Smith</p>
						<p class="review__user-date">Feb 23rd, 2017</p>
					</div>
					<div class="review__rating">7.8</div>
				</figcaption>
			</figure>

			<figure class="review">
				<blockquote class="review__text">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa dolorum, neque repudiandae!
				</blockquote>
				<figcaption class="review__user">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user-2.jpg" alt="" class="review__photo">
					<div class="review__user-box">
						<p class="review__user-name">Mary Thomas</p>
						<p class="review__user-date">Sept 13th, 2017</p>
					</div>
					<div class="review__rating">9.3</div>
				</figcaption>
			</figure>

			<button class="btn-inline">Show all <span>&rarr;</span></button>
		</div>

		
	</div>

	<div class="cta">
			<h2 class="cta__book-now">
				Good news! We have four free rooms for your selected dates!
			</h2>
			<button class="btn">
				<span class="btn__visible">Book Now</span>
				<span class="btn__invisible">Only 4 rooms left</span>
				
			</button>
		</div>
</main>
	
<?php get_footer(); ?>
