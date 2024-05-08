@extends('layouts.main')

@section('title','Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Editando: {{ $event->title }}</h1>
            <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Imagem do Evento:</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
                </div>
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
                </div>
                <div class="form-group">
                    <label for="date">Data do Evento:</label>
                @php
                $formattedDate = \Carbon\Carbon::parse($event->date)->format('d/m/Y');
                @endphp
                <input type="date" class="form-control" id="date" name="date" value="{{ $formattedDate }}" required>
                </div>
                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $event->city }}">
                </div>
                <div class="form-group">
                    <label for="private">O Evento é Privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" require>Descrição:</label>
                    <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">Adicione itens de infraestrutura:</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="cadeira"> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="palco"> palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="cerveja grátis"> Cerveja Grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="open food"> Open Food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="brindes"> Brindes
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Atualizar Evento">
            </form>
        </div>
    </div>
</div>

@endsection

