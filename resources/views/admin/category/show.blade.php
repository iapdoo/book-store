@extends('admin.index')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                        </div>
                        <table id="example2" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th> {{trans('admin.category_name')}} </th>
                                <th>{{trans('admin.category_description')}}</th>
                                <th>{{trans('admin.added_by')}}</th>
                                <th>{{trans('admin.number_of_product')}}  </th>
                                <th>{{trans('admin.category_image')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$categoryinfo->category_name}}</td>
                                    <td>{{$categoryinfo->category_description}}</td>
                                    <td>{{$categoryinfo->categories->name}}</td>
                                    <td>{{$categoryinfo->products()->count()}}</td>
                                    <td>
                                        @if(!empty($categoryinfo->category_image))
                                            <img src="{{asset('storage/'.$categoryinfo->category_image)}}" style="width: 100px;height: 100px;">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> {{trans('admin.category_name')}} </th>
                                <th>{{trans('admin.category_description')}}</th>
                                <th>{{trans('admin.added_by')}}</th>
                                <th>{{trans('admin.number_of_product')}}  </th>
                                <th>{{trans('admin.category_image')}}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align: center">{{trans('admin.products')}}  </h1>
                        <div>
                        </div>
                        <table id="example2" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th> {{trans('admin.delete')}} </th>
                                <th> {{trans('admin.edit')}} </th>
                                <th> {{trans('admin.category_name')}} </th>
                                <th>{{trans('admin.category_image')}}</th>
                                <th>{{trans('admin.category_description')}}</th>
                                <th>{{trans('admin.price')}} </th>
                                <th>{{trans('admin.quantity')}} </th>
                                <th>{{trans('admin.category_name_of_product')}} </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryinfo->products()->get() as $productinfo)
                                <tr>
                                    <td>
                                        {!! Form::open(['id'=>'form_delete','url'=>url('product/'.$productinfo->id),'method'=>'delete']) !!}
                                        {!! Form::submit('delete',['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url ('product/'.$productinfo->id .'/edit') }} "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td>{{$productinfo->product_name}}</td>
                                    <td>
                                        @if(!empty($productinfo->product_image))
                                            <img src="{{asset('storage/'.$productinfo->product_image)}}" style="width: 100px;height: 100px;">
                                        @endif
                                    </td>
                                    <td>{{$productinfo->product_description}}</td>
                                    <td>{{$productinfo->product_price}}</td>
                                    <td>{{$productinfo->product_quantity}}</td>
                                    <td>{{$productinfo->products->category_name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> {{trans('admin.delete')}} </th>
                                <th> {{trans('admin.edit')}} </th>
                                <th> {{trans('admin.category_name')}} </th>
                                <th>{{trans('admin.category_image')}}</th>
                                <th>{{trans('admin.category_description')}}</th>
                                <th>{{trans('admin.price')}} </th>
                                <th>{{trans('admin.quantity')}} </th>
                                <th>{{trans('admin.category_name_of_product')}} </th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </section>
    <div class="box">
        <div class="box-body ">
            <div class="align-content-center"><h1 style="text-align: center">Add product</h1></div>
            {!! Form::open(['url'=>url('add_product/'.$categoryinfo->id),'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label(trans('admin.product_name')) !!}
                {!! Form::text('product_name',old('product_name'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::label(trans('admin.product_image')) !!}
                    </div>
                    <div class="col-lg-12">
                        {!! Form::file('product_image',['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label(trans('admin.product_description'))!!}
                {!! Form::text('product_description',old('product_description'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label(trans('admin.price'))!!}
                {!! Form::text('product_price',old('product_price'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label(trans('admin.quantity'))!!}
                {!! Form::text('product_quantity',old('product_quantity'),['class'=>'form-control']) !!}
            </div>
        </div>
        {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.row -->
@endsection
@section('footer')

    <script src="{{url('/design/adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/design/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/design/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('/design/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{url('/design/adminlte/dist/js/adminlte.min.js')}}"></script>
    <script src="{{url('/design/adminlte/dist/js/demo.js')}}"></script>

    <script type="text/javascript">
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        })
    </script>
@endsection


