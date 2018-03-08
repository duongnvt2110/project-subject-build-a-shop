<?php 
include '../controller/Detail_Controller.php';

include '../Model/Cart_Model.php';
$duongda_cart=new Cart_Model();
$detail_Controller=new Detail_Controller();
$detail=$detail_Controller->detailAction();
$duongda_cart->get_Cart();
?>
<?php include "header.php" ?>
		<div class="clearfix"></div>
		<div class="container_fullwidth container-product">
			<div class="container">
				<div class="row">
					<?php foreach ($detail as $item){?>
					<div class="col-md-10 product-row">
						<div class="products-details">
							
							<div class="preview_image">
								<div>
									<img src="/MVCFP//<?=$item["Hinh"]?>" style="width:300px;height:300px;position: relative;
									margin: 4%;">
								</div>
							</div>
							<div class="products-description">
								<h5 class="name">
									<?=$item["TenSP"]?>
								</h5>
<!-- 								<p>
									<img alt="" src="images/star.png">
									<a class="review_num" href="#">
										02 Review(s)
									</a>
								</p> -->
								<p>
									Availability: 
									<span class=" light-red">
										In Stock
									</span>
								</p>
								<p>
									<?=$item["Mota"]?>
								</p>
								<hr class="border">
								<div class="price">
									Price : 
									<span class="new_price">
										<?=number_format($item["Gia"],0,'',',');?>
										<sup>
											VND
										</sup>
									</span>
<!-- 									<span class="old_price">
										450.00
										<sup>
											$
										</sup>
									</span> -->
								</div>
								<hr class="border">
								<form method="post" action="detail.php?id=<?php echo $item["ID"]?>&action=add&name=<?php echo $item["TenSP"]; ?>">
									<div class="wided">
										<div class="button_group">
											<input type="text" name="quantity" value="1" size="2" />
											<input type="submit" value="Add Cart" class="btn btn-outline-success ">
											<a class="btn btn-outline-success" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
												Liên Hệ Chi tiết
											</a>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
		<?php include 'footer.php'?>