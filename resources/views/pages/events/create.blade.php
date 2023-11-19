<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un nouvel évènement') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

    
    <section class="create-new-event">
        <p>sur cette page vous allez pouvoir créer un nouvel évènement</p>

        <form method="post" action="{{ route('event.store') }}">
            @csrf

            <!-- TITLE -->
            <label for="title">Titre de l'évènement *</label>
            <input id="title" type="text" name="title" class="@error('title') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
            <!-- TITLE -->
            
            <!-- CONTENT -->
            <label for="content">Contenu de l'évènement</label>
            <textarea id="content" name="content" class="@error('content') is-invalid @enderror"></textarea>
                <div class="alert alert-danger">
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>
            <!-- CONTENT -->
            
            <!-- START DATE -->
            <label for="start_date">Date de début *</label>
            <input id="start_date" type="datetime-local" name="start_date" class="@error('start_date') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('start_date')
                        {{ $message }}
                    @enderror
                </div>
            <!-- START DATE -->
            
            <!-- END DATE -->
            <label for="end_date">Date de fin *</label>
            <input id="end_date" type="datetime-local" name="end_date" class="@error('end_date') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('end_date')
                        {{ $message }}
                    @enderror
                </div>
            <!-- END DATE -->
            
            <!-- ADDRESS -->
            <label for="address">Adresse *</label>
            <input id="address" type="text" name="address" class="@error('address') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </div>
            <!-- ADDRESS -->
            
            <!-- ACCESS -->
            <label for="access">Accès *</label>
            <input id="access" type="text" name="access" class="@error('access') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('access')
                        {{ $message }}
                    @enderror
                </div>
            <!-- ACCESS -->
            
            <!-- INSTAGRAM POST LINK -->
            <label for="instagram_post_link">Lien Instagram</label>
            <input id="instagram_post_link" type="text" name="instagram_post_link" class="@error('instagram_post_link') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('instagram_post_link')
                        {{ $message }}
                    @enderror
                </div>
            <!-- INSTAGRAM POST LINK -->
            
            <!-- FACEBOOK POST LINK -->
            <label for="facebook_post_link">Lien Facebook</label>
            <input id="facebook_post_link" type="text" name="facebook_post_link" class="@error('facebook_post_link') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('facebook_post_link')
                        {{ $message }}
                    @enderror
                </div>
            <!-- FACEBOOK POST LINK -->
            
            <!-- CREATOR -->
            <label for="creator">Créateur</label>
            <input id="creator" type="text" name="creator" class="@error('creator') is-invalid @enderror">
                <div class="alert alert-danger">
                    @error('creator')
                        {{ $message }}
                    @enderror
                </div>
            <!-- CREATOR -->
            
            <!-- SUMMARY -->
            <label for="summary">Résumé</label>
            <textarea id="summary" name="summary" class="@error('summary') is-invalid @enderror"></textarea>
                <div class="alert alert-danger">
                    @error('summary')
                        {{ $message }}
                    @enderror
                </div>
            <!-- SUMMARY -->
            
            <button type="submit">Créer</button>
        </form>
    </section>
                



</x-app-layout>
