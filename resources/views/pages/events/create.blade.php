<label for="title">Titre de l'évènement</label>
 
<input id="title"
    type="text"
    class="@error('title') is-invalid @enderror">
 
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
