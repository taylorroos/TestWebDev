@extends('layouts.app')

@section('content')
    <contact-form :contact="{{$contact}}"></contact-form>
@endsection