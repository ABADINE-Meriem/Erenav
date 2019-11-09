<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1 = false;$b2 = false;$b3 = false ;$b4 = false ;$b5 = false ;$b6 = false ;$b7 = false ;$b8 = false ; 
        
        $b9 = false ;$b10 = false ;$b11 = false ;$b12 = false ;$b13 = false ;$b14 = false ;$b14 = false ; 
         
        $b16 = false ;$b17 = false ;$b18 = false ;$b19 = false ;$b20 = false ;$b21 = false ;$b22 = false ;

        $b23 = false ;$b24 = false ;$b25 = false ;$b26 = false ;$b27 = false ;

        $date = app('app\Http\Controllers\ChargeController')->getDate();

        $data= DB::table('ProduitCharges')
        ->where('date', "2019-10-30")
        ->get()->toArray();

        $array =  json_decode(json_encode($data), true);


        for ($i=0; $i < count($array) ; $i++) { 

            if ($array[$i]['cptes']==70) {

               $m70= $array[$i]['montant'];

               $b1=true;

               DB::table('CRs')->insert([
                    'libelle'=>'Ventes et produits annexes','montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);
            }

            if ($array[$i]['cptes']==72) {

                $m72= $array[$i]['montant'];

                $b2 =true;

                DB::table('CRs')->insert([
                     'libelle'=>'Variation stocks produits finis et en cours','montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                 ]);
             }

            if ($array[$i]['cptes']==73) {

                $m73= $array[$i]['montant'];

                $b3 =true;

                DB::table('CRs')->insert([
                     'libelle'=>'Production immobilisée','montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                 ]);
             }

            if ($array[$i]['cptes']==74) {

                $m74= $array[$i]['montant'];

                $b4 = true;

                DB::table('CRs')->insert([
                     'libelle'=>"Subvention d'exploitation",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                 ]);
             } 

            if ($b1 && $b2 && $b3 && $b4) {

                $monlib1 = $m70+$m72+$m73+$m74; 

                DB::table('CRs')->insert([
                    'libelle'=>"I-PRODUCTION DE L'EXERCICE",'montant'=>$monlib1,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b9 = true;
            }

            if ($array[$i]['cptes']==60) {

                $m60= $array[$i]['montant'];

                $b7 = true;

                DB::table('CRs')->insert([
                     'libelle'=>"Achats consommés",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                 ]);
             }

            if ($array[$i]['cptes']==61) {

                $m61 = $array[$i]['montant'];

                $b5=true;
             }

            if ($array[$i]['cptes']==62) {

                $m62 = $array[$i]['montant'];

                $b6=true;
             }

            if ($b5 && $b6) {

                $monlib2 = $m61 + $m62;

                $b8 = true;

                DB::table('CRs')->insert([
                    'libelle'=>"Services extérieurs et autres consommations",'montant'=>$monlib2,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);
             }

            if ($b7 && $b8) {

                $monlib3 = $monlib2 + $m60;

                DB::table('CRs')->insert([
                    'libelle'=>"II-CONSOMMATION DE L'EXERCICE",'montant'=>$monlib3,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b25 = true;
             }
             
            if ($b9 && $b7 && $b8) {

                $monlib4 = $monlib1 - $m60 -$monlib2;

                DB::table('CRs')->insert([
                    'libelle'=>"III-VALEUR AJOUTEE D'EXPLOITATION (I-II)",'montant'=>$monlib4,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b12 = true;
             } 

            if ($array[$i]['cptes']==63) {

                $m63= $array[$i]['montant'];

                $b10 = true;

                DB::table('CRs')->insert([
                     'libelle'=>"Charges de personnel",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                 ]);
             }

            if ($array[$i]['cptes']==64) {

                $m64= $array[$i]['montant'];

                $b11 = true;

                DB::table('CRs')->insert([
                     'libelle'=>"Impôts, taxes et versements assimilés",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                 ]);
             }

            if ($b10 && $b11 && $b12) {

                $monlib5 = $monlib4 - $m63 -$m64;

                DB::table('CRs')->insert([
                    'libelle'=>"IV-EXCEDENT BRUT D'EXPLOITATION",'montant'=>$monlib5,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b13 = true;
             }

            if ($array[$i]['cptes']==75) {

                $m75 = $array[$i]['montant'];

                DB::table('CRs')->insert([
                    'libelle'=>"Autres produits opérationnels",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b14 = true;
             } 

            if ($array[$i]['cptes']==65) {

                $m65 = $array[$i]['montant'];

                DB::table('CRs')->insert([
                    'libelle'=>"Autres charges opérationnalles",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b15 = true;
             }
             
            if ($array[$i]['cptes']==68) {

                $m68 = $array[$i]['montant'];

                DB::table('CRs')->insert([
                    'libelle'=>"Dotations aux amortissements, provisions et pertes de valeur",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b16 = true;
             }
             
            if ($array[$i]['cptes']==78) {

                $m78 = $array[$i]['montant'];

                DB::table('CRs')->insert([
                    'libelle'=>"Reprise sur pertes de valeurs et provisions",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b17 = true;
             }

             if ($b13 && $b14 && $b15 && $b16 && $b17) {

                $monlib6 = $monlib5 + $m75 - $m65 - $m68 - $m78;

                DB::table('CRs')->insert([
                    'libelle'=>"V-RESULTAT OPERATIONNEL",'montant'=>$monlib6,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b18 = true;
             }

            if ($array[$i]['cptes']==76) {

                $m76 = $array[$i]['montant'];

                DB::table('CRs')->insert([
                    'libelle'=>"Produits financiers",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b19 = true;
             } 

            if ($array[$i]['cptes']==66) {

                $m66 = $array[$i]['montant'];

                DB::table('CRs')->insert([
                    'libelle'=>"Charges financières",'montant'=>$array[$i]['montant'],'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b20 = true;
             } 

            if ($b19 && $b20) {
                
                $monlib7 = $m76 - $m66 ;

                DB::table('CRs')->insert([
                    'libelle'=>"VI-RESULTAT FINANCIER",'montant'=>$monlib7,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b21 = true;
            } 

            if ($b18 && $b21) {
                
                $monlib8 = $monlib6 + $monlib7 ;

                DB::table('CRs')->insert([
                    'libelle'=>"VII-RESULTAT ORDINAIRE AVANT IMPOT(V+VI)",'montant'=>$monlib7,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b22 = true;
            }
            
            if ($b9 && $b14 && $b17 && $b19) {
                
                $monlib9 = $monlib1 + $m75 + $m78 +$m76;

                DB::table('CRs')->insert([
                    'libelle'=>"TOTAL DES PRODUITS DES ACTIVITES ORDINAIRES",'montant'=>$monlib9,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b23 = true;
            }
            
            if ($b25 && $b13 && $b11 && $b15 && $b16 && $b20) {
                
                $monlib10 = $monlib3 + $m63 + $m64 +$m65 + $m68 + $m66;

                DB::table('CRs')->insert([
                    'libelle'=>"TOTAL DES CHARGES DES ACTIVITES ORDINAIRES",'montant'=>$monlib10,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b24 = true;
            } 

            if ($b23 && $b24) {
                
                $monlib11 = $monlib9 + $monlib10;

                DB::table('CRs')->insert([
                    'libelle'=>"VIII-RESULTAT NET DES ACTIVITES ORDINAIRES",'montant'=>$monlib11,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b26 = true;
            }

            if ($b26) {
                
                $monlib12 = $monlib11;

                DB::table('CRs')->insert([
                    'libelle'=>"X-RESULTAT NET DE L'EXERCICE",'montant'=>$monlib12,'date'=>$array[$i]['date'],'unite'=>$array[$i]['unite']
                ]);

                $b27 = true;
            } 
            
        $b1 = false;$b2 = false;$b3 = false ;$b4 = false ;$b5 = false ;$b6 = false ;$b7 = false ;$b8 = false ; 
        
        $b9 = false ;$b10 = false ;$b11 = false ;$b12 = false ;$b13 = false ;$b14 = false ;$b14 = false ; 
         
        $b16 = false ;$b17 = false ;$b18 = false ;$b19 = false ;$b20 = false ;$b21 = false ;$b22 = false ;

        $b23 = false ;$b24 = false ;$b25 = false ;$b26 = false ;$b27 = false ;
        }

        //return true ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
