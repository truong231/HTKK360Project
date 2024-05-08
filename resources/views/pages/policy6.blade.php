@extends('welcome')
@section('content')

<div class="breadcrumb"><div class="container"><a href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i><a href="/chinh-sach-cam-ket">Chính sách - Cam kết</a></div></div>        <div class="container">
            <div class="content-item">
                @yield('policiescontent')
                <div class="left">
                                    <div class="bai-viet-left-item item-block">
            <h3>Bài viết liên quan</h3>
                                        <div class="content">
                    <ul><li><a href="/chinh-sach-va-quy-dinh-chung" title="Chính sách và quy định chung"><i class="fa fa-caret-right" aria-hidden="true"></i>Chính sách và quy định chung</a></li><li><a href="/chinh-sach-doi-tra-va-hoan-tien" title="Chính sách đổi trả và hoàn tiền"><i class="fa fa-caret-right" aria-hidden="true"></i>Chính sách đổi trả và hoàn tiền</a></li><li><a href="/chinh-sach-bao-mat-thong-tin-ca-nhan" title="Chính sách bảo mật thông tin cá nhân"><i class="fa fa-caret-right" aria-hidden="true"></i>Chính sách bảo mật thông tin cá nhân</a></li><li><a href="/chinh-sach-giai-quyet-tranh-chap" title="Chính sách giải quyết tranh chấp"><i class="fa fa-caret-right" aria-hidden="true"></i>Chính sách giải quyết tranh chấp</a></li><li><a href="/chinh-sach-bao-hanh" title="Chính sách bảo hành" class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>Chính sách bảo hành</a></li></ul>                </div>
             
        </div>
                                        	                </div>
                <div class="footer-article-top item-block block">
            <div class="menu-footer-bar">
            <ul><li class="first-below ">
                                                    <a href="/dat-hang-trung-quoc" title="DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC"><i class="fa fa-caret-right" aria-hidden="true"></i>DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC</a>
                                                    <ul><li class=""><a href="/dat-hang-quang-chau" title="Đặt hàng Quảng Châu"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt hàng Quảng Châu</a></li><li class=""><a href="/dat-hang-taobao" title="Đặt Hàng TaoBao"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt Hàng TaoBao</a></li><li class=""><a href="/dat-hang-1688" title="Đặt Hàng 1688"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt Hàng 1688</a></li><li class=""><a href="/dat-hang-alibaba" title="Đặt hàng Alibaba"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt hàng Alibaba</a></li><li class="last"><a href="/dat-hang-tmall" title="Đặt hàng Tmall"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt hàng Tmall</a></li></ul>
                                                   </li><li class=" ">
                                                    <a href="/van-chuyen-hang-trung-quoc" title="VẬN CHUYỂN HÀNG TRUNG QUỐC"><i class="fa fa-caret-right" aria-hidden="true"></i>VẬN CHUYỂN HÀNG TRUNG QUỐC</a>
                                                    <ul><li class=""><a href="/van-chuyen-hang-quang-chau" title="Vận chuyển hàng Quảng Châu"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển hàng Quảng Châu</a></li><li class=""><a href="https:/www.thuongdo.com" title="Vận chuyển đường bộ"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường bộ</a></li><li class=""><a href="https://www.thuongdo.com/" title="Vận chuyển đường hàng không"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường hàng không</a></li><li class=""><a href="https://www.thuongdo.com/" title="Vận chuyển đường sắt"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường sắt</a></li><li class="last"><a href="https://www.thuongdo.com" title="Vận chuyển đường thuỷ"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường thuỷ</a></li></ul>
                                                   </li><li class=" last-below">
                                                    <a href="/dich-vu-kiem-dem" title="DỊCH VỤ GIA TĂNG"><i class="fa fa-caret-right" aria-hidden="true"></i>DỊCH VỤ GIA TĂNG</a>
                                                    <ul><li class=""><a href="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-chi-phi" title="Dịch vụ bảo hiểm hàng hoá"><i class="fa fa-angle-right" aria-hidden="true"></i>Dịch vụ bảo hiểm hàng hoá</a></li><li class=""><a href="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-phi-kiem-dem" title="Dịch vụ kiểm đếm"><i class="fa fa-angle-right" aria-hidden="true"></i>Dịch vụ kiểm đếm</a></li><li class="last"><a href="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-phi-dong-go" title="Dịch vụ đóng hàng"><i class="fa fa-angle-right" aria-hidden="true"></i>Dịch vụ đóng hàng</a></li></ul>
                                                   </li><li>
                                    <a href="/h%C6%B0%E1%BB%9Bng-dan" title="Hướng dẫn">Hướng dẫn</a><ul><li class="first-below ">
                                            <a href="/huong-dan-tao-don-hang" title="Hướng dẫn tạo đơn đặt hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn tạo đơn đặt hàng</a>
                                            
                                           </li><li class=" ">
                                            <a href="/taobao-1688-tmall-alibaba" title="Hướng dẫn tìm nguồn hàng trên Taobao 1688"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn tìm nguồn hàng trên Taobao 1688</a>
                                            
                                           </li><li class=" ">
                                            <a href="/cong-cu-d%C4%83t-hang" title="Cài đặt công cụ đặt hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Cài đặt công cụ đặt hàng</a>
                                            
                                           </li><li class=" ">
                                            <a href="/huong-dan-dang-ky-dang-nhap-tai-khoan" title="Hướng dẫn đăng ký, đăng nhập tài khoản"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn đăng ký, đăng nhập tài khoản</a>
                                            
                                           </li><li class=" ">
                                            <a href="/ky-gui-hang-trung-quoc" title="Hướng dẫn tạo đơn ký gửi hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn tạo đơn ký gửi hàng</a>
                                            
                                           </li><li class=" ">
                                            <a href="/huong-dan-nap-tien-vao-tai-khoan-khach-hang-cua-thuong-do" title="Hướng dẫn nạp tiền vào tài khoản khách hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn nạp tiền vào tài khoản khách hàng</a>
                                            
                                           </li></ul>
                                  </li></ul>        </div>
    </div>            </div>  
        </div>
@endsection