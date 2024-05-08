@extends('users.homeorder')
@section('ordercontent')

<form class="dat-hang-online-form" action="{{URL::to('/save-product-{product_id}')}}" method="post" id="baiviet-dat-hang-online-form" accept-charset="UTF-8" enctype="multipart/form-data">
@csrf	

<div><ul class="step-action">
                        <li class="active"><b>01</b> Tạo đơn hàng</li>
                        <li><b>02</b> Chờ báo giá</li>
                        <li><b>03</b> Đặt cọc</li>
                        <li><b>04</b> Đặt hàng</li>
                        <li><b>05</b> Vận chuyển</li>
                        <li class="last"><b>06</b> Nhận hàng</li>
                      </ul>
                      <span class="ti-gia" style="display:none;">3470</span>
				      <table class="sticky-enabled">
						<?php
							$message = Session::get('message');
							if($message){
								echo '<span class="text-alert">'.$message.'</span>';
								Session::put('message',null);
							}
						?>
 <thead>
 <tr><th>STT</th><th>Hình ảnh</th><th>Thuộc tính</th><th>Đơn giá <br /> (<span class="fa fa-yen"></span>)</th><th>Số lượng</th><th>Ghi chú khác</th><th>Thành tiền</th> </tr></thead>
<tbody>
  <?php $content = Cart::content(); ?>
  <form action="{{URL::to('/add-cart')}}" method="post">
    @csrf
 <tr class="hidden-0 odd">
	<td>1</td><td><div class="hinh-anh"><div class="product-img img-link" href="" target="_blank">
        <input type="file" name="product_image" class="btn-hd-upload product-image-1" placeholder="Ảnh sản phẩm" style="Width: 80%">
        <input type="text" name="product_image_link" class="image_link" placeholder="Link ảnh sản phẩm" style="Width: 55%">
        <input type="hidden" name="product_id" value="1">
        </div></div></td>
	<td><div class="form-item form-type-textfield form-item-sanpham-item-1-tensanpham">
 	<input class="product-name form-text" placeholder="Tên sản phẩm - Ghi Tiếng Việt" type="text" id="edit-sanpham-item-1-tensanpham" name="product_name" value="" size="60" maxlength="250" required />
	</div>
<div class="form-item form-type-textarea form-item-sanpham-item-1-thongso">
 <div class="form-textarea-wrapper resizable"><textarea class="product-name form-textarea" placeholder="VD: Màu sắc, size, kích thước,...." id="edit-sanpham-item-1-thongso" name="product_content" cols="60" rows="5"></textarea></div>
</div>
<div class="form-item form-type-textfield form-item-sanpham-item-1-link">
 <input class="link-item form-text" placeholder="Link sản phẩm" type="text" id="edit-sanpham-item-1-link" name="product_link" value="" size="60" maxlength="250" />
</div>
</td>

<td><div class="form-item form-type-textfield form-item-sanpham-item-1-price">
 <input class="auto price form-text" placeholder="Đơn giá" type="text" id="edit-sanpham-item-1-price" name="product_price" value="" size="60" maxlength="128" />
</div>
</td><td><a href="#" class="tb-qty tb-reduce"> - </a><div class="form-item form-type-textfield form-item-sanpham-item-1-qty">
 <input class="qty form-text" placeholder="Số lượng" type="text" id="edit-sanpham-item-1-qty" name="product_quantity" value="" size="60" maxlength="128" />
</div>
<a href="#" class="tb-qty tb-increase"> + </a></td><td><div class="form-item form-type-textarea form-item-sanpham-item-1-ghichu-tvh">
 <div class="form-textarea-wrapper resizable"><textarea class="product-ghichu form-textarea" placeholder="Ghi chú sản phẩm..." id="edit-sanpham-item-1-ghichu-tvh" name="product_note" cols="60" rows="5"></textarea></div>
</div>
</td>
<?php $all_product = DB::table('tbl_product')->get(); ?>
<td><div class="thanh-tien"><div class="thanh-tong-tien"><div class="form-item form-type-textfield form-item-sanpham-item-1-tongtien form-disabled">
 <input class="thanh-tien form-text" disabled="disabled" type="text" id="edit-sanpham-item-1-tongtien" name="product_total" value="" size="60" maxlength="128" />
