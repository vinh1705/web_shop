    @include('layout.header')
    @include('layout.menu')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header" name="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Project Add</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>
        <form action="{{route('PostAddProduct',$id_categories)}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <!-- Main content -->
            <section class="content">
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Thêm sản phẩm</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    @include('thame.errors.error')
                    <div class="card-body">
                    <div class="row justify-content-between col-lg-12">
                        <div class="custom-file col-lg-12" style="margin: 5px 0px;">
                            <label>Ảnh banner</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image1">
                            <label class="custom-file-label" for="customFile">Ảnh banner</label>
                        </div>
                        <br>
                        <div class="custom-file col-lg-2" style="margin: 5px 0px;">
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image2" for="customFile">Ảnh</label>
                        </div>
                        <br>
                        <div class="custom-file col-lg-2" style="margin: 5px 0px;">
                            <label>Ảnh</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image3" for="customFile">Ảnh</label>
                        </div>
                        <br>
                        <div class="custom-file col-lg-2" style="margin: 5px 0px;">
                            <label>Ảnh</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image4" for="customFile">Ảnh</label>
                        </div>
                        <br>
                        <div class="custom-file col-lg-2" style="margin: 5px 0px;">
                            <label>Ảnh</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image5" for="customFile">Ảnh</label>
                        </div>
                    </div>
                    <div class="form-group  col-lg-12">
                        <label for="inputStatus">Hãng sản xuất</label>
                        <select name="company" id="inputStatus" class="form-control custom-select">
                        <option selected disabled></option>
                        @foreach ($company as $key=>$value)
                            <option value="{{$value->id}}">{{$value->company}}</option>
                        @endforeach 
                        </select>
                    </div> 
                    </div>
                    <div class="form-group">
                        <label for="inputName">Tên sản phẩm</label>
                        <input name="name" value="{{old('name')}}" type="text" id="inputName" class="form-control" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Mô tả sản phẩm</label>
                        <textarea name="editor1" value="">{{old('editor1')}}</textarea>
                            <script>
                                    CKEDITOR.replace( 'editor1' );
                            </script>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Trạng thái</label>
                        <select name="status" id="inputStatus" class="form-control custom-select">
                        <option selected disabled></option>
                        <option value="1">Đã hoàn tất</option>
                        <option value="0">Chưa hoàn tất</option>
                        <option value="0">Đang chỉnh sửa</option>
                        <option value="0">Đặt lịch</option>
                        </select>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Công nghệ màn hình</label>
                            <input name="technology_screen" value="{{old('technology_screen')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Độ phân giải màn hình</label>
                            <input name="resolution" value="{{old('resolution')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Độ rộng màng hình</label>
                            <input name="wide_screen" value="{{old('wide_screen')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Chip</label>
                            <input name="chip" value="{{old('chip')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Mạng</label>
                            <input name="network" value="{{old('network')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Sim</label>
                            <input name="sim" value="{{old('sim')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Trọng lượng</label>
                            <input name="weight" value="{{old('weight')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Pin</label>
                            <input name="pin" value="{{old('pin')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Giá tền gốc</label>
                            <input name="price" value="{{old('price')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Giảm giá %</label>
                            <input name="percent" value="{{old('percent')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Giá tền sau khi khuyến mãi</label>
                            <input name="price_sale" value="{{old('price_sale')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Dung lượng</label>
                            <input name="gb" value="{{old('gb')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Ram</label>
                            <input name="ram" value="{{old('ram')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Tiền</label>
                            <input name="gb_ram_price" value="{{old('gb_ram_price')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div><hr>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Màu sắc</label>
                            <input name="color" value="{{old('color')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Tiền</label>
                            <input name="color_price" value="{{old('color_price')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Khuyến mãi</label>
                            <input name="sale" value="{{old('sale')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Bảo hành </label>
                            <input name="bao_hanh" value="{{old('bao_hanh')}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            <div class="row">
                <div class="col-12">
                <a href="{{route('Manager')}}" class="btn btn-secondary">Thoát</a>
                <input type="submit" value="Thêm sản phẩm" class="btn btn-success float-right">
                </div>
            </div>
            </section>
            <!-- /.content -->
    </form>
    </div>
@include('layout.footer')
