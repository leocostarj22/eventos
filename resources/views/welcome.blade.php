@extends('layouts.main')

@section('title','Eventos')

@section('content')

<div id="search-container" class="col-md-12">
<h1>Pesquisa de Eventos</h1>
<form action="/" method="GET">
    <input type="text" id="search" name="search" placeholder="Pesquise um Evento" class="form-control">
    <button class="btn btn-primary" type="submit">Pesquisar</button>
</form>
</div>
<div id="events-container" class="col-md-12">
    @if ($search)
        <h2>Buscando por: {{ $search }}</h2>
        @else
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os próximos eventos</p>
    @endif
    <div id="cards-container" class="row">
        @foreach ($events as $event)
           <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{ $event->title }} </h5>
                    <p class="card-participants"><ion-icon name="people-outline"></ion-icon> {{ count($event->users)}} Participante(s)</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
                </div> 
            </div>  
        @endforeach
    </div>
    @if (count($events) == 0 && $search)
        <span>Não foi possível encontrar o evento {{ $search }} <a href="/">Ver todos</a></span>
    @elseif (count($events) == 0)
        <span>Não há eventos disponíveis!</span>
    @endif
</div>
@endsection