</div>
</div></div></td> </tr>

<a onClick="don_hang_website_cart_delete(50)" class="icon-delete dat-hang-delete-item-50" href="javascript:void(0);"><span class="icon xoa"></span></a></div></div></td> </tr>
</tbody>
</table>
<a href="#" data-url="{{route('addCart')}}" class="them-moi">+ Thêm sản phẩm</a>
                      <div data-product-count="0" class="tong-tien-tam-tinh">
                        <p class="tong-tien-hang" data-total-price="0">Tổng tiền đặt hàng: <span><b>0</b><em>đ</em></span></p>
                        <p class="phi-dat-hang">Phí đặt hàng<a href="/don-hang/thong-tin-cap-do" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a>: <span><b data-price="0">0</b><em>đ</em></span></p>
                        <p class="phi-kiem-dem" data-product-total="0">Phí kiểm đếm<a href="/don-hang/thong-tin-cap-do" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a>: <span><b></b><em>đ</em></span></p>
                        <p class="phi-dong-kien">Phí đóng kiện<a href="/don-hang/thong-tin-cap-do" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a>: <span><b></b></span></p>
                        <p class="tong-tien">Tổng tiền/chưa có phí ship TQ: <span><b>0</b><em>đ</em></span></p>
                      </div>
</form>               
                      <div class="info"><div class="yeu-cau-khac"><div class="form-item form-type-radios form-item-van-chuyen">
  <label for="edit-van-chuyen">Vận chuyển </label>
 <div id="edit-van-chuyen" class="form-radios"><div class="form-item form-type-radio form-item-van-chuyen">
 <input type="radio" id="edit-van-chuyen-1" name="van_chuyen" value="1" checked="checked" class="form-radio" />  <label class="option" for="edit-van-chuyen-1">Nhanh </label>

</div>
<div class="form-item form-type-radio form-item-van-chuyen">
 <input type="radio" id="edit-van-chuyen-2" name="van_chuyen" value="2" class="form-radio" />  <label class="option" for="edit-van-chuyen-2">Thường </label>

</div>
</div>
</div>
<div class="form-item form-type-checkboxes form-item-yeu-cau-khac form-disabled">
  <label for="edit-yeu-cau-khac">Yêu cầu khác </label>
 <div id="edit-yeu-cau-khac" class="form-checkboxes"><div class="form-item form-type-checkbox form-item-yeu-cau-khac-1 form-disabled">
 <input disabled="disabled" type="checkbox" id="edit-yeu-cau-khac-1" name="yeu_cau_khac[1]" value="1" class="form-checkbox" />  <label class="option" for="edit-yeu-cau-khac-1">Kiểm hàng </label>

</div>
<div class="form-item form-type-checkbox form-item-yeu-cau-khac-2 form-disabled">
 <input disabled="disabled" type="checkbox" id="edit-yeu-cau-khac-2" name="yeu_cau_khac[2]" value="2" class="form-checkbox" />  <label class="option" for="edit-yeu-cau-khac-2">Đóng gỗ </label>

</div>
</div>
</div>
<div class="form-item form-type-checkbox form-item-khai-thue-id">
 <input type="checkbox" id="edit-khai-thue-id" name="khai_thue_id" value="1" class="form-checkbox" />  <label class="option" for="edit-khai-thue-id">Khai thuế 100% hàng có hóa đơn GTGT </label>

