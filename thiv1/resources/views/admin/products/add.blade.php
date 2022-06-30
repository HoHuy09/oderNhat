<!DOCTYPE html>
<html lang="en">

<head>
  <title>Thêm sản phẩm | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/main2.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script>
    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function(e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      } else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function() {
      $(".Choicefile").bind('click', function() {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function() {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function() {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('storage/') }}/{{Auth::user()->avatar}}" width="50px" alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>{{Auth::user()->name}}</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="#"><i class='app-menu__icon bx bx-cart-alt'></i><span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item " href="{{route('doashboard.index')}}"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="{{route('user.index')}}"><i class='app-menu__icon bx bx-id-card'></i><span class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item" href="{{route('client.index')}}"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item active" href="{{route('product.index')}}"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a></li>
      <li><a class="app-menu__item" href="{{route('categorys.index')}}"><i class="fas fa-water app-menu__icon"></i><span class="app-menu__label">Danh mục sản phẩm </span></a></li>
      <li><a class="app-menu__item" href="{{route('slideshow.index')}}"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý Slideshow</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-run'></i><span class="app-menu__label">Quản lý nội bộ</span></a></li>
      <li><a class="app-menu__item" href="{{route('post.index')}}"><i class="fas fa-swatchbook app-menu__icon"></i><span class="app-menu__label">Quản lý Posts</span></a></li>
      <li><a class="app-menu__item" href="{{route('listpost.index')}}"><i class="fab fa-blackberry app-menu__icon"></i><span class="app-menu__label">Danh mục Post</span></a></li>
      <li><a class="app-menu__item " href="{{route('role.index')}}"><i class="fab fa-500px app-menu__icon"></i><span class="app-menu__label">Quản lý quyền</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-dollar'></i><span class="app-menu__label">Bảng kê lương</span></a></li>
      <li><a class="app-menu__item" href="{{route('statistical.index')}}"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-calendar-check'></i><span class="app-menu__label">Lịch công tác </span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-folder-plus"></i> Thêm nhà cung cấp</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i class="fas fa-folder-plus"></i> Thêm danh mục</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtinhtrang"><i class="fas fa-folder-plus"></i> Thêm tình trạng</a>
              </div>
            </div>
            <!-- add -->
            <form class="row" action="" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name">
              </div>


              <div class="form-group  col-md-3">
                <label class="control-label">Số lượng</label>
                <input class="form-control" type="number" name="quantity">
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">link sản phẩm</label>
                <input class="form-control" type="text" name="link_sp">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="">Sản phẩm Nổi Bật</label>
                <select name="status" class="form-control">
                  <option>-- Chọn tình trạng --</option>
                  <option value="1">Hot</option>
                  <option value="0">Bình thường</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control" name="cate_id">
                  <option>-- Chọn danh mục --</option>
                  @foreach($category as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input class="form-control" name="price" type="text">
              </div>
              <!-- \image -->
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="image" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>

              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" id="mota" name="description"></textarea>
                <script>
                  CKEDITOR.replace('mota');
                </script>
              </div>
              <button class="btn btn-save" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" data-dismiss="modal" href="{{route('product.index')}}">Hủy bỏ</a>
            </form>
          </div>
        </div>
  </main>


  <!--
  MODAL CHỨC VỤ 
-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới nhà cung cấp</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên chức vụ mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->



  <!--
  MODAL DANH MỤC
-->
  <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="" method="post">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="form-group  col-md-12">
                <span class="thong-tin-thanh-toan">
                  <h5>Thêm mới danh mục </h5>
                </span>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nhập tên danh mục mới</label>
                <input class="form-control" type="text" name="name" required>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mời bạn chọn ảnh</label>
                <input type="file" name="image" class="form-control" required>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Danh mục sản phẩm hiện đang có</label>
                <ul style="padding-left: 20px;">
                  @foreach ($category as $item)
                  <li>{{$item->name}}</li>
                  @endforeach
                </ul>
              </div>
            </div>
            <BR>
            <button class="btn btn-save" type="submit">Lưu lại</button>
            <a class="btn btn-cancel" data-dismiss="modal" href="{{route('product.index')}}">Hủy bỏ</a>
            <BR>
          </div>
        </form>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->




  <!--
  MODAL TÌNH TRẠNG
-->
  <div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới tình trạng</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tình trạng mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->



  <script src="{{ asset('js') }}/jquery-3.2.1.min.js"></script>
  <script src="{{ asset('js') }}/popper.min.js"></script>
  <script src="{{ asset('js') }}/bootstrap.min.js"></script>
  <script src="{{ asset('js') }}/main.js"></script>
  <script src="{{ asset('js') }}/plugins/pace.min.js"></script>
  <script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function() {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>