<?php include("header.php"); ?>
<div class='slideshow-container'>
	<div class='mySlides fade'>
		<img src='img/slide1.jpg' style='width:100%;'>
		<div class='text'>Oil/ink Paintings</div>
	</div>

	<div class='mySlides fade'>
		<img src='img/slide2.jpg' style='width:100%;'>
		<div class='text'>pastel Paintings</div>
	</div>

	<div class='mySlides fade'>
		<img src='img/slide3.jpg' style='width:100%;'>
		<div class='text'>Acrylic Paintings </div>
	</div>
</div>
<br/>
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
</div>

<section id='boxcontent'>
	<article>
		<img src='img/icon1.png'>
		<h3>Oil paintings</h3>
		<p>beautiful oil paintings like you seen before, impressionist
		art painted to evoke emotions and make life a better and amazing place to dream of.</p>
		<br/>
	</article>

<article>
		<img src='img/icon2.png'>
		<h3>Pastel paintings</h3>
		<p>pastel paintings have the unique ability to beautifully capture
		the heart of belivers and you can choose your choices.</p>
		<br/>
	</article>

	<article>
		<img src='img/icon3.png'>
		<h3>Acrylic paintings</h3>
		<p>Acrylic paintings like you seen before, making the world a colourful
		art painted and capture the eyes of your viewers.</p>
		<br/>
	</article>

</section>


<section id='four_columns'>
	<h2>Our Top Paintings<h2>
	<article class='img-item'>
		<figure>
			<a href='img/mountain.jpg' rel='lightbox' title='some'>
				<span class="thumb-screen"></span>
				<img src="img/mountain.jpg" style='width:200px; height:113px;'>
			</a>
			<figcaption>
				<strong>
					Painted by: FUMMY ISAAC
				</strong>
				The Tiny mountain
			</figcaption>
		</figure>
	</article>

	<article class='img-item'>
		<figure>
			<a href='img/needle.jpg' rel='lightbox' title='The Needle'>
				<span class="thumb-screen"></span>
				<img src="img/needle.jpg" style='width:200px; height:113px;'>
			</a>
			<figcaption>
				<strong>
					Painted by: FUMMY ISAAC
				</strong>
				In the needle
			</figcaption>
		</figure>
	</article>

	<article class='img-item'>
		<figure>
			<a href='img/walk.jpg' rel='lightbox' title='walk in the park'>
				<span class="thumb-screen"></span>
				<img src="img/walk.jpg" style='width:200px; height:113px;'>
			</a>
			<figcaption>
				<strong>
					Painted by: FUMMY ISAAC
				</strong>
				work in the park of life
			</figcaption>
		</figure>
	</article>

	<article class='img-item'>
		<figure>
			<a href='img/avengers.jpg' rel='lightbox' title='Endgame'>
				<span class="thumb-screen"></span>
				<img src="img/avengers.jpg" style='width:200px; height:113px;'>
			</a>
			<figcaption>
				<strong>
					Painted by: FUMMY ISAAC
				</strong>
				Endgame - The Last Battle
			</figcaption>
		</figure>
	</article>

</section>

<?php include("footer.php"); ?>
