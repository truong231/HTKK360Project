@extends('users.homeuser')
@section('usercontent')
<div>
@foreach($edit_user as $key => $edit_value)
<?php
	$message = Session::get('message');
	if($message){
	echo '<span class="text-alert" style="color: green;">'.$message.'</span>';
	Session::put('message',null);
	}
?>
<form class="thong-tin-ca-nhan-form dia-chi-giao-hang-add-form" action="{{URL::to('/update-user-'.$edit_value->id)}}" method="post" id="don-hang-thong-tin-ca-nhan-add-form" accept-charset="UTF-8">
@csrf	
<div><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title">THÔNG TIN CƠ BẢN</div>
<div class="ttcn-wrap-content"><div class="form-item form-type-textfield form-item-ma-tai-khoan form-disabled">
  <label for="edit-ma-tai-khoan">Mã tài khoản <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input disabled="disabled" type="text" id="edit-ma-tai-khoan" name="ma_tai_khoan" value="{{$edit_value->id}}" size="60" maxlength="128" class="form-text required" />
</div>
<div class="form-item form-type-textfield form-item-fullname form-disabled">
  <label for="edit-fullname">Họ và tên <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input disabled="disabled" type="text" id="edit-fullname" name="fullname" value="{{$edit_value->name}}" size="60" maxlength="128" class="form-text required" />
</div>
<div class="form-item form-type-textfield form-item-mail form-disabled">
  <label for="edit-mail">E-mail <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input disabled="disabled" type="text" id="edit-mail" name="mail" value="{{$edit_value->email}}" size="60" maxlength="128" class="form-text required" />
</div>
<div class="form-item form-type-textfield form-item-phone form-disabled">
  <label for="edit-phone">Số điện thoại <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input disabled="disabled" type="text" id="edit-phone" name="phone" value="{{$edit_value->phone}}" size="60" maxlength="128" class="form-text required" />
</div>
</div></div><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title">THÔNG TIN BỔ SUNG</div> <div class="ttcn-wrap-content"><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-birthday">
  <label for="edit-birthday">Ngày sinh </label>
 <div id="edit-birthday"  class="date-padding"><div class="form-item form-type-textfield form-item-birthday-date">
  <label for="edit-birthday-datepicker-popup-0">Date </label>
 <input type="date" id="edit-birthday-datepicker-popup-0" name="birthday" value="{{$edit_value->birthday}}" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 11/23/2023</div>
</div>
</div>
</div>
</div><div class="tinh-tp"><div class="form-item form-type-select form-item-gioi-tinh">
  <label for="edit-gioi-tinh">Giới tính </label>
 <select id="edit-gioi-tinh" name="gender" class="form-select"><option value="{{$edit_value->gender}}" selected="selected">Chọn giới tính</option><option value="1">Nam</option><option value="2">Nữ</option></select>
 @if($edit_value->gender==1)
 <span style="color: blue; font-weight: bold">Nam</span>
 @else
 <span style="color: red; font-weight: bold">Nữ</span>
 @endif
</div>
<div class="form-item form-type-textfield form-item-address">
  <label for="edit-address">Địa chỉ </label>
 <input type="text" id="edit-address" name="address" value="{{$edit_value->address}}" size="60" maxlength="128" class="form-text" />
</div>
<div class="form-item form-type-select form-item-tinhtp">
  <label for="edit-tinhtp">Tỉnh/Tp <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <select id="edit-tinhtp" name="province" class="form-select required"><option value="{{$edit_value->province}}">Chọn</option><option value="Hà Nội">Hà Nội
