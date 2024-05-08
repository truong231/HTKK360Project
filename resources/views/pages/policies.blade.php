@extends('welcome')
@section('content')

<div class="breadcrumb"><div class="container"><a href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i><a href="/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></div></div>        <div class="container">
            <div class="content-item">
                @yield('policycontent')
                <div class="left">
                                    <div class="bai-viet-left-item item-block">
            <h3>Bài viết liên quan</h3>
                                        <div class="content">
                    <ul><li><a href="{{URL::to('/chinh-sach-bao-mat-thong-tin-thanh-vien')}}" title="CHÍNH SÁCH BẢO MẬT THÔNG TIN THÀNH VIÊN"><i class="fa fa-caret-right" aria-hidden="true"></i>CHÍNH SÁCH BẢO MẬT THÔNG TIN THÀNH VIÊN</a></li><li><a href="{{URL::to('/chinh-sach-giai-quyet-khieu-nai-0')}}" title="CHÍNH SÁCH GIẢI QUYẾT KHIẾU NẠI" class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>CHÍNH SÁCH GIẢI QUYẾT KHIẾU NẠI</a></li><li><a href="{{URL::to('/cau-hoi-thuong-gap-td')}}" title="CÂU HỎI THƯỜNG GẶP"><i class="fa fa-caret-right" aria-hidden="true"></i>CÂU HỎI THƯỜNG GẶP</a></li></ul>                </div>
             
        </div>
@endsection