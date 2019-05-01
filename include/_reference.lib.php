<?php
/**
 *
 * BMG
 * © GroSoft
 *
 * References
 * Classes métier
 *
 *
 * @package 	default
 * @author 	dk
 * @version    	1.0
 */

/*
 *  ====================================================================
 *  Classe Genre : représente un genre d'ouvrage
 *  ====================================================================
*/

class Genre {
    private $_code;
    private $_libelle;

    /**
     * Constructeur
    */
    public function __construct(
            $p_code,
            $p_libelle
    ) {
        $this->setCode($p_code);
        $this->setLibelle($p_libelle);
    }

    /**
     * Accesseurs
    */
    public function getCode() {
        return $this->_code;
    }

    public function getLibelle() {
        return $this->_libelle;
    }

    /**
     * Mutateurs
    */
    public function setCode($p_code) {
        $this->_code = $p_code;
    }

    public function setLibelle($p_libelle) {
        $this->_libelle = $p_libelle;
    }

}
/*
 *  ====================================================================
 *  Classe Auteur : représente un auteur
 *  ====================================================================
*/

class Auteur {
    private $_id;
    private $_nom;
    private $_prenom;
    private $_alias;
    private $_notes;

    /**
     * Constructeur
    */
    public function __construct(
            $a_id = null,
            $a_nom = null,
            $a_prenom = "",
            $a_alias = "",
            $a_notes = ""
    ) {
       $this->setId($a_id);
        $this->setNom($a_nom);
        $this->setPrenom($a_prenom);
        $this->setAlias($a_alias);
        $this->setNotes($a_notes);
    }

    /**
     * Accesseurs
    */
    public function getId() {
        return $this->_id;
    }

    public function getNom() {
        return $this->_nom;
    }

     public function getPrenom() {
        return $this->_prenom;
    }

     public function getAlias() {
        return $this->_alias;
    }

     public function getNotes() {
        return $this->_notes;
    }

    /**
     * Mutateurs
    */
    public function setId($a_id) {
        $this->_id = $a_id;
    }

    public function setNom($a_nom) {
        $this->_nom = $a_nom;
    }

    public function setPrenom($a_prenom) {
        $this->_prenom = $a_prenom;
    }

    public function setAlias($a_alias) {
        $this->_alias = $a_alias;
    }

    public function setNotes($a_notes) {
        $this->_notes = $a_notes;
    }

}
/*
 *  ====================================================================
 *  Classe Genre : représente un genre d'ouvrage
 *  ====================================================================
*/
class Ouvrage{
private $_noOuvrage;
private $_titre;
private $_salle;
private $_rayon;
private $_leGenre;
private $_dateAcquisition;
private $_lesAuteurs;
private $_dernierPret;
private $_disponibilite;
private $_listeNomsAuteurs;

/**
 * COnstructeur
 */

public function __construct(
    $p_num,
    $p_titre,
    $p_salle,
    $p_rayon,
    $p_leGenre,
    $p_acquisition = null
){
    $this->setNoOuvrage($p_num);
    $this->setTitre($p_titre);
    $this->setSalle($p_salle);
    $this->setRayon($p_rayon);
    $this->setLeGenre($p_leGenre);
    $this->setDateAcquisition($p_acquisition);
    $this->_lesAuteurs = array();
}
    /**
     * Accesseurs
    */
    public function getNoOuvrage() {
        return $this->_noOuvrage;
    }

    public function getTitre() {
        return $this->_titre;
    }

     public function getSalle() {
        return $this->_salle;
    }

     public function getRayon() {
        return $this->_rayon;
    }

     public function getLeGenre() {
        return $this->_leGenre;
    }

    public function getDateAcquisition() {
        return $this->_dateAcquisition;
    }
    public function getLesAuteurs(){
        return $this->_lesAuteurs;
    }
    public function getDisponibilite(){
        return $this->_disponibilite;
    }
    public function getDernierPret(){
        return $this->_dernierPret;
    }
    public function getListeNomsAuteurs(){
        return $this->_lesAuteurs;
    }
    /**
     * Mutateurs
    */
    public function setNoOuvrage($p_num) {
        $this->_noOuvrage = $p_num;
    }

    public function setTitre($p_titre) {
        $this->_titre = $p_titre;
    }

    public function setSalle($p_salle) {
        $this->_salle = $p_salle;
    }

    public function setRayon($p_rayon) {
        $this->_rayon = $p_rayon;
    }

    public function setLeGenre($p_leGenre) {
        $this->_leGenre = $p_leGenre;
    }

    public function setDateAcquisition($p_acquisition) {
        $this->_dateAcquisition = $p_acquisition;
    }
    public function setListeNomsAuteurs($p_nomAuteur){
        $this->_lesAuteurs = $p_nomAuteur;
    }
    public function setDisponibilite($p_disponibilite){
        $this->_disponibilite = $p_disponibilite;
    }
    public function setDernierPret($p_dernierPret){
        $this->_dernierPret = $p_dernierPret;
    }

}

class auteur_ouvrage{
private $_no_ouvrage;
private $_id_auteur;

/**
 * COnstructeur
 */

public function __construct(
    $p_no_ouvrage,
    $p_id_auteur

){
    $this->setNoOuvrageAuteur($p_no_ouvrage);
    $this->setIdAuteurOuvrage($p_id_auteur);
}
    /**
     * Accesseurs
    */
    public function getNoOuvrageAuteur() {
        return $this->_no_ouvrage;
    }

    public function getIdAuteurOuvrage() {
        return $this->_id_auteur;
    }


    /**
     * Mutateurs
    */
    public function setNoOuvrageAuteur($p_no_ouvrage) {
        $this->$p_no_ouvrage = $p_no_ouvrage;
    }

    public function setIdAuteurOuvrage($p_id_auteur) {
        $this->_id_auteur = $p_id_auteur;
    }

}
