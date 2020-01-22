@extends('dashboard.metronic')
@section('title', ' جدول المنتجات')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('dashboard.index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('products.index')}}">المنتجات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> المنتجات </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول المنتجات</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_product"> أضافة منتج
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="products-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الاسم</th>
                        <th>السعر</th>
                        <th>الوصف</th>
                        <th>التلفون الاول</th>
                        <th>التلفون الاول</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item_name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{!! Str::limit(strip_tags($item->description) ,  $limit = 30, $end ='...')!!}</td>
                        <td>{{$item->phone1}}</td>
                        <td>{{$item->phone2}}</td>
                        <td>
                            <form action="{{route('products.destroy', $item->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('products.edit', $item->id)}}"
                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> تعديل </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit">حذف</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                {{$items->links()}}
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

<!-- BEGIN ADD_product MODEL -->
<div class="modal fade in" id="add_product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة منتج</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="text" name="item_name" class="form-control" placeholder="الأسم" required>

                        <label>Name</label>
                        <input type="text" name="ar_item_name" class="form-control" placeholder="name" required>

                        <label>السعر</label>
                        <input type="text" name="price" class="form-control" placeholder="Name" required>
                        
                        <label>التلفون الاول</label>
                        <input type="text" name="phone1" class="form-control" placeholder="Name" required>
                        
                        <label>التلفون الثاني</label>
                        <input type="text" name="phone2" class="form-control" placeholder="Name" required>
                        
                        <label>الوصف</label>
                        <textarea name="ar_description" class="form-control ck_editor"></textarea>

                        <label>Description</label>
                        <textarea name="description" class="form-control ck_editor"></textarea>

                        <label>صورة</label>
                        <input id="photo" type="file" name="photo" multiple>

                    </div>
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_product MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#products-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
