<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s6">
                <div class="text-field">
                    <label>Data de inclusão</label><br>
                    {{ $registro->created_at->format('d/m/Y - H:i:s') }}                    
                </div>
            </div>

            <div class="col s6">
                <div class="text-field">
                    <label>Última alteração</label><br>
                    {{ $registro->updated_at->format('d/m/Y - H:i:s') }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s6">
                <div class="text-field">
                    <label>Título</label><br>
                    {{ $registro->titulo }}                    
                </div>
            </div>

            <div class="col s6">
                <div class="text-field">
                    <label>Autor</label><br>
                    {{ $registro->autor }}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col s3">
                <div class="text-field">
                    <label>Edição</label><br>
                    {{ $registro->edicao }}
                </div>
            </div>
            
            <div class="col s3">
                <div class="text-field">
                    <label>Ano da Edição</label><br>
                    {{ $registro->ano_edicao }}
                </div>
            </div>
            
            <div class="col s3">
                <div class="text-field">
                    <label>Editora</label><br>
                    {{ $registro->editora }}
                </div>
            </div>

            <div class="col s3">
                <div class="text-field">
                    <label>Data da Publicação</label><br>
                    {{ date('d/m/Y', strtotime($registro->data_publicacao)) }}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col s3">
                <div class="text-field">
                    <label>ISBN</label><br>
                    {{ $registro->isbn }}
                </div>
            </div>
            
            <div class="col s3">
                <div class="text-field">
                    <label>Origem</label><br>
                    {{ $registro->origem }}
                </div>
            </div>
            
            <div class="col s3">
                <div class="text-field">
                    <label>Categoria</label><br>
                    {{ $registro->categoria }}
                </div>
            </div>

            <div class="col s3">
                <div class="text-field">
                    <label>Localização</label><br>
                    {{ $registro->localizacao }}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col s12">
                <div class="text-field">
                    <label>Sinopse</label><br>
                    {{ $registro->sinopse }}
                </div>
            </div>
        </div>
    </div>
</div>

