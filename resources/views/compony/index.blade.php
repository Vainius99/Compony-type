@extends('layouts.app')

@section('content')

<div class="container">
    <a style="color:yellow;" href="{{ url('/componies/create')}}">Create Compony</a>
    <table class="table table-bordered table-hover gray">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Logo</th>
            <th>Contacts</th>
            <th>Total Types</th>
            <th>Action</th>
        </tr>
        </thead>

        @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{session()->get("error_message")}}
            </div>
        @endif

        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{session()->get("success_message")}}
            </div>
        @endif

        @foreach ($componies as $compony)
        <tr>
            <td>{{ $compony->id }}</td>
            <td><a class="intgray" href="{{route('compony.show', [$compony])}}">{{ $compony->title }}</a></td>
            <td>{!! $compony->description !!}</td>
            <td> <img height="200" weight="200" src="{{ $compony->logo}}"></td>
            <td>{{$compony->componyContact->phone}} <br>
                {{$compony->componyContact->address}}<br>
                {{$compony->componyContact->email}}<br>
                {{$compony->componyContact->country}}<br>
                {{$compony->componyContact->city}}</td>
                <td>{{$compony->componyTypes->count()}}</td>
            <td>
                <a class="btn btn-dark intgray" href="{{route('compony.edit', [$compony]) }}">Edit</a>
                <form method="post" action="{{route('compony.destroy', [$compony]) }}">
                    @csrf
                    <button class="btn btn-danger intdelete" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
