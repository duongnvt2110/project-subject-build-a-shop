<?php
include "../Model/Cart_Model.php";
include "../config/DB.php";
$duongda_cart=new Cart_Model();
$duongda_cart->get_Cart();
?>
<?php include "header.php" ?>
<div class="clearfix"></div>
<div class="container">
  <div id="shopping-cart">
    <div class="txt-heading">Shopping Cart <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a></div>
    <?php
    if(isset($_SESSION["cart_item"])){
      $item_total = 0;
      ?>	
      <table cellpadding="10" cellspacing="1">
        <tbody>
          <tr>
            <th style="text-align:left;"><strong>Name</strong></th>
            <!-- <th style="text-align:left;"><strong>ID</strong></th> -->
            <th style="text-align:right;"><strong>Quantity</strong></th>
            <th style="text-align:right;"><strong>Price</strong></th>
            <th style="text-align:center;"><strong>Action</strong></th>
          </tr>	
          <?php		
          foreach ($_SESSION["cart_item"] as $item){
           ?>
           <tr>
             <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
             <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
             <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo number_format($item["price"],0,'',','); ?>
               <sup> VND</sup>
             </td>
             <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="cart.php?action=remove&ID=<?php echo $item["name"]; ?>" class="btnRemoveAction">Remove Item</a></td>
           </tr>
           <?php
           $item_total += ($item["price"]*$item["quantity"]);
         }
         ?>

         <tr>
          <td colspan="5" align=right><strong>Total:</strong> <?php echo number_format($item_total,0,'',','); ?>
            <sup>VND</sup>
          </td>
        </tr>
      </tbody>
    </table>		
    <?php
  }
  ?>
</div>
<form method="POST" name="checkout" action="cart.php?action=checkout">
  <div class='form-input'>
    Tên:      <input type="text" name="name" required="" oninvalid="this.setCustomValidity('Bạn Chưa Nhập Tên')" oninput="setCustomValidity('')"">
    Địa chỉ:      <input type="text" name="address" required="" oninvalid="this.setCustomValidity('Bạn Chưa Nhập Địa Chỉ')"  oninput="setCustomValidity('')">      
    SĐT:      <input type="number" name="phone" pattern="[0-9]*" required="" oninvalid="this.setCustomValidity('Bạn Chưa Nhập SDT')" oninput="setCustomValidity('')">
  </div>
  <div class="checkout" >
    <input type="submit" id="pay-btn" class="btn btn-outline-success  " onclick="myFunction()" value="Thanh Toán"></a>
  </div>
  <!-- <script>
    function myFunction() {
     alert("Bạn Đã Mua Hàng Thành Công");
     header('Location:/MVCFP/index.php');
   }
 </script> -->
</div>
</form>
</div>

<?php include "footer.php" ?>