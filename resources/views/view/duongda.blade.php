@extends('master')
@section('content')
<div class="clearfix"></div>
<!-- IMAGE -->
<div class="HeadBackground" style="background:url(fpshop/public/image/banner/banner-1.jpg) no-repeat center bottom;">
	<h2>Dưỡng da</h2>
</div>
<!-- CONTENT -->
<div class=" ContentCenter">
	<div class="ProductListWrap">
		<div class="row">
			<div class="col-md-2 list-menu">
				<div class="LeftProductList">
					<h3><a class="HeadList" >Dưỡng da</a></h3>
					<ul class="List">
						<li>
							<a class="ListTitle" >Làm sạch</a>
							<ul class="ListTitle1">
								<li>
									<a href="/MVCFP/site/view/detail.php?id="></a>
								</li>
							</ul>
						</li>
						<li>
							<a class="ListTitle" >Mặt nạ</a>
							<ul class="ListTitle1">
								<li>
									<a href="/MVCFP/site/view/detail.php?id="></a>
								</li>
							</ul>
						</li>
						<li>
							<a class="ListTitle" >Xịt khoáng</a>
							<ul class="ListTitle1">
								<li>
									<a href="/MVCFP/site/view/detail.php?id="></a>
								</li>
							</ul>
						</li>
						<li>
							<a class="ListTitle" >Chống nắng</a>
							<ul class="ListTitle1">
								<li>
									<a href="/MVCFP/site/view/detail.php?id="></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<script language="javascript"> 

				function fnSort(val) 
				{ 
					for(i=1;i<=3;i++) 
					{ 
						if(i==val) 
						{

							document.getElementById("ProductList"+i).style.display = "block"; 
						}
						else 
						{

							document.getElementById("ProductList"+i).style.display = "none"; 
						}
					} 
				} 
			</script>
			<div class="col-md-10 ">
				<div class="BodyProductList">
					<div class="ResultSort">
						{{-- <p class="ResultNum"><strong></strong> Kết quả</p> --}}
						<form method="POST" name="form">
							<div class="Sort">
								<select class="Select" id="option" name="option" onchange="fnSort(this.value);">
									<option value="1" selected="">Tổng Các Sản Phẩm</option>
									<option value="2" >Giá: từ thấp lên cao</option>
									<option value="3" >Giá: từ cao xuống thấp</option>
								</select>
							</div>
						</form>
					</div>
					<div id="ProductList1" class="ProductList">
						<div class="row">
							<ul>
								@foreach($sp as $item)
								<li class="col-md-4 col-sm-6 col-xs-12 ">

									<div class="li-border">
											<input type="hidden" name="product_id" value="{{$item->ID}}">
											 <input type="hidden" name="_token" value="{{ csrf_token() }}">
											<a href="{{route('detail', $item->ID)}}">
												<div class="thumb img-responsive">
													<img class="thumbnail" src="fpshop/{{$item->Hinh}}" style="width: 150px;height:150px;">
												</div>

											</a>
											<div class="desc">{{$item->TenSP}}</div>
											<div class="price">
												{{$item->Gia}}
												<sup>
													VND
												</sup>
											</div>
											<div class="button_group">
												<input type="text" name="quantity" value="1" size="2" />
												{{-- <input type="text" value="Add to cart" class="btn" href="{{route('addcart',$item->ID) }}" btn-outline-success"> --}}
												<a class="add-to-cart btn" href="{{route('addcart',$item->ID)}}"><i class="fa fa-shopping-cart"></i></a>
												<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết
												</a>
											</div>
									</div>
								</li>	
								@endforeach	
							</ul>
						</div>
					</div> 
					<div id="ProductList2" class="ProductList" style="display:none;">
						<div class="row">
							<ul>
								@foreach($sp_low as $item)
								<li class="col-md-4 col-sm-6 col-xs-12 ">
									<div class="li-border">
										<form method="POST" action="duongda.php?action=add&name=">
											<a href="{{route('detail', $item->ID)}}">
												<div class="thumb img-responsive">
													<img class="thumbnail" src="fpshop/{{$item->Hinh}}" style="width: 150px;height:150px;">
												</div>
											</a>
											<div class="desc">{{$item->TenSP}}</div>
											<div class="price">
												{{$item->Gia}}
												<sup>
													VND
												</sup>
											</div>
											<div class="button_group">
												<input type="text" name="quantity" value="1" size="2" />
												<input type="submit" value="Add to cart" class="btn btn-outline-success ">
												<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết
												</a>
											</div>
										</form>
									</div>
								</li>
								@endforeach			
							</ul>
						</div>
					</div>
					<div id="ProductList3" class="ProductList" style="display:none;">
						<div class="row">
							<ul>
								@foreach($sp_high as $item)
								<li class="col-md-4 col-sm-6 col-xs-12 ">
									<div class="li-border">
										<form method="POST" action="duongda.php?action=add&name=">
											<a href="{{route('detail', $item->ID)}}">
												<div class="thumb img-responsive">
													<img class="thumbnail" src="fpshop/{{$item->Hinh}}" style="width: 150px;height:150px;">
												</div>
											</a>
											<div class="desc">{{$item->TenSP}}</div>
											<div class="price">
												{{$item->Gia}}
												<sup>
													VND
												</sup>
											</div>
											<div class="button_group">
												<input type="text" name="quantity" value="1" size="2" />
												<input type="submit" value="Add to cart" class="btn btn-outline-success ">
												<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết
												</a>
											</div>
										</form>
									</div>	
								</li>
								@endforeach		
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="ChangePage">
	<ul>
		<?php echo $sp->render(); ?>
	</ul>
</div>

@endsection