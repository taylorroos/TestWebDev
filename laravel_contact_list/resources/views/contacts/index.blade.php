@extends('layouts.app')

@section('content')
    <simple-table :contacts="{{ json_encode($contacts)}}"></simple-table>
@endsection