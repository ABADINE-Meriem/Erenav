@extends('layouts.app')

@section('content')
    <!--debut code-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                  <h1>Rapport Mensuel de l'Unite ...</h1>

                @if($errors->any())

                    <div class="alert alert-danger">

                        <ul class="list-group">
                        
                            @foreach($errors->all() as $error)

                                <li class="list-group-item text-danger">{{$error}}</li>

                            @endforeach
                        
                        </ul>

                    </div>

                @endif
                  <form action="{{url('/Rapports')}}" method="post">

                    {{ csrf_field() }}

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Achats consommés</p>
							 <input type="hidden" id="cpt60" name="cpt60" value="60">
                            <input type="hidden" id="des1" name="des1" value="Achats consommés">
                            <span class="input-group-text" id="plus1"><i class="fas fa-plus" id="iconPlus1"></i></span>
                            </div>
					
                        </h5>
                        <div class="card-body"  id="charg1">
                            <div class="input-group mb-5">
		
                                <label for="Achats de marchandises vendues">Achats de marchandises vendues :</label>
								   <input type="hidden" id="cpt600" name="cpt600" value="600">
                            <input type="hidden" id="des2" name="des2" value="Achats de marchandises vendues">
                                <input id="Achats de marchandises vendues" type="text" class="form-control ml-5" name="Achats de marchandises vendues" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Matières premières">Matières premières :</label>
								   <input type="hidden" id="cpt601" name="cpt601" value="601">
                            <input type="hidden" id="des3" name="des3" value="Matières premières">
                                <input id="Matières premières" type="text" class="form-control ml-5" name="Matières premières" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres approvisionnements">Autres approvisionnements :</label>
						    <input type="hidden" id="cpt602" name="cpt602" value="602">
                            <input type="hidden" id="des4" name="des4" value="Autres approvisionnements">
                                <input id="Autres approvisionnements" type="text" class="form-control ml-5" name="Autres approvisionnements" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Variations des stocks">Variations des stocks :</label>
								   <input type="hidden" id="cpt603" name="cpt603" value="603">
                            <input type="hidden" id="des5" name="des5" value="Variations des stocks">
                                <input id="Variations des stocks" type="text" class="form-control ml-5" name="Variations des stocks" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Achats d'études et de prestations de services">Achats d'études et de prestations de services :</label>
								   <input type="hidden" id="cpt604" name="cpt604" value="604">
                            <input type="hidden" id="des6" name="des6" value="Achats d'études et de prestations de services">
                                <input id="Achats d'études et de prestations de services" type="text" class="form-control ml-5" name="Achats d'études et de prestations de services" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Achats de matériels, équipements et travaux">Achats de matériels, équipements et travaux :</label>
								   <input type="hidden" id="cpt605" name="cpt605" value="605">
                            <input type="hidden" id="des7" name="des7" value="Achats de matériels, équipements et travaux">
                                <input id="Achats de matériels, équipements et travaux" type="text" class="form-control ml-5" name="Achats de matériels, équipements et travaux" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Achats non stockés de matières et fournitures ">Achats non stockés de matières et fournitures :</label>
								   <input type="hidden" id="cpt607" name="cpt607" value="607">
                            <input type="hidden" id="des8" name="des8" value="Achats non stockés de matières et fournitures">
                                <input id="Achats non stockés de matières et fournitures " type="text" class="form-control ml-5" name="Achats non stockés de matières et fournitures " placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Frais accessoires d'achat">Frais accessoires d'achat :</label>
								   <input type="hidden" id="cpt608" name="cpt608" value="608">
                            <input type="hidden" id="des9" name="des9" value="Frais accessoires d'achat">
                                <input id="Frais accessoires d'achat" type="text" class="form-control ml-5" name="Frais accessoires d'achat" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Rabais, remises et ristournes accordés">Rabais, remises, ristournes obtenus sur achats :</label>
								   <input type="hidden" id="cpt609" name="cpt609" value="609">
                            <input type="hidden" id="des10" name="des10" value="Rabais, remises, ristournes obtenus sur achats">
                                <input id="Rabais, remises, ristournes obtenus sur achats" type="text" class="form-control ml-5" name="Rabais, remises, ristournes obtenus sur achats" placeholder="0.00">
                            </div>
                        </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							<input type="hidden" id="cpt61" name="cpt61" value="61">
                            <input type="hidden" id="des11" name="des11" value="Services extérieurs">
                            <p>Services extérieurs</p>
                            <span class="input-group-text" id="plus2"><i class="fas fa-plus" id="iconPlus2"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg2">
                            <div class="input-group mb-5">
                                <label for="Sous-traitance générale">Sous-traitance générale :</label>
								<input type="hidden" id="cpt611" name="cpt611" value="611">
                            <input type="hidden" id="des12" name="des12" value="Sous-traitance générale">
                                <input id="Sous-traitance générale" type="text" class="form-control ml-5" name="Sous-traitance générale" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Locations">Locations :</label>
									<input type="hidden" id="cpt613" name="cpt613" value="613">
                            <input type="hidden" id="des13" name="des13" value="Locations">
                                <input id="Locations" type="text" class="form-control ml-5" name="Locations" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Charges locatives et charges de copropriété">Charges locatives et charges de copropriété :</label>
								<input type="hidden" id="cpt614" name="cpt614" value="614">
                            <input type="hidden" id="des14" name="des14" value="Charges locatives et charges de copropriété">
                                <input id="Charges locatives et charges de copropriété" type="text" class="form-control ml-5" name="Charges locatives et charges de copropriété" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Entretien, réparations et maintenance">Entretien, réparations et maintenance :</label>
								<input type="hidden" id="cpt615" name="cpt615" value="615">
                            <input type="hidden" id="des15" name="des15" value="Entretien, réparations et maintenance">
                                <input id="Entretien, réparations et maintenance" type="text" class="form-control ml-5" name="Entretien, réparations et maintenance" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Primes d'assurances">Primes d'assurances :</label>
								<input type="hidden" id="cpt616" name="cpt616" value="616">
                            <input type="hidden" id="des16" name="des16" value="Primes d'assurances">
                                <input id="Primes d'assurances" type="text" class="form-control ml-5" name="Primes d'assurances" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Etudes et recherches">Etudes et recherches :</label>
								<input type="hidden" id="cpt617" name="cpt617" value="617">
                            <input type="hidden" id="des17" name="des17" value="Etudes et recherches">
                                <input id="Etudes et recherches" type="text" class="form-control ml-5" name="Etudes et recherches" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Documentation et divers">Documentation et divers :</label>
								<input type="hidden" id="cpt618" name="cpt618" value="618">
                            <input type="hidden" id="des18" name="des18" value="Documentation et divers">
                                <input id="Documentation et divers" type="text" class="form-control ml-5" name="Documentation et divers" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Rabais, remises, ristournes obtenus sur services extérieurs">Rabais, remises, ristournes obtenus sur services extérieurs :</label>
                               <input type="hidden" id="cpt619" name="cpt619" value="619">
                            <input type="hidden" id="des19" name="des19" value="Rabais, remises, ristournes obtenus sur services extérieurs">
							   <input id="Rabais, remises, ristournes obtenus sur services extérieurs" type="text" class="form-control ml-5" name="Rabais, remises, ristournes obtenus sur services extérieurs" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							<input type="hidden" id="cpt62" name="cpt62" value="62">
                            <input type="hidden" id="des20" name="des20" value="Autres services extérieurs">
                            <p>Autres services extérieurs</p>
                            <span class="input-group-text" id="plus3"><i class="fas fa-plus" id="iconPlus3"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg3">
                            <div class="input-group mb-5">
                                <label for="Personnel extérieur à l'entreprise">Personnel extérieur à l'entreprise :</label>
								<input type="hidden" id="cpt621" name="cpt621" value="621">
                            <input type="hidden" id="des21" name="des21" value="Personnel extérieur à l'entreprise">
                                <input id="Personnel extérieur à l'entreprise" type="text" class="form-control ml-5" name="Personnel extérieur à l'entreprise" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Rémunérations d'intermédiaires et honoraires">Rémunérations d'intermédiaires et honoraires :</label>
								<input type="hidden" id="cpt622" name="cpt622" value="622">
                            <input type="hidden" id="des22" name="des22" value="Rémunérations d'intermédiaires et honoraires">
                                <input id="Rémunérations d'intermédiaires et honoraires" type="text" class="form-control ml-5" name="Rémunérations d'intermédiaires et honoraires" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Publicité, publication, relations publiques">Publicité, publication, relations publiques :</label>
								<input type="hidden" id="cpt623" name="cpt623" value="623">
                            <input type="hidden" id="des23" name="des23" value="Publicité, publication, relations publiques">
                                <input id="Publicité, publication, relations publiques" type="text" class="form-control ml-5" name="Publicité, publication, relations publiques" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Transports de biens et transport collectif du personnel">Transports de biens et transport collectif du personnel :</label>
								<input type="hidden" id="cpt624" name="cpt624" value="624">
                            <input type="hidden" id="des24" name="des24" value="Transports de biens et transport collectif du personnel">
                                <input id="Transports de biens et transport collectif du personnel" type="text" class="form-control ml-5" name="Transports de biens et transport collectif du personnel" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Déplacements, missions et réceptions">Déplacements, missions et réceptions :</label>
								<input type="hidden" id="cpt625" name="cpt625" value="625">
                            <input type="hidden" id="des25" name="des25" value="Déplacements, missions et réceptions">
                                <input id="Déplacements, missions et réceptions" type="text" class="form-control ml-5" name="Déplacements, missions et réceptions" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Frais postaux et de télécommunications">Frais postaux et de télécommunications :</label>
								<input type="hidden" id="cpt626" name="cpt626" value="626">
                            <input type="hidden" id="des26" name="des26" value="Frais postaux et de télécommunications">
                                <input id="Frais postaux et de télécommunications" type="text" class="form-control ml-5" name="Frais postaux et de télécommunications" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Services bancaires et assimilés">Services bancaires et assimilés :</label>
								<input type="hidden" id="cpt627" name="cpt627" value="627">
                            <input type="hidden" id="des27" name="des27" value="Services bancaires et assimilés">
                                <input id="Services bancaires et assimilés" type="text" class="form-control ml-5" name="Services bancaires et assimilés" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Cotisations et divers">Cotisations et divers :</label>
								<input type="hidden" id="cpt628" name="cpt628" value="628">
                            <input type="hidden" id="des28" name="des28" value="Cotisations et divers">
                                <input id="Cotisations et divers" type="text" class="form-control ml-5" name="Cotisations et divers" placeholder="0.00">
                            </div>
							
							 <div class="input-group mb-5">
                                <label for="Rabais, remises, ristournes obtenus sur autres services extérieurs">Rabais, remises, ristournes obtenus sur autres services extérieurs :</label>
                                <input type="hidden" id="cpt629" name="cpt629" value="629">
                            <input type="hidden" id="des29" name="des29" value="Rabais, remises, ristournes obtenus sur autres services extérieurs">
								<input id="Rabais, remises, ristournes obtenus sur autres services extérieurs" type="text" class="form-control ml-5" name="Rabais, remises, ristournes obtenus sur autres services extérieurs" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							<input type="hidden" id="cpt63" name="cpt63" value="63">
                            <input type="hidden" id="des30" name="des30" value="Charges de personnel">
                            <p>Charges de personnel</p>
                            <span class="input-group-text" id="plus4"><i class="fas fa-plus" id="iconPlus4"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg4">
                            <div class="input-group mb-5">
                                <label for="Rémunérations du personnel">Rémunérations du personnel :</label>
								<input type="hidden" id="cpt631" name="cpt631" value="631">
                            <input type="hidden" id="des31" name="des31" value="Rémunérations du personnel">
                                <input id="Rémunérations du personnel" type="text" class="form-control ml-5" name="Rémunérations du personnel" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Rémunérations de l'exploitant individuel">Rémunérations de l'exploitant individuel :</label>
								<input type="hidden" id="cpt634" name="cpt634" value="634">
                            <input type="hidden" id="des32" name="des32" value="Rémunérations de l'exploitant individuel">
                                <input id="Rémunérations de l'exploitant individuel" type="text" class="form-control ml-5" name="Rémunérations de l'exploitant individuel" placeholder="0.00">
                            </div>
							
							      <div class="input-group mb-5">
                                <label for="Cotisations aux organismes sociaux">Cotisations aux organismes sociaux :</label>
								<input type="hidden" id="cpt635" name="cpt635" value="635">
                            <input type="hidden" id="des33" name="des33" value="Cotisations aux organismes sociaux">
                                <input id="Cotisations aux organismes sociaux" type="text" class="form-control ml-5" name="Cotisations aux organismes sociaux" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Charges sociales de l'exploitant individuel">Charges sociales de l'exploitant individuel :</label>
								<input type="hidden" id="cpt636" name="cpt636" value="636">
                            <input type="hidden" id="des34" name="des34" value="Charges sociales de l'exploitant individuel">
                                <input id="Charges sociales de l'exploitant individuel" type="text" class="form-control ml-5" name="Charges sociales de l'exploitant individuel" placeholder="0.00">
                            </div>
							
							      <div class="input-group mb-5">
                                <label for="Autres charges sociales">Autres charges sociales :</label>
								<input type="hidden" id="cpt637" name="cpt637" value="637">
                            <input type="hidden" id="des35" name="des35" value="Autres charges sociales">
                                <input id="Autres charges sociales" type="text" class="form-control ml-5" name="Autres charges sociales" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres charges de personnel">Autres charges de personnel :</label>
								<input type="hidden" id="cpt638" name="cpt638" value="638">
                            <input type="hidden" id="des36" name="des36" value="Autres charges de personnel">
                                <input id="Autres charges de personnel" type="text" class="form-control ml-5" name="Autres charges de personnel" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>
					
					
					<div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							<input type="hidden" id="cpt64" name="cpt64" value="64">
                            <input type="hidden" id="des37" name="des37" value="Impôts, taxes et versements assimilés">
                            <p>Impôts, taxes et versements assimilés</p>
                            <span class="input-group-text" id="plus5"><i class="fas fa-plus" id="iconPlus5"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg5">
                            <div class="input-group mb-5">
                                <label for="Impôts, taxes et versements assimilés sur rémunérations">Impôts, taxes et versements assimilés sur rémunérations :</label>
								<input type="hidden" id="cpt641" name="cpt641" value="641">
                            <input type="hidden" id="des38" name="des38" value="Impôts, taxes et versements assimilés sur rémunérations">
                                <input id="Impôts, taxes et versements assimilés sur rémunérations" type="text" class="form-control ml-5" name="Impôts, taxes et versements assimilés sur rémunérations" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Impôts et taxes non récupérables sur chiffre d'affaires">Impôts et taxes non récupérables sur chiffre d'affaires :</label>
                                <input type="hidden" id="cpt642" name="cpt642" value="642">
                            <input type="hidden" id="des39" name="des39" value="Impôts et taxes non récupérables sur chiffre d'affaires">
								<input id="Impôts et taxes non récupérables sur chiffre d'affaires" type="text" class="form-control ml-5" name="Impôts et taxes non récupérables sur chiffre d'affaires" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres impôts et taxes (hors impôts sur les résultats)">Autres impôts et taxes (hors impôts sur les résultats) :</label>
                               <input type="hidden" id="cpt645" name="cpt645" value="645">
                            <input type="hidden" id="des40" name="des40" value="Autres impôts et taxes (hors impôts sur les résultats)">
							   <input id="Autres impôts et taxes (hors impôts sur les résultats)" type="text" class="form-control ml-5" name="Autres impôts et taxes (hors impôts sur les résultats)" placeholder="0.00">
                            </div>
							
							 </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							 <input type="hidden" id="cpt65" name="cpt65" value="65">
                            <input type="hidden" id="des41" name="des41" value="Autres charges opérationnelles">
							
                            <p>Autres charges opérationnelles</p>
                            <span class="input-group-text" id="plus6"><i class="fas fa-plus" id="iconPlus6"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg6">
                            <div class="input-group mb-5">
                                <label for="Redevances pour concessions, brevets, licences, logiciels, droits et valeurs similaires">Redevances pour concessions, brevets, licences, logiciels, droits et valeurs similaires :</label>
                                <input type="hidden" id="cpt651" name="cpt651" value="651">
                            <input type="hidden" id="des42" name="des42" value="Redevances pour concessions, brevets, licences, logiciels, droits et valeurs similaires">
								<input id="Redevances pour concessions, brevets, licences, logiciels, droits et valeurs similaires" type="text" class="form-control ml-5" name="Redevances pour concessions, brevets, licences, logiciels, droits et valeurs similaires" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Moins-values sur sortie d'actifs immobilisés non financiers">Moins-values sur sortie d'actifs immobilisés non financiers :</label>
                                input type="hidden" id="cpt652" name="cpt652" value="652">
                            <input type="hidden" id="des43" name="des43" value="Moins-values sur sortie d'actifs immobilisés non financiers">
								<input id="Moins-values sur sortie d'actifs immobilisés non financiers" type="text" class="form-control ml-5" name="Moins-values sur sortie d'actifs immobilisés non financiers" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Jetons de présence">Jetons de présence :</label>
                               <input type="hidden" id="cpt653" name="cpt653" value="653">
                            <input type="hidden" id="des44" name="des44" value="Jetons de présence">
								<input id="Jetons de présence" type="text" class="form-control ml-5" name="Jetons de présence" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Pertes sur créances irrécouvrables">Pertes sur créances irrécouvrables :</label>
                               input type="hidden" id="cpt654" name="cpt654" value="654">
                            <input type="hidden" id="des45" name="des45" value="Pertes sur créances irrécouvrables">
							   <input id="Pertes sur créances irrécouvrables" type="text" class="form-control ml-5" name="Pertes sur créances irrécouvrables" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Quote-part de résultat sur opérations faites en commun">Quote-part de résultat sur opérations faites en commun :</label>
                               input type="hidden" id="cpt655" name="cpt655" value="655">
                            <input type="hidden" id="des46" name="des46" value="Quote-part de résultat sur opérations faites en commun">
							   <input id="Quote-part de résultat sur opérations faites en commun" type="text" class="form-control ml-5" name="Quote-part de résultat sur opérations faites en commun" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Amendes et pénalités, subventions accordées, dons et libéralités">Amendes et pénalités, subventions accordées, dons et libéralités :</label>
                               input type="hidden" id="cpt656" name="cpt656" value="656">
                            <input type="hidden" id="des47" name="des47" value="Amendes et pénalités, subventions accordées, dons et libéralités">
							   <input id="Amendes et pénalités, subventions accordées, dons et libéralités" type="text" class="form-control ml-5" name="Amendes et pénalités, subventions accordées, dons et libéralités" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Charges exceptionnelles de gestion courante">Charges exceptionnelles de gestion courante :</label>
                               input type="hidden" id="cpt657" name="cpt657" value="657">
                            <input type="hidden" id="des48" name="des48" value="Charges exceptionnelles de gestion courante">
							   <input id="Charges exceptionnelles de gestion courante" type="text" class="form-control ml-5" name="Charges exceptionnelles de gestion courante" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres charges de gestion courante">Autres charges de gestion courante :</label>
                             <input type="hidden" id="cpt658" name="cpt658" value="658">
                            <input type="hidden" id="des49" name="des49" value="Autres charges de gestion courante">
							 <input id="Autres charges de gestion courante" type="text" class="form-control ml-5" name="Autres charges de gestion courante" placeholder="0.00">
                            </div>

                        </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							<input type="hidden" id="cpt66" name="cpt66" value="66">
                            <input type="hidden" id="des50" name="des50" value="Charges financières">
                            <p>Charges financières</p>
                            <span class="input-group-text" id="plus7"><i class="fas fa-plus" id="iconPlus7"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg7">
                            <div class="input-group mb-5">
                                <label for="Charges d'intérêts">Charges d'intérêts :</label>
								 <input type="hidden" id="cpt661" name="cpt661" value="661">
                            <input type="hidden" id="des51" name="des51" value="Charges d'intérêts">
                                <input id="Charges d'intérêts" type="text" class="form-control ml-5" name="Charges d'intérêts" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Pertes sur créances liées a des participations">Pertes sur créances liées a des participations :</label>
								 <input type="hidden" id="cpt664" name="cpt664" value="664">
                            <input type="hidden" id="des52" name="des52" value="Pertes sur créances liées a des participations">
                                <input id="Pertes sur créances liées a des participations" type="text" class="form-control ml-5" name="Pertes sur créances liées a des participations" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Ecart d'évaluation sur actifs financiers - moins-values">Ecart d'évaluation sur actifs financiers - moins-values :</label>
                                <input type="hidden" id="cpt665" name="cpt665" value="665">
                            <input type="hidden" id="des53" name="des53" value="Ecart d'évaluation sur actifs financiers - moins-values">
							   <input id="Ecart d'évaluation sur actifs financiers - moins-values" type="text" class="form-control ml-5" name="Ecart d'évaluation sur actifs financiers - moins-values" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Pertes de change">Pertes de change :</label>
								 <input type="hidden" id="cpt666" name="cpt666" value="666">
                            <input type="hidden" id="des54" name="des54" value="Pertes de change">
                                <input id="Pertes de change" type="text" class="form-control ml-5" name="Pertes de change" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Pertes nettes sur cessions d'actifs financiers">Pertes nettes sur cessions d'actifs financiers :</label>
								 <input type="hidden" id="cpt667" name="cpt667" value="667">
                            <input type="hidden" id="des55" name="des55" value="Pertes nettes sur cessions d'actifs financiers">
                                <input id="Pertes nettes sur cessions d'actifs financiers" type="text" class="form-control ml-5" name="Pertes nettes sur cessions d'actifs financiers" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres charges financières ">Autres charges financières  :</label>
								 <input type="hidden" id="cpt668" name="cpt668" value="668">
                            <input type="hidden" id="des56" name="des56" value="Autres charges financières">
                                <input id="Autres charges financières " type="text" class="form-control ml-5" name="Autres charges financières " placeholder="0.00">
                            </div>

                            

                        </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Eléments extraordinaires (charges)</p>
							<input type="hidden" id="cpt67" name="cpt67" value="67">
                            <input type="hidden" id="des57" name="des57" value="Eléments extraordinaires (charges)">
                            <span class="input-group-text" id="plus8"><i class="fas fa-plus" id="iconPlus8"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg8">
                            <div class="input-group mb-5">
							<input type="hidden" id="cpt67" name="cpt67" value="67">
                            <input type="hidden" id="des57" name="des57" value="Eléments extraordinaires (charges)">
                                <input id="Eléments extraordinaires (charges)" type="text" class="form-control ml-5" name="Eléments extraordinaires (charges)" placeholder="0.00">
                            </div>

                        </div>        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							<input type="hidden" id="cpt68" name="cpt68" value="68">
                            <input type="hidden" id="des58" name="des58" value="Dotations aux amortissements, provisions et pertes de valeur">
                            <p>Dotations aux amortissements, provisions et pertes de valeur</p>
                            <span class="input-group-text" id="plus9"><i class="fas fa-plus" id="iconPlus9"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg9">
                            <div class="input-group mb-5">
                                <label for="Dotations aux amortissements, provisions et pertes de valeur, actifs non courants">Dotations aux amortissements, provisions et pertes de valeur, actifs non courants :</label>
                                <input type="hidden" id="cpt681" name="cpt681" value="681">
                            <input type="hidden" id="des59" name="des59" value="Dotations aux amortissements, provisions et pertes de valeur, actifs non courants">
								<input id="Dotations aux amortissements, provisions et pertes de valeur, actifs non courants" type="text" class="form-control ml-5" name="Dotations aux amortissements, provisions et pertes de valeur, actifs non courants" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Dotations aux amortissements, provisions et pertes de valeur des biens mis en concession">Dotations aux amortissements, provisions et pertes de valeur des biens mis en concession :</label>
                                <input type="hidden" id="cpt682" name="cpt682" value="682">
                            <input type="hidden" id="des60" name="des60" value="Dotations aux amortissements, provisions et pertes de valeur des biens mis en concession">
								<input id="Dotations aux amortissements, provisions et pertes de valeur des biens mis en concession" type="text" class="form-control ml-5" name="Dotations aux amortissements, provisions et pertes de valeur des biens mis en concession" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Dotations aux amortissements, provisions et pertes de valeur, actifs courants">Dotations aux amortissements, provisions et pertes de valeur, actifs courants :</label>
                                <input type="hidden" id="cpt685" name="cpt685" value="685">
                            <input type="hidden" id="des61" name="des61" value="Dotations aux amortissements, provisions et pertes de valeur, actifs courants">
								<input id="Dotations aux amortissements, provisions et pertes de valeur, actifs courants" type="text" class="form-control ml-5" name="Dotations aux amortissements, provisions et pertes de valeur, actifs courants" placeholder="0.00">
                            </div>
							
							<div class="input-group mb-5">
                                <label for="Dotations aux amortissements, provisions et pertes de valeur, éléments financiers">Dotations aux amortissements, provisions et pertes de valeur, éléments financiers :</label>
                               <input type="hidden" id="cpt686" name="cpt686" value="686">
                            <input type="hidden" id="des62" name="des62" value="Dotations aux amortissements, provisions et pertes de valeur, éléments financiers">
							   <input id="Dotations aux amortissements, provisions et pertes de valeur, éléments financiers" type="text" class="form-control ml-5" name="Dotations aux amortissements, provisions et pertes de valeur, éléments financiers" placeholder="0.00">
                            </div>

                        </div>
                        
			        </div>
					
					
					
					<div class="card mb-5">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
							 <input type="hidden" id="cpt69" name="cpt69" value="69">
                            <input type="hidden" id="des63" name="des63" value="Impôts sur les résultats et assimilés">
                            <p>Impôts sur les résultats et assimilés</p>
							
                            <span class="input-group-text" id="plus10"><i class="fas fa-plus" id="iconPlus10"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="charg10">
                            <div class="input-group mb-5">
                                <label for="Imposition différée actif">Imposition différée actif :</label>
                                <input type="hidden" id="cpt692" name="cpt692" value="692">
                            <input type="hidden" id="des64" name="des64" value="Imposition différée actif">
							   <input id="Imposition différée actif" type="text" class="form-control ml-5" name="Imposition différée actif" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Imposition différée passif">Imposition différée passif :</label>
                               <input type="hidden" id="cpt693" name="cpt693" value="693">
                            <input type="hidden" id="des65" name="des65" value="Imposition différée passif">
							  <input id="Imposition différée passif" type="text" class="form-control ml-5" name="Imposition différée passif" placeholder="0.00">
                            </div>
							<div class="input-group mb-5">
                                <label for="Impôts sur les bénéfices basés sur le résultat des activités ordinaires">Impôts sur les bénéfices basés sur le résultat des activités ordinaires :</label>
                                <input type="hidden" id="cpt695" name="cpt695" value="695">
                            <input type="hidden" id="des66" name="des66" value="Impôts sur les bénéfices basés sur le résultat des activités ordinaires">
							   <input id="Impôts sur les bénéfices basés sur le résultat des activités ordinaires" type="text" class="form-control ml-5" name="Impôts sur les bénéfices basés sur le résultat des activités ordinaires" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres impôts sur les résultats">Autres impôts sur les résultats :</label>
                               <input type="hidden" id="cpt698" name="cpt698" value="698">
                            <input type="hidden" id="des67" name="des67" value="Autres impôts sur les résultats">
							  <input id="Autres impôts sur les résultats" type="text" class="form-control ml-5" name="Autres impôts sur les résultats" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>

                    <div class="card mb-5">
                        <h5 class="card-header d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </h5>        
			        </div>
                  
                  
                  </form>
            </div>
        </div>
    </div>
    <!--fin code-->
    <script>
    
    $(document).ready(function(){
        
        $(".card-body").hide();
        
        $("#plus1").click(function(){

            if($("#charg1").css('display') == 'none'){
				$("#iconPlus1").toggleClass('fas fa-minus');
				$("#charg1").show();
			}else{
				$("#iconPlus1").toggleClass('fas fa-plus');
				$("#charg1").hide();
			}
            
        });

       

        $("#plus2").click(function(){
            if($("#charg2").css('display') == 'none'){
				$("#iconPlus2").toggleClass('fas fa-minus');
				$("#charg2").show();
			}else{
				$("#iconPlus2").toggleClass('fas fa-plus');
				$("#charg2").hide();
			}
        });

        $("#plus3").click(function(){
            if($("#charg3").css('display') == 'none'){
				$("#iconPlus3").toggleClass('fas fa-minus');
				$("#charg3").show();
			}else{
				$("#iconPlus3").toggleClass('fas fa-plus');
				$("#charg3").hide();
			}
        });

        $("#plus4").click(function(){
            if($("#charg4").css('display') == 'none'){
				$("#iconPlus4").toggleClass('fas fa-minus');
				$("#charg4").show();
			}else{
				$("#iconPlus4").toggleClass('fas fa-plus');
				$("#charg4").hide();
			}
        });

        $("#plus5").click(function(){
            if($("#charg5").css('display') == 'none'){
				$("#iconPlus5").toggleClass('fas fa-minus');
				$("#charg5").show();
			}else{
				$("#iconPlus5").toggleClass('fas fa-plus');
				$("#charg5").hide();
			}
        });

        $("#plus6").click(function(){
            if($("#charg6").css('display') == 'none'){
				$("#iconPlus6").toggleClass('fas fa-minus');
				$("#charg6").show();
			}else{
				$("#iconPlus6").toggleClass('fas fa-plus');
				$("#charg6").hide();
			}
        });

        $("#plus7").click(function(){
            if($("#charg7").css('display') == 'none'){
				$("#iconPlus7").toggleClass('fas fa-minus');
				$("#charg7").show();
			}else{
				$("#iconPlus7").toggleClass('fas fa-plus');
				$("#charg7").hide();
			}
        });

        $("#plus8").click(function(){
            if($("#charg8").css('display') == 'none'){
				$("#iconPlus8").toggleClass('fas fa-minus');
				$("#charg8").show();
			}else{
				$("#iconPlus8").toggleClass('fas fa-plus');
				$("#charg8").hide();
			}
        });
		
		$("#plus9").click(function(){
            if($("#charg9").css('display') == 'none'){
				$("#iconPlus9").toggleClass('fas fa-minus');
				$("#charg9").show();
			}else{
				$("#iconPlus9").toggleClass('fas fa-plus');
				$("#charg9").hide();
			}
        });
		
		$("#plus10").click(function(){
            if($("#charg10").css('display') == 'none'){
				$("#iconPlus10").toggleClass('fas fa-minus');
				$("#charg10").show();
			}else{
				$("#iconPlus10").toggleClass('fas fa-plus');
				$("#charg10").hide();
			}
        });

    });
    
    </script>
@endsection