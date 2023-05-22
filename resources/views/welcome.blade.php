@extends('layouts.app')

@section('content')
    <p>👋 Welcome to Radicle</p>

    <hr class="my-6">

    <x-modal title="Modal Title">
        <x-slot name="button">
            Modal example
        </x-slot>
        Example modal
    </x-modal>
@endsection
