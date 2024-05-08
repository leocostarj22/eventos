@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>

</div>

<div class="col-md-10 offset-md-1 dashboard-events-caontainer">
    @if (count($events) > 0)

    @else
        <p>Ainda não possui eventos registados, <a href="/events/create">Criar Eventos</a></p>
    @endif
</div>

@endsection
