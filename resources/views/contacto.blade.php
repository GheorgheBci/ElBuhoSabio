@extends('layouts.app')

@section('titulo', 'Contacto')

@section('content')
    <div class="contacto__div">
        <h1 class="contacto__titulo contacto__titulo--padding">Formulario de contacto</h1>
    </div>


    <div class="formulario__div">
        <h2 class="formulario__subtitulo">Comentanos tu problema</h2>

        <form action="#" method="post">

            <label for="nombre" class="formulario__label">Nombre
                <span class="formulario__span--color">*</span>
            </label>
            <input type="text" class="formulario__input" name="nombre" id="nombre" required placeholder="Escribe tu nombre">

            <label for="email" class="formulario__label">Email
                <span class="formulario__span--color">*</span>
            </label>
            <input type="email" class="formulario__input" name="email" id="email" required placeholder="Escribe tu Email">

            <label for="asunto" class="formulario__label">Asunto
                <span class="formulario__span--color">*</span>
            </label>
            <input type="text" class="formulario__input" name="asunto" id="assunto" required
                placeholder="Escribe un asunto">

            <label for="mensaje" class="formulario__label">Mensaje
                <span class="formulario__span--color">*</span>
            </label>

            <textarea name="mensaje" class="formulario__textarea" required placeholder="Deja aquí tu comentario..."></textarea>

            <button type="submit" class="formulario__button" name="enviar_formulario">Enviar</button>

            <p class="formulario__p formulario__p--color">* los campos son obligatorios.</p>

        </form>
    </div>
@endsection
