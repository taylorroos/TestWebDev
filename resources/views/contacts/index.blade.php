@extends('layouts.app')

@section('content')
    <contact-list :contacts="{{ json_encode($contacts)}}"></contact-list>
@endsection