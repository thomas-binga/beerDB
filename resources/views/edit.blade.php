@extends('layout2')

@section('contenu')
@if(session() -> has('info'))
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-body">
            <p class="card-text">{{ session('info')}}</p>
        </div>
    </div>
@endif
<br>
    <div class="container">
        <div class="row card text-white bg-black">
            <h4 class="card-header">Modifier une bière</h4>
            <div class="card-body">
                <form action="{{ route('beers.update', $beer->Id_Biere)}}" method="POST">
                    @csrf
                    @method('put')
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Nom_Biere') is-invalid @enderror"
                        name="Nom_Biere" id="Nom_Biere" value="{{ old('Nom_Biere', $beer->Nom_Biere) }}" placeholder="Nom de la bière">
                            @error('Nom_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Prix_Biere') is-invalid @enderror"
                        name="Prix_Biere" id="Prix_Biere" value="{{ old('Prix_Biere', $beer->Prix_Biere) }}" placeholder="Prix de la bière">
                            @error('Prix_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Contenance_Biere') is-invalid @enderror"
                        name="Contenance_Biere" id="Contenance_Biere" value="{{ old('Contenance_Biere', $beer->Contenance_Biere) }}" placeholder="Contenance de la bière">
                            @error('Contenance_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  
                        @error('Degre_alccol_Biere') is-invalid @enderror"
                        name="Degre_alccol_Biere" id="Degre_alccol_Biere" value="{{ old('Degre_alccol_Biere', $beer->Degre_alccol_Biere) }}" placeholder="Degré d'alcool de la bière">
                            @error('Degre_alccol_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Description') is-invalid @enderror"
                        name="Description" id="Description" value="{{ old('Description', $beer->Description) }}" placeholder="Description de la bière">
                            @error('Description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <select name="Id_Producteur" id="Id_Producteur" value="{{ old('Id_Producteur', $beer->Id_Producteur) }}" class="form-control @error('Id_Producteur') is-invalid @enderror">
                            <option value="">--Veuillez choisir parmi les producteurs ci-dessous--</option>
                            @foreach($producteurs as $producteur)
                            <option value="{{$producteur->Id_Producteur}}">{{$producteur->Nom_Producteur}}</option>
                            @endforeach 
                        </select>
                            @error('Id_Producteur')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <select name="Id_Style" id="Id_Style" value="{{ old('Id_Style', $beer->Id_Style) }}" class="form-control @error('Id_Style') is-invalid @enderror">
                            <option value="">--Veuillez choisir parmi les styles ci-dessous--</option>
                            @foreach($styles as $style)
                            <option value="{{$style->Id_Style}}">{{$style->Nom_Style}}</option>
                            @endforeach 
                        </select>
                            @error('Id_Style')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Image_Biere') is-invalid @enderror"
                        name="Image_Biere" id="Image_Biere" value="{{ old('Image_Biere', $beer->Image_Biere) }}" placeholder="lien de l'image de la bière">
                            @error('Image_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection