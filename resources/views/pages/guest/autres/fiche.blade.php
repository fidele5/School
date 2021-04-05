<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>project</title>
    <!-- Font Awesome -->
    <link href="/css/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <style>
        h2{
            background: #3498db; 
            color: white; 
            font-weight: bold; 
            font-family:'Courier New', Courier, monospace;
            padding: 10px;
        }
        .container{
            margin-left: 5%,
            margin-right : 5%,
        }

        p{
            font-family:'Courier New', Courier, monospace;
            font: italic;
            color:#3498db;
        }

        table {
    		font-family:'Courier New', Courier, monospace;
    		border-collapse: collapse;
    		width: 100%;
            border-collapse: collapse; 
	        margin:50px auto;
    	}

    	td, tr {
    		border: 1px solid #dddddd;
    		text-align: left;
    		padding: 8px;
            font-size: 18px;
    	}   

         /* Zebra striping */
        tr:nth-of-type(odd) { 
            background: #eee; 
        }
         td:nth-of-type(odd) { 
            font-weight: bold;
        }

            
    </style>
</head>
<body>
<div class="container">
    
    <div class="row justify-content-center mt-3">
        <div class="col-12">
            <center>
                <h2 class="text-center">FICHE </h2>
            </center>
            <div class="mr-4 mt-4 justify-content-center">
                <table class="table table-light table-sm">
                    <tbody>
                        <tr>
                            <td>{{ __("pages.name") }}</td>
                            <td>{{ $etudiant->user->nom }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.post_name") }}</td>
                            <td>{{ $etudiant->user->postnom }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.nick_name") }}</td>
                            <td>{{ $etudiant->user->prenom }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.address") }}</td>
                            <td>{{ $etudiant->user->adresse }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("nationalite") }}</td>
                            <td>{{ $etudiant->user->nationalite }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.gender") }}</td>
                            <td>{{ $etudiant->user->genre }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.phone_number") }}</td>
                            <td>{{ $etudiant->user->telephone }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.email") }}</td>
                            <td>{{ $etudiant->user->email }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.promotions") }}</td>
                            <td>{{ $etudiant->promotion->nom }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("Matricule") }}</td>
                            <td>{{ $etudiant->matricule }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.birth_place") }}</td>
                            <td>{{ $etudiant->lieu_naissance }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.birth_date") }}</td>
                            <td>{{ $etudiant->date_naissance }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.comming_school") }}</td>
                            <td>{{ $etudiant->ecole_provenance }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.option_laureat") }}</td>
                            <td>{{ $etudiant->option_laureat }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.year_laureat") }}</td>
                            <td>{{ $etudiant->annee_laureat }}</td>
                        </tr>
                        <tr>
                            <td>{{ __("pages.percentage") }}</td>
                            <td>{{ $etudiant->pourcentage }} % </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>
                Votre Candidature a été acceptée ! Cependant, 
                Vous devez passer à nos bureauux déposer cette fiche accompagnée du borderau de paiement.
            </p>

            <p style="text-align: right; margin-top:15px; font-weight:bold;">
                La comptabilité
            </p>
            
        </div>
        
    </div>
</div>

<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>

</body>
</html>
