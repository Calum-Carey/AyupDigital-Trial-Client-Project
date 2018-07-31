<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
	<title>Ayup Development boilerplate</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <link rel="canonical" href="Boilerplate" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="format-detection" content="telephone=no">

	<!-- Site styles -->

	<link href="./assets/dist/app.css" media="screen, projection" rel="stylesheet" />
</head>

<body>

	<main id="content" class="page">

<!-- INTRO SECTIONS -->

		<header class="flex-container flex-col--12">

	<!--content 8 col -->

			<div class="flex-col--8 flex-col--tablet--12">

				<h2 class="header">Service page</h2>
				<ul class="breadcrumbs">
					<li><a>Previous page</a></li>
					<li>&gt;</li>
					<li><a>Coffee Morning</a></li>
				</ul>

			</div>

	<!--aside 4 col -->

			<aside class="flex-col--4 flex-container flex-container--column flex-container--align-center flex-container--justify-end flex-col--tablet--12 tablet-flex">

				<a href="#" class="btn tablet-hide"><i class="icon-star"></i>View Shortlist</a>

			</aside>

		</header>

		<section class="intro flex-container flex-col--12"> <!--article-->

			<div class="flex-col--12 flex-col--tablet--12 tablet-flex">
				<a href="#" class="btn"><i class="icon-print"></i>Print Page</a>
			</div>

			<div class="flex-col--8 flex-col--tablet--12"> <!-- removed content -->

				<div>
					<h1>Coffee Morning</h1>
					<h6 class="capitalise spacing uppercase">Multiple Sclerosis Society</h6>

					<ul class="tablet-hide">
						<li class="li--no-bullet">Group Activity</li>
						<li class="li--no-bullet">Multiple Sclerosis</li>
					</ul>

				</div>

			</div>

			<aside class="flex-col--4 flex-container flex-container--column flex-container--align-center flex-container--justify-end flex-col--tablet--12 tablet-flex">

				<a href="#" class="btn"><i class="icon-plus"></i>Add to Shortlist</a>
				<a href="#" class="btn btn--secondary btn--secondary--lrg ">Refer</a>

			</aside>

		</section>


<!-- MAIN CONTENT CONTAINER -->

		<section class="flex-col--12 flex-container">

			<div class="content flex-col--8 flex-col--medium--12">

				<div>

					<h3>About</h3>
					<p class="content__intro">We get together on the first Saturday of every month for a coffee morning, self help and friendship.</p>

					<p>The service gives people the opportunity to meet with others who understand some of what they are going through. Run by a facilitator, the sessions offer a chance to ask questions, get information and share experiences in a safe and supportive environment.</p>

				</div>

<!-- Extended section here -->

				<div class="content__expand" id="js-content-expand">

					<img src="/assets/src/img/default.svg" class="img" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="card--alt">

						<h3>Further Advice</h3>

						<h6>Contacting us</h6>
						<p>When trying to get in contact with us please give 1 day to get back to you.</p>

						<h6>Accessibility</h6>
						<p>The wheelchair access route is to the side of the building where there is a blue door.</p>

					</div>

				</div>

				<div class="center content--secondary content--secondary--btn" >
						<a id="js-btn-expand">Show more</a>
				</div>

<!-- End of Extended section -->

				<div class="content content--secondary">
					<h4>Cost and availability</h4>

					<div class="flex-container flex-container--space-around center flex-col--12">

						<ul class="flex-col--2 icon1 card--half">
							<li class="li--secondary line-height">Free</li>
						</ul>

						<ul class="flex-col--2 icon2 left card--half">
							<li class="block li--secondary">1 day</li>
							<li class="block li--secondary li--xs">waiting time</li>
						</ul>

					</div>

				</div>


				<div class="content content--secondary card">
					<h4>Contact</h4>

					<ul class="flex-container flex-col--mobile">

						<li class="flex-col--4 card__line">Who</li>
						<li class="flex-col--8 card__line li--secondary">Maureen Lodge</li>

						<li class="flex-col--4 card__line">When</li>
						<li class="flex-col--8 card__line spacing uppercase">9-5 Weekdays</li> <!--Should i used css capitalise-->

						<li class="flex-col--4 card__line">Telephone</li>
						<li class="flex-col--8 card__line li--secondary">
							<a class="a--inverted a--secondary">01245 360803</a>
						</li>

						<li class="flex-col--4 card__line">Email</li>
						<li class="flex-col--8 card__line li--secondary">
							<a class="a--inverted a--secondary">less33lodge@gmail.com</a> <!--too many classes -->
						</li>

						<div class="flex-container">

							<li class="flex-col--4 card__line--lrg">Get in touch</li>

							<li class="card__line--lrg flex-col--8">

								<img src="/assets/src/img/default.svg" class="img img--card flex-col--2" alt="">

								<img src="/assets/src/img/default.svg" class="img img--card flex-col--2" alt="">

								<img src="/assets/src/img/default.svg" class="img img--card flex-col--2" alt="">

								<img src="/assets/src/img/default.svg" class="img img--card flex-col--2" alt="">

							</li>

						</div>

					</ul>

				</div>

			</div>

