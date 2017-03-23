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
			<img src="/img/class-of-own.jpg">
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

@endsection