@extends('users.homeuser')
@section('usercontent')

<div class="menu-don-hang">
				<ul class="step-action"><li class=""><a href="/don-hang?status=1" class="active">Chờ báo giá<span class="uk-badge uk-badge-notification uk-badge-danger" style="margin-left: 5px"> 1</span></a></li><li class=""><a href="/don-hang?status=13" class="active">Chờ đặt cọc<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/don-hang?status=4" class="active">Đã đặt cọc<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/don-hang?status=14" class="active">Đã đặt hàng <span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/don-hang?status=3" class="active">Đã hoàn thành<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/don-hang?status=15" class="active">Cần xác nhận lại <span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/don-hang?status=2" class="active">Đã hủy<span class="uk-badge uk-badge-notification uk-badge-danger" style="margin-left: 5px"> 1</span></a></li></ul>			</div>
            <form class="don-hang-da-dat-search-form" action="/don-hang" method="post" id="don-hang-dat-search-form" accept-charset="UTF-8"><div><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-month-to">
 <div id="edit-month-to"  class="date-padding"><div class="form-item form-type-textfield form-item-month-to-date">
  <label for="edit-month-to-datepicker-popup-0">Date </label>
 <input placeholder="Từ ngày" type="text" id="edit-month-to-datepicker-popup-0" name="month_to[date]" value="" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 27/09/2023</div>
</div>
</div>
</div>
</div><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-month-end">
 <div id="edit-month-end"  class="date-padding"><div class="form-item form-type-textfield form-item-month-end-date">
  <label for="edit-month-end-datepicker-popup-0">Date </label>
 <input placeholder="Đến ngày" type="text" id="edit-month-end-datepicker-popup-0" name="month_end[date]" value="" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 27/09/2023</div>
</div>
</div>
</div>
</div><div class="form-item form-type-textfield form-item-order-code">
 <input placeholder="Mã đơn hàng" type="text" id="edit-order-code" name="order_code" value="" size="60" maxlength="128" class="form-text" />
</div>
<div class="form-item form-type-select form-item-truso-id">
 <select id="edit-truso-id" name="truso_id" class="form-select"><option value="" selected="selected">Lựa chọn trụ sở</option><option value="1">Hà Nội</option><option value="7">Hà Nội</option><option value="10">Hà Nội</option><option value="11">Hà Nội</option><option value="2">Hải Phòng</option><option value="3">Hồ Chí Minh</option><option value="4">Quảng Châu</option></select>
</div>
<div class="form-item form-type-select form-item-status">
 <select id="edit-status" name="status" class="form-select"><option value="" selected="selected">Chọn trạng thái</option><option value="1">Chờ báo giá</option><option value="13">Chờ đặt cọc</option><option value="4">Đã đặt cọc</option><option value="14">Đã đặt hàng </option><option value="3">Đã hoàn thành</option><option value="15">Cần xác nhận lại </option><option value="2">Đã hủy</option></select>
