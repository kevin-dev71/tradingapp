<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Reporte Mensual Recap</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <p class="text-center">
                        <strong>Efectividad: 1 Enero, 2018 - 30 Julio, 2018</strong>
                    </p>

                    <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <p class="text-center">
                        <strong>Marcador/strong>
                    </p>

                    <div class="progress-group">
                        <span class="progress-text">Puntos Ganados</span>
                        <span class="progress-number"><b>160</b></span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Puntos Perdidos</span>
                        <span class="progress-number"><b>310</b></span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Total</span>
                        <span class="progress-number"><b>480</b></span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
            <div class="row">
                <div class="col-sm-3 col-xs-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$35,210.43</h5>
                        <span class="description-text">TOTAL GANANCIA</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">TOTAL PERDIDA</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-4">
                    <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">$24,813.53</h5>
                        <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <script src="{{ url ('/js/adminlte/home/dashboard.js') }}" type="text/javascript"></script>
@stop