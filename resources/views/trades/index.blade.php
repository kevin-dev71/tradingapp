@extends('adminlte::layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endpush

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Historico de Trades</h3>

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
                        <table id="trades-table" class="table table-hover table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>{{ __("ID") }}</th>
                                <th>{{ __("Mercado") }}</th>
                                <th>{{ __("Instrumento") }}</th>
                                <th>{{ __("Puntos") }}</th>
                                <th>{{ __("Fecha") }}</th>
                            </tr>
                            </thead>

                        </table>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-xs-12 -->
    </div>
    <!-- /.container-fluid spark-screen -->

@endsection

@section('scripts')
    @parent
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            let dt;
            dt = $("#trades-table").DataTable({
                pageLength: 10,
                lengthMenu: [ 10, 25, 50, 75, 100 ],
                processing: true,
                serverSide: true,
                ajax: '{{ route('trades.datatable') }}',
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                columns: [
                    {data: 'id', visible: false},
                    {data: 'instrument.market_formatted'},
                    {data: 'instrument.name'},
                    {data: 'point'},
                    {data: 'created_at'}
                ]
            })
        })
    </script>
@stop