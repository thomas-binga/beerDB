@extends('layout')

@section('contenu')
<br>
    <div class="container">
        <div class="row card text-white bg-black">
            <h4 class="card-header">Ajouter une bière</h4>
            <div class="card-body">
                <form action="{{ route('beers.store')}}" method="POST">
                    @csrf
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Nom_Biere') is-invalid @enderror"
                        name="Nom_Biere" id="Nom_Biere" placeholder="Nom de la bière">
                            @error('Nom_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Prix_Biere') is-invalid @enderror"
                        name="Prix_Biere" id="Prix_Biere" placeholder="Prix de la bière">
                            @error('Prix_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Contenance_Biere') is-invalid @enderror"
                        name="Contenance_Biere" id="Contenance_Biere" placeholder="Contenance de la bière">
                            @error('Contenance_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Degre_alccol_Biere') is-invalid @enderror"
                        name="Degre_alccol_Biere" id="Degre_alccol_Biere" placeholder="Degré d'alcool de la bière">
                            @error('Degre_alccol_Biere')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control 
                        @error('Description') is-invalid @enderror"
                        name="Description" id="Description" placeholder="Description de la bière">
                            @error('Description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <select name="Id_Producteur" id="Id_Producteur" class="form-control @error('Id_Producteur') is-invalid @enderror">
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
                        <select name="Id_Style" id="Id_Style" class="form-control @error('Id_Style') is-invalid @enderror">
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
                        @error('image_Biere') is-invalid @enderror"
                        name="Image_Biere" id="Image_Biere" placeholder="lien de l'image de la bière">
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