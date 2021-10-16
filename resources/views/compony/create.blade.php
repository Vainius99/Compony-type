@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>
                    <form class="white form-group" action="{{route('compony.store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="compony_title" class="col-md-4 col-form-label text-md-right"> Title: </label>
                            <input class="gray form-control col-md-6" type="text" name="compony_title" placeholder="Enter Compony Title" />
                        </div>
                        <div class="form-group row">
                            <label for="compony_description" class="col-md-4 col-form-label text-md-right"> Description: </label>
                            {{-- <input class="gray form-control col-md-6" type="text" name="compony_description" placeholder="Enter Compony Description" /> --}}
                            <div class="col-md-6">
                                <textarea class="summernote" name="compony_description" cols="5" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="compony_logo" class="col-md-4 col-form-label text-md-right"> Image: </label>
                            <input class="gray form-control col-md-6" type="file" name="compony_logo" placeholder="Enter Compony Logo" />
                        </div>
                    @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Create Compony</button>
                </form>
                                <a class="btn btn-link"style="color: red" href="{{ url('/componies')}}">Back</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>

@endsection
