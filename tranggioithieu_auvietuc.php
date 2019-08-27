<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ Âu Việt Úc</title>
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="public/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
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
        
        a.btnAll{ 
            width: 150px;
            line-height: 35px;
            text-align: center;
            margin: 20px auto;
            border: 1px solid #842020;
            color: #fff;
            background: #842020;
            text-decoration: none;
        }
        .row a.btnAll:hover{ 
            background: white;
            color: #842020;
        }
        hr.line{
            height: 0;
            border: 0;
            background: transparent;
            border-bottom: 1px solid #842020;
            margin: 0;
            padding: 0;
            font-size: 0;
        }
       

    </style>
    
</head>
<body>
    <!-- thannh tiêu đề -->
    <div id="top-header" class="top-header sticky-top">
        <div class="header-top" >
            <div class="container-fluid" style="background: rgba(144, 15, 15, 0.8); height: 40px; line-height: 40px; color: #ECE0E0;">
                <div class="row">
                    <div class="col-md-7">
    
                    </div>
                    <div class="col-md-5"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; Trụ Sở: (02963) 941 780&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; Chi Nhánh: (02963) 666 888
                    </div>
                </div>
            </div>
        </div>

        <nav id="navbar" class="navbar navbar-expand-lg ">
            <div class="container-fluid"  style="height: 65px; background-color: #fff; width: 100%; margin-top: -8px;">
                <div class="navbar-header">
                    <img src="/auvietuc/hinhanh/logo/AuVietUc.jpg" width="250px" height="70px"  alt="thuonghieu">
                </div>

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
        </nav>
    </div>
    <!-- Kết thúc thanh tiêu đề -->


    <!-- slide-->
    <div id="slide" class="carousel slide" data-ride="carousel">
       
       <ol class="carousel-indicators">
           <li data-target="#slide" data-slide-to="0" class="active"></li>
           <li data-target="#slide" data-slide-to="1"></li>
           <li data-target="#slide" data-slide-to="2"></li>
       </ol>

       <!--Đưa hình vào băng chuyền, căn chỉnh hình bằng nhau-->
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="/auvietuc/hinhanh/banner/banner1.jpg" width="100%" height="600"  alt="banner1">
           </div>
           <div class="carousel-item">
               <img src="/auvietuc/hinhanh/banner/banner2.jpg" width="100%" height="600"  alt="banner2">
           </div>
           <div class="carousel-item">
               <img src="/auvietuc/hinhanh/banner/banner3.jpg" width="100%" height="600"  alt="banner3">
           </div>
       </div>

       <!-- Mũi tên trái phải -->
       <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
    </div>
    <!-- end slide -->

    <!-- khung khoa on luyen -->
        <div class="container" style="min-height: 300px; width: 100%; margin-top: 50px;">
            <div class="row" style="margin-top: 30px;">
                <h2 class="list-title" style="font-family: Arial; color: #842020; ; font-weight:bold; margin-bottom: 40px;">CÁC KHÓA ÔN LUYỆN Ở EVAS</h2>
            </div>

            <div class="course">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/auvietuc/hinhanh/chungchi/ielts.jpg" class="card-img" alt="ielts">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ÔN LUYỆN IELTS</h5>
                                        <p class="card-text" style="height: 80px;">Bạn mong muốn được du học tại các trường danh tiếng? Bạn muốn xin học bổng để đi du học?...</p>
                                        <a class="card-text" href="#"><small>>>>Xem thêm</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/auvietuc/hinhanh/chungchi/toeic.jpg" class="card-img" alt="toeic">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ÔN LUYỆN TOIEC</h5>
                                        <p class="card-text"  style="height: 80px;">Bạn đang tìm môi trường làm việc năng động, chuyên nghiệp với mức thu nhập cao?</p>
                                        <a class="card-text" href="#"><small>>>>Xem thêm</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/auvietuc/hinhanh/chungchi/toefl.jpg" class="card-img" alt="toefl">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ÔN LUYỆN TOEFL</h5>
                                        <p class="card-text"  style="height: 80px;">Bạn đang tìm môi trường làm việc năng động, chuyên nghiệp với mức thu nhập cao?</p>
                                        <a class="card-text" href="#"><small>>>>Xem thêm</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/auvietuc/hinhanh/chungchi/cambridge.jpg" class="card-img" alt="cambridge">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ÔN LUYỆN CAMBRIDGE</h5>
                                        <p class="card-text"  style="height: 80px;">Tham gia kỳ thi tiếng anh Quốc tế  do trường Đại học Cambridge cấp có giá trị vĩnh viễn trên toàn cầu</p>
                                        <a class="card-text" href="#"><small>>>>Xem thêm</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/auvietuc/hinhanh/chungchi/vstep.jpg" class="card-img" alt="vstep">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ÔN LUYỆN VSTEP</h5>
                                        <p class="card-text"  style="height: 80px;">Khóa ôn tập đặc biệt dành riêng cho học viên có nhu cầu lấy các chứng chỉ A2, B1, B2, C1.</p>
                                        <a class="card-text" href="#"><small>>>>Xem thêm</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>           
    <!-- end khung khoa on luyen -->

   <!-- ds khoa hoc -->
   <div class="container-fuild" style="height: 750px; background: #efe8df; margin-top: 30px;">
        <div class="row">
            <h2 class="list-title" style="font-family: Arial; color: #b90c2f; ; font-weight:bold; margin-top: 30px;">CÁC KHÓA HỌC CHÍNH</h2>
            <h6 class="list-title" style="font-family: Tahoma; ">Mang đến niềm tin và chất lượng dạy tốt nhất cho các học viên.</h6><br>
            
        </div>

        <div class="product-group-1" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img src="/auvietuc/hinhanh/khoahocchinh/hinh1.jpg" class="card-img-top" alt="khoahoc1">
                        <div class="card-body" style="height: 300px;">
                            <h5 class="card-title" style="text-align:center; color: #842020;">Anh văn mẫu giáo </h5>
                            <h6 class="tuoi" style="text-align:center; color: #842020;">(Twinkle Stars)</h6><br>
                            <span class="mota">Tại sao phải cho trẻ học tiếng Anh sớm?  Làm thế nào để trẻ có thể tiếp thu nhanh với một ngoại ngữ khác?...</span><br><br>
                            <center><a href="#" class="btn btn-outline-primary" >XEM THÊM</a></center>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img src="/auvietuc/hinhanh/khoahocchinh/hinh2.jpg" class="card-img-top" alt="khoahoc2">
                        <div class="card-body" style="height: 300px;">
                            <h5 class="card-title" style="text-align:center; color: #842020;" >Anh văn thiếu nhi</h5>
                            <h6 class="tuoi" style="text-align:center; color: #842020;">(Starters, movers, flyers)</h6><br>
                            <span class="mota">Xây dựng nền tảng Tiếng anh vững chắc ngay từ đầu, cho con tự tin tham gia các kỳ thi lấy chứng chỉ Quốc tế...</span><br><br>
                            <center><a href="#" class="btn btn-outline-primary">XEM THÊM</a></center>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img src="/auvietuc/hinhanh/khoahocchinh/hinh3.jpg" class="card-img-top" alt="khoahoc3">
                        <div class="card-body" style="height: 300px;">
                            <h5 class="card-title" style="text-align:center; color: #842020;" >Anh văn thiếu niên</h5>
                            <h6 class="tuoi" style="text-align:center; color: #842020;">(KET, PET)</h6><br>
                            <span class="mota">Chương trình được thiết đặc biệt giúp các em nắm chắc bốn kỹ năng để làm hành trang cho các em đi du học nước ngoài? </span><br><br>
                            <center><a href="#" class="btn btn-outline-primary" style="margin-bottom: 10px;">XEM THÊM</a></center>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card">
                        <img src="/auvietuc/hinhanh/khoahocchinh/hinh4.jpg" class="card-img-top" alt="khoahoc4">
                        <div class="card-body" style="height: 300px;">
                            <h5 class="card-title" style="text-align:center; color: #842020;" >Anh văn giao tiếp</h5>
                            <h6 class="tuoi" style="text-align:center; color: #842020;"><br></h6><br>
                            <span class="mota">Bạn muốn có công việc tốt, thu nhập cao hoặc kết nối với nhiều bạn bè trên toàn thế giới? Để tiếng anh không còn là nỗi sợ...</span><br><br>
                           <center><a href="#" class="btn btn-outline-primary" >XEM THÊM</a></center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <a href="#" class="btnAll">XEM TẤT CẢ</a>
            </div>
        </div> 
    </div>
