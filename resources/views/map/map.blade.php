@extends('mikrotikLayouts.main')
@section('page_title','Maps')
@section('content')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Google Maps
                            </div>
                            <div class="panel-body">
                                {{ 'Body Index' }}
                                <div class="map_canvas"></div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
@stop