</div>
</div><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title"><i class="fa fa-map-maker"></i> THÔNG TIN MUA HÀNG</div><div class="ttcn-wrap-content"><div id="edit-container-check" class="form-radios"><div class="form-item form-type-radio form-item-container-check">
@if(Auth::check())
<input class="form-text" type="hidden" style="width:50%" type="text" id="edit-diachi" name="address" value="{{Auth::user()->address}}" size="60" maxlength="250" />
<span style="color: green; font-weight: bold">{{Auth::user()->address}} - {{Auth::user()->district}} - {{Auth::user()->province}}</span><br>
<a href="{{URL::to('/edit-user-'.Auth::user()->id)}}"><label class="" style="font-weight: bold">Thay đổi địa chỉ </label></a>
@endif
</div>
</div></div></div>
<div id="other-diachi" class="other-diachi"><div id="edit-other-diachi" class="form-wrapper"></div></div><div class="info-basic"><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title"><i class="fa fa-map-maker"></i> TRỤ SỞ NHẬN HÀNG HIỆN TẠI</div>
<div>
<input class="form-text" type="hidden" style="width:3%" type="text" id="edit-kho" name="warehouse_id" value="{{Auth::user()->warehouse_id}}" size="60" maxlength="250" />
	<?php $all_product = DB::table('users')->join('tbl_warehouse','users.warehouse_id','=','tbl_warehouse.id')->get();?>

	@foreach ($all_product as $key => $pro)
	
	 <span style="color: green; font-weight: bold">{{$pro->warehouse}}</span>
	
	@endforeach

<div id="other-diachi" class="other-diachi"><div id="edit-other-diachi" class="form-wrapper"></div></div><div class="info-basic"><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title"><i class="fa fa-map-maker"></i>THAY ĐỔI TRỤ SỞ NHẬN HÀNG (*)</div><div class="ttcn-wrap-content">
<label class="option" for="edit-truso-id-1"><b>Hà Nội</b> - Số 30 Ngõ 298 Trần Điền, Định Công, Hoàng Mai, Hà Nội - @if(Auth::user()->warehouse_id==1)<span class="label-bs label-bs-danger">Đã chọn</span> @else <a href="{{URL::to('/chose-warehouse-1-'.Auth::user()->id)}}"><span class="label-bs label-bs-success">Chọn</span></a>@endif </label><br>

<label class="option" for="edit-truso-id-2"><b>Hà Nội</b> - 107 E2 ngõ 27 phố Tạ Quang Bửu,Phường Bách Khoa, Hai Bà Trưng, Hà Nội - @if(Auth::user()->warehouse_id==2)<span class="label-bs label-bs-danger">Đã chọn</span> @else <a href="{{URL::to('/chose-warehouse-2-'.Auth::user()->id)}}"><span class="label-bs label-bs-success">Chọn</span></a>@endif </label><br>

<label class="option" for="edit-truso-id-3"><b>Hà Nội</b> - Số 21, Đường 18M, Mỗ Lao, Hà Đông, Hà Nội - @if(Auth::user()->warehouse_id==3)<span class="label-bs label-bs-danger">Đã chọn</span> @else <a href="{{URL::to('/chose-warehouse-3-'.Auth::user()->id)}}"><span class="label-bs label-bs-success">Chọn</span></a>@endif </label><br>

<label class="option" for="edit-truso-id-4"><b>Hồ Chí Minh</b> - 47 Nguyễn Văn Luông, Quận 6, TP.Hồ Chí Minh - @if(Auth::user()->warehouse_id==4)<span class="label-bs label-bs-danger">Đã chọn</span> @else <a href="{{URL::to('/chose-warehouse-4-'.Auth::user()->id)}}"><span class="label-bs label-bs-success">Chọn</span></a>@endif </label><br>

</div>
</div></div></div></div><div class="form-action"><input type="submit" id="edit-submit" name="add_product" value="Đặt hàng" class="form-submit" /></div><input type="hidden" name="form_build_id" value="form-zWZKdYOEZ3lcohi8EuT_3f682T-_k7hIbxa28U5xqb8" />
<input type="hidden" name="form_token" value="u8P3udoTQrkDWk7mGpCiR8xJi0McOCRcmRh1APWMQmg" />
<input type="hidden" name="form_id" value="baiviet_dat_hang_online_form" />
</div></form>        </div>
    </div>
</div>
<form class="upload-avatar" method="post" enctype="multipart/form-data" style="display: none;">
    <input type="file" class="btn-upload" name="uploadAvatarKienhang">
	<input type="submit" name="submit_form" />
</form>
@endsection