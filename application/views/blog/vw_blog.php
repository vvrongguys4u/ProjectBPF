<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Blog Title</title>
	<style>
		.blog_row {
			display: flex;
			flex-wrap: wrap;
		}

		.blog_post {
			flex: 0 0 48%;
			margin: 1%;
			display: flex;
			background-size: cover;
			background-position: center;
			color: #fff;
			overflow: hidden;
			/* Menangani gambar yang besar */
		}

		.blog_image {
			flex: 0 0 50%;

			background-size: cover;
			background-position: center;
		}

		.blog_content {
			flex: 0 0 50%;
			padding: 20px;
			box-sizing: border-box;
		}

		.blog_post_title {
			font-size: 24px;
			margin-bottom: 10px;
		}

		.blog_post_text {
			font-size: 16px;
			line-height: 1;
			margin-bottom: 5px;
		}

		.read_more {
			display: inline-block;
			font-size: 14px;
			text-decoration: none;
			color: #fff;
			padding: 5px 10px;
			background-color: #333;
			border-radius: 5px;
		}

		.read_more:hover {
			background-color: #555;
		}
	</style>
</head>

<body>

	<div class="home">
		<div class="home_background" style="background-image: url('assets/images/index_background.jpg');"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1>THE BLOG</h1>
						<h5>"Keep yourself updated with the English info and knowledges."</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row categories_row blog_row">
			<!-- Blog Post 1 -->
			<div class="col-lg-6">
				<div class="blog_post">
					<div class="blog_image"
						style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20220215/pngtree-solid-color-simple-background-with-photo-frame-left-blank-image_975624.jpg');">
					</div>
					<div class="blog_content">
						<div class="blog_post_title"><a
								href="https://merdeka-filkom.ub.ac.id/indonesian-international-student-mobility-award-iisma-2023/">IISMA
								Registration</a></div>
						<div class="blog_post_text">
							<p>IISMA (Indonesian International Student Mobility Award) is an Indonesian Government
								scholarship scheme to fund Indonesian student mobility programs to overseas
								universities. </p>
							<a href="https://merdeka-filkom.ub.ac.id/indonesian-international-student-mobility-award-iisma-2023/"
								class="read_more">Read More <img src="assets/images/right.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Blog Post 2 -->
			<div class="col-lg-6">
				<div class="blog_post">
					<div class="blog_image"
						style="background-image: url('https://atamerica.or.id/uploads/ngc_atamerica_activity/630f72ccc5b82_20220831214012-2.jpg');">
					</div>
					<div class="blog_content">
						<div class="blog_post_title"><a href="blog_single.html">Art Helps Healing</a></div>
						<div class="blog_post_text">
							<p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface,
								forms are one of the most important components of digital product design.</p>
							<a href="blog_single.html" class="read_more">Read More <img src="assets/images/right.png"
									alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
</body>

</html>