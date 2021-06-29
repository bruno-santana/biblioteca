<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s6">
                <div class="input-field">
                    <input type="text" name="titulo"
                        value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
                    <label>Título</label>
                </div>
            </div>

            <div class="col s6">
                <div class="input-field">
                    <input type="text" name="autor" 
                        value="{{ isset($registro->autor) ? $registro->autor : '' }}">
                    <label>Autor</label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col s3">
                <div class="input-field">
                    <input type="text" name="edicao" 
                        value="{{ isset($registro->edicao) ? $registro->edicao : '' }}">
                    <label>Edição</label>
                </div>
            </div>
            
            <div class="col s3">
                <div class="input-field">
                    <input type="text" name="ano_edicao" 
                        value="{{ isset($registro->ano_edicao) ? $registro->ano_edicao : '' }}">
                    <label>Ano da Edição</label>
                </div>
            </div>
            
            <div class="col s3">
                <div class="input-field">
                    <input type="text" name="editora" 
                        value="{{ isset($registro->editora) ? $registro->editora : '' }}">
                    <label>Editora</label>
                </div>
            </div>

            <div class="col s3">
                <div class="input-field">
                    <input type="text" class="datepicker" name="data_publicacao" 
                        value="{{ isset($registro->data_publicacao) ? $registro->data_publicacao : '' }}">
                    <label>Data da Publicação</label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col s3">
                <div class="input-field">
                    <input type="text" name="isbn" 
                        value="{{ isset($registro->isbn) ? $registro->isbn : '' }}">
                    <label>ISBN</label>
                </div>
            </div>
            
            <div class="col s3">
                <div class="input-field">
                    <input type="text" name="origem"
                         value="{{ isset($registro->origem) ? $registro->origem : '' }}">
                    <label>Origem</label>
                </div>
            </div>            
            
            <div class="col s3">
                <div class="input-field">
                    <select name="categoria_id">
                        <option value="" disabled selected>Escolha uma item</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }} </option>
                        @endforeach
                    </select>
                    <label>Categoria</label>
                </div>
            </div>

            <div class="col s3">
                <div class="input-field">
                    <input type="text" name="localizacao" 
                        value="{{ isset($registro->localizacao) ? $registro->localizacao : '' }}">
                    <label>Localização</label>
                </div>
            </div>   
        </div>


        <div class="row">
            <div class="col s12">
                <div class="input-field">
                    <textarea class="materialize-textarea" name="sinopse" 
                        value="{{ isset($registro->sinopse) ? $registro->sinopse : '' }}"></textarea>
                    <label>Sinopse</label>
                </div>
            </div>
        </div>
    </div>
</div>

