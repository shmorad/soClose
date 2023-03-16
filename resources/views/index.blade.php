<!-- Portfolio Section Start -->
@extends('frontend.fontend')
@section('content')
<section>
<div class="container-fluid jumbotron mt-5 ">
        <div class="row">
            <div class="col-md-6 justify-content-center mt-5">
                <div class="m-lg-5 m-md-5 p-lg-5 m-sm-3 p-sm-3 p-md-5">
                    <img class="img-fluid m-0 p-0" src="images/bannerimg (2).png">
                    <h1 class="top-banner-subtitle text-justify ml-4">House:7, Road:16, Adabar, Mohammadpur, Dhaka </h1>
                </div>
            </div>
            <div class="col-md-6">
              <img  class="top-banner-img  animated fadeIn" src="images/bannerImg.png"> 
            </div>
        </div>
</div>
</section>
<section class="portfolio overflow-hidden" id="protfolio">
	<div class="container">
		<div class="row">
			<!-- Portfolio Section Heading -->
			<div class="portfolio__heading text-center col-md-12">
				<h1 class="portfolio__title fw-bold mb-5">Our Portfolio</h1>
			</div>
			
			<div class="col-12">
				<ul class="portfolio__nav nav justify-content-center mb-4">
					<li class="nav-item">
						<button onclick="window.location='{{ url('/') }}'" class="portfolio__nav__btn nav-link active position-relative bg-transparent border-0 active"   data-filter="*">All</button>
					</li>
					@foreach ($categories as $category)
					<li class="nav-item">
						<button class="portfolio__nav__btn nav-link active position-relative bg-transparent border-0" data-filter=".{{$category->category}}" onclick="showimage('{{$category->id}}')" >{{$category->category}}</button>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<!-- Portfolio Cards Container -->
		<div class="row grid" id="viewImage">
			@foreach($allimage as $allimage)
				<div class="grid-item col-lg-4 col-sm-6 .{{$category->category}}">
					<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
						<img src="{{$allimage->image}}" alt="Random Image" class="w-100 mt-2" style='height:250px'>
					</a>
				</div>
			@endforeach
			<div class="grid-item col-lg-4 col-sm-6 .{{$category->category}}">
				<a href="#!" class="portfolio__card position-relative d-inline-block w-100">
					<img src="https://source.unsplash.com/s4LntDZqEW8/380x500" alt="Random Image" class="w-100 mt-2" style='height:250px'>
				</a>
			</div>
			
			
		</div>
	</div>
</section>
@endsection
@section('script')
<script type="text/javascript">
	let url = "http://127.0.0.1:8000/";
		function showimage(id){
			axios.post("/image",{
				id:id
			})
			.then(function (response) {
					$('#viewImage').empty();
					var dataJSON = response.data.data;
					// console.log(dataJSON);
					$.each(dataJSON, function (i, item) { 
						var viewImage = $('#viewImage');
						var code = `<div class="grid-item col-lg-4 col-sm-6 ${item.category.category}">
								<a href='#!' class='portfolio__card position-relative d-inline-block w-100'>
									<img src='${url+item.image}' class='w-100 mt-2' style='height:250px'>
								</a>
							</div>`;
							viewImage.append(code);
					})
				})
				.catch(function(error) {
					console.log(error);
				});

(function ($id) {
	"use strict";
	$(window).on("load", function () {
		isotopeInit();
		showimage();
	});
	/* Isotope Init */
	function isotopeInit() {
		$(".grid").isotope({
			itemSelector: ".grid-item",
			layoutMode: "fitRows",
			masonry: {
				isFitWidth: true
			}
		});

		// filter items on button click
		$(".portfolio__nav__btn").on("click", function () {
			var filterValue = $(this).attr("data-filter");
			$(".grid").isotope({ filter: filterValue });

			// Toggle active class on button click
			$(".portfolio__nav__btn").removeClass("active");
			$(this).addClass("active");
		});
	}
	
})(jQuery);
}
</script>
@endsection