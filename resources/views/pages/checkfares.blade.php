@extends('welcome')
@section('content')


<div class="breadcrumb"><div class="container"><a href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>Tra cước</div></div>    <div class="container">
                    <div class="quang-cao-content-top item-block">
                    </div>
            <div class="content-include-search">
                    </div>
                    <div class="left">	</div>
            <div class="group-content">
                <h1 class="title-page">Tra cước vận chuyển ước tính</h1>
                                <div class="tra-cuoc-item-page">
                    <form>
                        <div class="diem-nhan-diem-tra uk-grid">
                            <div class="uk-width-1-5">
                                <select onChange="don_hang_tra_cuoc_calculator();" class="noi-gui-hang" required="true">
                                    <option value="">Nơi gửi hàng</option>
                                    <option value="1">Đông Hưng</option>
                                    <option value="2">Quảng Châu</option>
                                    <option value="3">Bằng Tường</option>
                                    <option value="3">Tỉnh khác</option>
                                </select>
                            </div>
                            <div class="uk-width-1-5">
                                <select onChange="don_hang_tra_cuoc_calculator();" class="noi-nhan-hang" required="true">
                                    <option value="">Nơi nhận hàng</option>
                                    <option value="1">Hà Nội</option>
                                    <option value="3">Hải Phòng</option>
                                    <option value="2">Hồ Chí Minh</option>
                                </select>
                            </div>
                            <div class="uk-width-1-5" type="Chiều dài">
                                <div class="form-item">
                                    <label>Chiều dài</label>
                                    <input type="number" step="Any" value="" onkeyup="don_hang_tra_cuoc_calculator();" class="chieu-dai" placeholder="cm" required="true"/>
                                </div>
                            </div>
                            <div class="uk-width-1-5">
                                <div class="form-item">
                                    <label>Chiều rộng</label>
                                    <input type="number" step="Any" value="" onkeyup="don_hang_tra_cuoc_calculator();" class="chieu-rong" placeholder="cm" required="true"/>
                                </div>
                            </div>
                            <div class="uk-width-1-5">
                                <div class="form-item">
                                    <label>Chiều cao</label>
                                    <input type="number" step="Any" value="" onkeyup="don_hang_tra_cuoc_calculator();" class="chieu-cao" placeholder="cm" required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="trong-luong uk-grid">
                            <div class="uk-width-1-1">
                                <div class="form-item">
                                    <label>Trọng lượng thực tế</label>
                                    <input type="number" step="Any" class="trong-luong" onkeyup="don_hang_tra_cuoc_calculator();" placeholder="kg" required="true"/>
                                </div>
                            </div>
                            <span class="message"></span>
                        </div>
                    </form>
                    <div class="result">
                        <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
                            <thead>
                                <tr>
                                    <th>Loại dịch vụ</th>
                                    <th>Phí vận chuyển</th>
                                    <th>Thời gian nhận hàng dự kiến</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vận chuyển đường bộ</td>
                                    <td class="result-item result-item-0"></td>
                                    <td class="border-none">3-5 ngày</td>
                                </tr>
                                <tr>
                                    <td>Vận chuyển đường sắt</td>
                                    <td class="result-item result-item-1"></td>
                                    <td class="border-none">4-7 ngày</td>
                                </tr>
                                <tr>
                                    <td>Vận chuyển đường không</td>
                                    <td class="result-item result-item-2"></td>
                                    <td class="border-none">3 ngày</td>
                                </tr>
                                <tr>
                                    <td>Vận chuyển đường thủy</td>
                                    <td class="result-item result-item-3"></td>
                                    <td class="border-none">15 ngày</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
           
    </div>
    @endsection