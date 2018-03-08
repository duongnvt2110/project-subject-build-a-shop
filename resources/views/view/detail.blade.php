@extends('master')
@section('content')
<div class="clearfix"></div>
<div class="container_fullwidth container-product">
	<div class="container">
		<div class="row">
			@foreach($sp as $key => $item)
			<div class="col-md-10 product-row">
				<div class="products-details">
					<div class="preview_image">
						<div>
							<img src="fpshop/{{$item->Hinh}}" style="width:300px;height:300px;position: relative;
							margin: 4%;">
						</div>
					</div>
					<div class="products-description">
						<h5 class="name">{{$item->TenSP}}</h5>
						<p>Availability: 
							<span class=" light-red">
								In Stock
							</span>
						</p>
						<p>
							{{$item->Mota}}
						</p>
						<hr class="border">
						<div class="price">
							Price : 
							<span class="new_price">
								{{number_format($item->Gia,0,'',',')}}
								<sup>
									VND
								</sup>
							</span>
						</div>
						<hr class="border">
						<form method="post" action="detail.php?id={{$item->ID}}&action=add&name={{$item->TenSP}}">
							<div class="wided">
								<div class="button_group">
									<input type="text" name="quantity" value="1" size="2">
									<input type="submit" value="Add Cart" class="btn btn-outline-success ">
									<a class="btn btn-outline-success" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
										Liên Hệ Chi tiết
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</div>
</div>
@endsection