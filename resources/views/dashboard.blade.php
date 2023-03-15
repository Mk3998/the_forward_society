@extends('templates.master')

@section('title')
    Dashboard
@endsection

@section('content')
 
<div class="text-sm breadcrumbs ml-5 pt-5  text-primary">
    <ul>
      <li>Dashboard</li>
    </ul>
</div>
<x-card>
    <x-card-header title="Dashboard">
        <a  href="{{ route('table') }}" class="btn btn-primary btn-md flex-none mr-3">
            <i class="fa fa-arrow-circle-o-left"></i>
            <span>Table</span>
        </a>
        <a  href="{{ route('form') }}" class="btn btn-primary btn-md flex-none mr-3">
            <i class="fa fa-arrow-circle-o-left"></i>
            <span>Form</span>
        </a>
    </x-card-header>
    <div class="container">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci non voluptas incidunt repellendus nisi commodi error ab architecto similique esse.
        </p>

        <button onclick="showToast()">Click</button>
    </div>
</x-card>

@endsection