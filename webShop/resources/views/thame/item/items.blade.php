@include('layout.header')
@include('layout.menu')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2">
            <h1 style="font-size: 24px;font-weight: 500;">Hãng sản xuất</h1>
          </div>
          <div class="col-sm-6 d-flex">
              <form action="{{route('PostCategories',$id_categories)}}" style="margin: auto;" method="post">
                @csrf
                  <input type="text" name="addCategories" placeholder="Hãng sản xuất">
                  <input type="text" name="logo" placeholder="Logo hãng sản xuất">
                  <input type="submit" value="Thêm">
              </form>
            
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          @foreach ($categories as$key=>$value )
            <a style="float: left;
            font-size: 15.1px;
            font-weight: 400;
            padding: 0px 18px;
            color: #5a5a5a;
            border-right: 1px solid;
            border-left: 1px solid;" 
            href="{{route('Categories',$value->id)}}">{{$value->categories}}</a>
          @endforeach
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                    <tr>
                        <th style="width: 1%" >
                            #
                        </th>
                        <th style="width: 16%">
                            Company
                        </th>
                        <th style="width: 16%">
                          Image
                        </th>
                        <th style="width: 20%">
                            Product type
                        </th>
                        <th style="width: 20%">
                            URL Image
                        </th>
                        <th style="width: 12%" class="text-center">
                            Edit
                        </th>
                        <th style="width: 12%" class="text-center">
                            Delete
                        </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($company as $key=>$value)
                    <tr>
                        <td>
                            {{$key}}
                        </td>
                        {{-- <td>
                          <img src="{{asset('view-thame/img/'$value->icon)}}" alt="">
                      </td> --}}
                        <td >
                            {{$value->company}}
                        </td>
                        <td >
                          <img src="{{$value->logo}}" alt="">
                        </td>
                        <form action="{{route('EditCompany',$value->id)}}" method="post">
                            @csrf
                            <td>
                                <input type="text" name="company"
                                style="width: 100%;
                                border: 1px solid #dcdcdc;
                                padding: 7px;
                                border-radius: 7px;
                            " value="{{$value->company}}">
                            </td>
                            <td>
                              <input type="text" name="editlogo"
                              style="width: 100%;
                              border: 1px solid #dcdcdc;
                              padding: 7px;
                              border-radius: 7px;
                            " value="{{$value->logo}}">
                          </td>
                            <td class="project-state text-center">
                                <input type="submit" value="Edit" class="btn btn-info btn-sm">
                            </td>
                        </form>
                        <td class="project-actions text-center">
                            <a class="btn btn-danger btn-sm" href="{{route('DeleteItem',$value->id)}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  @endforeach
                  <tr>
                    <td>
                        Danh mục
                    </td>
                    <td>{{$categories_first->categories}}</td>
                    <form action="{{route('EditCategories',$categories_first->id)}}" method="post">
                        @csrf
                        <td>
                            <input type="text" name="items"
                            style="width: 100%;
                            border: 1px solid #dcdcdc;
                            padding: 7px;
                            border-radius: 7px;
                        " value="{{$categories_first->categories}}">
                        </td>
                        <td class="project-state text-center">
                            <input type="submit" value="Edit" class="btn btn-info btn-sm">
                        </td>
                    </form>
                    <td class="project-actions text-center">
                        <a class="btn btn-danger btn-sm" href="{{route('DeleteCategories',$categories_first->id)}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
              </tbody>
          </table>
          @include('thame.errors.error')
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('layout.footer')