@extends('adminlte::layouts.app')

@section('main-content')
    @include('partials.session_message')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('trades.create')  }}" class="btn btn-success"><i class="fa fa-plus"></i>Añadir</a>
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
                                <th>{{ __("Mercado") }}</th>
                                <th>{{ __("Instrumento") }}</th>
                                <th>{{ __("Puntos") }}</th>
                                <th>{{ __("Fecha") }}</th>
                                <th>{{ __("Acciones") }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($trades as $trade)
                                <tr>
                                    <td>{{ $trade->instrument->market->name }}</td>
                                    <td>{{ $trade->instrument->name }}</td>
                                    @if($trade->point > 0)
                                        <td><span class="label label-success">{{ $trade->point }}</span></td>
                                    @elseif($trade->point === '0')
                                        <td><span class="label label-warning">{{ $trade->point }}</span></td>
                                    @else
                                        <td><span class="label label-danger">{{ $trade->point }}</span></td>
                                    @endif
                                    <td>{{ $trade->created_at }}</td>
                                    <td>
                                        @include('trades.partials.trades_action_buttons')
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-dark">
                                    {{ __("No tienes trades") }}
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $trades->links() }}

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
@stop