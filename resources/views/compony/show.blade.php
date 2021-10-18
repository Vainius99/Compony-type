@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Compony Info') }}</div>
                    <div class="card-body">
                        <div class="form-group center">
                            <p> ID Number: {{$compony->id}}</p>
                        </div>
                        <div class="form-group center">
                            <p> {{$compony->title}}</p>
                        </div>
                        <div class="form-group center">
                            <p>{{$compony->description}}</p>
                        </div>
                        <div class="form-group center">
                            <img src="{{$compony->logo}}" >
                        </div>
                        <div class="header gray">{{ __('Compony Contacts') }}</div>
                        <div class="form-group center">
                            <p>{{$compony->componyContact->phone}} <br>
                                {{$compony->componyContact->address}}<br>
                                {{$compony->componyContact->email}}<br>
                                {{$compony->componyContact->country}}<br>
                                {{$compony->componyContact->city}}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