</div>
<a class="search-form" href="javascript:void(0);"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</a><input type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id" value="form-H-9N2ujgw7Z88tYFlZNhin07VeMXATyGVXlV4Xjkdu0" />
<input type="hidden" name="form_token" value="WFL3HZqCYoL0OTED0YiBeF3ppPZXRg7N1Wwn3ociFMs" />
<input type="hidden" name="form_id" value="don_hang_dat_search_form" />
</div></form><div class="order-item block-both">
                         <div class="order-item-top block-both">
                            <div class="order-item-top-left">
                                <div class="order-item-top-left-left">
                                    <span class="kho">Hồ Chí Minh</span>
                                    <span class="order-code">Mã đơn hàng: <a href="/don-hang-view?order_id=1307709">2948700002</a></span>
                                </div>
                                <span class="post"><i class="fa fa-calendar" aria-hidden="true"></i> 27/09/2023</span>
                                <span class="so-kien" data-uk-tooltip="" title="Kiện hàng"><i class="fa fa-cubes" aria-hidden="true"></i> <a href="/don-hang/kien-hang-update?order-code=2948700002" target="_blank">0</a> kiện hàng</span>
                            </div>
                            <div class="order-item-top-right">
                                Trạng thái: <span class="status" style="background:#ff0000">Chờ báo giá</span>
                            </div>
                         </div>
                         <div class="order-item-product block-both">
                            <div class="order-item-product-left"><div class="ncc-item block-both">
                          <div class="ncc-item-top">
                            <span class="stt">1</span>
                            <span class="name">Nhà cung cấp: <b>Không xác định nhóm shop</b></span>
                            <div class="dich-vu-khac">
                                <span>Kiểm hàng <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                <span>Đóng gỗ <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                <span>Chống sốc <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="ncc-product-list"><table><tr>
                                          <td width="40%">  
                                              <a href="https://item.taobao.com/item.htm?spm=a21n57.1.0.0.6c5c523c91iCV5&id=676854413491&ns=1&abbucket=17#detail" target="_blank" class="image">
                                                <img width="75" src="https://g-search3.alicdn.com/img/bao/uploaded/i4/i1/688017899/O1CN01CYbgmM28DnHs1QzuI_!!688017899.jpg_460x460q90.jpg_.webp" />
                                              </a>
                                              <a href="https://item.taobao.com/item.htm?spm=a21n57.1.0.0.6c5c523c91iCV5&id=676854413491&ns=1&abbucket=17#detail" class="title">áo phông đen</a>
                                              <span class="property">màu đen</span>
                                          </td>
                                          <td width="10%" class="center">Số lượng: 1</td>
                                          <td width="15%" class="center">
                                            <span class="price-vnd price-red">3,470đ</span><br/>
                                            <span class="price-cny">¥ 1.00</span>
                                          </td>
                                          <td width="15%" class="center">
                                            <span class="thanh-tien-vnd price-red">3,470đ</span><br/>
                                            <span class="thanh-tien-cny">¥ 1</span>
                                          </td>
                                          <td width="20%">
                                            <strong>Ghi chú của khách: </strong><br/>
                                            <p>a</p>
                                            <strong>Ghi chú dành cho khách hàng</strong><br/>
                                            <p style="color:red;font-weight:bold;"></p>
                                          </td>
                                       </tr><tr>
                                 <td colspan="5" class="center">Tổng tiền : <b class="price-red">3,470đ</b></td>
                               </tr></table></div>
                       </div></div>
                            <div class="order-item-product-right">
                                <ul>
                                    <li>Tổng tiền hàng: <b>3.470đ</b></li>
                                    <li>Phí đặt hàng: <b>9.000</b><sup>đ</sup></li>
                                    <li>Phí kiểm đếm: <b>0</b><sup>đ</sup></li>
                                    <li>Phí ship TQ: <b>0</b><sup>đ</sup></li>
                                    
                                    <li>Tổng tiền đơn hàng: <b>12.000đ</b></li>
                                    <li class="blue">Đặt cọc: <b>0đ</b></li>
                                    <li class="blue">Còn lại: <b>-12.000đ</b></li>
                                </ul>
                                
                                <div class="action block-both"><a href="/don-hang-view?order_id=1307709" title="Xem chi tiết" data-uk-tooltip="" class="xem-chi-tiet"><i class="fa fa-th-list" aria-hidden="true"></i> Xem chi tiết</a><a href="/gio-hang/edit?orderID=1307709" title="Sửa đơn hàng" data-uk-tooltip=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa đơn hàng</a><a title="Hủy đơn hàng" data-uk-tooltip="" class="huy-don" onclick="don_hang_huy_item(1307709);" href="javascript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Hủy đơn</a><a href="/don-hang/export?order-id=1307709" data-uk-tooltip="" title="Xuất excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Xuất excel</a></div>
                            </div>
                         </div>
                       </div><div class="order-item block-both">
                         <div class="order-item-top block-both">
                            <div class="order-item-top-left">
                                <div class="order-item-top-left-left">
                                    <span class="kho">Hà Nội</span>
                                    <span class="order-code">Mã đơn hàng: <a href="/don-hang-view?order_id=1306795">2948700001</a></span>
                                </div>
                                <span class="post"><i class="fa fa-calendar" aria-hidden="true"></i> 25/09/2023</span>
                                <span class="so-kien" data-uk-tooltip="" title="Kiện hàng"><i class="fa fa-cubes" aria-hidden="true"></i> <a href="/don-hang/kien-hang-update?order-code=2948700001" target="_blank">0</a> kiện hàng</span>
                            </div>
                            <div class="order-item-top-right">
                                Trạng thái: <span class="status" style="background:#000000">Đã hủy</span>
                            </div>
                         </div>
                         <div class="order-item-product block-both">
                            <div class="order-item-product-left"><div class="ncc-item block-both">
                          <div class="ncc-item-top">
                            <span class="stt">1</span>
                            <span class="name">Nhà cung cấp: <b>Không xác định nhóm shop</b></span>
                            <div class="dich-vu-khac">
                                <span>Kiểm hàng <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                <span>Đóng gỗ <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                <span>Chống sốc <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                            </div>
                          </div>
                          <div class="ncc-product-list"><table><tr>
                                          <td width="40%">  
                                              <a href="https://item.taobao.com/item.htm?spm=a21n57.1.0.0.7ca2523czXPuma&id=707279180991&ns=1&abbucket=17#detail" target="_blank" class="image">
                                                <img width="75" src="" />
                                              </a>
                                              <a href="https://item.taobao.com/item.htm?spm=a21n57.1.0.0.7ca2523czXPuma&id=707279180991&ns=1&abbucket=17#detail" class="title">Áo phông</a>
                                              <span class="property">Trắng</span>
                                          </td>
                                          <td width="10%" class="center">Số lượng: 1</td>
                                          <td width="15%" class="center">
                                            <span class="price-vnd price-red">183,910đ</span><br/>
                                            <span class="price-cny">¥ 53.00</span>
                                          </td>
                                          <td width="15%" class="center">
                                            <span class="thanh-tien-vnd price-red">183,910đ</span><br/>
                                            <span class="thanh-tien-cny">¥ 53</span>
                                          </td>
                                          <td width="20%">
                                            <strong>Ghi chú của khách: </strong><br/>
                                            <p></p>
                                            <strong>Ghi chú dành cho khách hàng</strong><br/>
                                            <p style="color:red;font-weight:bold;">Thông tin sản phẩm về size và màu sắc chưa đầy đủ, quý khách vui lòng bổ sung thêm. Quý khách có thể tham khảo thêm cách tạo đơn hàng ở link dưới đây, xin cảm ơn!
