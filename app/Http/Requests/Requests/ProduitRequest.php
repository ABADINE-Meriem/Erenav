<?php

namespace app\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            "Ventes_de_marchandises" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Ventes_de_produits_finis" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Ventes_de_produits_intermédiaires" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Ventes_de_produits_résiduels" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Vente_de_travaux" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Vente_détudes" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Autres_prestations_de_services" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Produits_des_activités_annexes" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Rabais_remises_et_ristournes_accordés" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Variation_de_stocks_dencours" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Variation_de_stocks_de_produits" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Production_immobilisée_dactifs_incorporels" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Production_immobilisée_dactifs_corporels" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Subvention_déquilibre" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Autres_subventions_dexploitation" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Redevances_pour_concessions_brevets_licences_logiciels_et_valeurs_similaires" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Plus_values_sur_sorties_dactifs_immobilisés_non_financiers" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Jetons_de_présence_et_rémunérations_dadministrateurs_ou_de_gérants" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Quote_part_de_résultat_sur_opérations_faites_en_commun" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Rentrées_sur_créances_amorties" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Produits_exceptionnels_sur_opérations_de_gestion" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Autres_produits_de_gestion_courante" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Produits_des_participations" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Revenus_des_actifs_financiers" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Revenus_de_créances" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Ecart_dévaluation_sur_actifs_financiers_plus_values" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Gains_de_change" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Profits_nets_sur_cessions_dactifs_financiers" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Autres_produits_financiers" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Eléments_extraordinaires" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_non_courants" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Reprises_dexploitation_sur_pertes_de_valeur_et_provisions_actifs_courants" =>"required|regex:/^\d*(\.\d{2})?$/",
            "Reprises_financières_sur_pertes_de_valeur_et_provisions" =>"required|regex:/^\d*(\.\d{2})?$/"
        ];
    }
}
