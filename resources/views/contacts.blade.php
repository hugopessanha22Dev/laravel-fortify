@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <p class="display-6 text-info">
                Esta pagina esta acessivel a usuarios logados e nao logados!
            </p>
            <hr>
            @auth
                <p class="displau-6 text-sucess"> Este texto so e apresentadoa usuarios logados</p>
            @endauth

            @guest
                  <p class="displau-6 text-warning"> Este texto so e apresentadoa usuarios visitantes</p>
            @endguest

            <p>Outra forma </p>
            @auth
             <p class="displau-6 text-sucess"> Este texto so e apresentadoa usuarios logados</p>
            @else
             <p class="displau-6 text-warning"> Este texto so e apresentadoa usuarios visitantes</p>
            @endauth
        </div>
    </div>
</div>

@endsection
