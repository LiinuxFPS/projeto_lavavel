<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header">Cadastro</div>

                <div class="card-body">
                    <form action="{{ route('app.cadastrar') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email@email.com">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="telefone" placeholder="(00)00000-0000">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <a href="{{route('home')}}" class="btn btn-outline-secondary btn-link">
                             Voltar
                        </a>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>