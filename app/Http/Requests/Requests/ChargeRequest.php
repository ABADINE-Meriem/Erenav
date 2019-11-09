<?php

namespace app\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChargeRequest extends FormRequest
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
            "Achats_de_marchandises_vendues" =>"required",
            "Matières_premières" =>"required",
            "Autres_approvisionnements" =>"required",
            "Variations_des_stocks" =>"required",
            "Achats_détudes_et_de_prestations_de_services" =>"required",
            "Achats_de_matériels_équipements_et_travaux" =>"required",
            "Achats_non_stockés_de_matières_et_fournitures" =>"required",
            "Frais_accessoires_dachat" =>"required",
            "Rabais_remises_ristournes_obtenus_sur_achats" =>"required",
            "Sous_traitance_générale" =>"required",
            "Locations" =>"required",
            "Charges_locatives_et_charges_de_copropriété" =>"required",
            "Entretien_réparations_et_maintenance" =>"required",
            "Primes_dassurances" =>"required",
            "Etudes_et_recherches" =>"required",
            "Documentation_et_divers" =>"required",
            "Rabais_remises_ristournes_obtenus_sur_services_extérieurs" =>"required",
            "Personnel_extérieur_à_lentreprise" =>"required",
            "Rémunérations_dintermédiaires_et_honoraires" =>"required",
            "Publicité_publication_relations_publiques" =>"required",
            "Transports_de_biens_et_transport_collectif_du_personnel" =>"required",
            "Déplacements_missions_et_réceptions" =>"required",
            "Frais_postaux_et_de_télécommunications" =>"required",
            "Services_bancaires_et_assimilés" =>"required",
            "Cotisations_et_divers" =>"required",
            "Rabais_remises_ristournes_obtenus_sur_autres_services_extérieurs" =>"required",
            "Rémunérations_du_personnel" =>"required",
            "Rémunérations_de_lexploitant_individuel" =>"required",
            "Cotisations_aux_organismes_sociaux" =>"required",
            "Charges_sociales_de_lexploitant_individuel" =>"required",
            "Autres_charges_sociales" =>"required",
            "Autres_charges_de_personnel" =>"required",
            "Impôts_taxes_et_versements_assimilés_sur_rémunérations" =>"required",
            "Impôts_et_taxes_non_récupérables_sur_chiffre_daffaires" =>"required",
            "Autres_impôts_et_taxes" =>"required",
            "Redevances_pour_concessions_brevets_licences_logiciels_droits_et_valeurs_similaires" =>"required",
            "Moins_values_sur_sortie_dactifs_immobilisés_non_financiers" =>"required",
            "Jetons_de_présence" =>"required",
            "Pertes_sur_créances_irrécouvrables" =>"required",
            "Quote_part_de_résultat_sur_opérations_faites_en_commun" =>"required",
            "Amendes_et_pénalités_subventions_accordées_dons_et_libéralités" =>"required",
            "Charges_exceptionnelles_de_gestion_courante" =>"required",
            "Autres_charges_de_gestion_courante" =>"required",
            "Charges_d_intérêts" =>"required",
            "Pertes_sur_créances_liées_a_des_participations" =>"required",
            "Ecart_dévaluation_sur_actifs_financiers_moins_values" =>"required",
            "Pertes_de_change" =>"required",
            "Pertes_nettes_sur_cessions_dactifs_financiers" =>"required",
            "Autres_charges_financières" =>"required",
            "Eléments_extraordinaires" =>"required",
            "Dotations_aux_amortissements_provisions_et_pertes_de_valeur_actifs_non_courants" =>"required",
            "Dotations_aux_amortissements_provisions_et_pertes_de_valeur_des_biens_mis_en_concession" =>"required", 
            "Dotations_aux_amortissements_provisions_et_pertes_de_valeur_actifs_courants" =>"required",
            "Dotations_aux_amortissements_provisions_et_pertes_de_valeur_éléments_financiers" =>"required",
            "Imposition_différée_actif" =>"required",
            "Imposition_différée_passif" =>"required",
            "Impôts_sur_les_bénéfices_basés_sur_le_résultat_des_activités_ordinaires" =>"required",
            "Autres_impôts_sur_les_résultats" =>"required"
        ];
    }
}
