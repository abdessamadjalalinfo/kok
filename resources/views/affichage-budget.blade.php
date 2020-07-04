<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>affichage_budget</title>
<link rel="stylesheet" type="text/css" href="test(1).css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <header><h1>Détails Budget</h1></header>
    <fieldset id="case1">
        <div class="bs-example">
            <form action="" method="post">
            <div class="form-group row">
               <label for="inputEmail" class="col-sm-2 col-form-label" style="font-size: 0.85rem;font-family:Arial Black;">Année Universitaire:</label>
               <div class="col-sm-10">
                   <input type="text"  class="form-control-plaintext" id="Annee" value="{{$annee}}">
               </div>
            </div>
            <div class="form-group row">
               <label for="inputEmail" class="col-sm-2 col-form-label" style="font-size: 0.9rem;font-family:Arial Black;">Valeur Budget :</label>
               <div class="col-sm-10">
                   <input type="text"  class="form-control-plaintext" id="Budget" value="{{$valeur}}dhs">
               </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nom Rubrique</th>
                <th>Valeur Rubrique</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($liste as $rubrique)
                <tr>
                <td>{{$rubrique['0']}}</td>
                <td>
                    {{$rubrique['1']}}</td>
                    <td>
                    <form action="{{route('supp-rub')}}">
                            <input type="hidden" name='id' value='{{$rubrique['2']}}'>
                           
                            <button type='submit' class='btn btn-danger'>Supprimer</button>
                    </form>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#e{{$rubrique['2']}}" data-whatever="@getbootstrap">Modifier</button>

<div class="modal fade" id="e{{$rubrique['2']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier : {{$rubrique['0']}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action='{{route('update-rubrique')}}'>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nouvelle Valeur:</label>
            <input type="text" name='valeur_rub' class="form-control" id="recipient-name" value='{{$rubrique['1']}}'>
            <input type="hidden" name='id_rub' value='{{$rubrique['2']}}'>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
         
        </form>
      </div>
      
    </div>
  </div>
</div>
                    </td>   
                </tr>
                
            @endforeach 
            
            </tbody>
        </table>
        
    </div>
    
</div>
</body>
</html>