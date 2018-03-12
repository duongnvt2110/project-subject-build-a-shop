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
{!!Form::open(array('action' =>'CartController@checkout'))!!}
{{-- <form method="POST" name="checkout" action="{{route('checkout')}}"> --}}

  <div class='form-input'>
    {!! Form::label('name', 'Tên') !!}
    {!! Form::text('name', null, array('required' =>"",'oninvalid'=>'this.setCustomValidity("Bạn Chưa Nhập Tên")','oninput'=>'setCustomValidity("")')) !!}
    {!! Form::label('adress', 'Địa chỉ:') !!}
    {!! Form::text('adress', null, array('required' => "",'oninvalid'=>'this.setCustomValidity("Bạn Chưa Nhập Địa Chỉ")','oninput'=>'setCustomValidity("")')) !!}
    {!! Form::label('number', 'SĐT') !!}
    {!! Form::text('number', null, array('required' => "",'pattern'=>"[0-9]*",'required' =>"",'oninvalid'=>'this.setCustomValidity("Bạn Chưa Nhập Tên")','oninput'=>'setCustomValidity("")')) !!}

    {{--   Tên:<input type="text" name="name"  required oninvalid='setCustomValidity("Bạn Chưa Nhập Tên")'; oninput="setCustomValidity('')"/>

      Địa chỉ:<input type="text" name="address"  required oninvalid='setCustomValidity("Bạn Chưa Nhập Địa Chỉ")' oninput='setCustomValidity("")'/>      
      SĐT:<input type="number" name="phone" pattern="[0-9]*" required oninvalid='setCustomValidity("Bạn Chưa Nhập SDT")' oninput="setCustomValidity('')" />
      <input name="_method" type="hidden" value="PATCH"> --}}
    </div>
    <div class="checkout" >
      {!! Form::submit('Submit', ['id' => 'pay-btn','class'=>'btn btn-outline-success','onclick'=>'myFunction()','value'=>"Thanh Toán"]) !!}
      {{--  <input type="submit" id="pay-btn" class="btn btn-outline-success"  value="Thanh Toán"/> --}}
    </div>
  </div>
  {!!Form::close()!!}
{{-- </form> --}}
</div>
@endsection