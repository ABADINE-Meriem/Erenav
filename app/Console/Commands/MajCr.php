<?php

namespace app\Console\Commands;

use Illuminate\Console\Command;

use DB;

class MajCr extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'maj:cr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'maj la table cr ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data1= DB::table('ProduitCharges')
        ->select('date','unite',DB::raw('count(DISTINCT tableName) as NB'))
        ->groupBy('date','unite')
        ->get()->toArray();

        $array1 =  json_decode(json_encode($data1), true);

        for ($j=0; $j < count($array1) ; $j++) { 

            //requete de verification if crs existe pour cette date et cette unite

            $dataCr= DB::table('Crs')
                ->where([
                    ['date', $array1[$j]['date']],['unite', $array1[$j]['unite']]
                ])
                ->get()->toArray();

            //verification if crs existe pour cette date et cette unite
            if (count($dataCr)==0) {

                //verification if produit charge existe pour cette date et cette unite

                if ($array1[$j]['NB']==2) {

                    $data2= DB::table('ProduitCharges')
                    ->where([
                        ['date', $array1[$j]['date']],['unite', $array1[$j]['unite']]
                    ])
                    ->get()->toArray();
    
                    $array2 =  json_decode(json_encode($data2), true);

                    $b1 = false;$b2 = false;$b3 = false ;$b4 = false ;$b5 = false ;$b6 = false ;$b7 = false ;$b8 = false ; 
        
                    $b9 = false ;$b10 = false ;$b11 = false ;$b12 = false ;$b13 = false ;$b14 = false ;$b14 = false ; 
                    
                    $b16 = false ;$b17 = false ;$b18 = false ;$b19 = false ;$b20 = false ;$b21 = false ;$b22 = false ;

                    $b23 = false ;$b24 = false ;$b25 = false ;$b26 = false ;$b27 = false ;

                    for ($i=0; $i < count($array2) ; $i++) { 

                        //verification if existe cptes 70

                        if ($array2[$i]['cptes']==70) {

                            $m70= $array2[$i]['montant'];
             
                            $b1=true;
             
                            DB::table('CRs')->insert([
                                 'libelle'=>'Ventes et produits annexes','montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                        }

                        //verification if existe cptes 72

                        if ($array2[$i]['cptes']==72) {

                            $m72= $array2[$i]['montant'];
            
                            $b2 =true;
            
                            DB::table('CRs')->insert([
                                 'libelle'=>'Variation stocks produits finis et en cours','montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                         }

                         //verification if existe cptes 73

                         if ($array2[$i]['cptes']==73) {

                            $m73= $array2[$i]['montant'];
            
                            $b3 =true;
            
                            DB::table('CRs')->insert([
                                 'libelle'=>'Production immobilisée','montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                         }

                         //verification if existe cptes 74

                         if ($array2[$i]['cptes']==74) {

                            $m74= $array2[$i]['montant'];
            
                            $b4 = true;
            
                            DB::table('CRs')->insert([
                                 'libelle'=>"Subvention d'exploitation",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                         }

                         //verification if existe tout les valeur precedante a somme

                         if ($b1 && $b2 && $b3 && $b4) {

                            $monlib1 = $m70+$m72+$m73+$m74; 
            
                            DB::table('CRs')->insert([
                                'libelle'=>"I-PRODUCTION DE L'EXERCICE",'montant'=>$monlib1,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b9 = true;
                        }
                        //verification if existe cptes 60
                        if ($array2[$i]['cptes']==60) {

                            $m60= $array2[$i]['montant'];
            
                            $b7 = true;
            
                            DB::table('CRs')->insert([
                                 'libelle'=>"Achats consommés",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                         }
                        //verification if existe cptes 61

                         if ($array2[$i]['cptes']==61) {

                            $m61 = $array2[$i]['montant'];
            
                            $b5=true;
                         }

                         //verification if existe cptes 62

                         if ($array2[$i]['cptes']==62) {

                            $m62 = $array2[$i]['montant'];
            
                            $b6=true;
                         }
                         //verification if existe les valeurs somme
                         if ($b5 && $b6) {

                            $monlib2 = $m61 + $m62;
            
                            $b8 = true;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Services extérieurs et autres consommations",'montant'=>$monlib2,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
                         }
                         //verification if existe les valeurs somme
                         if ($b7 && $b8) {

                            $monlib3 = $monlib2 + $m60;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"II-CONSOMMATION DE L'EXERCICE",'montant'=>$monlib3,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b25 = true;
                         }

                         //verification if existe les valeurs somme
                         if ($b9 && $b7 && $b8) {

                            $monlib4 = $monlib1 - $m60 -$monlib2;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"III-VALEUR AJOUTEE D'EXPLOITATION (I-II)",'montant'=>$monlib4,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b12 = true;
                         }

                         //verification if existe cptes 63

                         if ($array2[$i]['cptes']==63) {

                            $m63= $array2[$i]['montant'];
            
                            $b10 = true;
            
                            DB::table('CRs')->insert([
                                 'libelle'=>"Charges de personnel",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                         }

                         //verification if existe cptes 64
                         if ($array2[$i]['cptes']==64) {

                            $m64= $array2[$i]['montant'];
            
                            $b11 = true;
            
                            DB::table('CRs')->insert([
                                 'libelle'=>"Impôts, taxes et versements assimilés",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                             ]);
                         }
            
                         //verification if existe les valeur a somme
                        if ($b10 && $b11 && $b12) {
            
                            $monlib5 = $monlib4 - $m63 -$m64;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"IV-EXCEDENT BRUT D'EXPLOITATION",'montant'=>$monlib5,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b13 = true;
                         }

                         //verification if existe cptes 75
            
                        if ($array2[$i]['cptes']==75) {
            
                            $m75 = $array2[$i]['montant'];
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Autres produits opérationnels",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b14 = true;
                         } 
                         //verification if existe cptes 65
            
                        if ($array2[$i]['cptes']==65) {
            
                            $m65 = $array2[$i]['montant'];
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Autres charges opérationnalles",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b15 = true;
                         }
                         //verification if existe cptes 68
                        if ($array2[$i]['cptes']==68) {
            
                            $m68 = $array2[$i]['montant'];
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Dotations aux amortissements, provisions et pertes de valeur",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b16 = true;
                         }
                         //verification if existe cptes 78
                        if ($array2[$i]['cptes']==78) {
            
                            $m78 = $array2[$i]['montant'];
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Reprise sur pertes de valeurs et provisions",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b17 = true;
                         }
                         //verification if existe les valeur a somme
            
                         if ($b13 && $b14 && $b15 && $b16 && $b17) {
            
                            $monlib6 = $monlib5 + $m75 - $m65 - $m68 - $m78;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"V-RESULTAT OPERATIONNEL",'montant'=>$monlib6,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b18 = true;
                         }

                         //verification if existe cptes 76
            
                        if ($array2[$i]['cptes']==76) {
            
                            $m76 = $array2[$i]['montant'];
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Produits financiers",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b19 = true;
                         } 

                         //verification if existe cptes 66
            
                        if ($array2[$i]['cptes']==66) {
            
                            $m66 = $array2[$i]['montant'];
            
                            DB::table('CRs')->insert([
                                'libelle'=>"Charges financières",'montant'=>$array2[$i]['montant'],'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b20 = true;
                         } 
                        //verification if existe les valeur a somme
                        if ($b19 && $b20) {
                            
                            $monlib7 = $m76 - $m66 ;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"VI-RESULTAT FINANCIER",'montant'=>$monlib7,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b21 = true;
                        } 
            
                        //verification if existe les valeur a somme
                        if ($b18 && $b21) {
                            
                            $monlib8 = $monlib6 + $monlib7 ;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"VII-RESULTAT ORDINAIRE AVANT IMPOT(V+VI)",'montant'=>$monlib7,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b22 = true;
                        }
                        
                        //verification if existe les valeur a somme
                        if ($b9 && $b14 && $b17 && $b19) {
                            
                            $monlib9 = $monlib1 + $m75 + $m78 +$m76;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"TOTAL DES PRODUITS DES ACTIVITES ORDINAIRES",'montant'=>$monlib9,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b23 = true;
                        }
                        //verification if existe les valeur a somme
                        
                        if ($b25 && $b13 && $b11 && $b15 && $b16 && $b20) {
                            
                            $monlib10 = $monlib3 + $m63 + $m64 +$m65 + $m68 + $m66;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"TOTAL DES CHARGES DES ACTIVITES ORDINAIRES",'montant'=>$monlib10,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b24 = true;
                        } 
            
                        //verification if existe les valeur a somme
                        if ($b23 && $b24) {
                            
                            $monlib11 = $monlib9 + $monlib10;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"VIII-RESULTAT NET DES ACTIVITES ORDINAIRES",'montant'=>$monlib11,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b26 = true;
                        }
            
                        //verification if existe les valeur a somme
                        if ($b26) {
                            
                            $monlib12 = $monlib11;
            
                            DB::table('CRs')->insert([
                                'libelle'=>"X-RESULTAT NET DE L'EXERCICE",'montant'=>$monlib12,'date'=>$array2[$i]['date'],'unite'=>$array2[$i]['unite']
                            ]);
            
                            $b27 = true;
                        } 
                        
                    $b1 = false;$b2 = false;$b3 = false ;$b4 = false ;$b5 = false ;$b6 = false ;$b7 = false ;$b8 = false ; 
                    
                    $b9 = false ;$b10 = false ;$b11 = false ;$b12 = false ;$b13 = false ;$b14 = false ;$b14 = false ; 
                     
                    $b16 = false ;$b17 = false ;$b18 = false ;$b19 = false ;$b20 = false ;$b21 = false ;$b22 = false ;
            
                    $b23 = false ;$b24 = false ;$b25 = false ;$b26 = false ;$b27 = false ;


                    }
                }
            }
        }
    }
}
