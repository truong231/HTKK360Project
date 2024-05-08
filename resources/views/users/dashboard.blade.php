@extends('users.homeuser')
@section('usercontent')

<div class="dashboard-block-page block-clear block-both">
				<ul>
					<li>
						<a href="{{URL::to('/don-hang-tao')}}" class="tao-don-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
							
						</a>
						<a href="/dat-hang" class="title">Tạo đơn hàng</a>
					</li>
					<li>
						<a href="/kien-ky-gui" class="tao-don-ky-gui image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>	
						</a>
						<a href="/kien-ky-gui" class="title">Tạo đơn ký gửi</a>
					</li>
					<li>
						<a href="/don-hang" class="quan-ly-don-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>	
						</a>
						<a href="/don-hang" class="title">Quản lý đơn hàng</a>
					</li>
					<li>
						<a href="/don-hang/kien-hang-update" class="quan-ly-kien-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>
						</a>
						<a href="/don-hang/kien-hang-update" class="title">Quản lý kiện hàng</a>
					</li>
					<li class="last">
						<a href="/don-hang/giaohang" class="yeu-cau-giao-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>
						</a>
						<a href="/don-hang/giaohang" class="title">Giao hàng</a>
					</li>
					<li>
						<a href="/lich-su-giao-dich" class="vi-dien-tu image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>
						</a>
						<a href="/lich-su-giao-dich" class="title">Tài khoản KH</a>
					</li>
					<li>
						<a href="/danh-sach-khieu-nai" class="khieu-nai-don-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>	
								</span>		
							</span>
						</a>
						<a href="/danh-sach-khieu-nai" class="title">Khiếu nại</a>
					</li>
					<li>
						<a href="/nha-cung-cap" class="quan-ly-nha-cung-cap image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>	
						</a>
						<a href="/nha-cung-cap" class="title">Nhà cung cấp</a>
					</li>
					<li>
						<a href="{{URL::to('/edit-user-'.Auth::user()->id)}}" class="thong-tin-ca-nhan image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>
						</a>
						<a href="/thong-tin-ca-nhan" class="title">Thông tin cá nhân</a>
					</li>
					<li class="last">
						<a href="" class="cai-dat image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>		
							</span>	
						</a>
						<a href="/" class="title">Cài đặt</a>
					</li>
				</ul>
			</div>
            
@endsection