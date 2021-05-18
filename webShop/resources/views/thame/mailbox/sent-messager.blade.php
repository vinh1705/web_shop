    @include('layout.header')
    @include('layout.menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Inbox</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Inbox</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            @include('layout.mail')
            <!-- /.card -->
            <!-- /.col -->
            <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title">Inbox</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search Mail">
                    <div class="input-group-append">
                        <div class="btn btn-primary">
                        <i class="fas fa-search"></i>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-reply"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-share"></i>
                    </button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-sync-alt"></i>
                    </button>
                    <div class="float-right">
                    1-50/200
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
                @include('thame.errors.error')
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                    <tbody>
                        @foreach ($contact as $key=>$value)
                        @foreach ($contact as $key=>$value )
                            
                        @endforeach
                            <tr>
                            <td>
                                <div class="icheck-primary">
                                <input type="checkbox" id="check1">
                                <label for="check1"></label>
                                </div>
                            </td>
                            <td class="mailbox-name"><a href="{{route('AdmRepUserContact', $value->id)}}">{{$value->name_adm}}</a></td>
                                <td class="mailbox-subject">{!!Str::substr($value->comment, 0, 35)!!}...
                                </td>
                            <td class="mailbox-attachment"></td>

                            <?php
                                $months = Carbon\Carbon::parse($value->created_at)->diffInMonths(now(), false);
                                $days = Carbon\Carbon::parse($value->created_at)->diffInDays(now(), false);
                                $years = Carbon\Carbon::parse($value->created_at)->diffInYears(now(), false);
                            ?>
                            @if ($months < 1)
                                <td class="mailbox-date">{{ $days }} ngày</td>
                            @endif

                            @if ($months >= 1 && $months < 12)
                                <td class="mailbox-date">{{ $months }} tháng</td>
                            @endif

                            @if ($years >= 1)
                                <td class="mailbox-date">{{ $years }} năm</td>
                            @endif
                            </tr>
                        @endforeach
                </tbody>
                </table>
                <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
            <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                <i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-reply"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-share"></i>
                </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-sync-alt"></i>
                </button>
                <div class="float-right">
                1-50/200
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
            </div>
            </div>
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layout.footer')
<script>
$(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
    var clicks = $(this).data('clicks')
    if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
    } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
    }
    $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
    e.preventDefault()
    //detect type
    var $this = $(this).find('a > i')
    var fa    = $this.hasClass('fa')

    //Switch states
    if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
    }
    })
})
</script>
</body>
</html>
