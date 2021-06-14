@extends('layout')

@section('titrePage')
    Liste des Producteurs
@endsection

@section('titreItem')
    <h1>Toutes les bières :</h1>
@endsection


@section('contenu')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/table.css">
<style>

</style>
<section class="hero-wrap js-fullheight" style="background-image: url(images/bg-2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-12 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Tous nos Producteurs</span>
		  				<h1 class="mb-2">Vous pouvez ici naviguer entre nos Producteurs</h1>
							</div>
            </div>
          </div>
        </div>
      </div>
    </section>
<table class="table table-bordered table-striped">
    <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Nos <b>Producteurs</b></h2></div>
                    <div class="col-sm-4">
                        <a type="button" href="ajoutProducteur" class="button btn btn-info add-new">Ajouter nouvelle</a>
                    </div>
                </div>
            </div>
    <thead> 
        <th>Nom</th>
        <th>Actions</th>
    </thead>
    @foreach($producers as $producer)
        <tr>
            <td>{{$producer->Nom_Producteur}}</td>
            <td>
                <a href="getproducer/{{$producer->Id_Producteur}}" class="visibility" title="Visibility" data-toggle="tooltip"><i class="material-icons">&#xE8F4;</i></a>
            </td>
        </tr>
    @endforeach
</table>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script>
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endsection

