@extends('master')
@section('content')
<div class="clearfix"></div>
<div class="container">
  <div id="shopping-cart">
    <div class="txt-heading">Shopping Cart <a id="btnEmpty" href="{{route('emtycart')}}">Empty Cart</a></div>
      <table cellpadding="10" cellspacing="1">
        <tbody>
          <tr>
            <th style="text-align:left;"><strong>Name</strong></th>
            <!-- <th style="text-align:left;"><strong>ID</strong></th> -->
            <th style="text-align:right;"><strong>Quantity</strong></th>
            <th style="text-align:right;"><strong>Price</strong></th>
            <th style="text-align:center;"><strong>Action</strong></th>
          </tr>
          @if(Session::has('cart'))	   
           @foreach($product_cart as $cart)
           <tr>
             <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong>{{$cart['item']['TenSP']}}</strong></td>
             <td style="text-align:right;border-bottom:#F0F0F0 1px solid;">{{$cart['qty']}}</td>
             <td style="text-align:right;border-bottom:#F0F0F0 1px solid;">
                {{number_format($cart['price'],0,'','.')}}
               <sup> VND</sup>
             </td>
             <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="{{route('removeitem',$cart['item']['ID'])}}" class="btnRemoveAction">Remove Item</a></td>
           </tr>    
         <tr>
          @endforeach
          <td colspan="5" align=right><strong>Total:</strong>@if(Session::has('cart')){{number_format($totalPrice,0,'','.')}}@else 0 @endif<sup>VND</sup>
          </td>
        </tr>  
         @endif
      </tbody>
    </table>		
    
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
</div>
</form>
</div>
@endsection