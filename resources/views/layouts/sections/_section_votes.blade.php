<section class="section-votes" id="votos">
    <div class="container">
        <form action="" method="post" class="form-site">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="box-votes left">
                        <h1 class="title-section">Sistema de Votação Mix Internet</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="box-votes right">
                        <div class="row">
                            <div class="form-group col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="Nome" name="name">
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="E-mail" name="email">
                            </div>
                        </div>
                        @forelse($votes as $vote)
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text mr-1">
                                        <input id="{{ Str::slug($vote->title) }}" type="radio" value="{{ Str::slug($vote->title) }}" name="vote">
                                    </div>
                                </div>
                                <label for="{{ Str::slug($vote->title) }}" class="form-label">{{ $vote->title }}</label>
                            </div>
                        @empty
                            <p>Nenhuma opção cadastrada</p>
                        @endforelse
                        <div class="btn btn-success w-100 text-white"><i class="fas fa-check"></i> votar</div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>