@extends('layouts.main')

@section('title','Criar Novos Eventos')

@section('content')

<div id="event-create-container" class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Crie o seu Evento</h1>
            <form action="/events" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Imagem do Evento:</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
                </div>
                <div class="form-group">
                    <label for="date">Data do Evento:</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
                </div>
                <div class="form-group">
                    <label for="private">O Evento é Privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" require>Descrição:</label>
                    <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
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
                <input type="submit" class="btn btn-primary" id="createbutton" value="Criar Evento">
            </form>
        </div>
    </div>
</div>

@endsection

