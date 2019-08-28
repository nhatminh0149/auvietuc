<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liên hệ Âu Việt Úc</title>
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="public/vendor/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <style>
        .nav-item a{
            font-family: Comic;
            color: #636363;
            font-size: 18px;
        }
        .dropdown-menu a:hover{
            background: #F7CDCD;
            color: rgba(144, 15, 15, 0.8);
        }

        .list-title{
            width: 100%;
            text-align: center;
        }

        .tuvan form {
            padding-top: 30px;
            padding-bottom: 20px;
            padding-left: 60px;
        }
    

    </style>
</head>
<body>
    <!-- thannh tiêu đề -->

        <nav id="navbar" class="navbar navbar-expand-lg sticky-top ">
            <div class="container-fluid"  style="height: 65px; background-color: #fff; width: 100%; margin-top: -8px;">
                <div class="navbar-header">
                    <img src="/auvietuc/hinhanh/logo/AuVietUc.jpg" width="250px" height="70px"  alt="thuonghieu">
                </div>
                <!-- Hiện nút điều hướng khi chuyển sang thiết bị di động -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: grey;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto" style="margin-left: 50px;">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >Giới thiệu</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tầm Nhìn Và Sứ Mệnh</a>
                                <a class="dropdown-item" href="#">Đội Ngũ Nhân Viên</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >Chương trình đào tạo</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#">Anh Văn Mẫu Giáo</a>
                                <a class="dropdown-item" href="#">Anh Văn Thiếu Nhi</a>
                                <a class="dropdown-item" href="#">Anh Văn Thiếu Niên</a>
                                <a class="dropdown-item" href="#">Anh Văn Giao Tiếp</a>
                                <a class="dropdown-item" href="#">Anh Văn Học Thuật-IELTS</a>
                                <a class="dropdown-item" href="#">Anh Văn Học Thuật-TOEIC</a>
                                <a class="dropdown-item" href="#">Anh Văn Khung Ngoại Ngữ 6 Bậc VSTEP</a>
                                <a class="dropdown-item" href="#">Anh Văn Theo Yêu Cầu</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Tin Tức - Sự Kiện</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Góc Học Tập</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >Góc Học Viên</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Lịch Khai Giảng</a>
                                <a class="dropdown-item" href="#">Lịch Thi</a>
                                <a class="dropdown-item" href="#">Kết Quả Thi </a>
                                <a class="dropdown-item" href="#">Học Viên Ưu Tú</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Cơ Hội Nghề Nghiệp</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Kết thúc thanh tiêu đề -->

    <!-- Đăng kí tư vấn -->
    <div class="container-fluid" style=" background: #A9D0F5; margin-top: 30px; min-height: 550px;">
        <div class="container" >
            <div class="row">
                <h2 class="list-title" style="font-family: Arial; color: #b90c2f; font-weight:bold; margin-top: 30px; margin-bottom: 40px;">ĐĂNG KÍ TƯ VẤN</h2>     
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-6 col-12">
                    <div class="tuvan" style="background-image: url('/auvietuc/hinhanh/dangkituvan/bbb.jpg'); height: 360px;">
                        <form action="http://auvietuc.edu.vn/tuvan" method="post">
                            <input type="hidden" name="_token" value="nPNlDdcLisLMDZlG2Nmj2Vg0aPokSGYCbNqcBiy0">
                            
                            <div class="form-row" style="margin-top: 30px;">
                                <div class="form-group col-md-11 col-lg-5 col-11">
                                    <input type="text" class="form-control border-primary" id="hoten" name="hoten" value="" placeholder="Họ tên*" required="">
                                </div>
                                <div class="form-group col-md-11  col-lg-5 col-11">
                                    <input type="email" class="form-control border-primary" id="email" name="email" value="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6  col-lg-5 col-11">
                                    <input type="text" class="form-control border-primary DatePicker" id="ngaysinh" name="ngaysinh" value="" placeholder="Ngày sinh*" required="">
                                </div>
                                <div class="form-group col-md-5  col-lg-5 col-11">
                                    <input type="text" class="form-control border-primary" id="sdt" name="sdt" value="" placeholder="Điện thoại*" required="">
                                                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-11  col-lg-10 col-11">
                                    <input type="text" class="form-control border-primary" id="diachi" name="diachi" value="" placeholder="Địa chỉ*" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-11  col-lg-10 col-11">
                                    <textarea class="form-control border-primary" id="nhucauhoc" name="nhucauhoc" value=" " placeholder="Thông tin thêm về nhu cầu học...." required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Gửi thông tin</button>
                        </form>
                    </div>   
                </div>

                <div class="col-md-5">
                    <ul id="tabsJustified" class="nav nav-tabs">
                        <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase active">thông báo</a></li>
                        <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">liên hệ</a></li>
                    </ul>
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="home1" class="tab-pane fade active show">
                            <a href="chitiet-thongbao/28" class="list-group-item list-group-item-action"> BACK TO SCHOOL 2019 (<small><b><i>27/08/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/27" class="list-group-item list-group-item-action"> HỘI TRẠI HÈ 2019 (<small><b><i>21/06/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/26" class="list-group-item list-group-item-action"> CHƯƠNG TRÌNH PHỤ ĐẠO ĐẶC BIỆT (<small><b><i>31/05/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/25" class="list-group-item list-group-item-action"> KHAI GIẢNG CÁC LỚP LUYỆN NGỮ PHÁP (<small><b><i>31/05/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/24" class="list-group-item list-group-item-action"> THÔNG BÁO KỲ THI LẤY CHỨNG CHỈ QUỐC TẾ CAMBRIDGE 2019 (<small><b><i>28/05/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/23" class="list-group-item list-group-item-action"> MÙA HÈ SÔI ĐỘNG TẠI EVAS (<small><b><i>16/05/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/22" class="list-group-item list-group-item-action"> CHƯƠNG TRÌNH ƯU ĐÃI MỪNG NĂM MỚI 2019 (<small><b><i>16/02/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/21" class="list-group-item list-group-item-action"> LỊCH NGHỈ TẾT NGUYÊN ĐÁN 2019 (<small><b><i>24/01/2019</i></b></small>)</a>
                            <a href="chitiet-thongbao/20" class="list-group-item list-group-item-action"> Trải Nghiệm Hòn Sơn cùng EVAS (<small><b><i>13/09/2018</i></b></small>)</a>
                        </div>
                        
                        <div id="messages1" class="tab-pane fade lien-he">
                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Trụ Sở Chính
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                        <p><strong class="text-primary">Địa chỉ</strong>: 815-816 Hà Hoàng Hỗ, P.Đông Xuyên, TP.Long Xuyên - AG</p>
                                        <p><strong class="text-primary">Điện thoại liên hệ:</strong>: <a href="tel://02963941780">02963 941 780</a></p>
                                        <p><strong class="text-primary">Email:</strong>: <a href="mailto:auvietuclongxuyenag@gmail.com">auvietuclongxuyenag@gmail.com</a></p>
                                        <p>Thời gian hoạt động từ 7h đến 21h tất cả các ngày trong tuần </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Chi Nhánh
                                            </a>
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p><strong class="text-primary">Địa chỉ</strong>: 79 Trần Hưng Đạo, P.Mỹ Xuyên, TP.Long Xuyên - AG</p>
                                        <p><strong class="text-primary">Điện thoại liên hệ:</strong>: <a href="tel://02963666888">02963 666 888</a></p>
                                        <p><strong class="text-primary">Email:</strong>: <a href="mailto:auvietuccn2@gmail.com">auvietuccn2@gmail.com</a></p>
                                        <p>Thời gian hoạt động từ 7h đến 21h tất cả các ngày trong tuần </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Kết thúc Đăng kí tư vấn -->

    <!-- maps -->
       <div class="container" style="background: MistyRose; margin-top: 50px; min-height: 470px;">

            <div class="row">
                <h3 class="list-title" style="font-family: Arial; color: #b90c2f; font-weight:bold; margin-top: 30px;">TRUNG TÂM ANH NGỮ QUỐC TẾ</h3> 
                <h3 class="list-title" style="font-family: Arial; color: #b90c2f; font-weight:bold; margin-bottom: 30px;">ÂU VIỆT ÚC</h3>    
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="title" style="font-family: Tahoma; color: #b90c2f; font-weight:bold; margin-top: 30px; text-align:center;">HOTLINE</div>
                    <div class="container" style="min-height: 10px; width: 100%;">
                        <hr class="line">        
                    </div> 
                    <div class="hotline">
                        <span class="text" style="font-family: Arial; font-weight:bold;">Trụ Sở: 815-816 Hà Hoàng Hổ, P.Đông Xuyên, TP. Long Xuyên - AG</span><br>
                        <a href="#" class="sdt" style="margin-left: 30px; font-size: 18px;"><i class="fa fa-volume-control-phone" aria-hidden="true">&nbsp;&nbsp; 02963 941 780 </i></a>
                    </div>
                    <br>
                    <div class="hotline">
                        <span class="text" style="font-family: Arial; font-weight:bold;">Chi Nhánh: 79 Trần Hưng Đạo, P.Mỹ Xuyên, TP.Long Xuyên - AG</span><br>
                        <a href="#" class="sdt"  style="margin-left: 30px; font-size: 18px;"><i class="fa fa-volume-control-phone" aria-hidden="true">&nbsp;&nbsp;02963 666 888 </i></a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d981.1370390819458!2d105.43100672916547!3d10.377966499537054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a72e042a9b5e3%3A0x7afa92e33b37bd3b!2zVHJ1bmcgVMOibSBOZ2_huqFpIE5n4buvIFF14buRYyBU4bq_IMOCdSBWaeG7h3Qgw5pj!5e0!3m2!1sfr!2s!4v1516375683520" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
           </div>
       </div>                     
    <!-- end maps -->
    
    <!-- footer -->
    <div class="container-fluid" style="background: rgba(144, 15, 15, 0.8); min-height: 300px; width: 100%; margin-top: 50px;">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12" style="margin-top: 100px; ">
                <img src="/auvietuc/hinhanh/logo/AuVietUc.jpg" width="250px;" height="70px"  alt="thuonghieu">
            </div>

            <div class="col-md-5 col-sm-6 col-12">
                <div class="footer-info" style="margin-left: 10px; margin-top: 50px;">
                    <h6 style="color: #D3B673;">TRUNG TÂM NGOẠI NGỮ QUỐC TẾ ÂU VỆT ÚC</h6><br>
                    <span style="color: white;"><i class="fa fa-map-marker" aria-hidden="true" style="color: #D3B673;"></i> &nbsp;Trụ Sở: 815-816 Hà Hoàng Hổ, P.Đông Xuyên, TP. Long Xuyên - AG</span><br>&nbsp;&nbsp;&nbsp;
                    <span style="color: white;"></i> &nbsp;Chi Nhánh: 79 Trần Hưng Đạo, P.Mỹ Xuyên, TP.Long Xuyên - AG</span><br>
                    <span style="color: white;"> <i class="fa fa-phone" aria-hidden="true" style="color: #D3B673;"></i> &nbsp; 02963 941 780</span><br>
                    <i class="fa fa-envelope" aria-hidden="true" style="color: #D3B673;"></i> <a href="mailto:auvietuclongxuyenag@gmail.com" style="color: white;"> &nbsp; auvietuclongxuyenag@gmail.com</a><br>
                                                                                                <a href="auvietuccn2@gmail.com" style="color: white;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; auvietuccn2@gmail.com</a><br><br>
                    <a href="https://www.facebook.com/ngoainguauvietuc"><i class="fa fa-facebook"  aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true" style="color: #D3B673;"></i></a><br/><br/> 
                    <a href="https://apps.apple.com/vn/app/tocotoco/id1249910346">
						<img src="/tocotoco/hinhanh/appstore/Appstore.jpg" alt="Appstore" width="150px" height="40px">
					</a> &nbsp; &nbsp;
                    <a href="https://play.google.com/store/apps/details?id=com.ipos.tocotoco">
						<img src="/tocotoco/hinhanh/appstore/Googleplay.jpg" alt="Googleplay" width="150px" height="40px">
                    </a>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-12">
                <div class="we" style=" margin-top: 50px;">
                    <h6 style="color: #D3B673;">VỀ CHÚNG TÔI</h6><br>
                    <span style="color: white;">Giới thiệu</span><br>
                    <span style="color: white;">Hợp tác</span><br>
                    <span style="color: white;">Liên hệ</span><br>
                    
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <div class="chinhsach" style="margin-top: 50px;">
                    <h6 style="color: #D3B673;">CHÍNH SÁCH</h6><br>
                    <span style="color: white;">Hướng dẫn thanh toán</span><br>
                    <span style="color: white;">Bảo mật thông tin</span><br>
                    <span style="color: white;">Giải quyết khiếu nại</span><br>
                        
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->


    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/vendor/sweetalert2/sweetalert2.all.min.js"></script>
</body>
</html>