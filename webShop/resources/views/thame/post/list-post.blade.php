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
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
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
            border-left: 1px solid;" 
            href="{{route('ListPost',$value->id)}}">{{$value->categories}}</a>
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
                        <th style="width: 20%">
                            Name admin
                        </th>
                        <th style="width: 30%">
                            Title Post
                        </th>
                        <th style="width: 10%" class="text-center">
                            Image banner
                        </th>
                        <th style="width: 8%" class="text-center">
                            Time
                        </th>
                        <th style="width: 10%" class="text-center">
                            Edit
                        </th>
                        <th style="width: 10%" class="text-center">
                            Delete
                        </th>
                    </tr>
              </thead>
              <tbody>
                @foreach ($list_name_admin as $key=>$value)
                    <tr>
                        <td>
                            {{$key}}
                        </td>
                        <td >
                            {{$value->name_adm}}
                        </td>
                        <td>
                            {{$value->title }}
                        </td>
                        <td class="project_progress text-center" style="color: #36a133;">   
                            <img style="width: 106%;" src="{{asset('view-thame/img/'.$value->img_banner)}}" alt="">
                        </td>
                        
                            <?php
                                $hours = Carbon\Carbon::parse($value->created_at)->diffInHours(now(), false);
                                $minute = Carbon\Carbon::parse($value->created_at)->diffInMinutes(now(), false);
                                $seconds = Carbon\Carbon::parse($value->created_at)->diffInSeconds(now(), false);
                                $days = Carbon\Carbon::parse($value->created_at)->diffInDays(now(), false);
                            ?>
                            @if ($minute < 1 && $seconds < 59)
                                <td class="project_progress text-center" style="color: red;">{{$seconds}} giây trước</td>
                            @endif
            
                            @if ($minute >= 1 && $minute < 60)
                                <td class="project_progress text-center" style="color: red;">{{$minute}} phút trước</td>
                            @endif
            
                            @if ($hours > 1 && $hours < 24)
                                <td class="project_progress text-center" style="color: red;">{{$hours}} giờ trước</td>
                            @endif

                            @if ($hours > 23)
                                <td class="project_progress text-center" style="color: red;">{{$days}} ngày trước</td>
                            @endif
                            <td class="project-state text-center">
                                <a class="btn btn-info btn-sm" href="{{route('EditPost',$value->id)}}">
                                    Edit
                                </a>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-danger btn-sm" href="{{route('DeletePost',$value->id)}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                            @endforeach
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