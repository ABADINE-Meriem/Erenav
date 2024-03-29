<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use app\Http\Requests\Requests\ProduitRequest;

use Illuminate\Support\Facades\DB;

use DateTime;

use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;

class RapportController extends Controller
{
    private static $iD=0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $query = DB::table('crs as t')
            ->join('crs as c', 'c.date', '=', DB::raw('(t.date -1)'))
            ->select('t.date as date','c.date as datepase')
            ->distinct()
            ->get();
            
            $array =  json_decode(json_encode($query), true);

            for ($i=0; $i < count($array) ; $i++) { 

                if (count($array[$i])==2) {

                    $data =DB::table('tableaubord')
                            ->select('*')
                            ->where([
                                ["moispasse","=",$array[$i]['datepase']],["moisactuele","=",$array[$i]['date']],
                            ])
                            ->get();
                    if (count($data)==0) {        
                    $data1 = DB::table('crs')
                           ->select('*')
                           ->where("date","=",$array[$i]['date'])
                           ->get();

                    $data2 = DB::table('crs')
                           ->select('*')
                           ->where("date","=",$array[$i]['datepase'])
                           ->get();
                    
                    DB::table('CRs')->insert([
                     'agregats'=>'Vente de Marchandises',
                     'cptes'=>'700',
                     'moispasse'=>$array[$i]['datepase'],
                     'moisactuele'=>$array[$i]['date'],
                     'ecartvaleur'=>$array[$i]['unite'],
                     'evolution'=>$array[$i]['unite'],
                     'cumulpasse'=>$array[$i]['unite'],
                     'cumulactuele'=>$array[$i]['unite'],
                     'cumulecartvaleur'=>$array[$i]['unite'],
                     'cumulevolution'=>$array[$i]['unite'],
                     'unite'=>$array[$i]['unite']
                    ]);       

                    dd($data2);  
                }     
                }

            }
        return view('pages.tabbord');
    }

        /**
     * Display a listing of the resource of rapport unite.
     */

    public function users()
    {
        $date =DB::table('ProduitCharges')
                ->select("date")
                ->distinct();

        $date1 = DB::table('crs')
                ->select("date")
                ->union($date)
                ->distinct()
                ->get();


        $user =Auth::user();

        $unite = $user->getUnite();

        $data = DB::table('ProduitCharges')
                ->select("date","unite","tableName")
                ->where('unite', '=', $unite)
                ->distinct();
                

        $data1 = DB::table('crs')
                ->select("date","unite","tableName")
                ->where('unite', '=', $unite)
                ->union($data)
                ->distinct()
                ->simplePaginate(5); 

        return view('pages.userinterface')->with("rapports",$data1)->with("dates",$date1)->with("filter",false);
    }

    public static function getID(){

        static::$iD = static::$iD+1;

        return static::$iD;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user =Auth::user();

        return view('pages.form')->with('user',$user->getUnite());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitRequest $request)
    {
        $date = $request->date;

        $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

        $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

        $date = str_replace($french_months, $months, strtolower($date));

        $date= date('Y-m-01', strtotime($date));

        $tableName="produit";

        $user =Auth::user();

        $produits = DB::table('ProduitCharges')
				   -> where([
                   ['date', '=' ,$date], ['tableName', '=', $tableName], ['unite', '=', $user->getUnite()],
                         ])->get()->toArray();

        if (count($produits)!=0) {

            session()->flash('errors','Rapport existe déjà');

            return redirect(route('Rapports.users'));
        }                 

       DB::table('ProduitCharges')->insert([
            ['cptes'=>$request->cpt70,'designation'=>$request->des1,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt700,'designation'=>$request->des2,'montant'=>$request->Ventes_de_marchandises,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt701,'designation'=>$request->des3,'montant'=>$request->Ventes_de_produits_finis,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt702,'designation'=>$request->des4,'montant'=>$request->Ventes_de_produits_intermédiaires,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt703,'designation'=>$request->des5,'montant'=>$request->Ventes_de_produits_résiduels,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt704,'designation'=>$request->des6,'montant'=>$request->Vente_de_travaux,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt705,'designation'=>$request->des7,'montant'=>$request->Vente_détudes,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt706,'designation'=>$request->des8,'montant'=>$request->Autres_prestations_de_services,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt708,'designation'=>$request->des9,'montant'=>$request->Produits_des_activités_annexes,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt709,'designation'=>$request->des10,'montant'=>$request->Rabais_remises_et_ristournes_accordés,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt72,'designation'=>$request->des11,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt723,'designation'=>$request->des12,'montant'=>$request->Variation_de_stocks_de_produits,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt724,'designation'=>$request->des13,'montant'=>$request->Variation_de_stocks_de_produits,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt73,'designation'=>$request->des14,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt731,'designation'=>$request->des15,'montant'=>$request->Production_immobilisée_dactifs_incorporels,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt732,'designation'=>$request->des16,'montant'=>$request->Production_immobilisée_dactifs_corporels,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt74,'designation'=>$request->des17,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt741,'designation'=>$request->des18,'montant'=>$request->Subvention_déquilibre,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt748,'designation'=>$request->des19,'montant'=>$request->Autres_subventions_dexploitation,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt75,'designation'=>$request->des20,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt751,'designation'=>$request->des21,'montant'=>$request->Redevances_pour_concessions_brevets_licences_logiciels_et_valeurs_similaires,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt752,'designation'=>$request->des22,'montant'=>$request->Plus_values_sur_sorties_dactifs_immobilisés_non_financiers,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt753,'designation'=>$request->des23,'montant'=>$request->Jetons_de_présence_et_rémunérations_dadministrateurs_ou_de_gérants,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt754,'designation'=>$request->des24,'montant'=>$request->Quotes_parts_de_subventions_dinvestissement_virées_au_résultat_de_lexercice,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt755,'designation'=>$request->des25,'montant'=>$request->Quote_part_de_résultat_sur_opérations_faites_en_commun,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt756,'designation'=>$request->des26,'montant'=>$request->Rentrées_sur_créances_amorties,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt757,'designation'=>$request->des27,'montant'=>$request->Produits_exceptionnels_sur_opérations_de_gestion,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt758,'designation'=>$request->des28,'montant'=>$request->Autres_produits_de_gestion_courante,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt76,'designation'=>$request->des29,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt761,'designation'=>$request->des30,'montant'=>$request->Produits_des_participations,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt762,'designation'=>$request->des31,'montant'=>$request->Revenus_des_actifs_financiers,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt763,'designation'=>$request->des32,'montant'=>$request->Revenus_de_créances,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt765,'designation'=>$request->des33,'montant'=>$request->Ecart_dévaluation_sur_actifs_financiers_plus_values,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt766,'designation'=>$request->des34,'montant'=>$request->Gains_de_change,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt767,'designation'=>$request->des35,'montant'=>$request->Profits_nets_sur_cessions_dactifs_financiers,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt768,'designation'=>$request->des36,'montant'=>$request->Autres_produits_financiers,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt77,'designation'=>$request->des37,'montant'=>$request->Eléments_extraordinaires,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt78,'designation'=>$request->des38,'montant'=>0,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt781,'designation'=>$request->des39,'montant'=>$request->Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_non_courants,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt785,'designation'=>$request->des40,'montant'=>$request->Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_courants,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],
            ['cptes'=>$request->cpt786,'designation'=>$request->des41,'montant'=>$request->Reprises_financières_sur_pertes_de_valeur_et_provisions,'tableName'=>$tableName,'unite'=>$user->getUnite(),'date'=>$date,'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')],

        ]);
        session()->flash('success','Rapport ajouté');

        return redirect(route('Rapports.users'));
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  int  $id1
     * @return \Illuminate\Http\Response
     */
    public function ShowRapport($id , $id1)
    {

        $unite =Auth::user()->getUnite();

        if ($id==="cr") {
            $data = DB::table('Crs')
				   -> where([
                            ['date', '=', $id1],['unite', '=', $unite],
                         ])->distinct()->get();

        return view('pages.showrapport')->with("crs",$data)->with("type",$id)->with("date",$id1);                 
        } 

        if ($id==="produit") {
           $this->MAJ();
        }
        else{
            app('app\Http\Controllers\ChargeController')->MAJ();
        }
        $data = DB::table('ProduitCharges')
				   -> where([
                   ['tableName', '=' ,$id], ['date', '=', $id1],['unite', '=', $unite],
                         ])->distinct()->get();

        return view('pages.showrapport')->with("rapports",$data)->with("type",$id)->with("date",$id1)->with("crs",array());
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
                   ['cptes', '>=' ,$borne_inf], ['cptes', '<=', $borne_sup], 
                         ])->get()->toArray();	

       $array =  json_decode(json_encode($somme), true);
       
       
       return $array[0]["SUM(montant)"];		 
    }
 	public function MAJ()
 {
    /*maj Ventes de marchandises, produits fabriqués, prestations de service et produits annexes*/

    /*calcule de somme */

    $somme = $this->somme(700,709);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 70)
            ->update(['montant' => $somme]); 

    /*maj Production stockée ou déstockée*/

    /*calcule de somme */

    $somme = $this->somme(723,724);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 72)
            ->update(['montant' => $somme]); 

    /*maj Production immobilisée*/

    /*calcule de somme */

    $somme = $this->somme(731,732);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 73)
            ->update(['montant' => $somme]); 

    /*maj Subventions d'exploitation */

    /*calcule de somme */

    $somme = $this->somme(741,748);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 74)
            ->update(['montant' => $somme]); 

    /*maj Autres produits opérationnels*/

    /*calcule de somme */

    $somme = $this->somme(751,758);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 75)
            ->update(['montant' => $somme]);  
            
    /*maj Produits financiers*/

    /*calcule de somme */

    $somme = $this->somme(761,768);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 76)
            ->update(['montant' => $somme]);            
           

    /*maj Reprises sur pertes de valeur et provisions*/

    /*calcule de somme */

    $somme = $this->somme(781,786);

    /*update*/

    DB::table('ProduitCharges')
            ->where('cptes', 78)
            ->update(['montant' => $somme]);            
                       


    session()->flash('success','Indicateur mis a jours');

    return redirect(route('Rapports.create')); 
    
    
 }

 public function toExcel($type,$date)
 {
    /*$tableName="produit";*/

    $unite =Auth::user()->getUnite();

    $produits = DB::table('ProduitCharges')->where([
        ['date', '=', $date],
        ['unite', '=', $unite],
        ['tableName', '=', $type],
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

        $excel->sheet('5 produit', function($sheet) use($array) {

            $sheet->fromArray($array, null, 'A1', false, false);

        });

    })->export('xls');
 }

    public function filter(Request $request){

        if ($request->date ==="All" && $request->type ==="All") {

            return redirect(route('Rapports.users'));
        }

        $user =Auth::user();

        $unite = $user->getUnite();

        $date =DB::table('ProduitCharges')
                    ->select("date")
                    ->distinct();

        $date1 = DB::table('crs')
                    ->select("date")
                    ->union($date)
                    ->distinct()
                    ->get();

        if ($request->type ==="cr") {
                
        $data1 = DB::table('crs')
                ->select("date","unite","tableName")
                ->where([
                    ['date', '=', $request->date],
                    ['unite', '=', $unite],
                ])
                ->distinct()
                ->simplePaginate(5);

            return view('pages.userinterface')->with("rapports",$data1)->with("dates",$date1)->with("filter",true);

        } else {
        $data1 = DB::table('ProduitCharges')
                ->select("date","unite","tableName")
                ->where([
                    ['date', '=', $request->date],
                    ['unite', '=', $unite],
                    ['tableName', '=', $request->type],
                ])
                ->distinct()
                ->simplePaginate(5);

            return view('pages.userinterface')->with("rapports",$data1)->with("dates",$date1)->with("filter",true);
        }
        
    }

 
}
