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
            <th>Action</th>
        </tr>
        </thead>

        @foreach ($componies as $compony)
        <tr>
            <td>{{ $compony->id }}</td>
            <td><a class="intgray" href="{{route('compony.show', [$compony])}}">{{ $compony->title }}</a></td>
            <td>{!! $compony->description !!}</td>
            <td> <img height="200" weight="200" src="{{ $compony->logo}}"></td>
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
