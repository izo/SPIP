<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2017                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

# ou est l'espace prive ?
if (!defined('_DIR_RESTREINT_ABS')) {
	define('_DIR_RESTREINT_ABS', 'ecrire/');
}
include_once _DIR_RESTREINT_ABS.'inc_version.php';

# au travail...
include _DIR_RESTREINT_ABS.'public.php';
