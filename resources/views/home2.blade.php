@extends('layouts.main')

@section('title','CRP Mango')

@section('content')

<br>

<div class="container">
  <div class="row mb-3">
    <div class="col-sm-4 themed-grid-col">
    	<div class="card jumbotron" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">card subtitle</h6>
			<p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">card link</a>
			<a href="#" class="card-link">another link</a>
		</div>
	</div>
    </div>
    <div class="col-sm-4 themed-grid-col">
    	<div class="card jumbotron" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">card subtitle</h6>
			<p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">card link</a>
			<a href="#" class="card-link">another link</a>
		</div>
	</div>
    </div>
    <div class="col-sm-4 themed-grid-col">
    	<div class="card jumbotron" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">card subtitle</h6>
			<p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">card link</a>
			<a href="#" class="card-link">another link</a>
		</div>
	</div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4 themed-grid-col">.col-md-4</div>
    <div class="col-md-4 themed-grid-col">.col-md-4</div>
    <div class="col-md-4 themed-grid-col">.col-md-4</div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-4 themed-grid-col">
    </div>
    <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
    <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
  </div>

  <div class="row mb-3">
    <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
    <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
    <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
  </div>

  <h2 class="mt-4">Three equal columns</h2>
  <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
  <div class="row mb-3">
    <div class="col-md-4 themed-grid-col">
        	<div class="card jumbotron" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">card subtitle</h6>
			<p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">card link</a>
			<a href="#" class="card-link">another link</a>
		</div>
	</div>
    </div>
    <div class="col-md-4 themed-grid-col">
        	<div class="card jumbotron" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">card subtitle</h6>
			<p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">card link</a>
			<a href="#" class="card-link">another link</a>
		</div>
	</div>
    </div>
    <div class="col-md-4 themed-grid-col">
        	<div class="card jumbotron" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">card subtitle</h6>
			<p class="card-text">some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">card link</a>
			<a href="#" class="card-link">another link</a>
		</div>
	</div>
    </div>
  </div>

  <h2 class="mt-4">Three unequal columns</h2>
  <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
  <div class="row mb-3">
    <div class="col-md-3 themed-grid-col">
    </div>
    <div class="col-md-6 themed-grid-col">.col-md-6</div>
    <div class="col-md-3 themed-grid-col">.col-md-3</div>
  </div>

  <h2 class="mt-4">Two columns</h2>
  <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
  <div class="row mb-3">
    <div class="col-md-8 themed-grid-col">.col-md-8</div>
    <div class="col-md-4 themed-grid-col">.col-md-4</div>
  </div>

  <h2 class="mt-4">Full width, single column</h2>
  <p class="text-warning">
    No grid classes are necessary for full-width elements.
  </p>

  <hr class="my-4">

  <h2 class="mt-4">Two columns with two nested columns</h2>
  <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
  <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
  <div class="row mb-3">
    <div class="col-md-8 themed-grid-col">
      <div class="pb-3">
        .col-md-8
      </div>
      <div class="row">
        <div class="col-md-6 themed-grid-col">.col-md-6</div>
        <div class="col-md-6 themed-grid-col">.col-md-6</div>
      </div>
    </div>
    <div class="col-md-4 themed-grid-col">.col-md-4</div>
  </div>

  <hr class="my-4">

  <h2 class="mt-4">Mixed: mobile and desktop</h2>
  <p>The Bootstrap v4 grid system has five tiers of classes: xs (extra small, this class infix is not used), sm (small), md (medium), lg (large), and xl (extra large). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
  <p>Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg and xl, you only need to specify md.</p>
  <div class="row mb-3">
    <div class="col-md-8 themed-grid-col">.col-md-8</div>
    <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
  </div>
  <div class="row mb-3">
    <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
  </div>
  <div class="row mb-3">
    <div class="col-6 themed-grid-col">.col-6</div>
    <div class="col-6 themed-grid-col">.col-6</div>
  </div>

  <hr class="my-4">

  <h2 class="mt-4">Mixed: mobile, tablet, and desktop</h2>
  <div class="row mb-3">
    <div class="col-sm-6 col-lg-8 themed-grid-col">.col-sm-6 .col-lg-8</div>
    <div class="col-6 col-lg-4 themed-grid-col">.col-6 .col-lg-4</div>
  </div>
  <div class="row mb-3">
    <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
  </div>

</div>


@endsection

