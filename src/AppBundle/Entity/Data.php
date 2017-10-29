<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity
 */
class Data
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGGPCD", type="string", length=255, nullable=true)
     */
    private $origgpcd;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGGPFR", type="string", length=255, nullable=true)
     */
    private $origgpfr;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGFDCD", type="string", length=255, nullable=true)
     */
    private $origfdcd;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGFDNM", type="string", length=255, nullable=true)
     */
    private $origfdnm;

    /**
     * @var string
     *
     * @ORM\Column(name="Energie, Règlement UE N° 1169/2011 (kJ/100g)", type="string", length=255, nullable=true)
     */
    private $energie_reg_1169_kj100;

    /**
     * @var string
     *
     * @ORM\Column(name="Energie, Règlement UE N° 1169/2011 (kcal/100g)", type="string", length=255, nullable=true)
     */
	private $energie_reg_1169_kcal100;

    /**
     * @var string
     *
     * @ORM\Column(name="Energie, N x facteur Jones, avec fibres  (kJ/100g)", type="string", length=255, nullable=true)
     */
    private $energie_NXFacteurJones_AvecFibres_kj100;

    /**
     * @var string
     *
     * @ORM\Column(name="Energie, N x facteur Jones, avec fibres  (kcal/100g)", type="string", length=255, nullable=true)
     */
    private $energie_NXFacteurJones_AvecFibres_kcal_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Eau (g/100g)", type="string", length=255, nullable=true)
     */
    private $eau_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Protéines (g/100g)", type="string", length=255, nullable=true)
     */
    private $proteines_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Protéines brutes, N x 6.25 (g/100g)", type="string", length=255, nullable=true)
     */
    private $proteinesBrutes_NX6_25_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Glucides (g/100g)", type="string", length=255, nullable=true)
     */
    private $glucides_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Lipides (g/100g)", type="string", length=16, nullable=true)
     */
    private $lipides_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Sucres (g/100g)", type="string", length=16, nullable=true)
     */
    private $sucres_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Amidon (g/100g)", type="string", length=16, nullable=true)
     */
    private $amidon_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Fibres alimentaires (g/100g)", type="string", length=16, nullable=true)
     */
    private $fibresAlimentaires_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Polyols totaux (g/100g)", type="string", length=4, nullable=true)
     */
    private $polyolsTotaux_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Cendres (g/100g)", type="string", length=16, nullable=true)
     */
    private $cendres_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Alcool (g/100g)", type="string", length=4, nullable=true)
     */
    private $alcool_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Acides organiques (g/100g)", type="string", length=4, nullable=true)
     */
    private $acidesOrganiques_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG saturés (g/100g)", type="string", length=20, nullable=true)
     */
    private $agSatures_100g;

    /**
     * @var string
     *
     * @ORM\Column(name="AG monoinsaturés (g/100g)", type="string", length=24, nullable=true)
     */
    private $agMonoinsatures_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG polyinsaturés (g/100g)", type="string", length=20, nullable=true)
     */
    private $agPolyinsatures_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 4:0, butyrique (g/100g)", type="string", length=4, nullable=true)
     */
    private $ag4_0_Butyrique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 6:0, caproïque (g/100g)", type="string", length=4, nullable=true)
     */
    private $ag6_0_Caproique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 8:0, caprylique (g/100g)", type="string", length=4, nullable=true)
     */
    private $ag8_0_Caprylique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 10:0, caprique (g/100g)", type="string", length=4, nullable=true)
     */
    private $ag10_0_Caprique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 12:0, laurique (g/100g)", type="string", length=28, nullable=true)
     */
    private $ag12_0_Laurique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 14:0, myristique (g/100g)", type="string", length=24, nullable=true)
     */
    private $ag14_0_Myristique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 16:0, palmitique (g/100g)", type="string", length=24, nullable=true)
     */
    private $ag16_0_Palmitique_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 18:0, stéarique (g/100g)", type="string", length=24, nullable=true)
     */
    private $ag18_0_Stearique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 18:1 9c (n-9), oléique (g/100g)", type="string", length=20, nullable=true)
     */
    private $ag18_19c_Oleique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 18:2 9c,12c (n-6), linoléique (g/100g)", type="string", length=20, nullable=true)
     */
    private $ag18_29c_12c_n6_Linoleique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 18:3 c9,c12,c15 (n-3), alpha-linolénique (g/100g)", type="string", length=20, nullable=true)
     */
    private $ag18_3C9_c12_c15_n3_AlphaLinolenique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 20:4 5c,8c,11c,14c (n-6), arachidonique (g/100g)", type="string", length=24, nullable=true)
     */
    private $ag20_45c_8c_11c_14c_n6_Arachidonique_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 20:5 5c,8c,11c,14c,17c (n-3) EPA (g/100g)", type="string", length=4, nullable=true)
     */
    private $ag20_55c_8c_11c_14c_17c_n3_Epa_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="AG 22:6 4c,7c,10c,13c,16c,19c (n-3) DHA (g/100g)", type="string", length=4, nullable=true)
     */
    private $ag22_64c_7c_10c_13c_16c_19c_n3_Dha_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Cholestérol (mg/100g)", type="string", length=4, nullable=true)
     */
    private $cholesterol_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Sel chlorure de sodium (g/100g)", type="string", length=24, nullable=true)
     */
    private $selChlorureDeSodium_g_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Calcium (mg/100g)", type="string", length=16, nullable=true)
     */
    private $calcium_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Chlorure (mg/100g)", type="string", length=8, nullable=true)
     */
    private $chlorure_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Cuivre (mg/100g)", type="string", length=24, nullable=true)
     */
    private $cuivre_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Fer (mg/100g)", type="string", length=16, nullable=true)
     */
    private $fer_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Iode (µg/100g)", type="string", length=16, nullable=true)
     */
    private $iode_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Magnésium (mg/100g)", type="string", length=16, nullable=true)
     */
    private $magnesium_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Manganèse (mg/100g)", type="string", length=16, nullable=true)
     */
    private $manganese_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Phosphore (mg/100g)", type="string", length=16, nullable=true)
     */
    private $phosphore_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Potassium (mg/100g)", type="string", length=16, nullable=true)
     */
    private $potassium_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Sélénium (µg/100g)", type="string", length=16, nullable=true)
     */
    private $selenium_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Sodium (mg/100g)", type="string", length=24, nullable=true)
     */
    private $sodium_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Zinc (mg/100g)", type="string", length=16, nullable=true)
     */
    private $zinc_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Rétinol (µg/100g)", type="string", length=4, nullable=true)
     */
    private $retinol_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Beta-Carotène (µg/100g)", type="string", length=4, nullable=true)
     */
    private $betaCarotene_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine D (µg/100g)", type="string", length=4, nullable=true)
     */
    private $vitamineD_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine E (mg/100g)", type="string", length=16, nullable=true)
     */
    private $vitamineE_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine K1 (µg/100g)", type="string", length=12, nullable=true)
     */
    private $vitamineK1_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine K2 (µg/100g)", type="string", length=4, nullable=true)
     */
    private $vitamineK2_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine C (mg/100g)", type="string", length=20, nullable=true)
     */
    private $vitamineC_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B1 ou Thiamine (mg/100g)", type="string", length=24, nullable=true)
     */
    private $vitamineB1OuThiamine_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B2 ou Riboflavine (mg/100g)", type="string", length=20, nullable=true)
     */
    private $vitamineB2OuRiboflavine_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B3 ou PP ou Niacine (mg/100g)", type="string", length=16, nullable=true)
     */
    private $vitamineB3OuPpOuNiacine_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B5 ou Acide pantothénique (mg/100g)", type="string", length=16, nullable=true)
     */
    private $vitamineB5OuAcidePantothenique_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B6 (mg/100g)", type="string", length=20, nullable=true)
     */
    private $vitamineB6_mg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B9 ou Folates totaux (µg/100g)", type="string", length=16, nullable=true)
     */
    private $vitamineB9OuFolatesTotaux_µg_100;

    /**
     * @var string
     *
     * @ORM\Column(name="Vitamine B12 (µg/100g)", type="string", length=4, nullable=true)
     */
    private $vitamineB12__µg_100;


}