<!-- end ds khoa hoc -->

<!-- line -->
    <div class="container" style="min-height: 10px; width: 100%; margin-top: 40px;">
                <hr class="line">        
    </div>  
    <!-- end line -->

<!-- co so vat chat -->
    <div class="container">
        <div class="row"  style="margin-top: 30px;">
            <h2 class="list-title" style="font-family: Arial; color: #842020; ; font-weight:bold ">CƠ SỞ VẬT CHẤT</h2>
        </div>
        <div class="row"  style="margin-top: 30px;">
            <div class="col-md-8" style="height: 600px; width: 100%;" >
                <img src="/auvietuc/hinhanh/cosovatchat/1.jpg" class="card-img-top" alt="1">
            </div>
            <div class="col-md-4" style="height: 300px; width: 100%;">
                <img src="/auvietuc/hinhanh/cosovatchat/2.jpg" class="card-img-top" alt="2">
            </div>
            <div class="col-md-4" style="height: 200px;  width: 100%; margin-top: -30px;" >
                <img src="/auvietuc/hinhanh/cosovatchat/3.jpg" class="card-img-top" alt="3">
            </div>
            <div class="col-md-4" style="height: 100px;  width: 100%; margin-top: -30px;" >
                <img src="/auvietuc/hinhanh/cosovatchat/4.jpg" class="card-img-top" alt="4">
            </div>
            <div class="col-md-4" style="height: 200px;  width: 100%; margin-top: -30px;" >
                <img src="/auvietuc/hinhanh/cosovatchat/5.jpg" class="card-img-top" alt="5">
            </div>

        </div>
    </div>
