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

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getOriggpcd() {
		return $this->origgpcd;
	}

	/**
	 * @param string $origgpcd
	 */
	public function setOriggpcd( $origgpcd ) {
		$this->origgpcd = $origgpcd;
	}

	/**
	 * @return string
	 */
	public function getOriggpfr() {
		return $this->origgpfr;
	}

	/**
	 * @param string $origgpfr
	 */
	public function setOriggpfr( $origgpfr ) {
		$this->origgpfr = $origgpfr;
	}

	/**
	 * @return string
	 */
	public function getOrigfdcd() {
		return $this->origfdcd;
	}

	/**
	 * @param string $origfdcd
	 */
	public function setOrigfdcd( $origfdcd ) {
		$this->origfdcd = $origfdcd;
	}

	/**
	 * @return string
	 */
	public function getOrigfdnm() {
		return $this->origfdnm;
	}

	/**
	 * @param string $origfdnm
	 */
	public function setOrigfdnm( $origfdnm ) {
		$this->origfdnm = $origfdnm;
	}

	/**
	 * @return string
	 */
	public function getEnergieReg1169Kj100() {
		return $this->energie_reg_1169_kj100;
	}

	/**
	 * @param string $energie_reg_1169_kj100
	 */
	public function setEnergieReg1169Kj100( $energie_reg_1169_kj100 ) {
		$this->energie_reg_1169_kj100 = $energie_reg_1169_kj100;
	}

	/**
	 * @return string
	 */
	public function getEnergieReg1169Kcal100() {
		return $this->energie_reg_1169_kcal100;
	}

	/**
	 * @param string $energie_reg_1169_kcal100
	 */
	public function setEnergieReg1169Kcal100( $energie_reg_1169_kcal100 ) {
		$this->energie_reg_1169_kcal100 = $energie_reg_1169_kcal100;
	}

	/**
	 * @return string
	 */
	public function getEnergieNXFacteurJonesAvecFibresKj100() {
		return $this->energie_NXFacteurJones_AvecFibres_kj100;
	}

	/**
	 * @param string $energie_NXFacteurJones_AvecFibres_kj100
	 */
	public function setEnergieNXFacteurJonesAvecFibresKj100( $energie_NXFacteurJones_AvecFibres_kj100 ) {
		$this->energie_NXFacteurJones_AvecFibres_kj100 = $energie_NXFacteurJones_AvecFibres_kj100;
	}

	/**
	 * @return string
	 */
	public function getEnergieNXFacteurJonesAvecFibresKcal100() {
		return $this->energie_NXFacteurJones_AvecFibres_kcal_100;
	}

	/**
	 * @param string $energie_NXFacteurJones_AvecFibres_kcal_100
	 */
	public function setEnergieNXFacteurJonesAvecFibresKcal100( $energie_NXFacteurJones_AvecFibres_kcal_100 ) {
		$this->energie_NXFacteurJones_AvecFibres_kcal_100 = $energie_NXFacteurJones_AvecFibres_kcal_100;
	}

	/**
	 * @return string
	 */
	public function getEauG100() {
		return $this->eau_g_100;
	}

	/**
	 * @param string $eau_g_100
	 */
	public function setEauG100( $eau_g_100 ) {
		$this->eau_g_100 = $eau_g_100;
	}

	/**
	 * @return string
	 */
	public function getProteines100() {
		return $this->proteines_100;
	}

	/**
	 * @param string $proteines_100
	 */
	public function setProteines100( $proteines_100 ) {
		$this->proteines_100 = $proteines_100;
	}

	/**
	 * @return string
	 */
	public function getProteinesBrutesNX625100() {
		return $this->proteinesBrutes_NX6_25_100;
	}

	/**
	 * @param string $proteinesBrutes_NX6_25_100
	 */
	public function setProteinesBrutesNX625100( $proteinesBrutes_NX6_25_100 ) {
		$this->proteinesBrutes_NX6_25_100 = $proteinesBrutes_NX6_25_100;
	}

	/**
	 * @return string
	 */
	public function getGlucides100() {
		return $this->glucides_100;
	}

	/**
	 * @param string $glucides_100
	 */
	public function setGlucides100( $glucides_100 ) {
		$this->glucides_100 = $glucides_100;
	}

	/**
	 * @return string
	 */
	public function getLipides100() {
		return $this->lipides_100;
	}

	/**
	 * @param string $lipides_100
	 */
	public function setLipides100( $lipides_100 ) {
		$this->lipides_100 = $lipides_100;
	}

	/**
	 * @return string
	 */
	public function getSucres100() {
		return $this->sucres_100;
	}

	/**
	 * @param string $sucres_100
	 */
	public function setSucres100( $sucres_100 ) {
		$this->sucres_100 = $sucres_100;
	}

	/**
	 * @return string
	 */
	public function getAmidon100() {
		return $this->amidon_100;
	}

	/**
	 * @param string $amidon_100
	 */
	public function setAmidon100( $amidon_100 ) {
		$this->amidon_100 = $amidon_100;
	}

	/**
	 * @return string
	 */
	public function getFibresAlimentaires100() {
		return $this->fibresAlimentaires_100;
	}

	/**
	 * @param string $fibresAlimentaires_100
	 */
	public function setFibresAlimentaires100( $fibresAlimentaires_100 ) {
		$this->fibresAlimentaires_100 = $fibresAlimentaires_100;
	}

	/**
	 * @return string
	 */
	public function getPolyolsTotaux100() {
		return $this->polyolsTotaux_100;
	}

	/**
	 * @param string $polyolsTotaux_100
	 */
	public function setPolyolsTotaux100( $polyolsTotaux_100 ) {
		$this->polyolsTotaux_100 = $polyolsTotaux_100;
	}

	/**
	 * @return string
	 */
	public function getCendres100() {
		return $this->cendres_100;
	}

	/**
	 * @param string $cendres_100
	 */
	public function setCendres100( $cendres_100 ) {
		$this->cendres_100 = $cendres_100;
	}

	/**
	 * @return string
	 */
	public function getAlcool100() {
		return $this->alcool_100;
	}

	/**
	 * @param string $alcool_100
	 */
	public function setAlcool100( $alcool_100 ) {
		$this->alcool_100 = $alcool_100;
	}

	/**
	 * @return string
	 */
	public function getAcidesOrganiques100() {
		return $this->acidesOrganiques_100;
	}

	/**
	 * @param string $acidesOrganiques_100
	 */
	public function setAcidesOrganiques100( $acidesOrganiques_100 ) {
		$this->acidesOrganiques_100 = $acidesOrganiques_100;
	}

	/**
	 * @return string
	 */
	public function getAgSatures100g() {
		return $this->agSatures_100g;
	}

	/**
	 * @param string $agSatures_100g
	 */
	public function setAgSatures100g( $agSatures_100g ) {
		$this->agSatures_100g = $agSatures_100g;
	}

	/**
	 * @return string
	 */
	public function getAgMonoinsaturesG100() {
		return $this->agMonoinsatures_g_100;
	}

	/**
	 * @param string $agMonoinsatures_g_100
	 */
	public function setAgMonoinsaturesG100( $agMonoinsatures_g_100 ) {
		$this->agMonoinsatures_g_100 = $agMonoinsatures_g_100;
	}

	/**
	 * @return string
	 */
	public function getAgPolyinsaturesG100() {
		return $this->agPolyinsatures_g_100;
	}

	/**
	 * @param string $agPolyinsatures_g_100
	 */
	public function setAgPolyinsaturesG100( $agPolyinsatures_g_100 ) {
		$this->agPolyinsatures_g_100 = $agPolyinsatures_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg40ButyriqueG100() {
		return $this->ag4_0_Butyrique_g_100;
	}

	/**
	 * @param string $ag4_0_Butyrique_g_100
	 */
	public function setAg40ButyriqueG100( $ag4_0_Butyrique_g_100 ) {
		$this->ag4_0_Butyrique_g_100 = $ag4_0_Butyrique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg60CaproiqueG100() {
		return $this->ag6_0_Caproique_g_100;
	}

	/**
	 * @param string $ag6_0_Caproique_g_100
	 */
	public function setAg60CaproiqueG100( $ag6_0_Caproique_g_100 ) {
		$this->ag6_0_Caproique_g_100 = $ag6_0_Caproique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg80CapryliqueG100() {
		return $this->ag8_0_Caprylique_g_100;
	}

	/**
	 * @param string $ag8_0_Caprylique_g_100
	 */
	public function setAg80CapryliqueG100( $ag8_0_Caprylique_g_100 ) {
		$this->ag8_0_Caprylique_g_100 = $ag8_0_Caprylique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg100CapriqueG100() {
		return $this->ag10_0_Caprique_g_100;
	}

	/**
	 * @param string $ag10_0_Caprique_g_100
	 */
	public function setAg100CapriqueG100( $ag10_0_Caprique_g_100 ) {
		$this->ag10_0_Caprique_g_100 = $ag10_0_Caprique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg120LauriqueG100() {
		return $this->ag12_0_Laurique_g_100;
	}

	/**
	 * @param string $ag12_0_Laurique_g_100
	 */
	public function setAg120LauriqueG100( $ag12_0_Laurique_g_100 ) {
		$this->ag12_0_Laurique_g_100 = $ag12_0_Laurique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg140MyristiqueG100() {
		return $this->ag14_0_Myristique_g_100;
	}

	/**
	 * @param string $ag14_0_Myristique_g_100
	 */
	public function setAg140MyristiqueG100( $ag14_0_Myristique_g_100 ) {
		$this->ag14_0_Myristique_g_100 = $ag14_0_Myristique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg160Palmitique100() {
		return $this->ag16_0_Palmitique_100;
	}

	/**
	 * @param string $ag16_0_Palmitique_100
	 */
	public function setAg160Palmitique100( $ag16_0_Palmitique_100 ) {
		$this->ag16_0_Palmitique_100 = $ag16_0_Palmitique_100;
	}

	/**
	 * @return string
	 */
	public function getAg180SteariqueG100() {
		return $this->ag18_0_Stearique_g_100;
	}

	/**
	 * @param string $ag18_0_Stearique_g_100
	 */
	public function setAg180SteariqueG100( $ag18_0_Stearique_g_100 ) {
		$this->ag18_0_Stearique_g_100 = $ag18_0_Stearique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg1819cOleiqueG100() {
		return $this->ag18_19c_Oleique_g_100;
	}

	/**
	 * @param string $ag18_19c_Oleique_g_100
	 */
	public function setAg1819cOleiqueG100( $ag18_19c_Oleique_g_100 ) {
		$this->ag18_19c_Oleique_g_100 = $ag18_19c_Oleique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg1829c12cN6LinoleiqueG100() {
		return $this->ag18_29c_12c_n6_Linoleique_g_100;
	}

	/**
	 * @param string $ag18_29c_12c_n6_Linoleique_g_100
	 */
	public function setAg1829c12cN6LinoleiqueG100( $ag18_29c_12c_n6_Linoleique_g_100 ) {
		$this->ag18_29c_12c_n6_Linoleique_g_100 = $ag18_29c_12c_n6_Linoleique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg183C9C12C15N3AlphaLinoleniqueG100() {
		return $this->ag18_3C9_c12_c15_n3_AlphaLinolenique_g_100;
	}

	/**
	 * @param string $ag18_3C9_c12_c15_n3_AlphaLinolenique_g_100
	 */
	public function setAg183C9C12C15N3AlphaLinoleniqueG100( $ag18_3C9_c12_c15_n3_AlphaLinolenique_g_100 ) {
		$this->ag18_3C9_c12_c15_n3_AlphaLinolenique_g_100 = $ag18_3C9_c12_c15_n3_AlphaLinolenique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg2045c8c11c14cN6ArachidoniqueG100() {
		return $this->ag20_45c_8c_11c_14c_n6_Arachidonique_g_100;
	}

	/**
	 * @param string $ag20_45c_8c_11c_14c_n6_Arachidonique_g_100
	 */
	public function setAg2045c8c11c14cN6ArachidoniqueG100( $ag20_45c_8c_11c_14c_n6_Arachidonique_g_100 ) {
		$this->ag20_45c_8c_11c_14c_n6_Arachidonique_g_100 = $ag20_45c_8c_11c_14c_n6_Arachidonique_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg2055c8c11c14c17cN3EpaG100() {
		return $this->ag20_55c_8c_11c_14c_17c_n3_Epa_g_100;
	}

	/**
	 * @param string $ag20_55c_8c_11c_14c_17c_n3_Epa_g_100
	 */
	public function setAg2055c8c11c14c17cN3EpaG100( $ag20_55c_8c_11c_14c_17c_n3_Epa_g_100 ) {
		$this->ag20_55c_8c_11c_14c_17c_n3_Epa_g_100 = $ag20_55c_8c_11c_14c_17c_n3_Epa_g_100;
	}

	/**
	 * @return string
	 */
	public function getAg2264c7c10c13c16c19cN3DhaG100() {
		return $this->ag22_64c_7c_10c_13c_16c_19c_n3_Dha_g_100;
	}

	/**
	 * @param string $ag22_64c_7c_10c_13c_16c_19c_n3_Dha_g_100
	 */
	public function setAg2264c7c10c13c16c19cN3DhaG100( $ag22_64c_7c_10c_13c_16c_19c_n3_Dha_g_100 ) {
		$this->ag22_64c_7c_10c_13c_16c_19c_n3_Dha_g_100 = $ag22_64c_7c_10c_13c_16c_19c_n3_Dha_g_100;
	}

	/**
	 * @return string
	 */
	public function getCholesterolMg100() {
		return $this->cholesterol_mg_100;
	}

	/**
	 * @param string $cholesterol_mg_100
	 */
	public function setCholesterolMg100( $cholesterol_mg_100 ) {
		$this->cholesterol_mg_100 = $cholesterol_mg_100;
	}

	/**
	 * @return string
	 */
	public function getSelChlorureDeSodiumG100() {
		return $this->selChlorureDeSodium_g_100;
	}

	/**
	 * @param string $selChlorureDeSodium_g_100
	 */
	public function setSelChlorureDeSodiumG100( $selChlorureDeSodium_g_100 ) {
		$this->selChlorureDeSodium_g_100 = $selChlorureDeSodium_g_100;
	}

	/**
	 * @return string
	 */
	public function getCalciumMg100() {
		return $this->calcium_mg_100;
	}

	/**
	 * @param string $calcium_mg_100
	 */
	public function setCalciumMg100( $calcium_mg_100 ) {
		$this->calcium_mg_100 = $calcium_mg_100;
	}

	/**
	 * @return string
	 */
	public function getChlorureMg100() {
		return $this->chlorure_mg_100;
	}

	/**
	 * @param string $chlorure_mg_100
	 */
	public function setChlorureMg100( $chlorure_mg_100 ) {
		$this->chlorure_mg_100 = $chlorure_mg_100;
	}

	/**
	 * @return string
	 */
	public function getCuivreMg100() {
		return $this->cuivre_mg_100;
	}

	/**
	 * @param string $cuivre_mg_100
	 */
	public function setCuivreMg100( $cuivre_mg_100 ) {
		$this->cuivre_mg_100 = $cuivre_mg_100;
	}

	/**
	 * @return string
	 */
	public function getFerMg100() {
		return $this->fer_mg_100;
	}

	/**
	 * @param string $fer_mg_100
	 */
	public function setFerMg100( $fer_mg_100 ) {
		$this->fer_mg_100 = $fer_mg_100;
	}

	/**
	 * @return string
	 */
	public function getIodeΜg100() {
		return $this->iode_µg_100;
	}

	/**
	 * @param string $iode_µg_100
	 */
	public function setIodeΜg100( $iode_µg_100 ) {
		$this->iode_µg_100 = $iode_µg_100;
	}

	/**
	 * @return string
	 */
	public function getMagnesiumMg100() {
		return $this->magnesium_mg_100;
	}

	/**
	 * @param string $magnesium_mg_100
	 */
	public function setMagnesiumMg100( $magnesium_mg_100 ) {
		$this->magnesium_mg_100 = $magnesium_mg_100;
	}

	/**
	 * @return string
	 */
	public function getManganeseMg100() {
		return $this->manganese_mg_100;
	}

	/**
	 * @param string $manganese_mg_100
	 */
	public function setManganeseMg100( $manganese_mg_100 ) {
		$this->manganese_mg_100 = $manganese_mg_100;
	}

	/**
	 * @return string
	 */
	public function getPhosphoreMg100() {
		return $this->phosphore_mg_100;
	}

	/**
	 * @param string $phosphore_mg_100
	 */
	public function setPhosphoreMg100( $phosphore_mg_100 ) {
		$this->phosphore_mg_100 = $phosphore_mg_100;
	}

	/**
	 * @return string
	 */
	public function getPotassiumMg100() {
		return $this->potassium_mg_100;
	}

	/**
	 * @param string $potassium_mg_100
	 */
	public function setPotassiumMg100( $potassium_mg_100 ) {
		$this->potassium_mg_100 = $potassium_mg_100;
	}

	/**
	 * @return string
	 */
	public function getSeleniumΜg100() {
		return $this->selenium_µg_100;
	}

	/**
	 * @param string $selenium_µg_100
	 */
	public function setSeleniumΜg100( $selenium_µg_100 ) {
		$this->selenium_µg_100 = $selenium_µg_100;
	}

	/**
	 * @return string
	 */
	public function getSodiumMg100() {
		return $this->sodium_mg_100;
	}

	/**
	 * @param string $sodium_mg_100
	 */
	public function setSodiumMg100( $sodium_mg_100 ) {
		$this->sodium_mg_100 = $sodium_mg_100;
	}

	/**
	 * @return string
	 */
	public function getZincMg100() {
		return $this->zinc_mg_100;
	}

	/**
	 * @param string $zinc_mg_100
	 */
	public function setZincMg100( $zinc_mg_100 ) {
		$this->zinc_mg_100 = $zinc_mg_100;
	}

	/**
	 * @return string
	 */
	public function getRetinolΜg100() {
		return $this->retinol_µg_100;
	}

	/**
	 * @param string $retinol_µg_100
	 */
	public function setRetinolΜg100( $retinol_µg_100 ) {
		$this->retinol_µg_100 = $retinol_µg_100;
	}

	/**
	 * @return string
	 */
	public function getBetaCaroteneΜg100() {
		return $this->betaCarotene_µg_100;
	}

	/**
	 * @param string $betaCarotene_µg_100
	 */
	public function setBetaCaroteneΜg100( $betaCarotene_µg_100 ) {
		$this->betaCarotene_µg_100 = $betaCarotene_µg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineDΜg100() {
		return $this->vitamineD_µg_100;
	}

	/**
	 * @param string $vitamineD_µg_100
	 */
	public function setVitamineDΜg100( $vitamineD_µg_100 ) {
		$this->vitamineD_µg_100 = $vitamineD_µg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineEMg100() {
		return $this->vitamineE_mg_100;
	}

	/**
	 * @param string $vitamineE_mg_100
	 */
	public function setVitamineEMg100( $vitamineE_mg_100 ) {
		$this->vitamineE_mg_100 = $vitamineE_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineK1Μg100() {
		return $this->vitamineK1_µg_100;
	}

	/**
	 * @param string $vitamineK1_µg_100
	 */
	public function setVitamineK1Μg100( $vitamineK1_µg_100 ) {
		$this->vitamineK1_µg_100 = $vitamineK1_µg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineK2Μg100() {
		return $this->vitamineK2_µg_100;
	}

	/**
	 * @param string $vitamineK2_µg_100
	 */
	public function setVitamineK2Μg100( $vitamineK2_µg_100 ) {
		$this->vitamineK2_µg_100 = $vitamineK2_µg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineCMg100() {
		return $this->vitamineC_mg_100;
	}

	/**
	 * @param string $vitamineC_mg_100
	 */
	public function setVitamineCMg100( $vitamineC_mg_100 ) {
		$this->vitamineC_mg_100 = $vitamineC_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB1OuThiamineMg100() {
		return $this->vitamineB1OuThiamine_mg_100;
	}

	/**
	 * @param string $vitamineB1OuThiamine_mg_100
	 */
	public function setVitamineB1OuThiamineMg100( $vitamineB1OuThiamine_mg_100 ) {
		$this->vitamineB1OuThiamine_mg_100 = $vitamineB1OuThiamine_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB2OuRiboflavineMg100() {
		return $this->vitamineB2OuRiboflavine_mg_100;
	}

	/**
	 * @param string $vitamineB2OuRiboflavine_mg_100
	 */
	public function setVitamineB2OuRiboflavineMg100( $vitamineB2OuRiboflavine_mg_100 ) {
		$this->vitamineB2OuRiboflavine_mg_100 = $vitamineB2OuRiboflavine_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB3OuPpOuNiacineMg100() {
		return $this->vitamineB3OuPpOuNiacine_mg_100;
	}

	/**
	 * @param string $vitamineB3OuPpOuNiacine_mg_100
	 */
	public function setVitamineB3OuPpOuNiacineMg100( $vitamineB3OuPpOuNiacine_mg_100 ) {
		$this->vitamineB3OuPpOuNiacine_mg_100 = $vitamineB3OuPpOuNiacine_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB5OuAcidePantotheniqueMg100() {
		return $this->vitamineB5OuAcidePantothenique_mg_100;
	}

	/**
	 * @param string $vitamineB5OuAcidePantothenique_mg_100
	 */
	public function setVitamineB5OuAcidePantotheniqueMg100( $vitamineB5OuAcidePantothenique_mg_100 ) {
		$this->vitamineB5OuAcidePantothenique_mg_100 = $vitamineB5OuAcidePantothenique_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB6Mg100() {
		return $this->vitamineB6_mg_100;
	}

	/**
	 * @param string $vitamineB6_mg_100
	 */
	public function setVitamineB6Mg100( $vitamineB6_mg_100 ) {
		$this->vitamineB6_mg_100 = $vitamineB6_mg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB9OuFolatesTotauxΜg100() {
		return $this->vitamineB9OuFolatesTotaux_µg_100;
	}

	/**
	 * @param string $vitamineB9OuFolatesTotaux_µg_100
	 */
	public function setVitamineB9OuFolatesTotauxΜg100( $vitamineB9OuFolatesTotaux_µg_100 ) {
		$this->vitamineB9OuFolatesTotaux_µg_100 = $vitamineB9OuFolatesTotaux_µg_100;
	}

	/**
	 * @return string
	 */
	public function getVitamineB12Μg100() {
		return $this->vitamineB12__µg_100;
	}

	/**
	 * @param string $vitamineB12__µg_100
	 */
	public function setVitamineB12Μg100( $vitamineB12__µg_100 ) {
		$this->vitamineB12__µg_100 = $vitamineB12__µg_100;
	}


}

