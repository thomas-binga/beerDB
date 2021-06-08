<table class="table table-bordered table-striped">
    <thead> 
        <th>Id</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Contenance</th>
        <th>Degré Alcool</th>
        <th>Description</th>
    </thead>
    @foreach($beer as $beer)
        <tr>
            <td>{{$beer->Id_Biere}}</td>
            <td>{{$beer->Nom_Biere}}</td>
            <td>{{$beer->Prix_Biere}}</td>
            <td>{{$beer->Contenance_Biere}}</td>
            <td>{{$beer->Degre_alccol_Biere}}</td>
            <td>{{$beer->Description}}</td>
        </tr>
    @endforeach
</table>