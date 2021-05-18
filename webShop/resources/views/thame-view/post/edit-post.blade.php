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
                <h1>Tạo bài viết</h1>
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
    <form action="{{route('PostEditPost', $id_post)}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Sửa bài viết</h3>
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
                        <label>Ảnh banner bài viết</label>
                        <input type="file" value="{{$edit_post->img_banner}}" class="custom-file-input" id="customFile" name="image1">
                        <label class="custom-file-label" for="customFile">Ảnh banner bài viết</label>
                    </div>
                </div>
                <div class="form-group  col-lg-12">
                    <label for="inputStatus">Loại sản phẩm</label>
                    <select name="list_product" id="inputStatus" class="form-control custom-select">
                    <option selected disabled></option>
                    @foreach ($list_product as $key=>$value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach 
                    </select>
                </div> 
                </div>
                <div class="form-group">
                    <label for="inputName">Tiêu đề bài viết</label>
                    <input name="title" value="{{$edit_post->title}}" type="text" id="inputName" class="form-control" placeholder="Tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Nội dung bài viết</label>
                    <textarea name="editor1" value="{!!$edit_post->content!!}">{{old('editor1')}}</textarea>
                        <script>
                                CKEDITOR.replace( 'editor1' );
                        </script>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        <div class="row">
            <div class="col-12">
            <a href="{{route('Manager')}}" class="btn btn-secondary">Thoát</a>
            <input type="submit" value="Sửa bài viết" class="btn btn-success float-right">
            </div>
        </div>
        </section>
        <!-- /.content -->
</form>
</div>
@include('layout.footer')
