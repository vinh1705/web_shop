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
                    <h1>Project Add</h1>
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
            {{-- {{dd($editProduct->id) --}}
        <form action="{{route('PostEditProduct',['slug' => $editProduct->slug, 'id' => $editProduct->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Main content -->
            <section class="content">
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa sản phẩm</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    @include('thame.errors.error')
                    <div class="row justify-content-between">
                        <div class="custom-file mb-3">
                            <label>Ảnh banner</label>
                            <input type="file" value="{{$editProduct->img_banner}}" class="custom-file-input" id="customFile" name="image1">
                            <label class="custom-file-label" for="customFile">Ảnh banner</label>
                        </div>
                        <br>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image2" for="customFile">Ảnh sản phẩm</label>
                        </div>
                        <br>
                        <div class="custom-file mb-3">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image3" for="customFile">Ảnh sản phẩm</label>
                        </div>
                        <br>
                        <div class="custom-file mb-3">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image4" for="customFile">Ảnh sản phẩm</label>
                        </div>
                        <br>
                        <div class="custom-file mb-3">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" class="custom-file-input" id="customFile" name="image[]">
                            <label class="custom-file-label image5" for="customFile">Ảnh sản phẩm</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Tên sản phẩm</label>
                        <input name="name" value="{{$editProduct->name}}" type="text" id="inputName" class="form-control" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Mô tả sản phẩm</label>
                        <textarea name="editor1" value="">{!! $editProduct->post !!}</textarea>
                            <script>
                                    CKEDITOR.replace( 'editor1' );
                            </script>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Trạng thái</label>
                        <select name="status" id="inputStatus" class="form-control custom-select">
                        @if ($editProduct->status == 1)
                            <option value="1">Đã hoàn tất</option>
                            <option value="0">Chưa hoàn tất</option>
                        @endif
                        @if ($editProduct->status == 0)
                            <option value="0">Chưa hoàn tất</option>
                            <option value="1">Đã hoàn tất</option>
                        @endif
                        <option value="0">Đang chỉnh sửa</option>
                        <option value="0">Đặt lịch</option>
                        </select>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Công nghệ màn hình</label>
                            <input name="technology_screen" value="{{$information_product_edit->technology_screen}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Độ phân giải màn hình</label>
                            <input name="resolution" value="{{$information_product_edit->resolution}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Độ rộng màng hình</label>
                            <input name="wide_screen" value="{{$information_product_edit->wide_screen}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Chip</label>
                            <input name="chip" value="{{$information_product_edit->chip}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Mạng</label>
                            <input name="network" value="{{$information_product_edit->network}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Sim</label>
                            <input name="sim" value="{{$information_product_edit->sim}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Trọng lượng</label>
                            <input name="weight" value="{{$information_product_edit->weight}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Pin</label>
                            <input name="pin" value="{{$information_product_edit->pin}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Giá tền gốc</label>
                            <input name="price" value="{{$editProduct->price}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Giảm giá %</label>
                            <input name="percent" value="{{$editProduct->percent}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Giá tền sau khi khuyến mãi</label>
                            <input name="price_sale" value="{{$editProduct->price_sale}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Dung lượng</label>
                            <input name="gb" value="{{$gb_ram_product_edit->gb}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Ram</label>
                            <input name="ram" value="{{$gb_ram_product_edit->ram}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="inputClientCompany">Tiền</label>
                            <input name="gb_ram_price" value="{{$gb_ram_product_edit->price}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div><hr>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Màu sắc</label>
                            <input name="color" value="{{$color_product_edit->color_product}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Tiền</label>
                            <input name="color_price" value="{{$color_product_edit->price}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Khuyến mãi</label>
                            <input name="sale" value="{{$sale->sale}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputClientCompany">Bảo hành </label>
                            <input name="bao_hanh" value="{{$sale->bao_hanh}}" type="text" id="inputClientCompany" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            <div class="row">
                <div class="col-12">
                <a href="{{route('Manager')" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                </div>
            </div>
            </section>
            <!-- /.content -->
    </form>
    </div>
    <!-- /.content-wrapper -->

    @include('layout.footer')
