@extends('layouts.main')

@section('title', 'Dashboard: ')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name=create-outline></ion-icon> Editar</a> 
                    <form action="/events/{{ $event->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                    </form>
                </tr>
                
            @endforeach
        </tbody>
        </table>
    @else
        <p>Ainda não possui eventos registados, <a href="/events/create">Criar Eventos</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que Participo:</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($eventsasparticipant) > 0)
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($eventsasparticipant as $event)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{ count($event->users) }}</td>
                    <td>
                        <form action="/events/leave/{{ $event->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon>Sair do Evento
                        </button>
                        </form>
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    @else
    <p>Não estás participando de eventos, <a href="/">veja todos os eventos.</a></p>
    @endif
</div>
<div class="gap">
    <p></p>
    <p></p>
    <p></p>
    <br><br>
</div>
@endsection
