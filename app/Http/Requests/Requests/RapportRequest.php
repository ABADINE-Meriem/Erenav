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
            "Ventes de marchandises" =>"required|numeric",
            "Ventes de produits finis" =>"required|numeric",
            "Ventes de produits intermédiaires" =>"required|numeric",
            "Ventes de produits résiduels" =>"required|numeric",
            "Vente de travaux" =>"required|numeric",
            "Vente d'études" =>"required|numeric",
            "Autres prestations de services" =>"required|numeric",
            "Produits des activités annexes" =>"required|numeric",
            "Rabais, remises et ristournes accordés" =>"required|numeric",
            "Variation de stocks d'encours" =>"required|numeric",
            "Variation de stocks de produits" =>"required|numeric",
            "Production immobilisée d'actifs incorporels" =>"required|numeric",
            "Production immobilisée d'actifs corporels" =>"required|numeric",
            "Subvention d'équilibre" =>"required|numeric",
            "Autres subventions d'exploitation" =>"required|numeric",
            "Redevances pour concessions, brevets, licences, logiciels et valeurs similaires" =>"required|numeric",
            "Plus-values sur sorties d'actifs immobilisés non financiers" =>"required|numeric",
            "Jetons de présence et rémunérations d'administrateurs ou de gérants" =>"required|numeric",
            "Quotes-parts de subventions d'investissement virées au résultat de l'exercice" =>"required|numeric",
            "Quote-part de résultat sur opérations faites en commun" =>"required|numeric",
            "Rentrées sur créances amorties" =>"required|numeric",
            "Produits exceptionnels sur opérations de gestion" =>"required|numeric",
            "Autres produits de gestion courante" =>"required|numeric",
            "Produits des participations" =>"required|numeric",
            "Revenus des actifs financiers" =>"required|numeric",
            "Revenus de créances" =>"required|numeric",
            "Ecart d'évaluation sur actifs financiers, plus-values" =>"required|numeric",
            "Gains de change" =>"required|numeric",
            "Profits nets sur cessions d'actifs financiers" =>"required|numeric",
            "Autres produits financiers" =>"required|numeric",
            "Eléments extraordinaires (produits)" =>"required|numeric",
            "Reprises d'exploitation sur pertes de valeur et provisions - actifs non courants" =>"required|numeric",
            "Reprises d'exploitation sur pertes de valeur et provisions - actifs courants" =>"required|numeric",
            "Reprises financières sur pertes de valeur et provisions" =>"required|numeric"
        ];
    }
}
