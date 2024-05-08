@extends('welcome')
@section('content')

<!DOCTYPE html>
<html lang="vi">
    <head>
        <link rel="stylesheet" type="text/css" href="{{('/public/frontend/css/introbootstrapcss.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{('/public/frontend/css/introcss.css')}}" />
    </head>
    <body>
        <div class="introduce">
            <div class="introduce-banner">
                <div class="blur"></div>
                <div class="text-wrap d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text">Về Chúng Tôi</h1>
                    <h2 class="text">Thương Đô Logistic</h2>
                </div>
            </div>
            <div class="introduce-info">
                <div class="container">
                    <div class="row">
                        <div class="info-left col-md-6">
                            <p class="text text-1">
                                <strong>THƯƠNG ĐÔ Logistics</strong> là công ty logistics hàng đầu trong lĩnh vực vận chuyển hàng hóa Việt - Trung. Là đơn vị uy tín với trên 10 năm kinh nghiệm trên thị trường cung cấp dịch vụ đặt hàng order, vận chuyển hàng hóa từ các sàn thương mại điện tử lớn nhất Trung Quốc về Việt Nam.
                            </p>
                            <p class="text text-2">
                                TDG luôn nỗ lực cống hiến, không ngừng học hỏi, đổi mới bằng thái độ tích cực, yêu thương để “tạo ra giải pháp đơn giản hóa mọi giao dịch thương mại trên toàn cầu!
                            </p>
                        </div>
                        <div class="info-right col-md-6">
                            <div class="info-right-1 d-flex flex-column justify-content-center align-items-center">
                                <span class="count">60.000</span>
                                <span class="text-line">Khách hàng</span>
                                <span class="line"></span>
                                <span class="text-sub">Đã và đang được phục vụ</span>
                            </div>
                            <div class="info-right-2 container">
                                <div class="row">
                                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                                        <span class="count">12</span>
                                        <span class="text-line">Năm kinh nghiệm</span>
                                        <span class="line"></span>
                                        <span class="text-sub">Tìm kiếm nguồn hàng và vận chuyển</span>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                                        <span class="count">200</span>
                                        <span class="text-line">Nhân sự</span>
                                        <span class="line"></span>
                                        <span class="text-sub">Giầu kinh nghiệm tư vấn</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="introduce-vision">
                <div class="d-flex justify-content-center">
                    <div class="cubes">
                        
                    </div>
                </div>
                <div class="introduce-vision-main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="introduce-vision-main-left">
                                    <h2>Tầm nhìn</h2>
                                    <span class="header">Năm 2020</span>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Ra mắt hệ thống xuất nhập khẩu chính ngạch đầu tiên và bài bản tại cửa khẩu Móng Cái (Việt Trung)</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Đưa dịch vụ chuyển phát nhanh quốc tế Việt Trung vào hoạt động, kết hợp thương mại điện tử</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Ra mắt hệ thống chăm sóc khách hàng đa kênh, quản lý tập trung.</span>
                                    </div>
                                    <span class="header">Năm 2021</span>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Dẫn đầu về dịch vụ mua hộ</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Dẫn đầu về vận chuyển và xuất nhập khẩu đường bộ tuyến Việt Trung</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Mở thêm hệ thống xuất nhập khẩu chính ngạch tại Lạng Sơn và Lào Cai</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Mở thêm dịch vụ xuất nhập khẩu đường biển, hàng không</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Kho ngoại quan HP</span>
                                    </div>
                                    <span class="header">Năm 2022 - 2025</span>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Mở rộng dịch vụ logistics các nước: Hàn Quốc, Nhật Bản, Mỹ, Đức, Úc… </span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Hỗ trợ nhập khẩu hàng có điều kiện</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Xây dựng tòa nhà TDG 10 tầng 600m2 tại Hà Nội</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Mở các kho ngoại quan tại các thành phố và tỉnh thành lớn</span>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <span class="text">Trong <strong>Top 5 tập đoàn/công ty logistics tại Việt Nam</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="public/frontend/images/Rectangle-155.png" alt="Rectangle-155.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="introduce-mission">
                <div class="introduce-mission-1 d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex">
                        <div class="rhombus">
                            <div class="rhombus-1"></div>
                            <div class="rhombus-2"></div>
                        </div>
                        <h2>Sứ Mệnh</h2>
                    </div>
                    <h3>Làm đơn giản hóa mọi giao dịch thương mại trên toàn cầu</h3>
                </div>

                <div class="introduce-mission-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="introduce-mission-main-left">
                                    <img src="public/frontend/images/Rectangle-172.png" alt="Rectangle-172.png">
                                    <div class="text-wrap d-flex flex-column">
                                        <span class="text-1">TDG luôn nỗ lực cống hiến, không ngừng học hỏi, đổi mới bằng thái độ tích cực, yêu thương để “tạo ra giải pháp đơn giản hóa mọi giao dịch thương mại trên toàn cầu!</span>
                                        <span class="text-2">Triết lí Kinh doanh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="introduce-mission-main-right">
                                    <h2>Giá trị cốt lõi</h2>
                                    <div class="content">
                                        <div class="item  d-flex align-items-center">
                                            <div class="square d-flex justify-content-center align-items-center">
                                                <span>01</span>
                                            </div>
                                            <span class="text">Cống hiến tạo ra thành quả</span>
                                        </div>
                                        <p class="sub-text">Chúng tôi luôn tin rằng, khi cống hiến hết mình tạo ra giá trị cho xã hội thì sẽ được đền đáp xứng đáng với những mà chúng tôi mang lại.</p>
                                        <div class="item  d-flex align-items-center">
                                            <div class="square d-flex justify-content-center align-items-center">
                                                <span>02</span>
                                            </div>
                                            <span class="text">Không ngừng học hỏi và đổi mới </span>
                                        </div>
                                        <p class="sub-text">Chúng tôi luôn luôn trau dồi kỹ năng bản thân, chuyên môn và sáng tạo để mang lại những giải pháp tối ưu nhất. Không ngừng vươn tới sự hoàn hảo. Chúng tôi thừa nhận sai và can đảm thay đổi</p>
                                        <div class="item  d-flex align-items-center">
                                            <div class="square d-flex justify-content-center align-items-center">
                                                <span>03</span>
                                            </div>
                                            <span class="text">Thái độ tích cực</span>
                                        </div>
                                        <p class="sub-text">Tư duy tích cực, sẵn sàng đối mặt, tự tin đưa ra giải pháp cho mọi tình huống.</p>
                                        <div class="item  d-flex align-items-center">
                                            <div class="square d-flex justify-content-center align-items-center">
                                                <span>04</span>
                                            </div>
                                            <span class="text">Cam kết vì mục tiêu</span>
                                        </div>
                                        <p class="sub-text">Luôn hành động theo tinh thần trách nhiệm, tuân thủ kỷ luật và dũng cảm để đạt được mục tiêu.</p>
                                        <div class="item  d-flex align-items-center">
                                            <div class="square d-flex justify-content-center align-items-center">
                                                <span>05</span>
                                            </div>
                                            <span class="text">Yêu thương và hỗ trợ đồng đội</span>
                                        </div>
                                        <p class="sub-text">Luôn đoàn kết yêu thương tạo ra sức mạnh to lớn cho tập thể, hỗ trợ lẫn nhau trong công việc cũng như cuộc sống.</p>
                                        <div class="item  d-flex align-items-center">
                                            <div class="square d-flex justify-content-center align-items-center">
                                                <span>06</span>
                                            </div>
                                            <span class="text">Xây dựng và duy trì các mối quan hệ</span>
                                        </div>
                                        <p class="sub-text">TDG xây dựng mối quan hệ với các khách hàng, đối tác bằng sự chuyên nghiệp, chân thành, và uy tín.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/sites/all/themes/giaodiennguoidung/templates/gioi-thieu/libs/jquery-3.3.1.min.js"></script>
    </body>
</html>
@endsection
