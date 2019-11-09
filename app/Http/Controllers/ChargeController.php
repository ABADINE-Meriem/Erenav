<?php

namespace app\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use app\Http\Requests\Requests\ChargeRequest;

use Illuminate\Http\Request;

class ChargeController extends Controller
{
    private $date;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user =Auth::user();

        return view('pages.charge')->with('user',$user->getUnite());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChargeRequest $request)
    {
        $tableName="charge";
        $user =Auth::user();

        $date = "2019-10-30 15:22:22";

       DB::table('ProduitCharges')->insert([
            ['cptes'=>$request->cpt60,'designation'=>$request->des1,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt600,'designation'=>$request->des2,'montant'=>$request->Achats_de_marchandises_vendues,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt601,'designation'=>$request->des3,'montant'=>$request->Matières_premières,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt602,'designation'=>$request->des4,'montant'=>$request->Autres_approvisionnements,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt603,'designation'=>$request->des5,'montant'=>$request->Variations_des_stocks,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt604,'designation'=>$request->des6,'montant'=>$request->Achats_détudes_et_de_prestations_de_services,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt605,'designation'=>$request->des7,'montant'=>$request->Achats_de_matériels_équipements_et_travaux,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt606,'designation'=>$request->des8,'montant'=>$request->Achats_non_stockés_de_matières_et_fournitures,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt608,'designation'=>$request->des9,'montant'=>$request->Frais_accessoires_dachat,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt609,'designation'=>$request->des10,'montant'=>$request->Rabais_remises_ristournes_obtenus_sur_achats,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt61,'designation'=>$request->des11,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt611,'designation'=>$request->des12,'montant'=>$request->Sous_traitance_générale,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt613,'designation'=>$request->des13,'montant'=>$request->Locations,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt614,'designation'=>$request->des14,'montant'=>$request->Charges_locatives_et_charges_de_copropriété,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt615,'designation'=>$request->des15,'montant'=>$request->Entretien_réparations_et_maintenance,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt616,'designation'=>$request->des16,'montant'=>$request->Primes_dassurances,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt617,'designation'=>$request->des17,'montant'=>$request->Etudes_et_recherches,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt618,'designation'=>$request->des18,'montant'=>$request->Documentation_et_divers,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt619,'designation'=>$request->des19,'montant'=>$request->Rabais_remises_ristournes_obtenus_sur_services_extérieurs,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt62,'designation'=>$request->des20,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt621,'designation'=>$request->des21,'montant'=>$request->Personnel_extérieur_à_lentreprise,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt622,'designation'=>$request->des22,'montant'=>$request->Rémunérations_dintermédiaires_et_honoraires,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt623,'designation'=>$request->des23,'montant'=>$request->Publicité_publication_relations_publiques,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt624,'designation'=>$request->des24,'montant'=>$request->Transports_de_biens_et_transport_collectif_du_personnel,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt625,'designation'=>$request->des25,'montant'=>$request->Déplacements_missions_et_réceptions,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt626,'designation'=>$request->des26,'montant'=>$request->Frais_postaux_et_de_télécommunications,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt627,'designation'=>$request->des27,'montant'=>$request->Services_bancaires_et_assimilés,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt628,'designation'=>$request->des28,'montant'=>$request->Cotisations_et_divers,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt629,'designation'=>$request->des29,'montant'=>$request->Rabais_remises_ristournes_obtenus_sur_autres_services_extérieurs,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt63,'designation'=>$request->des30,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt631,'designation'=>$request->des31,'montant'=>$request->Rémunérations_du_personnel,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt634,'designation'=>$request->des32,'montant'=>$request->Rémunérations_de_lexploitant_individuel,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt635,'designation'=>$request->des33,'montant'=>$request->Cotisations_aux_organismes_sociaux,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt636,'designation'=>$request->des34,'montant'=>$request->Charges_sociales_de_lexploitant_individuel,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt637,'designation'=>$request->des35,'montant'=>$request->Autres_charges_sociales,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt638,'designation'=>$request->des36,'montant'=>$request->Autres_charges_de_personnel,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt64,'designation'=>$request->des37,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt641,'designation'=>$request->des38,'montant'=>$request->Impôts_taxes_et_versements_assimilés_sur_rémunérations,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt642,'designation'=>$request->des39,'montant'=>$request->Impôts_et_taxes_non_récupérables_sur_chiffre_daffaires,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt645,'designation'=>$request->des40,'montant'=>$request->Autres_impôts_et_taxes,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt65,'designation'=>$request->des41,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt651,'designation'=>$request->des42,'montant'=>$request->Redevances_pour_concessions_brevets_licences_logiciels_droits_et_valeurs_similaires,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt652,'designation'=>$request->des43,'montant'=>$request->Moins_values_sur_sortie_dactifs_immobilisés_non_financiers,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt653,'designation'=>$request->des44,'montant'=>$request->Jetons_de_présence,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt654,'designation'=>$request->des45,'montant'=>$request->Pertes_sur_créances_irrécouvrables,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt655,'designation'=>$request->des46,'montant'=>$request->Quote_part_de_résultat_sur_opérations_faites_en_commun,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt656,'designation'=>$request->des47,'montant'=>$request->Amendes_et_pénalités_subventions_accordées_dons_et_libéralités,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt657,'designation'=>$request->des48,'montant'=>$request->Charges_exceptionnelles_de_gestion_courante,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt658,'designation'=>$request->des49,'montant'=>$request->Autres_charges_de_gestion_courante,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt66,'designation'=>$request->des50,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt661,'designation'=>$request->des51,'montant'=>$request->Charges_d_intérêts,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt664,'designation'=>$request->des52,'montant'=>$request->Pertes_sur_créances_liées_a_des_participations,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt665,'designation'=>$request->des53,'montant'=>$request->Ecart_dévaluation_sur_actifs_financiers_moins_values,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt666,'designation'=>$request->des54,'montant'=>$request->Pertes_de_change,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt667,'designation'=>$request->des55,'montant'=>$request->Pertes_nettes_sur_cessions_dactifs_financiers,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt668,'designation'=>$request->des56,'montant'=>$request->Autres_charges_financières,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt67,'designation'=>$request->des57,'montant'=>$request->Eléments_extraordinaires,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt68,'designation'=>$request->des58,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt681,'designation'=>$request->des59,'montant'=>$request->Dotations_aux_amortissements_provisions_et_pertes_de_valeur_actifs_non_courants,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt682,'designation'=>$request->des60,'montant'=>$request->Dotations_aux_amortissements_provisions_et_pertes_de_valeur_des_biens_mis_en_concession,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt685,'designation'=>$request->des61,'montant'=>$request->Dotations_aux_amortissements_provisions_et_pertes_de_valeur_actifs_courants,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt686,'designation'=>$request->des62,'montant'=>$request->Dotations_aux_amortissements_provisions_et_pertes_de_valeur_éléments_financiers,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt69,'designation'=>$request->des63,'montant'=>0,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt692,'designation'=>$request->des64,'montant'=>$request->Imposition_différée_actif,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt693,'designation'=>$request->des65,'montant'=>$request->Imposition_différée_passif,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt695,'designation'=>$request->des66,'montant'=>$request->Impôts_sur_les_bénéfices_basés_sur_le_résultat_des_activités_ordinaires,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],
            ['cptes'=>$request->cpt698,'designation'=>$request->des67,'montant'=>$request->Autres_impôts_sur_les_résultats,'date'=>"2019-10-30 15:22:22",'tableName'=>$tableName,'unite'=>$user->getUnite()],


        ]);
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function somme($borne_inf,$borne_sup)
    {
       $somme = DB::table('ProduitCharges')
		           ->select(DB::raw('SUM(montant)'))
				   -> where([
                   ['cptes', '>=' ,$borne_inf], ['cptes', '<', $borne_sup], 
                         ])->get()->toArray();	

       $array =  json_decode(json_encode($somme), true);
       
       
       return $array[0]["SUM(montant)"];		 
    }

    public function MAJ()
    {
       /*Achats consommés*/
   
       /*calcule de somme */
   
       $somme = $this->somme(600,609);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 60)
               ->update(['montant' => $somme]); 
   
       /*maj Services extérieurs*/
   
       /*calcule de somme */
   
       $somme = $this->somme(611,619);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 61)
               ->update(['montant' => $somme]); 
   
       /*maj Production immobilisée*/
   
       /*calcule de somme */
   
       $somme = $this->somme(621,629);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 62)
               ->update(['montant' => $somme]); 
   
       /*maj Charges de personnel */
   
       /*calcule de somme */
   
       $somme = $this->somme(631,638);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 63)
               ->update(['montant' => $somme]); 
   
       /*maj Impôts, taxes et versements assimilés*/
   
       /*calcule de somme */
   
       $somme = $this->somme(641,645);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 64)
               ->update(['montant' => $somme]);  
               
       /*maj Autres charges opérationnelles*/
   
       /*calcule de somme */
   
       $somme = $this->somme(651,658);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 65)
               ->update(['montant' => $somme]);            
              
   
       /*maj Charges financières*/
   
       /*calcule de somme */
   
       $somme = $this->somme(661,668);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 66)
               ->update(['montant' => $somme]);  
               
       /*maj Dotations aux amortissements, provisions et pertes de valeur*/
   
       /*calcule de somme */
   
       $somme = $this->somme(681,686);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 68)
               ->update(['montant' => $somme]); 
                          

       /*maj Impôts sur les résultats et assimilés*/
   
       /*calcule de somme */
   
       $somme = $this->somme(692,698);
   
       /*update*/
   
       DB::table('ProduitCharges')
               ->where('cptes', 69)
               ->update(['montant' => $somme]); 
   
   
       session()->flash('success','Indicateur mis a jours');
   
       return redirect(route('Charges.create')); 
       
       
    }

    public function toExcel()
    {
       $tableName="charge";
   
       $unite =Auth::user()->getUnite();
   
       $produits = DB::table('ProduitCharges')->where([
           ['date', '=', '2019-10-30'],
           ['unite', '=', $unite],
           ['tableName', '=', $tableName],
       ])->get();
   
   
       $data =  json_decode(json_encode($produits), true);
   
       $array = array(array("Cptes", "DESIGNATION","MONTANT"));
   
       for ($i=0; $i < count($data); $i++) { 
   
           if ($data[$i]["montant"]==0) {
               $data[$i]["montant"] ="0.00";
           }
           array_push($array,array($data[$i]["cptes"], $data[$i]["designation"], $data[$i]["montant"]));
       }
       $file_name= 'Rapport'.$data[0]["date"];
   
       Excel::create($file_name, function($excel) use($array) {
       
           $excel->sheet('6 charges', function($sheet) use($array) {
       
               $sheet->fromArray($array, null, 'A1', false, false);
       
           });
       
       })->export('xls');
    }


    public function getDate(){

        return $this->date;
    }
}
