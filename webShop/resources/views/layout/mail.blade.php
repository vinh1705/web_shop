<div class="col-md-3">
    <a href="{{route('FeedBadNoneUser')}}" class="btn btn-primary btn-block mb-3">Thư mới</a>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Folders</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="fas fa-inbox"></i> Thư liên hệ 
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('SentMessager')}}" class="nav-link">
              <i class="far fa-envelope"></i> Thư đã gửi
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i> Thư nháp
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-filter"></i> Spam
              <span class="badge bg-warning float-right">65</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-trash-alt"></i> Không cần thiết
            </a>
          </li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Labels</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle text-danger"></i>
                Important
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle text-warning"></i> Promotions
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle text-primary"></i>
                Social
              </a>
            </li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>