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
            border-left: 1px solid;" 
            href="{{route('ListCustomer',$value->id)}}">{{$value->categories}}</a>
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
                        <th style="width: 10%">
                            id Order
                        </th>
                        <th style="width: 20%">
                            Name member
                        </th>
                        <th style="width: 15%" class="text-center">
                            Status
                        </th>
                        <th style="width: 10%" class="text-center">
                            Create Day
                        </th>
                        <th style="width: 10%" class="text-center">
                            Delete
                        </th>
                        <th style="width: 10%" class="text-center">
                            Information Data
                        </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($information_cart as $key=>$value)
                    <tr>
                        <td>
                            {{$key}}
                        </td>
                        <td >
                            {{$value->id_cart}}
                        </td>
                        {{-- @foreach ($information_user as $key=>$value) --}}
                          <td>
                              {{$value->phone }}
                          </td>
                        {{-- @endforeach --}}
                        @if ($value->status == 0)
                            <td class="project_progress text-center" style="color: #36a133;">
                                Đang giao hàng
                            </td>
                        @endif

                        @if ($value->status == 1)
                            <td class="project_progress text-center" style="color: #0400fc;">
                                Đang sắp xếp hàng
                            </td>
                        @endif

                        @if ($value->status == 2)
                            <td class="project_progress text-center" style="color: #36a133;">
                                Đã giao
                            </td>
                        @endif

                        @if ($value->status == 3)
                            <td class="project_progress text-center" style="color: #c7000a;">
                                Hủy đơn
                            </td>
                        @endif

                        @if ($value->status == 4)
                            <td class="project_progress text-center" style="color: #19ff04;">
                                Giao hàng thành công
                            </td>
                        @endif
                            <?php
                                $hours = Carbon\Carbon::parse($value->created_at)->diffInHours(now(), false);
                                $minute = Carbon\Carbon::parse($value->created_at)->diffInMinutes(now(), false);
                                $seconds = Carbon\Carbon::parse($value->created_at)->diffInSeconds(now(), false);
                                $days = Carbon\Carbon::parse($value->created_at)->diffInDays(now(), false);
                            ?>
                            @if ($seconds < 59)
                                <td class="project_progress text-center" style="color: red;">{{$seconds}} giây trước</td>
                            @endif
            
                            @if ($minute > 0 && $minute < 60)
                                <td class="project_progress text-center" style="color: red;">{{$minute}} phút trước</td>
                            @endif
            
                            @if ($hours > 0 && $hours < 24)
                                <td class="project_progress text-center" style="color: red;">{{$hours}} giờ trước</td>
                            @endif

                            @if ($days > 0)
                                <td class="project_progress text-center" style="color: red;">{{$days}} ngày trước</td>
                            @endif
                            <td class="project-actions text-center">
                                <a class="btn btn-danger btn-sm" href="{{route('DeleteListCart',$value->id)}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                            <td class="project-actions text-center">
                              <a class="btn btn-info btn-sm" href="{{route('SearchCart')}}">
                                <i class="fas fa-pencil-alt">
                                  </i>
                                  Thông tin thêm
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