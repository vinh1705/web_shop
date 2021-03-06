@include('layout.header')
@include('layout.menu')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
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
          @foreach ($categories as $key=>$value )
            <a style="float: left;
            font-size: 15.1px;
            font-weight: 400;
            padding: 0px 18px;
            color: #5a5a5a;
            border-right: 1px solid;
            border-left: 1px solid;" href="{{route('Compony',$value->id)}}">{{$value->categories}}</a>
          @endforeach
          
          {{-- <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span>
          <span class="card-title">Projects</span> --}}
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
                        <th style="width: 40%">
                            Name Product
                        </th>
                        <th style="width: 15%" class="text-center">
                            Price
                        </th>
                        <th style="width: 20%" class="text-center">
                            Status
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
                  @foreach ($products as $key=>$value)
                    <tr>
                        <td>
                            {{$key}}
                        </td>
                        <td >
                            {{$value->name}}
                        </td>
                        <td class="text-center">
                            {{ number_format($value->price) }}    
                        </td>
                            @if ($value->status == 1)
                                <td class="project_progress text-center" style="color: #36a133;">
                                    ???? ho??n t???t
                                </td>
                            @endif
                            @if ($value->status == 0)
                                <td class="project_progress text-center" style="color: red;">
                                    Ch??a ho??n t???t
                                </td>
                            @endif
                        
                        <td class="project-state text-center">
                            <a class="btn btn-info btn-sm" href="{{route('EditProduct',$value->slug)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                        </td>
                        <td class="project-actions text-center">
                            <a class="btn btn-danger btn-sm" href="{{route('DeleteProduct',$value->slug)}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  @endforeach
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