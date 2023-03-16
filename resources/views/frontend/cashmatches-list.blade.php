@extends('layouts.frontend.app')
@section('content')
<style>
svg.w-5.h-5 {
    max-width: 25px;
}
</style>

@include('frontend.components.matches',['cashmatches' => $matches])

<div class="pagination float-right">
    {{ $matches->links() }}
</div>

@endsection
