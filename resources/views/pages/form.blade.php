@extends('layouts.app')

@section('title')

Tableau De Bord/{{$user}}

@endsection

@section('content')
    <!--debut code-->
    <div class="container-fluid col-lg-10 offset-lg-1">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex">
                    <div class="d-flex  mb-6 text-white"> <h3>Rapport de produits de  l'Unité {{ $user }}</h3> </div>
                </div>
            <div class=" pre-scrollable" style="max-height: 77vh">
                  @if (Session::has('success'))
	                <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @endif


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

                    <div class="p-2 ml-auto col-md-2">
                        <input id="date" type="text" class="form-control" name="date" readonly>
                    </div>    

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Ventes de marchandises, produits fabriqués, prestations de service et produits annexes</p>
                            <input type="hidden" id="cpt70" name="cpt70" value="70">
                            <input type="hidden" id="des1" name="des1" value="Ventes de marchandises, produits fabriqués, prestations de service et produits annexes">
                            <span class="input-group-text" id="plus1"><i class="fas fa-plus" id="iconPlus1"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod1">
                            <div class="input-group mb-5">
                                <label for="Ventes de marchandises" class="col-md-4 col-form-label text-md-left">Ventes de marchandises :</label>
                                <input type="hidden" id="cpt700" name="cpt700" value="700">
                                <input type="hidden" id="des2" name="des2" value="Ventes de marchandises">
                                <input id="Ventes_de_marchandises" type="text" class="form-control ml-5" name="Ventes_de_marchandises" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Ventes de produits finis" class="col-md-4 col-form-label text-md-left">Ventes de produits finis :</label>
                                <input type="hidden" id="cpt701" name="cpt701" value="701">
                                <input type="hidden" id="des3" name="des3" value="Ventes de produits finis">
                                <input id="Ventes_de_produits finis" type="text" class="form-control ml-5" name="Ventes_de_produits_finis" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Ventes de produits intermédiaires" class="col-md-4 col-form-label text-md-left">Ventes de produits intermédiaires :</label>
                                <input type="hidden" id="cpt702" name="cpt702" value="702">
                                <input type="hidden" id="des4" name="des4" value="Ventes de produits intermédiaires">
                                <input id="Ventes_de_produits_intermédiaires" type="text" class="form-control ml-5" name="Ventes_de_produits_intermédiaires" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Ventes de produits résiduels" class="col-md-4 col-form-label text-md-left">Ventes de produits résiduels :</label>
                                <input type="hidden" id="cpt703" name="cpt703" value="703">
                                <input type="hidden" id="des5" name="des5" value="Ventes de produits résiduels">
                                <input id="Ventes_de_produits_résiduels" type="text" class="form-control ml-5" name="Ventes_de_produits_résiduels" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Vente de travaux" class="col-md-4 col-form-label text-md-left">Vente de travaux :</label>
                                <input type="hidden" id="cpt704" name="cpt704" value="704">
                                <input type="hidden" id="des6" name="des6" value="Vente de travaux">
                                <input id="Vente_de_travaux" type="text" class="form-control ml-5" name="Vente_de_travaux" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Vente d'études" class="col-md-4 col-form-label text-md-left">Vente d'études :</label>
                                <input type="hidden" id="cpt705" name="cpt705" value="705">
                                <input type="hidden" id="des7" name="des7" value="Vente d'études">
                                <input id="Vente_détudes" type="text" class="form-control ml-5" name="Vente_détudes" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres prestations de services " class="col-md-4 col-form-label text-md-left">Autres prestations de services :</label>
                                <input type="hidden" id="cpt706" name="cpt706" value="706">
                                <input type="hidden" id="des8" name="des8" value="Autres prestations de services">
                                <input id="Autres_prestations_de_services " type="text" class="form-control ml-5" name="Autres_prestations_de_services" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Produits des activités annexes" class="col-md-4 col-form-label text-md-left">Produits des activités annexes :</label>
                                <input type="hidden" id="cpt708" name="cpt708" value="708">
                                <input type="hidden" id="des9" name="des9" value="Produits des activités annexes">
                                <input id="Produits_des_activités_annexes" type="text" class="form-control ml-5" name="Produits_des_activités_annexes" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Rabais, remises et ristournes accordés" class="col-md-4 col-form-label text-md-left">Rabais, remises et ristournes accordés :</label>
                                <input type="hidden" id="cpt709" name="cpt709" value="709">
                                <input type="hidden" id="des10" name="des10" value="Rabais, remises et ristournes accordés">
                                <input id="Rabais_remises_et _ristournes_accordés" type="text" class="form-control ml-5" name="Rabais_remises_et_ristournes_accordés" placeholder="0.00">
                            </div>
                        </div>
                        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Production stockée ou déstockée</p>
                            <input type="hidden" id="cpt72" name="cpt72" value="72">
                            <input type="hidden" id="des11" name="des11" value="Production stockée ou déstockée">
                            <span class="input-group-text" id="plus2"><i class="fas fa-plus" id="iconPlus2"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod2">
                            <div class="input-group mb-5">
                                <label for="Variation de stocks d'encours" class="col-md-4 col-form-label text-md-left">Variation de stocks d'encours :</label>
                                <input type="hidden" id="cpt723" name="cpt723" value="723">
                                <input type="hidden" id="des12" name="des12" value="Variation de stocks d'encours">
                                <input id="Variation_de_stocks_dencours" type="text" class="form-control ml-5" name="Variation_de_stocks_dencours" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Variation de stocks de produits" class="col-md-4 col-form-label text-md-left">Variation de stocks de produits :</label>
                                <input type="hidden" id="cpt724" name="cpt724" value="724">
                                <input type="hidden" id="des13" name="des13" value="Variation de stocks de produits">
                                <input id="Variation_de_stocks_de_produits" type="text" class="form-control ml-5" name="Variation_de_stocks_de_produits" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Production immobilisée</p>
                            <input type="hidden" id="cpt73" name="cpt73" value="73">
                            <input type="hidden" id="des14" name="des14" value="Production immobilisée">
                            <span class="input-group-text" id="plus3"><i class="fas fa-plus" id="iconPlus3"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod3">
                            <div class="input-group mb-5">
                                <label for="Production_immobilisée_dactifs_incorporels" class="col-md-4 col-form-label text-md-left">Production immobilisée d'actifs incorporels :</label>
                                <input type="hidden" id="cpt731" name="cpt731" value="731">
                                <input type="hidden" id="des15" name="des15" value="Production immobilisée d'actifs incorporels">
                                <input id="Production_immobilisée_dactifs_incorporels" type="text" class="form-control ml-5" name="Production_immobilisée_dactifs_incorporels" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Production immobilisée d'actifs corporels" class="col-md-4 col-form-label text-md-left">Production immobilisée d'actifs corporels :</label>
                                <input type="hidden" id="cpt732" name="cpt732" value="732">
                                <input type="hidden" id="des16" name="des16" value="Production immobilisée d'actifs corporels">
                                <input id="Production_immobilisée_dactifs_corporels" type="text" class="form-control ml-5" name="Production_immobilisée_dactifs_corporels" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Subventions d'exploitation</p>
                            <input type="hidden" id="cpt74" name="cpt74" value="74">
                            <input type="hidden" id="des17" name="des17" value="Subventions d'exploitation">
                            <span class="input-group-text" id="plus4"><i class="fas fa-plus" id="iconPlus4"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod4">
                            <div class="input-group mb-5">
                                <label for="Subvention d'équilibre" class="col-md-4 col-form-label text-md-left">Subvention d'équilibre :</label>
                                <input type="hidden" id="cpt741" name="cpt741" value="741">
                                <input type="hidden" id="des18" name="des18" value="Subvention d'équilibre">
                                <input id="Subvention_déquilibre" type="text" class="form-control ml-5" name="Subvention_déquilibre" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres subventions d'exploitation" class="col-md-4 col-form-label text-md-left">Autres subventions d'exploitation :</label>
                                <input type="hidden" id="cpt748" name="cpt748" value="748">
                                <input type="hidden" id="des19" name="des19" value="Autres subventions d'exploitation">
                                <input id="Autres_subventions_dexploitation" type="text" class="form-control ml-5" name="Autres_subventions_dexploitation" placeholder="0.00">
                            </div>
    
                        </div>
                        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Autres produits opérationnels</p>
                            <input type="hidden" id="cpt75" name="cpt75" value="75">
                            <input type="hidden" id="des20" name="des20" value="Autres produits opérationnels">
                            <span class="input-group-text" id="plus5"><i class="fas fa-plus" id="iconPlus5"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod5">
                            <div class="input-group mb-5">
                                <label for="Redevances pour concessions, brevets, licences, logiciels et valeurs similaires" class="col-md-4 col-form-label text-md-left">Redevances pour concessions, brevets, licences, logiciels et valeurs similaires :</label>
                                <input type="hidden" id="cpt751" name="cpt751" value="751">
                                <input type="hidden" id="des21" name="des21" value="Redevances pour concessions, brevets, licences, logiciels et valeurs similaires">
                                <input id="Redevances_pour_concessions_brevets_licences_logiciels_et_valeurs_similaires" type="text" class="form-control ml-5" name="Redevances_pour_concessions_brevets_licences_logiciels_et_valeurs_similaires" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Plus_values_sur_sorties_dactifs_immobilisés_non_financiers" class="col-md-4 col-form-label text-md-left">Plus-values sur sorties d'actifs immobilisés non financiers :</label>
                                <input type="hidden" id="cpt752" name="cpt752" value="752">
                                <input type="hidden" id="des22" name="des22" value="Plus-values sur sorties d'actifs immobilisés non financiers">
                                <input id="Plus_values_sur_sorties_dactifs_immobilisés_non_financiers" type="text" class="form-control ml-5" name="Plus_values_sur_sorties_dactifs_immobilisés_non_financiers" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Jetons de présence et rémunérations d'administrateurs ou de gérants" class="col-md-4 col-form-label text-md-left">Jetons de présence et rémunérations d'administrateurs ou de gérants :</label>
                                <input type="hidden" id="cpt753" name="cpt753" value="753">
                                <input type="hidden" id="des23" name="des23" value="Jetons de présence et rémunérations d'administrateurs ou de gérants">
                                <input id="Jetons_de_présence_et_rémunérations_dadministrateurs_ou_de_gérants" type="text" class="form-control ml-5" name="Jetons_de_présence_et_rémunérations_dadministrateurs_ou_de_gérants" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Quotes-parts de subventions d'investissement virées au résultat de l'exercice" class="col-md-4 col-form-label text-md-left">Quotes-parts de subventions d'investissement virées au résultat de l'exercice :</label>
                                <input type="hidden" id="cpt754" name="cpt754" value="754">
                                <input type="hidden" id="des24" name="des24" value="Quotes-parts de subventions d'investissement virées au résultat de l'exercice">
                                <input id="Quotes_parts_de_subventions_dinvestissement_virées_au_résultat_de_lexercice" type="text" class="form-control ml-5" name="Quotes_parts_de_subventions_dinvestissement_virées_au_résultat_de_lexercice" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Quote_part_de_résultat_sur_opérations_faites_en_commun" class="col-md-4 col-form-label text-md-left">Quote-part de résultat sur opérations faites en commun :</label>
                                <input type="hidden" id="cpt755" name="cpt755" value="755">
                                <input type="hidden" id="des25" name="des25" value="Quote-part de résultat sur opérations faites en commun">
                                <input id="Quote_part_de_résultat_sur_opérations_faites_en_commun" type="text" class="form-control ml-5" name="Quote_part_de_résultat_sur_opérations_faites_en_commun" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Rentrées sur créances amorties" class="col-md-4 col-form-label text-md-left">Rentrées sur créances amorties :</label>
                                <input type="hidden" id="cpt756" name="cpt756" value="756">
                                <input type="hidden" id="des26" name="des26" value="Rentrées sur créances amorties">
                                <input id="Rentrées_sur_créances_amorties" type="text" class="form-control ml-5" name="Rentrées_sur_créances_amorties" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Produits exceptionnels sur opérations de gestion" class="col-md-4 col-form-label text-md-left">Produits exceptionnels sur opérations de gestion :</label>
                                <input type="hidden" id="cpt757" name="cpt757" value="757">
                                <input type="hidden" id="des27" name="des27" value="Produits exceptionnels sur opérations de gestion">
                                <input id="Produits_exceptionnels_sur_opérations_de_gestion" type="text" class="form-control ml-5" name="Produits_exceptionnels_sur_opérations_de_gestion" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres produits de gestion courante" class="col-md-4 col-form-label text-md-left">Autres produits de gestion courante :</label>
                                <input type="hidden" id="cpt758" name="cpt758" value="758">
                                <input type="hidden" id="des28" name="des28" value="Autres produits de gestion courante">
                                <input id="Autres_produits_de_gestion_courante" type="text" class="form-control ml-5" name="Autres_produits_de_gestion_courante" placeholder="0.00">
                            </div>

                        </div>
                        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Produits financiers</p>
                            <input type="hidden" id="cpt76" name="cpt76" value="76">
                            <input type="hidden" id="des29" name="des29" value="Produits financiers">
                            <span class="input-group-text" id="plus6"><i class="fas fa-plus" id="iconPlus6"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod6">
                            <div class="input-group mb-5">
                                <label for="Produits des participations" class="col-md-4 col-form-label text-md-left">Produits des participations :</label>
                                <input type="hidden" id="cpt761" name="cpt761" value="761">
                                <input type="hidden" id="des30" name="des30" value="Produits des participations">
                                <input id="Produits_des_participations" type="text" class="form-control ml-5" name="Produits_des_participations" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Revenus des actifs financiers" class="col-md-4 col-form-label text-md-left">Revenus des actifs financiers :</label>
                                <input type="hidden" id="cpt762" name="cpt762" value="762">
                                <input type="hidden" id="des31" name="des31" value="Revenus des actifs financiers">
                                <input id="Revenus_des_actifs_financiers" type="text" class="form-control ml-5" name="Revenus_des_actifs_financiers" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Revenus de créances" class="col-md-4 col-form-label text-md-left">Revenus de créances :</label>
                                <input type="hidden" id="cpt763" name="cpt763" value="763">
                                <input type="hidden" id="des32" name="des32" value="Revenus de créances">
                                <input id="Revenus_de_créances" type="text" class="form-control ml-5" name="Revenus_de_créances" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Ecart_dévaluation_sur_actifs_financiers_plus_values" class="col-md-4 col-form-label text-md-left">Ecart d'évaluation sur actifs financiers, plus-values :</label>
                                <input type="hidden" id="cpt765" name="cpt765" value="765">
                                <input type="hidden" id="des33" name="des33" value="Ecart d'évaluation sur actifs financiers, plus-values">
                                <input id="Ecart_dévaluation_sur_actifs_financiers_plus_values" type="text" class="form-control ml-5" name="Ecart_dévaluation_sur_actifs_financiers_plus_values" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Gains de change" class="col-md-4 col-form-label text-md-left">Gains de change :</label>
                                <input type="hidden" id="cpt766" name="cpt766" value="766">
                                <input type="hidden" id="des34" name="des34" value="Gains de change">
                                <input id="Gains_de_change" type="text" class="form-control ml-5" name="Gains_de_change" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Profits nets sur cessions d'actifs financiers" class="col-md-4 col-form-label text-md-left">Profits nets sur cessions d'actifs financiers :</label>
                                <input type="hidden" id="cpt767" name="cpt767" value="767">
                                <input type="hidden" id="des35" name="des35" value="Profits nets sur cessions d'actifs financiers">
                                <input id="Profits_nets_sur_cessions_dactifs_financiers" type="text" class="form-control ml-5" name="Profits_nets_sur_cessions_dactifs_financiers" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Autres produits financiers" class="col-md-4 col-form-label text-md-left">Autres produits financiers :</label>
                                <input type="hidden" id="cpt768" name="cpt768" value="768">
                                <input type="hidden" id="des36" name="des36" value="Autres produits financiers">
                                <input id="Autres_produits_financiers" type="text" class="form-control ml-5" name="Autres_produits_financiers" placeholder="0.00">
                            </div>

                        </div>
                        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Eléments extraordinaires</p>
                            <input type="hidden" id="cpt77" name="cpt77" value="77">
                            <input type="hidden" id="des37" name="des37" value="Eléments extraordinaires">
                            <span class="input-group-text" id="plus7"><i class="fas fa-plus" id="iconPlus7"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod7">
                            <div class="input-group mb-5">
                                <input id="Eléments_extraordinaires" type="text" class="form-control ml-5" name="Eléments_extraordinaires" placeholder="0.00">
                            </div>

                        </div>        
			        </div>

                    <div class="card mb-2">
                        <h5 class="card-header">
                            <div class="input-group-prepend d-flex justify-content-between">
                            <p>Reprises sur pertes de valeur et provisions</p>
                            <input type="hidden" id="cpt78" name="cpt78" value="78">
                            <input type="hidden" id="des38" name="des38" value="Reprises sur pertes de valeur et provisions">
                            <span class="input-group-text" id="plus8"><i class="fas fa-plus" id="iconPlus8"></i></span>
                            </div>
                        </h5>
                        <div class="card-body"  id="prod8">
                            <div class="input-group mb-5">
                                <label for="Reprises d'exploitation sur pertes de valeur et provisions - actifs non courants" class="col-md-4 col-form-label text-md-left">Reprises d'exploitation sur pertes de valeur et provisions - actifs non courants :</label>
                                <input type="hidden" id="cpt781" name="cpt781" value="781">
                                <input type="hidden" id="des39" name="des39" value="Reprises d'exploitation sur pertes de valeur et provisions - actifs non courants">
                                <input id="Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_non_courants" type="text" class="form-control ml-5" name="Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_non_courants" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Reprises d'exploitation sur pertes de valeur et provisions - actifs courants" class="col-md-4 col-form-label text-md-left">Reprises d'exploitation sur pertes de valeur et provisions - actifs courants :</label>
                                <input type="hidden" id="cpt785" name="cpt785" value="785">
                                <input type="hidden" id="des40" name="des40" value="Reprises d'exploitation sur pertes de valeur et provisions - actifs courants">
                                <input id="Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_courants" type="text" class="form-control ml-5" name="Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_courants" placeholder="0.00">
                            </div>

                            <div class="input-group mb-5">
                                <label for="Reprises_financières_sur_pertes_de_valeur_et_provisions" class="col-md-4 col-form-label text-md-left">Reprises financières sur pertes de valeur et provisions :</label>
                                <input type="hidden" id="cpt786" name="cpt786" value="786">
                                <input type="hidden" id="des41" name="des41" value="Reprises financières sur pertes de valeur et provisions">
                                <input id="Reprises_financières_sur_pertes_de_valeur_et_provisions" type="text" class="form-control ml-5" name="Reprises_financières_sur_pertes_de_valeur_et_provisions" placeholder="0.00">
                            </div>

                        </div>
                        
			        </div>

                    <div class="d-flex justify-content-center mb-3">
                            <button type="submit" class="btn btn-lg col-md-2 btn-light">Valider</button>
                    </div>
                  
                    <input type="hidden" id="unite" name="unite" value="{{$user}}">
                  </form>
                </div>
            </div>
        </div>
    </div>
    <!--fin code-->
    <script>
    
    $(document).ready(function(){
        
        $(".card-body").hide();
        
        $("#plus1").click(function(){

            if($("#prod1").css('display') == 'none'){
				$("#iconPlus1").toggleClass('fas fa-minus');
				$("#prod1").show();
			}else{
				$("#iconPlus1").toggleClass('fas fa-plus');
				$("#prod1").hide();
			}
            
        });

       

        $("#plus2").click(function(){
            if($("#prod2").css('display') == 'none'){
				$("#iconPlus2").toggleClass('fas fa-minus');
				$("#prod2").show();
			}else{
				$("#iconPlus2").toggleClass('fas fa-plus');
				$("#prod2").hide();
			}
        });

        $("#plus3").click(function(){
            if($("#prod3").css('display') == 'none'){
				$("#iconPlus3").toggleClass('fas fa-minus');
				$("#prod3").show();
			}else{
				$("#iconPlus3").toggleClass('fas fa-plus');
				$("#prod3").hide();
			}
        });

        $("#plus4").click(function(){
            if($("#prod4").css('display') == 'none'){
				$("#iconPlus4").toggleClass('fas fa-minus');
				$("#prod4").show();
			}else{
				$("#iconPlus4").toggleClass('fas fa-plus');
				$("#prod4").hide();
			}
        });

        $("#plus5").click(function(){
            if($("#prod5").css('display') == 'none'){
				$("#iconPlus5").toggleClass('fas fa-minus');
				$("#prod5").show();
			}else{
				$("#iconPlus5").toggleClass('fas fa-plus');
				$("#prod5").hide();
			}
        });

        $("#plus6").click(function(){
            if($("#prod6").css('display') == 'none'){
				$("#iconPlus6").toggleClass('fas fa-minus');
				$("#prod6").show();
			}else{
				$("#iconPlus6").toggleClass('fas fa-plus');
				$("#prod6").hide();
			}
        });

        $("#plus7").click(function(){
            if($("#prod7").css('display') == 'none'){
				$("#iconPlus7").toggleClass('fas fa-minus');
				$("#prod7").show();
			}else{
				$("#iconPlus7").toggleClass('fas fa-plus');
				$("#prod7").hide();
			}
        });

        $("#plus8").click(function(){
            if($("#prod8").css('display') == 'none'){
				$("#iconPlus8").toggleClass('fas fa-minus');
				$("#prod8").show();
			}else{
				$("#iconPlus8").toggleClass('fas fa-plus');
				$("#prod8").hide();
			}
        });

$(function(){
    $.datepicker.regional['fr'] = {
    closeText: 'Fermer',
    prevText: '&#x3c;Préc',
    nextText: 'Suiv&#x3e;',
    currentText: 'Aujourd\'hui',
    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
    'Jul','Aou','Sep','Oct','Nov','Dec'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    weekHeader: 'Sm',
    dateFormat: 'dd-mm-yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: '',
    minDate: 0,
    maxDate: '+12M +0D',
    };
	$.datepicker.setDefaults($.datepicker.regional['fr']);
            $("#date").datepicker({
                changeMonth:true,
                changeYear:true,
                dateFormat: 'MM yy',
                maxDate: "+50Y",
                minDate: "-10Y",
                yearRange: "-10:+50",
                beforeShowDay: function (date) {

if (date.getDate() == 1) {
    return [true, ''];
}
return [false, ''];
}
            }).datepicker("setDate",'0');
        });
    });

    
    </script>
@endsection