https://www.thuongdo.com/huong-dan-tao-don-hang</p>
                                          </td>
                                       </tr><tr>
                                 <td colspan="5" class="center">Tổng tiền : <b class="price-red">183,910đ</b></td>
                               </tr></table></div>
                       </div></div>
                            <div class="order-item-product-right">
                                <ul>
                                    <li>Tổng tiền hàng: <b>183.910đ</b></li>
                                    <li>Phí đặt hàng: <b>9.000</b><sup>đ</sup></li>
                                    <li>Phí kiểm đếm: <b>0</b><sup>đ</sup></li>
                                    <li>Phí ship TQ: <b>0</b><sup>đ</sup></li>
                                    
                                    <li>Tổng tiền đơn hàng: <b>193.000đ</b></li>
                                    <li class="blue">Đặt cọc: <b>0đ</b></li>
                                    <li class="blue">Còn lại: <b>-193.000đ</b></li>
                                </ul>
                                
                                <div class="action block-both"><a href="/don-hang-view?order_id=1306795" title="Xem chi tiết" data-uk-tooltip="" class="xem-chi-tiet"><i class="fa fa-th-list" aria-hidden="true"></i> Xem chi tiết</a><a title="Xóa đơn hàng" class="huy-don" onclick="don_hang_trash_item(1306795);" href="javascript:void(0);" data-uk-tooltip >
                            <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa đơn
                           </a>
                           <a href="javascript:void(0);" onClick="don_hang_dat_lai_item(1306795,2);" class="dat-lai-don-hang dat-lai-don-hang-1306795" data-uk-tooltip="{pos:'bottom-left'}" title="Báo giá và đặt lại đơn hàng hủy">
                            <i class="fa fa-exchange" aria-hidden="true"></i> Đặt lại
                           </a><a href="/don-hang/export?order-id=1306795" data-uk-tooltip="" title="Xuất excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Xuất excel</a></div>
                            </div>
                         </div>
                       </div>        </div>
    </div>
@endsection