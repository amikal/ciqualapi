<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ciqual
 *
 * @ApiResource(attributes={"filters"={"ciqual.search_filter"},"pagination_items_per_page"=5})
 * @ORM\Table(name="ciqual")
 * @ORM\Entity
 */
class Ciqual
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
     * @ORM\Column(name="origgpcd", type="string", length=255, nullable=true)
     */
    private $origgpcd;

    /**
     * @var string
     *
     * @ORM\Column(name="origgpfr", type="string", length=255, nullable=true)
     */
    private $origgpfr;

    /**
     * @var string
     *
     * @ORM\Column(name="origfdcd", type="string", length=255, nullable=true)
     */
    private $origfdcd;

    /**
     * @var string
     *
     * @ORM\Column(name="origfdnm", type="string", length=255, nullable=true)
     */
    private $origfdnm;

    /**
     * @var string
     *
     * @ORM\Column(name="energie_reglement_ue_num_1169_2011_kj_100g", type="string", length=255, nullable=true)
     */
    private $energieReglementUeNum11692011Kj100g;

    /**
     * @var string
     *
     * @ORM\Column(name="energie_reglement_ue_num_1169_2011_kcal_100g", type="string", length=255, nullable=true)
     */
    private $energieReglementUeNum11692011Kcal100g;

    /**
     * @var string
     *
     * @ORM\Column(name="energie_n_x_facteur_jones_avec_fibres_kj_100g", type="string", length=255, nullable=true)
     */
    private $energieNXFacteurJonesAvecFibresKj100g;

    /**
     * @var string
     *
     * @ORM\Column(name="energie_n_x_facteur_jones_avec_fibres_kcal_100g", type="string", length=255, nullable=true)
     */
    private $energieNXFacteurJonesAvecFibresKcal100g;

    /**
     * @var string
     *
     * @ORM\Column(name="eau_g_100g", type="string", length=255, nullable=true)
     */
    private $eauG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="proteines_g_100g", type="string", length=255, nullable=true)
     */
    private $proteinesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="proteines_brutes_n_x_625_g_100g", type="string", length=255, nullable=true)
     */
    private $proteinesBrutesNX625G100g;

    /**
     * @var string
     *
     * @ORM\Column(name="glucides_g_100g", type="string", length=255, nullable=true)
     */
    private $glucidesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="lipides_g_100g", type="string", length=255, nullable=true)
     */
    private $lipidesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="sucres_g_100g", type="string", length=255, nullable=true)
     */
    private $sucresG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="amidon_g_100g", type="string", length=255, nullable=true)
     */
    private $amidonG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="fibres_alimentaires_g_100g", type="string", length=255, nullable=true)
     */
    private $fibresAlimentairesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="polyols_totaux_g_100g", type="string", length=255, nullable=true)
     */
    private $polyolsTotauxG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="cendres_g_100g", type="string", length=255, nullable=true)
     */
    private $cendresG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="alcool_g_100g", type="string", length=255, nullable=true)
     */
    private $alcoolG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="acides_organiques_g_100g", type="string", length=255, nullable=true)
     */
    private $acidesOrganiquesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_satures_g_100g", type="string", length=255, nullable=true)
     */
    private $agSaturesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_monoinsatures_g_100g", type="string", length=255, nullable=true)
     */
    private $agMonoinsaturesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_polyinsatures_g_100g", type="string", length=255, nullable=true)
     */
    private $agPolyinsaturesG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_40_butyrique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag40ButyriqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_60_caproique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag60CaproiqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_80_caprylique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag80CapryliqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_100_caprique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag100CapriqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_120_laurique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag120LauriqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_140_myristique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag140MyristiqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_160_palmitique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag160PalmitiqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_180_stearique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag180SteariqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_181_9c_n9_oleique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag1819cN9OleiqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_182_9c12c_n6_linoleique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag1829c12cN6LinoleiqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_183_c9c12c15_n3_alphalinolenique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag183C9c12c15N3AlphalinoleniqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_204_5c8c11c14c_n6_arachidonique_g_100g", type="string", length=255, nullable=true)
     */
    private $ag2045c8c11c14cN6ArachidoniqueG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_205_5c8c11c14c17c_n3_epa_g_100g", type="string", length=255, nullable=true)
     */
    private $ag2055c8c11c14c17cN3EpaG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_226_4c7c10c13c16c19c_n3_dha_g_100g", type="string", length=255, nullable=true)
     */
    private $ag2264c7c10c13c16c19cN3DhaG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="cholesterol_mg_100g", type="string", length=255, nullable=true)
     */
    private $cholesterolMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="sel_chlorure_de_sodium_g_100g", type="string", length=255, nullable=true)
     */
    private $selChlorureDeSodiumG100g;

    /**
     * @var string
     *
     * @ORM\Column(name="calcium_mg_100g", type="string", length=255, nullable=true)
     */
    private $calciumMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="chlorure_mg_100g", type="string", length=255, nullable=true)
     */
    private $chlorureMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="cuivre_mg_100g", type="string", length=255, nullable=true)
     */
    private $cuivreMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="fer_mg_100g", type="string", length=255, nullable=true)
     */
    private $ferMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="iode_microg_100g", type="string", length=255, nullable=true)
     */
    private $iodeMicrog100g;

    /**
     * @var string
     *
     * @ORM\Column(name="magnesium_mg_100g", type="string", length=255, nullable=true)
     */
    private $magnesiumMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="manganese_mg_100g", type="string", length=255, nullable=true)
     */
    private $manganeseMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="phosphore_mg_100g", type="string", length=255, nullable=true)
     */
    private $phosphoreMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="potassium_mg_100g", type="string", length=255, nullable=true)
     */
    private $potassiumMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="selenium_microg_100g", type="string", length=255, nullable=true)
     */
    private $seleniumMicrog100g;

    /**
     * @var string
     *
     * @ORM\Column(name="sodium_mg_100g", type="string", length=255, nullable=true)
     */
    private $sodiumMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="zinc_mg_100g", type="string", length=255, nullable=true)
     */
    private $zincMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="retinol_microg_100g", type="string", length=255, nullable=true)
     */
    private $retinolMicrog100g;

    /**
     * @var string
     *
     * @ORM\Column(name="betacarotene_microg_100g", type="string", length=255, nullable=true)
     */
    private $betacaroteneMicrog100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_d_microg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineDMicrog100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_e_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineEMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_k1_microg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineK1Microg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_k2_microg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineK2Microg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_c_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineCMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b1_ou_thiamine_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB1OuThiamineMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b2_ou_riboflavine_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB2OuRiboflavineMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b3_ou_pp_ou_niacine_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB3OuPpOuNiacineMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b5_ou_acide_pantothenique_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB5OuAcidePantotheniqueMg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b6_mg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB6Mg100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b9_ou_folates_totaux_microg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB9OuFolatesTotauxMicrog100g;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamine_b12_microg_100g", type="string", length=255, nullable=true)
     */
    private $vitamineB12Microg100g;

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
	public function getEnergieReglementUeNum11692011Kj100g() {
		return $this->energieReglementUeNum11692011Kj100g;
	}

	/**
	 * @param string $energieReglementUeNum11692011Kj100g
	 */
	public function setEnergieReglementUeNum11692011Kj100g( $energieReglementUeNum11692011Kj100g ) {
		$this->energieReglementUeNum11692011Kj100g = $energieReglementUeNum11692011Kj100g;
	}

	/**
	 * @return string
	 */
	public function getEnergieReglementUeNum11692011Kcal100g() {
		return $this->energieReglementUeNum11692011Kcal100g;
	}

	/**
	 * @param string $energieReglementUeNum11692011Kcal100g
	 */
	public function setEnergieReglementUeNum11692011Kcal100g( $energieReglementUeNum11692011Kcal100g ) {
		$this->energieReglementUeNum11692011Kcal100g = $energieReglementUeNum11692011Kcal100g;
	}

	/**
	 * @return string
	 */
	public function getEnergieNXFacteurJonesAvecFibresKj100g() {
		return $this->energieNXFacteurJonesAvecFibresKj100g;
	}

	/**
	 * @param string $energieNXFacteurJonesAvecFibresKj100g
	 */
	public function setEnergieNXFacteurJonesAvecFibresKj100g( $energieNXFacteurJonesAvecFibresKj100g ) {
		$this->energieNXFacteurJonesAvecFibresKj100g = $energieNXFacteurJonesAvecFibresKj100g;
	}

	/**
	 * @return string
	 */
	public function getEnergieNXFacteurJonesAvecFibresKcal100g() {
		return $this->energieNXFacteurJonesAvecFibresKcal100g;
	}

	/**
	 * @param string $energieNXFacteurJonesAvecFibresKcal100g
	 */
	public function setEnergieNXFacteurJonesAvecFibresKcal100g( $energieNXFacteurJonesAvecFibresKcal100g ) {
		$this->energieNXFacteurJonesAvecFibresKcal100g = $energieNXFacteurJonesAvecFibresKcal100g;
	}

	/**
	 * @return string
	 */
	public function getEauG100g() {
		return $this->eauG100g;
	}

	/**
	 * @param string $eauG100g
	 */
	public function setEauG100g( $eauG100g ) {
		$this->eauG100g = $eauG100g;
	}

	/**
	 * @return string
	 */
	public function getProteinesG100g() {
		return $this->proteinesG100g;
	}

	/**
	 * @param string $proteinesG100g
	 */
	public function setProteinesG100g( $proteinesG100g ) {
		$this->proteinesG100g = $proteinesG100g;
	}

	/**
	 * @return string
	 */
	public function getProteinesBrutesNX625G100g() {
		return $this->proteinesBrutesNX625G100g;
	}

	/**
	 * @param string $proteinesBrutesNX625G100g
	 */
	public function setProteinesBrutesNX625G100g( $proteinesBrutesNX625G100g ) {
		$this->proteinesBrutesNX625G100g = $proteinesBrutesNX625G100g;
	}

	/**
	 * @return string
	 */
	public function getGlucidesG100g() {
		return $this->glucidesG100g;
	}

	/**
	 * @param string $glucidesG100g
	 */
	public function setGlucidesG100g( $glucidesG100g ) {
		$this->glucidesG100g = $glucidesG100g;
	}

	/**
	 * @return string
	 */
	public function getLipidesG100g() {
		return $this->lipidesG100g;
	}

	/**
	 * @param string $lipidesG100g
	 */
	public function setLipidesG100g( $lipidesG100g ) {
		$this->lipidesG100g = $lipidesG100g;
	}

	/**
	 * @return string
	 */
	public function getSucresG100g() {
		return $this->sucresG100g;
	}

	/**
	 * @param string $sucresG100g
	 */
	public function setSucresG100g( $sucresG100g ) {
		$this->sucresG100g = $sucresG100g;
	}

	/**
	 * @return string
	 */
	public function getAmidonG100g() {
		return $this->amidonG100g;
	}

	/**
	 * @param string $amidonG100g
	 */
	public function setAmidonG100g( $amidonG100g ) {
		$this->amidonG100g = $amidonG100g;
	}

	/**
	 * @return string
	 */
	public function getFibresAlimentairesG100g() {
		return $this->fibresAlimentairesG100g;
	}

	/**
	 * @param string $fibresAlimentairesG100g
	 */
	public function setFibresAlimentairesG100g( $fibresAlimentairesG100g ) {
		$this->fibresAlimentairesG100g = $fibresAlimentairesG100g;
	}

	/**
	 * @return string
	 */
	public function getPolyolsTotauxG100g() {
		return $this->polyolsTotauxG100g;
	}

	/**
	 * @param string $polyolsTotauxG100g
	 */
	public function setPolyolsTotauxG100g( $polyolsTotauxG100g ) {
		$this->polyolsTotauxG100g = $polyolsTotauxG100g;
	}

	/**
	 * @return string
	 */
	public function getCendresG100g() {
		return $this->cendresG100g;
	}

	/**
	 * @param string $cendresG100g
	 */
	public function setCendresG100g( $cendresG100g ) {
		$this->cendresG100g = $cendresG100g;
	}

	/**
	 * @return string
	 */
	public function getAlcoolG100g() {
		return $this->alcoolG100g;
	}

	/**
	 * @param string $alcoolG100g
	 */
	public function setAlcoolG100g( $alcoolG100g ) {
		$this->alcoolG100g = $alcoolG100g;
	}

	/**
	 * @return string
	 */
	public function getAcidesOrganiquesG100g() {
		return $this->acidesOrganiquesG100g;
	}

	/**
	 * @param string $acidesOrganiquesG100g
	 */
	public function setAcidesOrganiquesG100g( $acidesOrganiquesG100g ) {
		$this->acidesOrganiquesG100g = $acidesOrganiquesG100g;
	}

	/**
	 * @return string
	 */
	public function getAgSaturesG100g() {
		return $this->agSaturesG100g;
	}

	/**
	 * @param string $agSaturesG100g
	 */
	public function setAgSaturesG100g( $agSaturesG100g ) {
		$this->agSaturesG100g = $agSaturesG100g;
	}

	/**
	 * @return string
	 */
	public function getAgMonoinsaturesG100g() {
		return $this->agMonoinsaturesG100g;
	}

	/**
	 * @param string $agMonoinsaturesG100g
	 */
	public function setAgMonoinsaturesG100g( $agMonoinsaturesG100g ) {
		$this->agMonoinsaturesG100g = $agMonoinsaturesG100g;
	}

	/**
	 * @return string
	 */
	public function getAgPolyinsaturesG100g() {
		return $this->agPolyinsaturesG100g;
	}

	/**
	 * @param string $agPolyinsaturesG100g
	 */
	public function setAgPolyinsaturesG100g( $agPolyinsaturesG100g ) {
		$this->agPolyinsaturesG100g = $agPolyinsaturesG100g;
	}

	/**
	 * @return string
	 */
	public function getAg40ButyriqueG100g() {
		return $this->ag40ButyriqueG100g;
	}

	/**
	 * @param string $ag40ButyriqueG100g
	 */
	public function setAg40ButyriqueG100g( $ag40ButyriqueG100g ) {
		$this->ag40ButyriqueG100g = $ag40ButyriqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg60CaproiqueG100g() {
		return $this->ag60CaproiqueG100g;
	}

	/**
	 * @param string $ag60CaproiqueG100g
	 */
	public function setAg60CaproiqueG100g( $ag60CaproiqueG100g ) {
		$this->ag60CaproiqueG100g = $ag60CaproiqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg80CapryliqueG100g() {
		return $this->ag80CapryliqueG100g;
	}

	/**
	 * @param string $ag80CapryliqueG100g
	 */
	public function setAg80CapryliqueG100g( $ag80CapryliqueG100g ) {
		$this->ag80CapryliqueG100g = $ag80CapryliqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg100CapriqueG100g() {
		return $this->ag100CapriqueG100g;
	}

	/**
	 * @param string $ag100CapriqueG100g
	 */
	public function setAg100CapriqueG100g( $ag100CapriqueG100g ) {
		$this->ag100CapriqueG100g = $ag100CapriqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg120LauriqueG100g() {
		return $this->ag120LauriqueG100g;
	}

	/**
	 * @param string $ag120LauriqueG100g
	 */
	public function setAg120LauriqueG100g( $ag120LauriqueG100g ) {
		$this->ag120LauriqueG100g = $ag120LauriqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg140MyristiqueG100g() {
		return $this->ag140MyristiqueG100g;
	}

	/**
	 * @param string $ag140MyristiqueG100g
	 */
	public function setAg140MyristiqueG100g( $ag140MyristiqueG100g ) {
		$this->ag140MyristiqueG100g = $ag140MyristiqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg160PalmitiqueG100g() {
		return $this->ag160PalmitiqueG100g;
	}

	/**
	 * @param string $ag160PalmitiqueG100g
	 */
	public function setAg160PalmitiqueG100g( $ag160PalmitiqueG100g ) {
		$this->ag160PalmitiqueG100g = $ag160PalmitiqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg180SteariqueG100g() {
		return $this->ag180SteariqueG100g;
	}

	/**
	 * @param string $ag180SteariqueG100g
	 */
	public function setAg180SteariqueG100g( $ag180SteariqueG100g ) {
		$this->ag180SteariqueG100g = $ag180SteariqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg1819cN9OleiqueG100g() {
		return $this->ag1819cN9OleiqueG100g;
	}

	/**
	 * @param string $ag1819cN9OleiqueG100g
	 */
	public function setAg1819cN9OleiqueG100g( $ag1819cN9OleiqueG100g ) {
		$this->ag1819cN9OleiqueG100g = $ag1819cN9OleiqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg1829c12cN6LinoleiqueG100g() {
		return $this->ag1829c12cN6LinoleiqueG100g;
	}

	/**
	 * @param string $ag1829c12cN6LinoleiqueG100g
	 */
	public function setAg1829c12cN6LinoleiqueG100g( $ag1829c12cN6LinoleiqueG100g ) {
		$this->ag1829c12cN6LinoleiqueG100g = $ag1829c12cN6LinoleiqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg183C9c12c15N3AlphalinoleniqueG100g() {
		return $this->ag183C9c12c15N3AlphalinoleniqueG100g;
	}

	/**
	 * @param string $ag183C9c12c15N3AlphalinoleniqueG100g
	 */
	public function setAg183C9c12c15N3AlphalinoleniqueG100g( $ag183C9c12c15N3AlphalinoleniqueG100g ) {
		$this->ag183C9c12c15N3AlphalinoleniqueG100g = $ag183C9c12c15N3AlphalinoleniqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg2045c8c11c14cN6ArachidoniqueG100g() {
		return $this->ag2045c8c11c14cN6ArachidoniqueG100g;
	}

	/**
	 * @param string $ag2045c8c11c14cN6ArachidoniqueG100g
	 */
	public function setAg2045c8c11c14cN6ArachidoniqueG100g( $ag2045c8c11c14cN6ArachidoniqueG100g ) {
		$this->ag2045c8c11c14cN6ArachidoniqueG100g = $ag2045c8c11c14cN6ArachidoniqueG100g;
	}

	/**
	 * @return string
	 */
	public function getAg2055c8c11c14c17cN3EpaG100g() {
		return $this->ag2055c8c11c14c17cN3EpaG100g;
	}

	/**
	 * @param string $ag2055c8c11c14c17cN3EpaG100g
	 */
	public function setAg2055c8c11c14c17cN3EpaG100g( $ag2055c8c11c14c17cN3EpaG100g ) {
		$this->ag2055c8c11c14c17cN3EpaG100g = $ag2055c8c11c14c17cN3EpaG100g;
	}

	/**
	 * @return string
	 */
	public function getAg2264c7c10c13c16c19cN3DhaG100g() {
		return $this->ag2264c7c10c13c16c19cN3DhaG100g;
	}

	/**
	 * @param string $ag2264c7c10c13c16c19cN3DhaG100g
	 */
	public function setAg2264c7c10c13c16c19cN3DhaG100g( $ag2264c7c10c13c16c19cN3DhaG100g ) {
		$this->ag2264c7c10c13c16c19cN3DhaG100g = $ag2264c7c10c13c16c19cN3DhaG100g;
	}

	/**
	 * @return string
	 */
	public function getCholesterolMg100g() {
		return $this->cholesterolMg100g;
	}

	/**
	 * @param string $cholesterolMg100g
	 */
	public function setCholesterolMg100g( $cholesterolMg100g ) {
		$this->cholesterolMg100g = $cholesterolMg100g;
	}

	/**
	 * @return string
	 */
	public function getSelChlorureDeSodiumG100g() {
		return $this->selChlorureDeSodiumG100g;
	}

	/**
	 * @param string $selChlorureDeSodiumG100g
	 */
	public function setSelChlorureDeSodiumG100g( $selChlorureDeSodiumG100g ) {
		$this->selChlorureDeSodiumG100g = $selChlorureDeSodiumG100g;
	}

	/**
	 * @return string
	 */
	public function getCalciumMg100g() {
		return $this->calciumMg100g;
	}

	/**
	 * @param string $calciumMg100g
	 */
	public function setCalciumMg100g( $calciumMg100g ) {
		$this->calciumMg100g = $calciumMg100g;
	}

	/**
	 * @return string
	 */
	public function getChlorureMg100g() {
		return $this->chlorureMg100g;
	}

	/**
	 * @param string $chlorureMg100g
	 */
	public function setChlorureMg100g( $chlorureMg100g ) {
		$this->chlorureMg100g = $chlorureMg100g;
	}

	/**
	 * @return string
	 */
	public function getCuivreMg100g() {
		return $this->cuivreMg100g;
	}

	/**
	 * @param string $cuivreMg100g
	 */
	public function setCuivreMg100g( $cuivreMg100g ) {
		$this->cuivreMg100g = $cuivreMg100g;
	}

	/**
	 * @return string
	 */
	public function getFerMg100g() {
		return $this->ferMg100g;
	}

	/**
	 * @param string $ferMg100g
	 */
	public function setFerMg100g( $ferMg100g ) {
		$this->ferMg100g = $ferMg100g;
	}

	/**
	 * @return string
	 */
	public function getIodeMicrog100g() {
		return $this->iodeMicrog100g;
	}

	/**
	 * @param string $iodeMicrog100g
	 */
	public function setIodeMicrog100g( $iodeMicrog100g ) {
		$this->iodeMicrog100g = $iodeMicrog100g;
	}

	/**
	 * @return string
	 */
	public function getMagnesiumMg100g() {
		return $this->magnesiumMg100g;
	}

	/**
	 * @param string $magnesiumMg100g
	 */
	public function setMagnesiumMg100g( $magnesiumMg100g ) {
		$this->magnesiumMg100g = $magnesiumMg100g;
	}

	/**
	 * @return string
	 */
	public function getManganeseMg100g() {
		return $this->manganeseMg100g;
	}

	/**
	 * @param string $manganeseMg100g
	 */
	public function setManganeseMg100g( $manganeseMg100g ) {
		$this->manganeseMg100g = $manganeseMg100g;
	}

	/**
	 * @return string
	 */
	public function getPhosphoreMg100g() {
		return $this->phosphoreMg100g;
	}

	/**
	 * @param string $phosphoreMg100g
	 */
	public function setPhosphoreMg100g( $phosphoreMg100g ) {
		$this->phosphoreMg100g = $phosphoreMg100g;
	}

	/**
	 * @return string
	 */
	public function getPotassiumMg100g() {
		return $this->potassiumMg100g;
	}

	/**
	 * @param string $potassiumMg100g
	 */
	public function setPotassiumMg100g( $potassiumMg100g ) {
		$this->potassiumMg100g = $potassiumMg100g;
	}

	/**
	 * @return string
	 */
	public function getSeleniumMicrog100g() {
		return $this->seleniumMicrog100g;
	}

	/**
	 * @param string $seleniumMicrog100g
	 */
	public function setSeleniumMicrog100g( $seleniumMicrog100g ) {
		$this->seleniumMicrog100g = $seleniumMicrog100g;
	}

	/**
	 * @return string
	 */
	public function getSodiumMg100g() {
		return $this->sodiumMg100g;
	}

	/**
	 * @param string $sodiumMg100g
	 */
	public function setSodiumMg100g( $sodiumMg100g ) {
		$this->sodiumMg100g = $sodiumMg100g;
	}

	/**
	 * @return string
	 */
	public function getZincMg100g() {
		return $this->zincMg100g;
	}

	/**
	 * @param string $zincMg100g
	 */
	public function setZincMg100g( $zincMg100g ) {
		$this->zincMg100g = $zincMg100g;
	}

	/**
	 * @return string
	 */
	public function getRetinolMicrog100g() {
		return $this->retinolMicrog100g;
	}

	/**
	 * @param string $retinolMicrog100g
	 */
	public function setRetinolMicrog100g( $retinolMicrog100g ) {
		$this->retinolMicrog100g = $retinolMicrog100g;
	}

	/**
	 * @return string
	 */
	public function getBetacaroteneMicrog100g() {
		return $this->betacaroteneMicrog100g;
	}

	/**
	 * @param string $betacaroteneMicrog100g
	 */
	public function setBetacaroteneMicrog100g( $betacaroteneMicrog100g ) {
		$this->betacaroteneMicrog100g = $betacaroteneMicrog100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineDMicrog100g() {
		return $this->vitamineDMicrog100g;
	}

	/**
	 * @param string $vitamineDMicrog100g
	 */
	public function setVitamineDMicrog100g( $vitamineDMicrog100g ) {
		$this->vitamineDMicrog100g = $vitamineDMicrog100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineEMg100g() {
		return $this->vitamineEMg100g;
	}

	/**
	 * @param string $vitamineEMg100g
	 */
	public function setVitamineEMg100g( $vitamineEMg100g ) {
		$this->vitamineEMg100g = $vitamineEMg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineK1Microg100g() {
		return $this->vitamineK1Microg100g;
	}

	/**
	 * @param string $vitamineK1Microg100g
	 */
	public function setVitamineK1Microg100g( $vitamineK1Microg100g ) {
		$this->vitamineK1Microg100g = $vitamineK1Microg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineK2Microg100g() {
		return $this->vitamineK2Microg100g;
	}

	/**
	 * @param string $vitamineK2Microg100g
	 */
	public function setVitamineK2Microg100g( $vitamineK2Microg100g ) {
		$this->vitamineK2Microg100g = $vitamineK2Microg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineCMg100g() {
		return $this->vitamineCMg100g;
	}

	/**
	 * @param string $vitamineCMg100g
	 */
	public function setVitamineCMg100g( $vitamineCMg100g ) {
		$this->vitamineCMg100g = $vitamineCMg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB1OuThiamineMg100g() {
		return $this->vitamineB1OuThiamineMg100g;
	}

	/**
	 * @param string $vitamineB1OuThiamineMg100g
	 */
	public function setVitamineB1OuThiamineMg100g( $vitamineB1OuThiamineMg100g ) {
		$this->vitamineB1OuThiamineMg100g = $vitamineB1OuThiamineMg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB2OuRiboflavineMg100g() {
		return $this->vitamineB2OuRiboflavineMg100g;
	}

	/**
	 * @param string $vitamineB2OuRiboflavineMg100g
	 */
	public function setVitamineB2OuRiboflavineMg100g( $vitamineB2OuRiboflavineMg100g ) {
		$this->vitamineB2OuRiboflavineMg100g = $vitamineB2OuRiboflavineMg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB3OuPpOuNiacineMg100g() {
		return $this->vitamineB3OuPpOuNiacineMg100g;
	}

	/**
	 * @param string $vitamineB3OuPpOuNiacineMg100g
	 */
	public function setVitamineB3OuPpOuNiacineMg100g( $vitamineB3OuPpOuNiacineMg100g ) {
		$this->vitamineB3OuPpOuNiacineMg100g = $vitamineB3OuPpOuNiacineMg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB5OuAcidePantotheniqueMg100g() {
		return $this->vitamineB5OuAcidePantotheniqueMg100g;
	}

	/**
	 * @param string $vitamineB5OuAcidePantotheniqueMg100g
	 */
	public function setVitamineB5OuAcidePantotheniqueMg100g( $vitamineB5OuAcidePantotheniqueMg100g ) {
		$this->vitamineB5OuAcidePantotheniqueMg100g = $vitamineB5OuAcidePantotheniqueMg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB6Mg100g() {
		return $this->vitamineB6Mg100g;
	}

	/**
	 * @param string $vitamineB6Mg100g
	 */
	public function setVitamineB6Mg100g( $vitamineB6Mg100g ) {
		$this->vitamineB6Mg100g = $vitamineB6Mg100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB9OuFolatesTotauxMicrog100g() {
		return $this->vitamineB9OuFolatesTotauxMicrog100g;
	}

	/**
	 * @param string $vitamineB9OuFolatesTotauxMicrog100g
	 */
	public function setVitamineB9OuFolatesTotauxMicrog100g( $vitamineB9OuFolatesTotauxMicrog100g ) {
		$this->vitamineB9OuFolatesTotauxMicrog100g = $vitamineB9OuFolatesTotauxMicrog100g;
	}

	/**
	 * @return string
	 */
	public function getVitamineB12Microg100g() {
		return $this->vitamineB12Microg100g;
	}

	/**
	 * @param string $vitamineB12Microg100g
	 */
	public function setVitamineB12Microg100g( $vitamineB12Microg100g ) {
		$this->vitamineB12Microg100g = $vitamineB12Microg100g;
	}


}

