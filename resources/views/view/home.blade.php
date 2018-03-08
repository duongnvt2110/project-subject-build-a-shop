@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- Star sequnse -->
<div class="sequense">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@foreach( $khuyenmai as $key=>$item)
			<li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
			@endforeach
		</ol>
		<div class="carousel-inner" role="listbox">
			<!-- Wrapper for slides -->
			@foreach( $khuyenmai as $key=>$item)
			<div class=" carousel-item {{ $loop->first ? ' active' : '' }}" >
				<div class="img-responsive picture-product">
					<img src="fpshop/public/{{ $item->Hinh }}" ">
				</div>
				
			</div>
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!-- End Main product -->
<!-- end sequnse -->
<div class="clearfix"></div>
<!-- New arival -san phẩm mới -->
<div class="list-product">      <!-- css 437 -->
	<div class="new-arival">
		<div class="container">
			<div class="title-product">
				<!-- <div class="text-tille text-bold">New Arival</div> -->
				<div class="text-tille">Sản Phẩm Mới Cập Nhật</div>
<!-- 				<div class="button-more">
					<a type="button" class="bt-see-all">See All</a>
				</div> -->
			</div>
			<!-- List  -->
			<div class="carousel-1 product-relate owl-carousel owl-theme" id="owl-demo-product-hot" style="opacity: 1; display: block;"> 
				@foreach($new_product as $item)
				<div class="owl-item">
					<div class="item">
						<div class="product">
							<div class="product-list">
								<div class="bt-search">
									<a href="{{route('detail',$item->ID)}}" type="button" role="button" class="my-Btn btq-more">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class=" img-responsive picture-product">	
							<img src="fpshop/{{$item->Hinh}}" style="width:250px;height:230px;" href="#">
						</div>
					</div>
				</div>	
				@endforeach
			</div>	
		</div>
	</div>	
</div>
<!-- End list -->
<!-- Best Seller -->
<div class="best-list">      <!-- css 437 -->
	<div class="container">
		<div class="title-product">
			<!-- <div class="text-tille text-bold">Best Seller</div> -->
			<div class="text-tille">Sản Phẩm Bán Chạy</div>
<!-- 			<div class="button-more">
				<a type="button" class="bt-see-all">See All</a>
			</div> -->
		</div>
		<!-- List  -->
		<div class="carousel-1 product-relate owl-carousel owl-theme" id="owl-demo-product-hot" style="opacity: 1; display: block;"> 
			@foreach($best_product as $item)
			<div class="owl-item">
				<div class="item active">

					<div class="product">
						<div class="product-list">
							<div class="bt-search">
								<a href="" type="button" role="button" class="my-Btn btq-more">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<div class=" img-responsive picture-product">	
							<img src="fpshop/{{$item->Hinh}}" style="width:250px;height:230px;" href="#">
						</div>
					</div>

				</div>	
			</div>
			@endforeach
		</div>
	</div>	
</div>

<!-- end Seller -->
<div class="clearfix"></div>
<div class="ins-list">      <!-- css 437 -->
	<div class="container">
		<div class="title-product">
			<div class="text-tille text-bold">2min’s corner on Instagram</div>
			<div class="text-tille">Hãy theo dõi 2min’s trên Instagram</div>
<!-- 			<div class="button-more">
				<a type="button" class="bt-see-all">See All</a>
			</div> -->
		</div>
		<!-- List  -->
		<div class="carousel-1 product-relate owl-carousel owl-theme" id="owl-demo-product-hot" style="opacity: 1; display: block;"> 
			@foreach($instgram_product as $item)
			<div class="owl-item">
				<div class="item active">
					<div class="product">
						<div class="product-list">
							<div class="bt-search">
								<a href="" type="button" role="button" class="my-Btn btq-more">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<div class=" img-responsive picture-product">	
							<img src="fpshop/{{$item->Hinh}}" style="width:250px;height:230px;" href="#">
						</div>
					</div>
				</div>	
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection