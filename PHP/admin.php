<?php
$severname = "localhost";
$username = "root";
$password = "01203879524";
$database = "officerent";

$ketnoi = mysqli_connect($severname, $username, $password, $database);
if(!$ketnoi){
    echo("Kết nối thành công");
}else{
    echo("kết nối không thành công");
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contact Us</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="container"> 
        <div class="row"> 
         <h1 class="text-center">QUẢN LÝ VĂN PHÒNG CHO THUÊ</h1> 
         <div class="col-md-10 col-md-offset-1"> 
          <div class="panel panel-default panel-table"> 
           <div class="panel-heading"> 
            <div class="row"> 
             <div class="col col-xs-6"> 
              <h3 class="panel-title">Danh sách văn phòng tải lên</h3> 
             </div> 
             <div class="col col-xs-6 text-right"> 
              <button type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</button> 
             </div> 
            </div> 
           </div> 
           <div class="panel-body"> 
            <table class="table table-striped table-bordered table-list"> 
             <thead> 
              <tr> 
               <th><em class="fa fa-cog"></em>
               </th> 
               <th class="hidden-xs">Thông tin</th> 
               <th>Hình ảnh</th>
               <th>Liên hệ</th> 
               <th>Nội dung</th> 
               <th>Giá cả</th> 
              </tr> 
             </thead> 
             <tbody><tr> 
              <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
              </td> 
              <td class="hidden-xs">Nhà quận 1, mặt tiền thành phố HCM</td> 
              <td></td>
              <td>0707595822</td> 
              <td>Cho thuê nhà nguyên căn 100m2...</td> 
              <td>2 triệu/tháng</td> 
             </tr> 
             <tr> 
              <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
              </td> 
              <td class="hidden-xs">Nhà quận 1, mặt tiền thành phố HCM</td> 
              <td></td>
              <td>0707595822</td> 
              <td>Cho thuê nhà nguyên căn 100m2...</td> 
              <td>2 triệu/tháng</td>
             </tr> 
             <tr> 
              <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
              </td> 
              <td class="hidden-xs">Nhà quận 1, mặt tiền thành phố HCM</td> 
              <td></td>
              <td>0707595822</td> 
              <td>Cho thuê nhà nguyên căn 100m2...</td> 
              <td>2 triệu/tháng</td>
             </tr> 
             <tr> 
              <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
              </td> 
              <td class="hidden-xs">Nhà quận 1, mặt tiền thành phố HCM</td> 
              <td></td>
              <td>0707595822</td> 
              <td>Cho thuê nhà nguyên căn 100m2...</td> 
              <td>2 triệu/tháng</td>
             </tr> 
            </tbody></table> 
           </div> 
           <div class="panel-footer"> 
            <div class="row"> 
             <div class="col col-xs-4">Trang 1 của 5 </div> 
             <div class="col col-xs-8"> 
              <ul class="pagination hidden-xs pull-right"> 
               <li><a href="#">1</a>
               </li> 
               <li><a href="#">2</a>
               </li> 
               <li><a href="#">3</a>
               </li> 
               <li><a href="#">4</a>
               </li> 
               <li><a href="#">5</a>
               </li> 
              </ul> 
              <ul class="pagination visible-xs pull-right"> 
               <li><a href="#">«</a>
               </li> 
               <li><a href="#">»</a>
               </li> 
              </ul> 
             </div> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div>
       </div>
       <script src="js/jquery-1.11.1.min.js"></script>
  </body>
</html>