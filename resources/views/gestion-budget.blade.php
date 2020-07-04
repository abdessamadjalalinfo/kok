<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulaire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">


</head>

<body>
<div class="container"> 
    <h1>GESTION BUDGET</h1>
    <fieldset id="case1">
        <legend>Détail Budget</legend>
        <form   name="myForm"  id="myForm" action='{{route('add-budget')}}'> 
          
         <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Année universitaire" name="annee" id="annee" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Valeur Budget" name="valeurbudget" id="valeur" required>
                </div>
            </div>
   
         <legend>Rubriques</legend>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Aménagement_agencement_installation" id="myCheck"  onclick="myFunction1()">
            <label class="form-check-label" for="item1">Aménagement,agencement et installation</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Materiels_enseignement" id="myCheck1"  onclick="myFunction1()">
            <label class="form-check-label" for="item2">Matériels d'enseignement </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Materiel_bureau" id="myCheck2"  onclick="myFunction1()">
            <label class="form-check-label" for="item3">Matériels de bureau </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Materiel_informatique" id="myCheck3"  onclick="myFunction1()">
            <label class="form-check-label" for="item4">Matériels informatique et logiciels  </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Mobilier_bureau" id="myCheck4"  onclick="myFunction1()">
            <label class="form-check-label" for="item5">Mobilier de bureau </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Mobilier_enseignement" id="myCheck5"  onclick="myFunction1()">
            <label class="form-check-label" for="item6">Mobilier d'enseignement </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Fournitures_informatiques" id="myCheck6"  onclick="myFunction1()">
            <label class="form-check-label" for="item7">Fournitures informatiques </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Frais_de_cerificat_du_logiciel" id="myCheck7"  onclick="myFunction1()">
            <label class="form-check-label" for="item8">Frais de cerificat du logiciel </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Abonnement_documentation" id="myCheck8"  onclick="myFunction1()">
            <label class="form-check-label" for="item9">Abonnement et documentation </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Eau_electricite" id="myCheck9"  onclick="myFunction1()">
            <label class="form-check-label" for="item10">Eau et Eléctricité </label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="item[]" value="Cotisation" id="myCheck10"  onclick="myFunction1()">
            <label class="form-check-label" for="item11">Cotisation </label>
         </div>
         <div id="case2">
            <fieldset>
                <legend>Montant</legend>
            </fieldset>
         </div>
         <!--code jalal-->
         <div id="text" style="display:none" >
         <label for="aai">Aménagement,agencement et installation:</label>
         <input type="number" name="aai" id="aai" >
         <input type="hidden" name="aainame" value="Aménagement,agencement et installation">
         </div>
         <div  id="text1" style="display:none">
            <label for="me">Matériels d'enseignement:</label>
            <input type="number" name="me" id="me" >
            <input type="hidden" name="mename" value="Matériels d'enseignement">
         </div>
         <div  id="text2" style="display:none">
            <label for="mb">Matériels de bureau:</label>
            <input type="number" name="mb" id="mb">
            <input type="hidden" name="mbname" value="Matériels de bureau">
         </div>
         <div  id="text3" style="display:none">
            <label for="mil">Matériels informatique et logiciels
            </label>
            <input type="number" name="mil" id="mil">
         </div>
         <div  id="text4" style="display:none">
            <label for="mb1">Mobilier de Bureau :</label>
            <input type="number" name="mb1" id="mb1">
         </div>
         
         <div  id="text5" style="display:none">
            <label for="me1">Mobilier d'enseignement :</label>
            <input type="number" name="me1" id="me1">
         </div>
         <div  id="text6" style="display:none">
            <label for="fi">Fournitures informatiques :</label>
            <input type="number" name="fi" id="fi">
         </div>
         
         <div  id="text7" style="display:none">
            <label for="fcl">Frais de cerificat du logiciel :</label>
            <input type="number" name="fcl" id="fcl">
         </div>
         <div  id="text8" style="display:none">
            <label for="ad">Abonnement et documentation:</label>
            <input type="number" name="ad" id="ad">
         </div>

         <div  id="text9" style="display:none">
            <label for="ee">Eau et Eléctricité :</label>
            <input type=" number" name="ee" id="ee">
         </div>
         <div  id="text10" style="display:none">
            <label for="c">Cotisation </label>
            <input type="number" name="c" id="c">
         </div>
         
         <input type="submit" class="button" value="Enregistrer">
        </form>
    </fieldset>
</div>
<?php 

?>
<!------------------jQuery------------------>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/jalal.js"></script>
</body>
</html>