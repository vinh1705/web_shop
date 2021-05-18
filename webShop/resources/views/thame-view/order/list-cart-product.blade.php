@include('layout-view.header')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container" style="padding: 25px 0px;">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th class="text-center">Số tiền</th>
                        <th>Xóa</th>
                        <th>Lưu</th>
                        <th>Mua</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="" method="post">
                        @csrf
                        @foreach ($viewCartProduct as $key=>$value)
                            <tr>
                                <td class="col-sm-8 col-md-6" style="padding: 8px;">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{asset('view-thame/img/'.$value->options['img'])}}" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{route('Information', ['id' => $value->options['id_categories'], 'slug' => $value->options['slug_product'], 'id_pr' => $value->id])}}">{{$value->name}}</a></h4>
                                            <h5 class="media-heading"> Danh mục: <a href="{{route('ListProduct',$value->options['id_categories'])}}">{{$value->options['name_categories']}}</a></h5>
                                            <span>Status: </span><span class="text-success"><strong>Đang giao hàng</strong></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="number" class="updateQty form-control" id="exampleInputEmail1" size="1" value="{{$value->qty}}" name="qty[50]">
                                </td>
                                <td class="col-sm-2 col-md-2 text-center"><strong>{{number_format($value->price)}}</strong></td>
                                <td class="col-sm-1 col-md-1">
                                <a href="{{route('DeleteCart',$value->rowId)}}" class="btn btn-danger">
                                    <span> Xóa</span>
                                </a></td>
                                <td><a class="updateCart btn btn-primary" id="{{$value->rowId}}">Lưu</a></td>
                                <td><a href="#" class="btn btn-primary">Mua</a></td>
                            </tr>
                        @endforeach
                    </form>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $( ".updateCart" ).click(function() {
                                    var rowId = $(this).attr('id');
                                    var qty = $(this).parent().parent().find(".updateQty").val();
                                    var input_token = $("input[name='_token']").val();
                                    $.ajax({
                                        url: 'update-cart/'+rowId+'/'+qty,
                                        type: 'GET',
                                        cache: false,
                                        data: {"_token":input_token, "rowId":rowId, "qty":qty},
                                        success: function (data) {
                                                alert (3213),
                                                window.location = "add-to-carts"
                                            }
                                        }
                                    });
                                });
                            });
                        </script>
                </tbody>
            </table>
            <hr>
            <table>
                <tr>
                    <th><h5>Tiền Sản phẩm:</h5></th>
                    <th class="text-right"><h5><strong>{{$total}} đ</strong></h5></th>
                </tr>
                <tr>
                    <th><h5>Giảm giá:</h5></th>
                    <th class="text-right"><h5><strong>0 đ</strong></h5></th>
                </tr>
                <tr>
                    <th><h5>Phí VAT:</h5></th>
                    <th class="text-right"><h5><strong>0%</strong></h5></th>
                </tr>
                <tr>
                    <th><h5>Tổng tiền:</h5></th>
                    <th class="text-right"><h5><strong>{{$total}} đ</strong></h5></th>
                </tr>
                {{-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h4>Tổng</h4></td>
                    <td class="text-right"><h4><strong>{{$total}} đ</strong></h4></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> --}}
                <hr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-success">
                            Xác nhận 
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>