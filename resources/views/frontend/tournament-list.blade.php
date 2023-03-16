@extends('layouts.frontend.app')
@section('content')
<style>
svg.w-5.h-5 {
    max-width: 25px;
}
</style>

@include('frontend.components.tournaments')

<div class="pagination float-right">
    {{ $tournaments->links() }}
</div>

@endsection