</option><option value="TP Hồ Chí Minh">TP Hồ Chí Minh
</option><option value="Hải Phòng">Hải Phòng
</option><option value="Đà Nẵng">Đà Nẵng
</option><option value="Cần Thơ">Cần Thơ
</option><option value="An Giang">An Giang
</option><option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
</option><option value="Bắc Giang">Bắc Giang
</option><option value="Bắc Kạn">Bắc Kạn
</option><option value="Bạc Liêu">Bạc Liêu
</option><option value="Bắc Ninh">Bắc Ninh
</option><option value=">Bến Tre">Bến Tre
</option><option value="Bình Định">Bình Định
</option><option value="Bình Dương">Bình Dương
</option><option value="Bình Phước">Bình Phước
</option><option value="Bình Thuận">Bình Thuận
</option><option value="Cà Mau">Cà Mau
</option><option value="Cao Bằng">Cao Bằng
</option><option value="Đắk Lắk">Đắk Lắk
</option><option value="Đắk Nông">Đắk Nông
</option><option value="Điện Biên">Điện Biên
</option><option value="Đồng Nai">Đồng Nai
</option><option value="23">Đồng Tháp
</option><option value="24">Gia Lai
</option><option value="25">Hà Giang
</option><option value="26">Hà Nam
</option><option value="27">Hà Tĩnh
</option><option value="28">Hải Dương
</option><option value="29">Hậu Giang
</option><option value="30">Hòa Bình
</option><option value="31">Hưng Yên
</option><option value="32">Khánh Hòa
</option><option value="33">Kiên Giang
</option><option value="34">Kon Tum
</option><option value="35">Lai Châu
</option><option value="36">Lâm Đồng
</option><option value="37">Lạng Sơn
</option><option value="38">Lào Cai
</option><option value="39">Long An
</option><option value="40">Nam Định
</option><option value="41">Nghệ An
</option><option value="42">Ninh Bình
</option><option value="43">Ninh Thuận
</option><option value="44">Phú Thọ
</option><option value="45">Quảng Bình
</option><option value="46">Quảng Nam
</option><option value="47">Quảng Ngãi
</option><option value="48">Quảng Ninh
</option><option value="49">Quảng Trị
</option><option value="50">Sóc Trăng
</option><option value="51">Sơn La
</option><option value="52">Tây Ninh
</option><option value="53">Thái Bình
</option><option value="54">Thái Nguyên
</option><option value="55">Thanh Hóa
</option><option value="56">Thừa Thiên Huế
</option><option value="57">Tiền Giang
</option><option value="58">Trà Vinh
</option><option value="59">Tuyên Quang
</option><option value="60">Vĩnh Long
</option><option value="61">Vĩnh Phúc
</option><option value="62">Yên Bái
</option><option value="63">Phú Yên</option></select><span style="color: green">{{$edit_value->province}}</span>
</div></div><br>
<div class="form-item form-type-textfield form-item-district">
<label for="edit-district">Huyện </label>
 <input type="text" id="edit-district" name="district" value="{{$edit_value->district}}" size="60" maxlength="128" class="form-text" />
</div>
</div>
</div></div><div class="ngan-hang"><div class="form-item form-type-textfield form-item-nganhang">
  <label class="element-invisible" for="edit-nganhang">Ngân hàng </label>
 <input class="uk-hidden form-text" type="text" id="edit-nganhang" name="nganhang" value="" size="60" maxlength="128" />
</div>
<div class="form-item form-type-textfield form-item-chinhanh">
 <input placeholder="Chi nhánh" class="uk-hidden form-text" type="text" id="edit-chinhanh" name="chinhanh" value="" size="60" maxlength="128" />
</div>
</div><div class="ngan-hang"><div class="form-item form-type-textfield form-item-shipping-address">
  <label class="element-invisible" for="edit-shipping-address">Địa chỉ ship hàng </label>
 <input class="uk-hidden form-text" type="text" id="edit-shipping-address" name="shipping_address" value="" size="60" maxlength="128" />
</div>
<div class="form-item form-type-select form-item-shipping-type">
 <select class="uk-hidden form-select" id="edit-shipping-type" name="shipping_type"><option value="3">Giao hàng nhanh</option><option value="2">Viettel</option><option value="4">Giao hàng tiết kiệm</option><option value="5">Xe khách</option><option value="6">Chuyển phát khác</option><option value="1">Hãng xe tải</option><option value="7">Ship nội thành</option></select>
