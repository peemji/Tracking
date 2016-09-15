@extends('mikrotikLayouts.main')
@section('page_title','Hello Page')
@section('content')


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                   
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ $mikrotik->model }}
                            </div>
                        <div class="panel-body">{{ 'Body In Show' }}</div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->


@stop