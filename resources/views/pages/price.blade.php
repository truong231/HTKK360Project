@extends('welcome')
@section('content')

<div class="breadcrumb"><div class="container"><a href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>Báo giá</div></div>    <div class="container">
                    <div class="quang-cao-content-top item-block">
                    </div>
            <div class="content-include-search">
                    </div>
                    <div class="left">	<div class="sticky-sidebar">
				<div class="menu-one-page-bao-gia">
			<h3>Báo giá dịch vụ đặt hàng</h3>
			<ul class="menu">
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-chi-phi">Chi phí một đơn hàng order</a></li>
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-phi-dich-vu">Bảng giá dịch vụ mua hàng</a></li>
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-phi-ship">Phí ship Trung Quốc</a></li>
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-phi-van-chuyen">Phí vận chuyển theo cân nặng</a></li>
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-phi-kiem-dem">Phí kiểm đếm sản phẩm</a></li>
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-phi-dong-go">Phí đóng gỗ</a></li>
				<li class="menu-item"><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#bang-gia-cap-do">Cấp độ thành viên</a></li>
			</ul>
		</div>
	</div>
</div>
            <div class="group-content">
                <h1 class="title-page">Bảng giá dịch vụ đặt hàng Trung Quốc</h1>
                                <div class="wrap-bang-gia"><div id="bang-gia-chi-phi" class="bang-gia-item">
			<h2>1. Chi phí một đơn hàng order</h2>
			<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
				<thead>
					<tr>
						<th></th>
						<th>Giải thích</th>
						<th>Bắt buộc</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1. Giá sản phẩm</td>
						<td>Là giá được niêm yết trên website Trung Quốc</td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
						<td></td>
					</tr>
					<tr>
						<td><span data-href="phidichvu" class="ky-gui-anchor">2. Phí dịch vụ</span></td>
						<td>Phí giao dịch mua hàng khách trả cho Thương Đô</td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
						<td></td>
					</tr>
					<tr>
						<td><span data-href="phishiptq" class="ky-gui-anchor">3. Phí ship Trung Quốc</span></td>
						<td>Phí chuyển hàng từ nhà cung cấp tới kho của Thương Đô tại Trung Quốc</td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
						<td></td>
					</tr>
					<tr>
						<td><span data-href="phivanchuyen" class="ky-gui-anchor">4. Phí <a href="https://www.thuongdo.com/van-chuyen-trung-viet" target="_blank" title="Vận chuyển Trung Việt">vận chuyển Trung Việt</a></span></td>
						<td>Phí vận chuyển từ kho Trung Quốc về kho của Thương Đô tại Việt Nam (Đơn vị Kg)</td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
						<td></td>
					</tr>
					<tr>
						<td><span data-href="phikiemdem" class="ky-gui-anchor">5. Phí kiểm đếm</span></td>
						<td>Dịch vụ đảm bảo sản phẩm của khách không bị nhà cung cấp giao sai hoặc thiếu</td>
						<td></td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
					</tr>
					<tr>
						<td><span data-href="phidonggo" class="ky-gui-anchor">6. Phí đóng gỗ</span></td>
						<td>Hình thức đảm bảo an toàn, hạn chế rủi ro đối với hàng dễ vỡ, dễ biến dạng</td>
						<td></td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
					</tr>
					<tr>
						<td>7. Phí ship tận nhà</td>
						<td>Là phí vận chuyển hàng từ kho của Thương Đô tại Việt Nam tới nhà của quý khách</td>
						<td></td>
						<td class="uk-text-center uk-text-success"><i class="fa fa-check tick"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="uk-alert uk-alert-danger"><i class="fa fa-exclamation-triangle"></i> Lưu ý: Những phí thuộc hình thức  (*) là phí bắt buộc, còn lại là tùy chọn, quý khách có thể chọn sử dụng hoặc không <a href="https://www.thuongdo.com/van-chuyen-hang-trung-quoc" target="_blank" title="Vận chuyển hàng Trung Quốc">Vận chuyển hàng Trung Quốc</a></div>
	<div id="bang-gia-phi-dich-vu" class="bang-gia-item">
				<h2 id="phidichvu">2. Bảng giá dịch vụ mua hàng</h2>
				<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
					<thead>
						<tr>
							<th>GIÁ TRỊ ĐƠN HÀNG</th>
							<th>% PHÍ DỊCH VỤ</th>
						</tr>
					</thead>
					<tbody>
					
				<tr>
					<td>> 100 triệu</td>
					<td>1%</td>
				</tr>
				<tr>
					<td>> 20tr đến 100 triệu</td>
					<td>2%</td>
				</tr>
				<tr>
					<td>> 2tr đến 20 triệu</td>
					<td>2.5%</td>
				</tr>
				<tr>
					<td><= 2 triệu</td>
					<td>3%</td>
				</tr><tr><td colspan="2" style="text-align: center;">Phí dịch vụ tối thiểu 1 đơn hàng 9,000<sup>đ</sup>/đơn</td></tr></tbody>
				</table>
			</div>
		<div id="bang-gia-phi-ship" class="bang-gia-item">
			<h2 id="phishiptq">3. Phí ship Trung Quốc</h2>
			<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
				<thead>
					<tr>
						<th class="uk-text-center">LOẠI HÌNH</th>
						<th colspan="2" class="uk-text-center">GIẢI THÍCH</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Chuyển phát nhanh thông thường</td>
						<td>Kg đầu dựa vào quy định của nhà cung cấp trên trang Taobao hoặc Alibaba</td>
						<td>Kg tiếp theo nếu nhà cung cấp thuộc tỉnh Quảng Đông là 4 tệ, tỉnh khác là 8 tệ</td>
					</tr>
					<tr>
						<td>Chuyển phát nhanh siêu tốc</td>
						<td>Kg đầu dựa vào quy định của nhà cung cấp trên trang Taobao hoặc Alibaba</td>
						<td>Mỗi 0.5kg tiếp theo là 5 tệ/kg</td>
					</tr>
					<tr>
						<td>Chuyển phát thường bằng oto tải</td>
						<td colspan="2">Mỗi kg 1 tệ/kg + 70 tệ/đơn hàng</td>
					</tr>
				</tbody>
			</table>
		</div>
	<div id="bang-gia-phi-van-chuyen" class="bang-gia-item">
				<h2 id="phivanchuyen">4. Phí vận chuyển quốc tế</br><span style="font-size: 15px;color: red;">(Thay đổi bảng giá mới được áp dụng cho các kiện hàng đến kho Trung Quốc từ ngày 14/03/2023)</span></h2>
                <h3>4.1 Phí vận chuyển trọn gói</h3>
				<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed" style="text-align:center;">
					<thead>
						<tr>
							<th>Trọng lượng (tính/kg)</th>
							<th>Hà Nội</th>
							<th>TP.HCM</th>
						</tr>
					</thead>
					<tbody>
					<tr>
                				<td>>100kg</td>
                				<td>Liên hệ</td>
                                <td>Liên hệ</td>
                			  </tr><tr>
                				<td>30->100kg</td>
                				<td>29.000<sup>đ</sup></td>
                                <td>37.000<sup>đ</sup></td>
                			  </tr><tr>
                				<td>10->30kg</td>
                				<td>30.000<sup>đ</sup></td>
                                <td>38.000<sup>đ</sup></td>
                			  </tr><tr>
                				<td>0->10kg</td>
                				<td>31.000<sup>đ</sup></td>
                                <td>39.000<sup>đ</sup></td>
                			  </tr><tr style="text-align: left;background: #185493 !important;"><td colspan="10" style="text-align: left;font-family: arial;color:white;">Khối lượng (tính/m<sup>3</sup>)</td></tr><tr>
                				<td>> 20m3</td>
                				<td>Liên hệ</td>
                                <td>Liên hệ</td>
                			  </tr><tr>
                				<td>10m3 -> 20m3</td>
                				<td>3.400.000<sup>đ</sup></td>
                                <td>3.800.000<sup>đ</sup></td>
                			  </tr><tr>
                				<td>5m3 -> 10m3</td>
                				<td>3.800.000<sup>đ</sup></td>
                                <td>4.200.000<sup>đ</sup></td>
                			  </tr><tr>
                				<td>< 5m3</td>
                				<td>4.000.000<sup>đ</sup></td>
                                <td>4.400.000<sup>đ</sup></td>
                			  </tr></tbody>
				</table>
				<div class="uk-alert uk-alert-danger">
			<b>Lưu ý: </b>
			<ol type="a">
				<li>Quy tắc phân biệt hàng nặng và hàng cồng kềnh</li>
				<div>
					<div><i> - Phí vận chuyển được tính theo hai cách là trọng lượng theo hàng nặng, và thể tích cho hàng cồng kềnh/hàng.</i></div>
                    <div><i> - Khối lượng quy đổi được tính theo công thức:</i> <b>Chiều dài * chiều rộng * chiều cao / 6000 = Cân nặng đơn hàng </b></div>
                    <div><i> - Hàng nặng và cồng kềnh được phân biệt theo cách sau:</i></div>
                    <div>
                        <ul style="margin-bottom: 0px;">
                            <li><i>Hàng nặng có trọng lượng thực tế lớn hơn cân nặng quy đổi</i></li>
                            <li><i>Hàng cồng kềnh có trọng lượng thực tế nhỏ hơn hoặc bằng cân nặng quy đổi</i></li>
                        </ul>
                    </div>
				</div>
				<li>Quy tắc làm tròn</li>
				<div>
				 <div>- <i>Khối lượng kiện hàng tối thiểu tính 0.5kg</i></div>
				<div><b><i>VD: Đơn hàng có trọng lượng: 0.4kg được làm tròn thành 0.5kg, từ 0.5kg trở lên tính theo cân nặng thực tế
				</i></b></div>
				</div>
				<li>Tính giá vận chuyển khi hàng về</li>
				<div>
					Khách hàng chú ý, với đơn hàng của quý khách gồm nhiều sản phẩm, và về làm nhiều đợt thì hàng về tới đâu công ty sẽ tính phí tới đó. Phí vận chuyển sẽ tính theo số hàng về của khách trong một thời điểm chứ không tính theo tổng đơn hàng.
				</div>
			</ol>
		</div><h3>4.2 Phí vận chuyển chính ngạch</h3>
                    <div class="chu-thich">
                        <b>Tổng phí nhập khẩu = Phí dịch vụ + Phí vận chuyển + Thuế nhập khẩu (nếu có) + Thuế VAT</b> 
                    </div><table class="uk-table uk-table-hover uk-table-striped uk-table-condensed" style="text-align:center;">
                       <thead>
                           <tr>
                              <th>Trọng lượng(kg)</th>
                              <th>Hà Nội</th>
                              <th>Hồ Chí Minh</th>
                              <th>Hải Phòng</th>
                           </tr>
                       </thead>
                       <tbody>
                          <tr>
                                            <td>> 500kg</td>                                            
                                            <td>Liên hệ</td>
                                            <td>Liên hệ</td>
                                            <td>Liên hệ</td>
                                         </tr><tr>
                                            <td>> 200kg -> 500kg</td>                                            
                                            <td>8.000<sup>đ</sup></td>
                                            <td>16.000<sup>đ</sup></td>
                                            <td>11.000<sup>đ</sup></td>
                                         </tr><tr>
                                            <td>> 100kg -> 200kg</td>                                            
                                            <td>10.000<sup>đ</sup></td>
                                            <td>18.000<sup>đ</sup></td>
                                            <td>13.000<sup>đ</sup></td>
                                         </tr><tr>
                                            <td>> 30kg -> 100kg</td>                                            
                                            <td>12.000<sup>đ</sup></td>
                                            <td>20.000<sup>đ</sup></td>
                                            <td>15.000<sup>đ</sup></td>
                                         </tr><tr>
                                            <td>< 30kg</td>                                            
                                            <td>16.000<sup>đ</sup></td>
                                            <td>24.000<sup>đ</sup></td>
                                            <td>19.000<sup>đ</sup></td>
                                         </tr><tr>
                                        <td colspan="4" style="text-align: left;background: #185493;color: white;">Khối lượng (m3)</td> 
                                     </tr><tr>
                                            <td>> 20m3</td>                                            
                                            <td>Liên hệ</td>
                                            <td>Liên hệ</td>
                                            <td>Liên hệ</td>
                                         </tr><tr>
                                            <td>> 10 -> 20m3</td>                                            
                                            <td>1.100.000<sup>đ</sup></td>
                                            <td>1.600.000<sup>đ</sup></td>
                                            <td>1.350.000<sup>đ</sup></td>
                                         </tr><tr>
                                            <td>> 5 -> 10m3</td>                                            
                                            <td>1.400.000<sup>đ</sup></td>
                                            <td>1.900.000<sup>đ</sup></td>
                                            <td>1.550.000<sup>đ</sup></td>
                                         </tr><tr>
                                            <td>< 5m3</td>                                            
                                            <td>1.600.000<sup>đ</sup></td>
                                            <td>2.100.000<sup>đ</sup></td>
                                            <td>1.850.000<sup>đ</sup></td>
                                         </tr>
                       </tbody>
                    </table>
                    <div class="uk-alert uk-alert-danger">
                        <span><b>Thuế nhập khẩu (Nếu có)</b> = <em>% thuế</em> <b> x </b> <em>Giá trị hàng hóa</em></span><br/>
                        <span><b>Thuế VAT</b> = <em>10%</em> <b> x </b> <em>Giá trị hàng hóa</em></span>
                    </div><div class="uk-alert uk-alert-danger">
                     <b>Lưu ý: </b>
                     <ul>
                        <li>Đối với hàng hoá vận chuyển theo Hình thức chính ngạch, các thông số như thuế nhập khẩu và thuế VAT sẽ được chúng tôi thông báo tới Quý khách sau khi Quý khách đặt cọc. Hoặc Quý khách liên hệ nhân viên Kinh doanh để có được thông tin về chi phí lô hàng.</li>
                     </ul>
                   </div>
			</div>
		<div id="bang-gia-phi-kiem-dem" class="bang-gia-item">
				<h2 id="phikiemdem">5. Phí kiểm đếm sản phẩm</h2>
				<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
					<thead>
						<tr>
							<th>SỐ LƯỢNG</th>
							<th>MỨC GIÁ (VNĐ)/ 1 sản phẩm</th>
						</tr>
					</thead>
					<tbody>
					
				<tr>
					<td>501-10000 sản phẩm</td>
					<td>1,000<sup>đ</sup></td>
				</tr>
				<tr>
					<td>101-500 sản phẩm</td>
					<td>1,500<sup>đ</sup></td>
				</tr>
				<tr>
					<td>11-100 sản phẩm</td>
					<td>2,000<sup>đ</sup></td>
				</tr>
				<tr>
					<td>3-10 sản phẩm</td>
					<td>3,500<sup>đ</sup></td>
				</tr>
				<tr>
					<td>1-2 sản phẩm</td>
					<td>5,000<sup>đ</sup></td>
				</tr></tbody>
				</table>
			</div>
		<div class="uk-alert uk-alert-danger">
                   <b>Lưu ý: </b>
                   <ul>
                      <li>Thương Đô sẽ kiểm tra hàng khi nhận được tại kho Trung Quốc theo số lượng, Phân loại thuộc tính cơ bản của hàng hóa mà khách hàng đã thao tác chọn khi đưa vào giỏ hàng (đối với hàng thời trang thường là thuộc tính kích cỡ, màu sắc nhưng loại trừ trường hợp màu sắc sản phẩm thực tế có thể đậm/nhạt hơn so với màu sắc sản phẩm đăng bán trên website).</li>
                      <li>Thương Đô không cam kết sẽ kiểm tra chất liệu, thông số kỹ thuật, chất lượng sản phẩm, hàng nhái (fake), thương hiệu sản phẩm,...</li>
                   </ul>  
                </div><div id="bang-gia-phi-dong-go" class="bang-gia-item">
			<h2 id="phidonggo">6. Phí đóng gỗ</h2>
			<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
				<thead>
					<tr>
						<th>Trọng lượng</th>
						<th>Kg đầu tiên</th>
						<th>Kg tiếp theo</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Phí đóng kiện</td>
						<td>70,000<sup>đ</sup></td>
						<td>3,500<sup>đ</sup></td>
					</tr>
				</tbody>
			</table>
            <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
				<thead>
					<tr>
						<th>Khối lượng</th>
						<th>Phí đóng kiện</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><= 0.01m<sup>3</sup></td>
						<td>70,000<sup>đ</sup></td>
					</tr>
                    <tr>
						<td>Từ 0.01m<sup>3</sup> đến <= 0.1m<sup>3</sup></td>
						<td>70,000<sup>đ</sup>/0.01m<sup>3</sup> đầu tiên + 15,000<sup>đ</sup>/0.01m<sup>3</sup> tiếp theo</td>
					</tr>
                    <tr>
						<td>Từ 0.1m<sup>3</sup> đến 1m<sup>3</sup></td>
						<td>205,000<sup>đ</sup>/0.1m<sup>3</sup> đầu tiên + 50,000<sup>đ</sup>/0.1m<sup>3</sup> tiếp theo</td>
					</tr>
                    <tr>
						<td> > 1m<sup>3</sup></td>
						<td>655,000<sup>đ</sup>/1m<sup>3</sup></td>
					</tr>
				</tbody>
			</table>
		</div>
	<div class="bang-gia-item" id="phi-chong-soc">
                    <h2>7. Phí chống sốc</h2>
                    <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed capdo">
    					<thead>
    						<tr>
    							<th>Tên</th>
    							<th>Kg đầu</th>
    							<th>Kg tiếp theo</th>
    						</tr>
    					</thead>
    					<tbody>
                            <tr>
                                <td>Phí</td>
                                <td>8 Tệ</td><td>1.5 Tệ</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="uk-alert uk-alert-danger">
                     <b>Lưu ý: </b>
                     <ul>
                        <li>Phí chống sốc chỉ áp dụng cho hàng TMĐT</li>
                        <li>Hàng cồng kềnh sẽ tính theo cân nặng quy đổi</li>
                     </ul>
                    </div>
                </div><div id="bang-gia-cap-do" class="bang-gia-item">
				<h2>8. Cấp độ thành viên</h2>
				<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed capdo">
					<thead>
						<tr>
							<th>Tên cấp độ</th>
							<th>Tổng giá trị giao dịch</th>
							<th>Chiết khấu phí giao dịch</th>
							<th>Chiết khấu phí vận chuyển</th>
							<th>% đặt cọc</th>
						</tr>
					</thead>
					<tbody>
					
				<tr>
					<td><img src="/sites/all/themes/giaodiennguoidung/images/star-5.png" /></td>
					<td>5,000,000,000<sup>đ</sup> - 50,000,000,000<sup>đ</sup></td>
					<td>15 %</td>
					<td>10 %</td>
					<td>50 %</td>
				</tr>
				<tr>
					<td><img src="/sites/all/themes/giaodiennguoidung/images/star-4.png" /></td>
					<td>1,000,000,000<sup>đ</sup> - 5,000,000,000<sup>đ</sup></td>
					<td>10 %</td>
					<td>5 %</td>
					<td>60 %</td>
				</tr>
				<tr>
					<td><img src="/sites/all/themes/giaodiennguoidung/images/star-3.png" /></td>
					<td>500,000,000<sup>đ</sup> - 1,000,000,000<sup>đ</sup></td>
					<td>8 %</td>
					<td>3 %</td>
					<td>75 %</td>
				</tr>
				<tr>
					<td><img src="/sites/all/themes/giaodiennguoidung/images/star-2.png" /></td>
					<td>100,000,000<sup>đ</sup> - 500,000,000<sup>đ</sup></td>
					<td>5 %</td>
					<td>1 %</td>
					<td>85 %</td>
				</tr>
				<tr>
					<td><img src="/sites/all/themes/giaodiennguoidung/images/star-1.png" /></td>
					<td>0<sup>đ</sup> - 100,000,000<sup>đ</sup></td>
					<td> %</td>
					<td> %</td>
					<td>90 %</td>
				</tr></tbody>
				</table>
			</div>
		</div>    
            </div>
           
    </div>
    @endsection