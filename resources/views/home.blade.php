@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <p>@lang('messages.welcome', ['name' => 'GonzaDiber'])</p>
                    <p>@lang('messages.dashboard')</p>

                    <example-component></example-component>

            </div>
        </div>
    </div>
</div>
@endsection
