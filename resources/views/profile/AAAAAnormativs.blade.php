@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>My Page content is here</div>
@endsection

@section('scripts')
    <!-- Some JS and styles -->
@endsection

<x-app-layout>

    <x-slot name="title">Funda Of Web IT</x-slot>

    <div>
        My Page content is here
    </div>

    <x-slot name="scripts">
        <!-- Your script code -->
    </x-slot>

</x-app-layout>

<x-app-layout>

    <x-slot name="title">Funda Of Web IT</x-slot>

    <div>
        My Page content is here
    </div>

    @section('scripts')
        <!-- Your script here -->
    @endsection

</x-app-layout>

<x-layout>

    @section('title', 'Funda Of Web IT')

    @section('content')
        <div>My Page content is here</div>
    @endsection

    @section('scripts')
        <!-- Your script here -->
    @endsection

</x-layout>
