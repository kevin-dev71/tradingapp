@extends('adminlte::layouts.app')
@section('main-content')
    @include('partials.session_message')
    <div class="container-fluid spark-screen">
        <form
                method="POST"
                action="{{ ! $trade->id ? route('trades.store') : route('trades.update', ['trade_id' => $trade->id])}}"
        >
            @if($trade->id)
                @method('PUT')
            @endif

            @csrf

            <div class="row justify-content-center">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">{{ __("Modificar Trade") }}</h3>
                        <div class="box-body">
                            <div class="form-group row">
                                <label for="points" class="col-md-4 col-form-label text-md-right">
                                    {{ __("Puntos del Trade") }}
                                </label>
                                <div class="col-md-6">
                                    <input
                                            name="point"
                                            id="point"
                                            class="form-control{{ $errors->has('point') ? ' is-invalid' : '' }}"
                                            value="{{ old('point') ?: $trade->point }}"
                                            required
                                            autofocus
                                    />

                                    @if ($errors->has('point'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('point') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                        for="instrument_id"
                                        class="col-md-4 col-form-label text-md-right"
                                >
                                    {{ __("Instrumento") }}
                                </label>
                                <div class="col-md-6">
                                    <select name="instrument_id" id="instrument_id" class="form-control">
                                        @foreach(\App\Instrument::pluck('name', 'id') as $id => $instrument)
                                            <option {{ (int) old('instrument_id') === $id || $trade->instrument_id === $id ? 'selected' : '' }} value="{{ $id }}">
                                                {{ $instrument }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                        for="market_id"
                                        class="col-md-4 col-form-label text-md-right"
                                >
                                    {{ __("Mercado") }}
                                </label>
                                <div class="col-md-6">
                                    <select name="market_id" id="market_id" class="form-control">
                                        @foreach(\App\Market::pluck('name', 'id') as $id => $market)
                                            @if($trade->id)
                                            <option {{ (int) old('market_id') === $id || $trade->instrument->market_id === $id ? 'selected' : '' }} value="{{ $id }}">
                                                {{ $market }}
                                            </option>
                                            @else
                                                <option value="{{ $id }}">
                                                    {{ $market }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-5">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __($btnText) }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection