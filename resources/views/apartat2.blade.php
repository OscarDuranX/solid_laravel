@extends('layouts.app')

@section('htmlheader_title')
    Apartat2
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="http://placehold.it/64x64" style="width: 64px; height: 64px;">
                            </a>

                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus.
                            </div>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="http://placehold.it/64x64" style="width: 64px; height: 64px;">
                            </a>

                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                in faucibus.
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="http://placehold.it/64x64" style="width: 64px; height: 64px;">
                                    </a>

                                    <div class="media-body">
                                        <h4 class="media-heading">Nested media heading</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                        lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                            </div>
                            <a class="media-right" href="#">
                                <img src="http://placehold.it/64x64" style="width: 64px; height: 64px;">
                            </a>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="http://placehold.it/64x64" style="width: 64px; height: 64px;">
                            </a>

                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis.
                            </div>
                            <a class="media-right" href="#">
                                <img src="http://placehold.it/64x64" style="width: 64px; height: 64px;">
                            </a>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection