@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header gray">{{ __('Compony Type') }}</div>
                    <div class="card-body">
                        <div class="form-group center">
                            <p> ID Number: {{$type->id}}</p>
                        </div>
                        <div class="form-group center">
                            <p> {{$type->title}}</p>
                        </div>
                        <div class="form-group center">
                            <p> {{$type->description}}</p>
                        </div>
                        <div class="header gray">{{ __('Compony Info') }}</div>
                            <div class="form-group center">
                                <p> {{$type->typeCompony->title}}</p>
                            </div>
                            <div class="form-group center">
                                <p> {{$type->typeCompony->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