<!-- MAIN SIDEBAR -->

			<div class="sidebar flex-col--4 flex-col--medium--12 flex-col--mobile--12">

				<div class="sidebar__div sidebar--secondary center">

					<img src="/assets/src/img/default.svg" alt="" class='img img--sml sidebar__img'> <!-- too many classes -->
					<a class="center a--inverted">www.mssociety.co.uk</a>

				</div>

				<div class="sidebar__div sidebar--secondary">

					<h4>Opening times</h4>

					<ul class="flex-container card--sml">
						<li class="flex-col--4">Satuday</li>
						<li class="flex-col--8 li--secondary">8 - 11am</li>
						<li class="flex-col--4"></li>
						<li class="flex-col--8 spacing card__line uppercase">Open now</li>
					</ul>

				</div>

				<div class="sidebar__div sidebar--secondary">
					<h4>Location</h4>

					<address class="address">
						<p class="p--italic p--secondary">Surbiton, Kingston </p>
						<p class="p--secondary">
						<br>
						Ewell Road <br>
						Surbiton <br>
						KT6 6EZ
						</p>
					</address>

					<div class="address__img">
						<img src="/assets/src/img/map.svg" alt="" class="">
					</div>

				</div>

			</div>

		</section>

<!-- FULL WIDTH SECTION -->

		<section class="flex-container flex-col--12">

			<h3>Eligibility</h3>

			<div class="flex-container flex-col--12 flex-container--space-around center">

				<ul class="flex-col--4 flex-col--tablet--10 card--half">
					<li class="icon3 li--secondary">Translation Services</li>
				</ul>

				<ul class="flex-col--4 flex-col--tablet--10 card--half">
					<li class="icon4 li--secondary">Access requirements</li>
				</ul>

			</div>

		</section>

		<section class="flex-container flex-col--12">

			<h3>Case Study</h3>

			<div class="flex-container flex-col--12 flex-container--space-around flex-container--align-center center">

				<ul class="flex-col--4 flex-col--tablet--10 card--half">

					<li class="list-icon"><i class="icon-quote-left"></i></li>
					<li class="list-icon"><i class="icon-quote-left"></i></li>
					<li class="li--secondary">It's been something I look forward every week, it's really helped me.</li>

				</ul>

				<div class="flex-col--4 card--half mobile-hide">

					<video controls
		       muted
		       src=""
		       width="100%"
		       height="150px">
	    			Sorry, your browser doesn't support embedded videos.
					</video>

				</div>

			</div>

		</section>

		<section class="flex-container flex-col--12">

			<h3 class="flex-col--12">Accreditation</h3>

			<ul class="flex-container">
				<li class="flex-col--3 flex-col--tablet--6 flex-col--mobile--12">
					<img src="/assets/src/img/default.svg" class="img--sm" alt="">
				</li>
				<li class="flex-col--3 flex-col--tablet--6 flex-col--mobile--12">
					<img src="/assets/src/img/default.svg" class="img--sm" alt="">
				</li>
				<li class="flex-col--3 flex-col--tablet--6 flex-col--mobile--12">
					<img src="/assets/src/img/default.svg" class="img--sm" alt="">
				</li>
				<li class="flex-col--3 flex-col--tablet--6 flex-col--mobile--12">
					<img src="/assets/src/img/default.svg" class="img--sm" alt="">
				</li>
			</ul>

		</section>

		<section class="flex-container flex-col--12 flex-container--space-around">

			<h3 class="flex-col--12">Other Services</h3>

			<div class="content content--secondary card__banner flex-col--4
			flex-col--medium--9 flex-col--tablet--12">

				<h3>Coffee Morning</h3>
				<p class="p--sm spacing uppercase">Multiple Sclerosis Society</p>
				<p>We get together on the first Saturday of every month for a coffee morning, self help and friendship.</p>

				<a href="#" class="btn btn--secondary">More Info<i></i></a>

			</div>

			<div class="content content--secondary card__banner flex-col--4 flex-col--medium--9 flex-col--tablet--12">

				<h3>Coffee Morning</h3>
				<p class="p--sm spacing uppercase">Multiple Sclerosis Society</p>
				<p>We get together on the first Saturday of every month for a coffee morning, self help and friendship.</p>

				<a href="#" class="btn btn--secondary">More info<i></i></a>

			</div>

		</section>

	</main>

	<footer class="footer flex-container flex-col--12 flex-container--justify-center">

			<p class="p--secondary p--italic flex-col--clear"><span class="p p--sm p--default">Page last updated</span>11th May 2018</p>

	</footer>

	<script src="./assets/dist/app.js"></script>

	<!-- ~~~~~~~~~~~~ BUILT BY ~~~~~~~~~~~~
		 AAAAAAA YYY  YYY UU    UU PPPPPPP
		AA     AA YY  YY  UU    UU PP   PP
		AAAAAAAAA  YYYY   UU    UU PPPPPPP
		AA     AA   YY    UU    UU PP
		AA     AA   YY     UUUUUU  PP
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

</body>
</html>