<!-- end co so vat chat -->

<!-- footer -->
    <div class="container-fluid" style="background: rgba(144, 15, 15, 0.8); min-height: 300px; width: 100%; margin-top: 50px;">
        <div class="row">
            <div class="col-md-3">
               
            </div>

            <div class="col-md-5">
                <div class="footer-info" style="margin-left: 20px; margin-top: 50px;">
                    <h6 style="color: #D3B673;">TRUNG TÂM NGOẠI NGỮ QUỐC TẾ ÂU VỆT ÚC</h6><br>
                    <span style="color: white;"><i class="fa fa-map-marker" aria-hidden="true" style="color: #D3B673;"></i> &nbsp;Trụ Sở: 815-816 Hà Hoàng Hổ, P.Đông Xuyên, TP. Long Xuyên - AG</span><br>&nbsp;&nbsp;&nbsp;
                    <span style="color: white;"></i> &nbsp;Chi Nhánh: 79 Trần Hưng Đạo, P.Mỹ Xuyên, TP.Long Xuyên - AG</span><br>
                    <span style="color: white;"> <i class="fa fa-phone" aria-hidden="true" style="color: #D3B673;"></i> &nbsp; 02963 941 780</span><br>
                    <i class="fa fa-envelope" aria-hidden="true" style="color: #D3B673;"></i> <a href="mailto:auvietuclongxuyenag@gmail.com" style="color: white;"> &nbsp; auvietuclongxuyenag@gmail.com</a><br>
                                                                                                <a href="auvietuccn2@gmail.com" style="color: white;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; auvietuccn2@gmail.com</a><br>
                    <a href="https://www.facebook.com/ngoainguauvietuc"><i class="fa fa-facebook"  aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true" style="color: #D3B673;"></i></a><br><br>
                    <a href="https://apps.apple.com/vn/app/tocotoco/id1249910346">
						<img src="/tocotoco/hinhanh/appstore/Appstore.jpg" alt="Appstore" width="150px" height="40px">
					</a> &nbsp; &nbsp;
                    <a href="https://play.google.com/store/apps/details?id=com.ipos.tocotoco">
						<img src="/tocotoco/hinhanh/appstore/Googleplay.jpg" alt="Googleplay" width="150px" height="40px">
					</a>
                    
                </div>
            </div>

            <div class="col-md-2">
                <div class="we" style=" margin-top: 50px;">
                    <h6 style="color: #D3B673;">VỀ CHÚNG TÔI</h6><br>
                    <span style="color: white;">Giới thiệu</span><br>
                    <span style="color: white;">Hợp tác</span><br>
                    <span style="color: white;">Liên hệ</span><br>
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="chinhsach" style="margin-top: 50px;">
                    <h6 style="color: #D3B673;">CHÍNH SÁCH</h6><br>
                    <span style="color: white;">Hướng dẫn thanh toán</span><br>
                    <span style="color: white;">Bảo mật thông tin</span><br>
                    <span style="color: white;">Giải quyết khiếu nại</span><br>
                        
                </div>
            </div>
        </div>
    </div>
<!-- footer -->


    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/vendor/sweetalert2/sweetalert2.all.min.js"></script>
</body>
</html>