</div>
<div class="form-item form-type-select form-item-shipping-code">
 <select class="uk-hidden form-select" id="edit-shipping-code" name="shipping_code"><option value="" selected="selected">CODE/CK</option><option value="1">[Ví điện tử] </option><option value="2">[COD] </option><option value="3">[Chuyển khoản] </option><option value="4">[Tiền mặt] </option></select>
</div>
</div><div class="form-item form-type-select form-item-loai-vc">
  <label for="edit-loai-vc">Loại vận chuyển </label>
 <select id="edit-loai-vc" name="type" class="form-select"><option value="{{$edit_value->shippingtype}}">Chọn</option><option value="1">Nhanh</option><option value="2">Thường</option></select>
 @if($edit_value->shippingtype==1)
 <span style="color: green; font-weight: bold">Nhanh</span>
 @else
 <span style="color: green; font-weight: bold">Thường</span>
 @endif
</div>
</div></div><div class="ttcn-wrap-basic">
            <div class="ttcn-wrap-title">Danh sách địa chỉ kho nhận hàng tại Trung Quốc</div>
            <div class="ttcn-wrap-content">
                <!--<h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Bảo Thuế <em>(kê khai 100% thuế - có hóa đơn GTGT)</em></h4>
                <div class="addresscon">
        			<ul>
        				<li>
        					<strong class="flo">Địa chỉ nhận hàng:</strong>
        					<span class="flo"> <b>广西东兴市冲卜四路215号</b>294870仓库</span>
        				</li>
        				<li>
        					<strong class="flo">Người nhận:</strong>
        					<span class="flo">  KH294870咚咚公司</span>
        				</li>
        				<li>
        					<strong class="flo">Mã bưu điện:</strong>
        					<span class="flo">538100</span>
        				</li>
        				<li>
        					<strong class="flo">Số điện thoại:</strong>
        					<span class="flo">17788548022</span>
        				</li>
        			</ul>
        		</div>-->
                <h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Đông Hưng</h4>
                <div class="addresscon">
        			<ul>
        				<li>
        					<strong class="flo">Địa chỉ nhận hàng:</strong>
        					<span class="flo"> <b>广西壮族自治区 防城港市 东兴市 东兴镇 冲卜一路65-1号</b>{{$edit_value->id}}仓库</span>
        				</li>
        				<li>
        					<strong class="flo">Người nhận:</strong>
        					<span class="flo">  KH{{$edit_value->id}}咚咚公司</span>
        				</li>
        				<li>
        					<strong class="flo">Mã bưu điện:</strong>
        					<span class="flo">538100</span>
        				</li>
        				<li>
        					<strong class="flo">Số điện thoại:</strong>
        					<span class="flo">18587603681</span>
        				</li>
        			</ul>
        		</div>
                <h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Quảng Châu</h4>
                <div class="addresscon">
        			<ul>
        				<li>
        					<strong class="flo">Địa chỉ nhận hàng:</strong>
        					<span class="flo"> <b>广东省 广州市 白云区 石井街道 凰岗村 凤鸣路117号KH{{$edit_value->id}}凰岗二社大型停车场F1档口 </b></span>
        				</li>
        				<li>
        					<strong class="flo">Người nhận:</strong>
        					<span class="flo">  KH{{$edit_value->id}}咚咚代收</span>
        				</li>
        				<li>
        					<strong class="flo">Mã bưu điện:</strong>
        					<span class="flo">510430</span>
        				</li>
        				<li>
        					<strong class="flo">Số điện thoại:</strong>
        					<span class="flo">86-18926668611</span>
        				</li>
        			</ul>
        		</div>
            </div>
        </div><input class="uk-button uk-button-primary form-submit" type="submit" id="edit-submit" name="update_user" value="Lưu thay đổi" /><input type="hidden" name="form_build_id" value="form-IypnFDx9TSOz_4HLHGvrTQlf3Z5Snd19mZ4Il4WpR3E" />
<input type="hidden" name="form_token" value="1xM3OxM-vKA2SYool9heHaHMevU6TL8nDKd1trJRUTI" />
<input type="hidden" name="form_id" value="don_hang_thong_tin_ca_nhan_add_form" />
</div></form>
@endforeach
</div>

@endsection