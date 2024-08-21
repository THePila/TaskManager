@extends("layout.app")

@section("content")
<x-navbar/>
<div class="col py-3">
    <x-card-Task/>
    <x-modal-Task/>
</div>
@endsection