//Lancio -> php a artisan make:model Tag -rcms --resource
//Modifico la "tag" tabel
//Modifico la "tag" seeder e aggiuno il foreach come in type
//Lancio il comando php seed
//Nel model tag aggiungo str generateSlug
//Creo nuova migration php artisan make:migration create_project_technology_table
//Creo la colonna per il Project ($tabel->unsigendBigIteger) e creo la colonna per il tag ($tabel->unsigendBigIteger) aggiungo foreing key
//Modifico il file web aggiungendo le risorse e sposto il tag controller dentro admin aggiungendo "use"
//Nell'index web richiamo $tags = Tag::all e il return
//Nuova cartella in view di nome tags
//In index.blade metto extends e section e copio incollo quello di project e creo la tabella con in più azioni
//Aggiungo il foreach richiamando i tags
//In create_project_tag_table aggiungo cascadeonDelete() in foreing key e tag
//In create.blade creo un foreach con delle checkbox value="{{$tag->name}}" name="tags[]"
//Creo storeProjectRequest e lo riempo anche un web
//Copio nell'edit cio fatto per il create e creo un controllo per i tag che sono gia utilizzati tramite la funzione old
//IF ->  Edit = <input value="{{$tag->id}}" name="tags[]" {{ in_array($tags->id, old('tags' [])) ? 'checked : '' }}> label...
//ELSE -> Edit = <input value="{{$tag->id}}" name="tags[]" {{ $project->tags->contains($tag) ? 'checked : '' }}> label...
//Recupero i tags in Update e faccio il controllo con if
Inserisco tags in show
Modifico il delete


