@extends('mikrotikLayouts.main')
@section('page_title','Hello Page')
@section('content')


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    @foreach($mikrotiks as $mikrotik)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ url('mikrotiks/'.$mikrotik->id) }}">{{ $mikrotik->model }}</a>
                            </div>
                        <div class="panel-body">{{ 'Body Index' }}</div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->


@stop