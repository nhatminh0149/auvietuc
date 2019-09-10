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

    </style>
    
</head>
<body>
    <!-- thannh tiêu đề -->
    <div id="top-header" class="top-header sticky-top">
        <div class="header-top" >
            <div class="container-fluid" style="background: rgba(114, 15, 15, 0.8); height: 40px; line-height: 40px; color: #ECE0E0;">
                <div class="row">
                    <div class="col-md-6">
    
                    </div>
                    <div class="col-md-6"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; Trụ Sở: (02963) 941 780&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp; Chi Nhánh: (02963) 666 888
                    </div>
                </div>
            </div>
        </div>

        <nav id="navbar" class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid"  style="height: 60px; line-height: 40px;">
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
               <img src="/tocotoco/hinhanh/slide_anh/qqq.jpg" width="100%" height="600"  alt="banner2">
           </div>
           <div class="carousel-item">
               <img src="/tocotoco/hinhanh/slide_anh/Tocotoco.jpg" width="100%" height="600"  alt="banner3">
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

    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/vendor/sweetalert2/sweetalert2.all.min.js"></script>
</body>
</html>