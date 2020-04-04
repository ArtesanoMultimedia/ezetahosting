@extends('layouts.app')

@section('title', $title)

@section('sidebar')
    @parent
@endsection

@section('content')
    {!! $body !!}
@endsection
