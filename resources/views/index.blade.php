@extends('layouts.master')

@section('content')
<div class="jumbotron banner" style="background-image: url(/img/banner.jpg);">
	<div class="container">
		<div class="search">
			<form>
			<h1 class="banner-title">BOTANIKA</h1>
			<div class="form-inline">
			  <div class="form-group">
			    <select class="form-control first" id="bedroom" placeholder="Email">
			    <option selected="selected">No. of Bedroom</option>
			    <option></option>
			    <option></option>
			    </select>
			  </div
			  ><div class="form-group">
			    <select class="form-control middle" id="bathroom" placeholder="Email">
			    <option selected="selected">No. of Bathroom</option>
			    <option></option>
			    <option></option>
			    </select>
			  </div
			  ><div class="form-group">
			    <select class="form-control middle" id="price" placeholder="Email">
			    <option selected="selected">Price Range</option>
			    <option></option>
			    <option></option>
			    </select>
			  </div
			  ><div class="form-group">
			    <select class="form-control last" id="size" placeholder="Email">
			    <option selected="selected">Unit Size</option>
			    <option></option>
			    <option></option>
			    </select>
			  </div>
			  </div>
			  <button type="submit" class="btn search-btn">Search</button>
			</form>
		</div>
	</div>
</div>
</div><!-- this is for the 100vh section -->




<!-- after banner -->
<div class="section class-of-own">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="/img/class-of-own.jpg" class="z-depth-1">
		</div>
		<div class="col-md-6">
			<h2 class="content-title">A Class of Its Own</h2>
			<p class="content">
				What do you do when the property you’re building just doesn’t seem to fit the rest because it’s simply like no other? You create a special universe for it. <br><br>

				That’s the vision for Botanika Nature Residences, under the Exclusive Collection, a new category in the Filinvest Group’s roster of properties, one-of-a-kind residential spaces will come to life.<br><br>

				Botanika embodies Green Living in a vertical home with that genuine village charm that feels closer to the Filipino hearts. Located at the finest locale of Filinvest City, Botanika is truly a refreshing new address to the privileged few.
			</p>
		</div>
	</div>
</div>
</div>
<div class="section paradise" style="background-image: url(/img/blue-bg.jpg);">
	<div class="paradise-inner">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="triangle" x="0" y="0" viewBox="0 0 504.9 62.2" enable-background="new 0 0 504.9 62.2" xml:space="preserve">
		  <polygon id="main" fill="#FFFFFF" points="504.9 0 0 0 0 62.2 "/>
		</svg>


		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="content-title">A Class of Its Own</h2>
					<p class="content">
						What do you do when the property you’re building just doesn’t seem to fit the rest because it’s simply like no other? You create a special universe for it. <br><br>

						That’s the vision for Botanika Nature Residences, under the Exclusive Collection, a new category in the Filinvest Group’s roster of properties, one-of-a-kind residential spaces will come to life.<br><br>

						Botanika embodies Green Living in a vertical home with that genuine village charm that feels closer to the Filipino hearts. Located at the finest locale of Filinvest City, Botanika is truly a refreshing new address to the privileged few.
					</p>
				</div>		
				<div class="col-md-7 polaroid">
					<img src="/img/polaroid-effect-1.png">
					<div class="back-photo">
						<img src="/img/polaroid-effect-back.png">
					</div>
				</div>
			</div>	
		</div>


		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="triangle-bottom" x="0" y="0" viewBox="0 0 504.9 62.2" enable-background="new 0 0 504.9 62.2" xml:space="preserve">
		  <polygon id="main-bottom" fill="#FFFFFF" points="0 62.2 504.9 62.2 504.9 0 "/>
		</svg>
	</div>
</div>
<div class="section expect" style="margin: 0vh;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<h2 class="content-title">
					Expect the Unexpected
				</h2>
				<p class="content">
					Always start your day with a vision of what's ahead. <br><br>

					To make things happen, think the unthinkable. To make room for inspiration, believe in the unbelievable. To tread the roads to success, reach for the unreachable.<br><br>

					Look beyond the here and now and live to believe that there is something we can do today to sustain tomorrow.<br><br>

					Botanika Nature Residences. Expect the Unexpected
				</p>
			</div>
		</div>
	</div>
</div>

<div class="exquisite">
<div class="white-film">
<div class="container">
	<div class="white-box">
		<h2 class="content-title" style="width: 100%;">
			Beyond Exquisite
		</h2>

		<p class="" style="width: 75%; margin-top: 8%;">
			Its essence typifies nature, scenery, and the sub-urban environment. Its greens symbolize verve, life, and stability.
			<br><br>
			Botanika, as a whole, embodies lushness, opulence, and abundance.<br><br>

			It’s everything you deserve. It’s everything you aspired for.
		</p>
	</div>
	<div class="img-box">
		<img src="/img/pool.jpg">
	</div>
</div>
</div>
</div>


<div class="masterpiece">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-4 master-content">
				<h2 class="content-title">
					Impeccable Masterpieces
				</h2>
				<p class="content">
					At Botanika, every square inch is exceptionally designed with only the privileged few in mind.
					<br><br>
					Each piece puts into consideration highly refined tastes and purposive needs to complement that fine level of sophistication.<br><br>

					Botanika understands that requirements do not come in one-size-fits-all conditions.<br><br>

					Thus with several options already available, two kinds of special units - garden units and penthouse units - are also thought of, simply perfect for grand requisites.
				</p>
			</div>
		</div>
	</div>
</div>
@endsection