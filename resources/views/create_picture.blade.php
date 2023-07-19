@extends('layouts.app')

@section('content')
    <form action="{{ route('picture.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="name">
        <br>
        <input type="file" name="file">
        <br>
        <button type="submit">submit</button>
    </form>
@endsection
