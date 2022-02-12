<?php

namespace Spip\Core;

/**
 * Description d'une chaîne de langue
 **/
class Idiome {
	/**
	 * Type de noeud
	 *
	 * @var string
	 */
	public $type = 'idiome';

	/**
	 * Clé de traduction demandée. Exemple 'item_oui'
	 *
	 * @var string
	 */
	public $nom_champ = '';

	/**
	 * Module de langue où chercher la clé de traduction. Exemple 'medias'
	 *
	 * @var string
	 */
	public $module = '';

	/**
	 * Arguments à passer à la chaîne
	 *
	 * @var array
	 */
	public $arg = [];

	/**
	 * Filtres à appliquer au résultat
	 *
	 * @var array
	 */
	public $param = [];

	/**
	 * Source des filtres  (compatibilité) (?)
	 *
	 * @var array|null
	 */
	public $fonctions = [];

	/**
	 * Inutilisé, propriété générique de l'AST
	 *
	 * @var string|array
	 */
	public $avant = '';

	/**
	 * Inutilisé, propriété générique de l'AST
	 *
	 * @var string|array
	 */
	public $apres = '';

	/**
	 * Identifiant de la boucle
	 *
	 * @var string
	 */
	public $id_boucle = '';

	/**
	 * AST du squelette, liste de toutes les boucles
	 *
	 * @var Boucle[]
	 */
	public $boucles;

	/**
	 * Alias de table d'application de la requête ou nom complet de la table SQL
	 *
	 * @var string|null
	 */
	public $type_requete;

	/**
	 * Résultat de la compilation: toujours une expression PHP
	 *
	 * @var string
	 */
	public $code = '';

	/**
	 * Interdire les scripts
	 *
	 * @see interdire_scripts()
	 * @var bool
	 */
	public $interdire_scripts = false;

	/**
	 * Description du squelette
	 *
	 * Sert pour la gestion d'erreur et la production de code dependant du contexte
	 *
	 * Peut contenir les index :
	 * - nom : Nom du fichier de cache
	 * - gram : Nom de la grammaire du squelette (détermine le phraseur à utiliser)
	 * - sourcefile : Chemin du squelette
	 * - squelette : Code du squelette
	 * - id_mere : Identifiant de la boucle parente
	 * - documents : Pour embed et img dans les textes
	 * - session : Pour un cache sessionné par auteur
	 * - niv : Niveau de tabulation
	 *
	 * @var array
	 */
	public $descr = [];

	/**
	 * Numéro de ligne dans le code source du squelette
	 *
	 * @var int
	 */
	public $ligne = 0;
}
