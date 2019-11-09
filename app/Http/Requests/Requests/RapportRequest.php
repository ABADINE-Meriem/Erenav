<?php

namespace app\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RapportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           /* "Ventes de marchandises" =>"required",
            "Ventes de produits finis" =>"required",
            "Ventes de produits intermédiaires" =>"required",
            "Ventes de produits résiduels" =>"required",
            "Vente de travaux" =>"required",
            "Vente d'études" =>"required",
            "Autres prestations de services" =>"required",
            "Produits des activités annexes" =>"required",
            "Rabais, remises et ristournes accordés" =>"required",
            "Variation de stocks d'encours" =>"required",
            "Variation de stocks de produits" =>"required",
            "Production immobilisée d'actifs incorporels" =>"required",
            "Production immobilisée d'actifs corporels" =>"required",
            "Subvention d'équilibre" =>"required",
            "Autres subventions d'exploitation" =>"required",
            "Redevances pour concessions, brevets, licences, logiciels et valeurs similaires" =>"required",
            "Plus-values sur sorties d'actifs immobilisés non financiers" =>"required",
            "Jetons de présence et rémunérations d'administrateurs ou de gérants" =>"required",
            "Quotes-parts de subventions d'investissement virées au résultat de l'exercice" =>"required",
            "Quote-part de résultat sur opérations faites en commun" =>"required",
            "Rentrées sur créances amorties" =>"required",
            "Produits exceptionnels sur opérations de gestion" =>"required",
            "Autres produits de gestion courante" =>"required",
            "Produits des participations" =>"required",
            "Revenus des actifs financiers" =>"required",
            "Revenus de créances" =>"required",
            "Ecart d'évaluation sur actifs financiers, plus-values" =>"required",
            "Gains de change" =>"required",
            "Profits nets sur cessions d'actifs financiers" =>"required",
            "Autres produits financiers" =>"required",
            "Eléments extraordinaires (produits)" =>"required",
            "Reprises d'exploitation sur pertes de valeur et provisions - actifs non courants" =>"required",
            "Reprises d'exploitation sur pertes de valeur et provisions - actifs courants" =>"required",
            "Reprises financières sur pertes de valeur et provisions" =>"required"*/
        ];
    }
}
