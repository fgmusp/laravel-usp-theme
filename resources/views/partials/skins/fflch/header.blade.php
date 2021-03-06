@section('skin_styles')
@parent {{-- devemos incluir o conteúdo existente --}}
<style>
    /* #skin_header é o div pai */
    #skin_header  .container-fluid {
        display: block;
        height: 70px;
        background-color: #FFFFFF;
        font-size: 20px;
    }

    #skin_header .skin_logo img {
        height: 50px;
        margin: 10px;
    }

    #skin_header .skin_texto img {
        margin-top: 8px;
        height: 50px;
    }

</style>
@endsection

@section('skin_header')
<!-- container vai ocultar em mobile para ganhar espaço -->
<div class="container-fluid d-none d-sm-block">
    <div class="row">
        <div class="col-md-12">
            <a class="skin_logo float-left" href="http://sti.fflch.usp.br/">
                <img src="{{ asset('/vendor/laravel-usp-theme/skins/fflch/images/logo_fflch.png') }}" alt="Logo da Universidade de São Paulo" />
            </a>
            <div class="float-left pr-1 pt-2">
                <div>Faculdade de Filosofia, Letras e Ciências Humanas</div>
                <div class="small">Seção técnica de Informática</div>
            </div>
        </div>
    </div>
</div>
@endsection
