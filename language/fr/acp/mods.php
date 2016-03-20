<?php
/**
*
* acp_mods [French]
*
* @package language
* @version $Id: acp_mods.php	V1.0.2	 28/01/2014 21h08	$
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Translator : papicx   papicx@phpbb-fr.com
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'Modifications disponibles',

	'AM_MANUAL_INSTRUCTIONS'	=> 'AutoMOD est en train d’envoyer un fichier compressé à votre ordinateur. Du fait de la configuration d’AutoMOD, les fichiers ne peuvent pas être écrits automatiquement sur votre site. Vous devrez extraire le fichier et transférer manuellement les fichiers sur votre serveur, en utilisant un client FTP ou une méthode similaire. Si vous ne recevez pas ce fichier automatiquement, veuillez cliquer %sici%s.',
	'AM_MOD_ALREADY_INSTALLED'	=> 'AutoMOD a détecté que ce MOD est déjà installé et ne peut pas continuer.',
	'AM_MOD_NOT_INSTALLED'		=> 'AutoMod a détecté que ce MOD n’a pas encore été installé et ne peut pas continuer.',

	'APPLY_THESE_CHANGES'	=> 'Appliquer ces changements',
	'APPLY_TEMPLATESET'		=> 'à ce style',
	'AUTHOR_EMAIL'			=> 'Email de l’auteur',
	'AUTHOR_INFORMATION'	=> 'Informations de l’auteur',
	'AUTHOR_NAME'			=> 'Nom de l’auteur',
	'AUTHOR_NOTES'			=> 'Notes de l’auteur',
	'AUTHOR_URL'			=> 'URL de l’auteur',

	'AUTOMOD'								=> 'AutoMOD',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'La version d’AutoMod que vous essayez d’installer a déjà été installée. Veuillez supprimer le dossier « install/ ».',
	'AUTOMOD_INSTALLATION'					=> 'Installation d’AutoMOD',
	'AUTOMOD_INSTALLATION_EXPLAIN'			=> 'Bienvenue dans l’installation d’AutoMOD. Vous aurez besoin de vos informations FTP si AutoMOD juge que c’est le meilleur moyen pour modifier les fichiers. Les résultats des tests d’exigences sont ci-dessous.',
	'AUTOMOD_UNKNOWN_VERSION'				=> 'AutoMOD n’a pas pu être mis à jour car il n’a pas pu déterminer la version actuellement installée. La version correpondant à votre installation est %s.',
	'AUTOMOD_VERSION'						=> 'Version d’AutoMOD',

	'CAT_INSTALL_AUTOMOD'		=> 'AutoMOD',
	'CHANGE_DATE'				=> 'Date de sortie',
	'CHANGE_VERSION'			=> 'Numéro de version',
	'CHANGES'					=> 'Modifications',
	'CHECK_AGAIN'  				=> 'Vérifiez à nouveau',
	'CLICK_HIDE_EDITS' 			=> 'Cliquer pour masquer les modifications sans erreurs',
	'CLICK_HIDE_FILES' 			=> 'Cliquer pour cacher les fichiers sans erreurs',
	'CLICK_SHOW_EDITS' 			=> 'Cliquer pour afficher toutes les modifications',
	'CLICK_SHOW_FILES' 			=> 'Cliquer pour afficher tous les fichiers',
	'COMMENT'					=> 'Commentaire',
	'CREATE_TABLE'				=> 'Modifications de la base de données',
	'CREATE_TABLE_EXPLAIN'		=> 'AutoMod a effectué avec succès ses modifications de base de données, y compris une autorisation qui a été attribuée au rôle du « Super Administrateur ».',
	'DELETE'					=> 'Supprimer',
	'DELETE_CONFIRM'			=> 'Êtes-vous sûr de vouloir supprimer ce MOD ?',
	'DELETE_ERROR'				=> 'Une erreur est survenue lors de la suppression du MOD sélectionné.',
	'DELETE_SUCCESS'			=> 'Le MOD a été supprimé avec succès.',

	'DEPENDENCY_INSTRUCTIONS'	=> 'Le MOD que vous essayez d’installer dépend d’un autre MOD. AutoMod ne peut pas détecter si ce MOD a déjà été installé. Veuillez vérifier que vous avez installé <strong><a href="%1$s">%2$s</a></strong> avant de poursuivre l’installation de votre MOD.',
	'DESCRIPTION'				=> 'Description',
	'DETAILS'					=> 'Détails',
	'DIR_PERMS'					=> 'Permissions du dossier',
	'DIR_PERMS_EXPLAIN'			=> 'Certains systèmes ont besoin que les répertoires aient certaines permissions pour fonctionner correctement. Normalement, la valeur par défaut 0755 est correcte. Ce paramètre n’a aucun impact sur les systèmes Windows.',
	'DIY_INSTRUCTIONS'			=> 'Instructions à effectuer manuellement (Vous devez suivre ces instructions manuellement pour terminer l’installation MOD).',

	'EDITED_ROOT_CREATE_FAIL'	=> 'AutoMOD n’a pas été en mesure de créer le dossier où les fichiers modifiés seront stockés.',
	'ERROR'						=> 'Erreur',

	'FILE_EDITS'				=> 'Modifications du fichier',
	'FILE_EMPTY'				=> 'Fichier vide',
	'FILE_MISSING'				=> 'Impossible de localiser le fichier',
	'FILE_PERMS'				=> 'Permissions du fichier',
	'FILE_PERMS_EXPLAIN'		=> 'Certains systèmes ont besoin que les fichiers aient certaines permissions pour fonctionner correctement. Normalement, la valeur par défaut 0644 est correcte. Ce paramètre n’a aucun impact sur les systèmes Windows.',
	'FILE_TYPE'					=> 'Type de fichier compressé',
	'FILE_TYPE_EXPLAIN'			=> 'Ceci est valable uniquement avec la méthode d’écriture « Téléchargement des fichiers compressés ».',
	'FILESYSTEM_NOT_WRITABLE'	=> 'AutoMOD a établi que le système de fichiers n’est pas accessible en écriture, donc la méthode d’écriture directe ne peut pas être utilisée.',
	'FIND'						=> 'Trouver',
	'FIND_MISSING'				=> 'L’opération « trouver », spécifiée par le MOD, est introuvable',
	'FORCE_CONFIRM'				=> 'La fonctionnalité « Forcer la désinstallation » signifie que le MOD n’a pas été entièrement installé. Vous devrez faire quelques corrections manuelles à votre forum afin de terminer l’installation. Souhaitez-vous continuer ?',
	'FORCE_INSTALL'				=> 'Forcer l’installation',
	'FORCE_UNINSTALL'			=> 'Forcer la désinstallation',
	'FTP_INFORMATION'			=> 'Informations FTP',
	'FTP_METHOD_ERROR' 			=> 'Aucune méthode FTP n’a été trouvée. Veuillez vérifier dans « Configuration d’AutoMOD » si une méthode FTP a été correctement réglée.',
	'FTP_METHOD_EXPLAIN'		=> 'Si vous rencontrez des problèmes avec la méthode par défaut « FTP », vous devriez essayer « Simple Socket » comme solution alternative afin de vous connecter au serveur FTP.',
	'FTP_METHOD_FSOCK'			=> 'Simple Socket',
	'FTP_METHOD_FTP'			=> 'FTP',
	'FTP_NOT_USABLE'  			=> 'La fonction de transfert FTP ne peut pas être utilisée car elle a été désactivée par votre hébergeur.',

	'GO_PHP_INSTALLER'  		=> 'Le MOD a besoin d’un installeur externe afin de terminer l’installation. Cliquez ici afin de continuer vers cette étape.',

	'INHERIT_NO_CHANGE'			=> 'Aucune modification ne peut être apportée à ce fichier car le template %1$s dépend de %2$s.',
	'INLINE_EDIT_ERROR'			=> 'Erreur. Une modification « dans la ligne » présente dans le fichier d’installation MODX ne dispose pas de tous les éléments obligatoires.',
	'INLINE_FIND_MISSING'		=> 'L’opération « dans la ligne, trouver », spécifiée par le MOD, est introuvable.',
	'INSTALL_AUTOMOD'			=> 'Installation d’AutoMOD',
	'INSTALL_AUTOMOD_CONFIRM'	=> 'Êtes-vous sûr de vouloir installer AutoMOD ?',
	'INSTALL_DATE'      		=> 'Date d’installation',
	'INSTALL_ERROR'				=> 'Une ou plusieurs actions d’installation ont échoué. Veuillez examiner les actions ci-dessous, procédez aux ajustements et réessayez.  Vous pouvez continuer l’installation même si certaines de ces actions ont échoué. <strong>Ceci n’est pas recommandé et peut provoquer un disfonctionnement sur votre forum.</strong>',
	'INSTALL_FORCED'			=> 'Vous avez forcé l’installation de ce MOD malgré qu’il y ait des erreurs durant l’installation. Il se peut que votre forum soit hors service. Veuillez noter les actions qui ont échoué ci-dessous et corrigez-les avant de poursuivre l’installation.',
	'INSTALL_MOD'				=> 'Installer ce MOD',
	'INSTALL_TIME'				=> 'Heure d’installation',
	'INSTALLED'					=> 'MOD installé',
	'INSTALLED_EXPLAIN'			=> 'Votre MOD a été installé ! À cet endroit, vous pouvez consulter certains résultats de l’installation. Veuillez rapporter toute erreur, et consultez le support sur <a href="https://www.phpbb.com">phpBB.com</a>',
	'INSTALLED_MODS'			=> 'MODs installés',
    'INSTALLATION_SUCCESSFUL'   => 'AutoMOD a été installé avec succès. Maintenant, il vous est possible de gérer les MODifications phpBB à l’aide de l’onglet « AutoMOD » disponible dans le « Panneau d’administration » (ACP).',
	'INVALID_MOD_INSTRUCTION'	=> 'Ce MOD contient une instruction invalide, ou une opération « trouver dans la ligne » qui a échoué.',
	'INVALID_MOD_NO_ACTION'     => 'Il manque au MOD une action correspondant à la recherche « %s »',
	'INVALID_MOD_NO_FIND'       => 'Il manque au MOD une recherche correspondant à l’action « %s »',

	'LANGUAGE_NAME'				=> 'Nom de langue',

	'MANUAL_COPY'				=> 'Copie non tentée',
	'MOD_CONFIG'				=> 'Configuration d’AutoMOD',
	'MOD_CONFIG_UPDATED'        => 'La configuration d’AutoMOD a été mise à jour.',
	'MOD_DETAILS'				=> 'Détails du MOD',
	'MOD_DETAILS_EXPLAIN'		=> 'A cet endroit, vous pouvez voir toutes les informations trouvées à propos du MOD que vous avez sélectionné.',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'Nom du MOD',
	'MOD_OPEN_FILE_FAIL'		=> 'AutoMOD n’a pas pu ouvrir %s.',
	'MOD_UPLOAD'				=> 'Transférer un MOD',
	'MOD_UPLOAD_EXPLAIN'		=> 'Vous pouvez transférer ici une archive compressée d’un MOD contenant les fichiers MODX nécessaires à l’installation. AutoMOD décompressera alors l’archive et rendra le MOD installable.',
	'MOD_UPLOAD_INIT_FAIL'		=> 'Une erreur est survenue lors de l’initialisation du processus de transfert du MOD.',
	'MOD_UPLOAD_SUCCESS'		=> 'Le MOD a été transféré et préparé pour l’installation.',
	'MOD_UPLOAD_UNRECOGNIZED'	=> 'La structure des répertoires dans l’archive du MOD téléchargée n’est pas reconnue. Vérifiez si l’archive zip que vous avez téléchargée est corrompue ou que des fichiers/répertoires sont manquants, ou bien contacter l’auteur du MOD.',

	'MODS_CONFIG_EXPLAIN'		=> 'Ici, vous pouvez choisir de quelle manière AutoMOD gérera vos fichiers. La méthode de base est celle du « Téléchargement des Fichiers compressés ». Les autres nécessitent des permissions additionnelles sur le serveur.',
	'MODS_COPY_FAILURE'			=> 'Le fichier « %s » ne peut pas être copié à son emplacement. Veuillez vérifier vos autorisations ou utilisez une autre méthode d’écriture.',
	'MODS_EXPLAIN'				=> 'Ici, vous pouvez gérer les MODs disponibles sur votre forum. AutoMOD vous permet de personnaliser votre forum en installant automatiquement des modifications distribuées par la communauté phpBB. Pour de plus amples informations sur les MODs et AutoMOD, veuillez visiter le <a href="https://www.phpbb.com/mods">site phpBB</a>. Pour ajouter un MOD à cette liste, utilisez le formulaire au bas de cette page. Ou bien, vous pouvez décompresser l’archive et déposer son contenu dans le répertoire  « /store/mods/ » sur votre serveur.',
	'MODS_FTP_CONNECT_FAILURE'	=> 'AutoMOD n’a pas pû se connecter à votre serveur FTP. L’erreur suivante est apparue : %s',
	'MODS_FTP_FAILURE'			=> 'AutoMOD n’a pas pû transmettre par FTP le fichier « %s » à son emplacement.',
	'MODS_MKDIR_FAILED'			=> 'Le dossier « %s » n’a pas pu être créé.',
	'MODS_NOT_WRITABLE'			=> 'Le dossier « store/mods/ » n’est pas accessible en écriture. Cela est nécessaire pour que « Transférer un MOD » fonctionne correctement, sauf si vous définissez votre « méthode d’écriture » sur « FTP ». Veuillez ajuster vos autorisations ou les paramètres et essayez à nouveau.',
	'MODS_RMDIR_FAILURE'		=> 'Le dossier « %s » n’a pas pu être supprimé.',
	'MODS_RMFILE_FAILURE'		=> 'Le fichier « %s » n’a pas pu être supprimé.',
	'MODS_SETUP_INCOMPLETE'		=> 'Un problème a été rencontré dans votre configuration, et AutoMOD ne peut pas fonctionner. Ceci devrait seulement se produire que lorsque les paramètres (ex. nom d’utilisateur FTP) ont été modifiés, et peuvent être corrigés dans la page de configuration d’AutoMOD.',

	'NAME'						=> 'Nom',
	'NEED_READ_PERMISSIONS' 	=> 'Permissions incorrectes : %s n’est pas accessible en lecture.',
	'NEW_FILES'					=> 'Nouveaux fichiers',
	'NO_ATTEMPT'				=> 'Non tenté',
	'NO_INSTALLED_MODS'			=> 'Aucun MOD installé',
	'NO_MOD'					=> 'Le MOD sélectionné n’a pas pu être trouvé.',
	'NO_UNINSTALLED_MODS'		=> 'Aucun MOD non installé',
	'NO_UPLOAD_FILE'			=> 'Aucun fichier n’a été spécifié.',

	'ORIGINAL'					=> 'Original',

	'PATH'						=> 'Chemin',
	'PREVIEW_CHANGES'			=> 'Aperçu des modifications',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'Affiche les changements à effectuer avant de les exécuter.',
	'PRE_INSTALL'				=> 'Préparation de l’installation',
	'PRE_INSTALL_EXPLAIN'		=> 'Ici, vous pouvez prévisualiser toutes les modifications à apporter à votre forum, avant qu’elles ne soient envoyées. <strong>ATTENTION !</strong> une fois accepté, vos fichiers de base phpBB seront modifiés et des modifications de la base de données peuvent se produire. Cependant, si l’installation échoue, en supposant que vous pouvez accéder à AutoMOD, vous aurez la possibilité de restaurer à partir de ce point.',
	'PRE_UNINSTALL'				=> 'Préparation à la désinstallation',
	'PRE_UNINSTALL_EXPLAIN'		=> 'Ici, vous pouvez visualiser toutes les modifications à apporter à votre forum, afin de désinstaller le MOD. <strong>ATTENTION !</strong> une fois accepté, vos fichiers de base phpBB seront modifiés et des modifications de la base de données peuvent se produire. Aussi, ce procédé utilise des techniques d’inversion mais peut ne pas être précis à 100%. Toutefois, si la désinstallation échoue, en supposant que vous pouvez accéder à AutoMOD, vous aurez la possibilité de restaurer à partir de ce point.',

	'REMOVING_FILES'			=> 'Fichiers devant être supprimés',
	'RETRY'						=> 'Essayer à nouveau',
	'RETURN_MODS'				=> 'Retourner vers AutoMOD',
	'REVERSE'					=> 'Restaurer',
	'ROOT_IS_READABLE'			=> 'Le répertoire racine de phpBB est accessible en lecture.',
	'ROOT_NOT_READABLE'			=> 'AutoMOD n’a pas réussi à ouvrir « index.php » de phpBB en mode lecture. Cela est certainement dû au fait que les permissions sont trop restrictives sur le répertoire racine de phpBB, ce qui empêchera AutoMOD de fonctionner. Veuillez ajuster vos permissions et essayez à nouveau.',

	'SORT_DATE'					=> 'Date',
	'SORT_NAME'					=> 'Nom',
	'SOURCE'					=> 'Source',
	'SQL_QUERIES'				=> 'Requêtes SQL',
	'STATUS'					=> 'Statut',
	'STORE_IS_WRITABLE'			=> 'Le dossier « store/ » est accessible en écriture.',
	'STORE_NOT_WRITABLE'		=> 'Le dossier « store/ » n’est pas accessible en écriture.',
	'STORE_NOT_WRITABLE_INST'	=> 'L’installation d’AutoMOD a detecté que le dossier « store/ » n’est pas accessible en écriture. Afin qu’AutoMOD puisse fonctionner correctement, veuillez ajustez vos permissions et essayez à nouveau.',
	'STYLE_NAME'				=> 'Nom du style',
	'SUCCESS'					=> 'Succès',

	'TARGET'					=> 'Cible',
	'TARGET_VERSION'			=> 'Version cible phpBB',

	'UNKNOWN_MOD_AUTHOR-NOTES'		=> 'Aucune note de l’auteur spécifiée.',
	'UNKNOWN_MOD_COMMENT'			=> '',
	'UNKNOWN_MOD_DESCRIPTION'		=> '',
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'	=> '', // empty string hides this if not specified.
	'UNKNOWN_MOD_INLINE-COMMENT'	=> '',
	'UNKNOWN_QUERY_REVERSE' 		=> 'Requête de restauration inconnue',

	'UNINSTALL'					=> 'Désinstaller',
	'UNINSTALL_AUTOMOD'			=> 'Désinstallation d’AutoMOD',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'Êtes-vous sûr de vouloir désinstaller AutoMOD ? Cela ne supprimera pas les MODs qui ont été installés avec AutoMOD.',
	'UNINSTALLED'				=> 'MOD désinstallé',
	'UNINSTALLED_MODS'			=> 'MODs non installés',
	'UNINSTALLED_EXPLAIN'		=> 'Votre MOD a été désinstallé ! Voici quelques informations issues de la désinstallation. Veuillez rapporter toutes erreurs et consultez le support sur <a href="https://www.phpbb.com">phpBB.com</a>.',
	'UNRECOGNISED_COMMAND'		=> 'Erreur. Commande non reconnue : %s',
	'UPDATE_AUTOMOD'			=> 'Mettre à jour AutoMOD',
	'UPDATE_AUTOMOD_CONFIRM'	=> 'Veuillez confirmer que vous souhaitez mettre à jour AutoMOD.',
	'UPLOAD'					=> 'Transférer',

	'VERSION'					=> 'Version',
	'VERSION_WARNING'			=> 'La version cible phpBB pour ce MOD est %1$s, mais la version de votre forum est %2$s. Même si l’installation est réussie, le MOD peut ne pas fonctionner comme prévu et/ou risque de bloquer votre forum. Veuillez vérifier avec l’auteur du MOD que celui-ci est compatible avec votre version de forum.',

	'WARNING'					=> 'Avertissement',
	'WRITE_DIRECT_FAIL'			=> 'AutoMOD ne peut pas copier le fichier « %s » là où il se situe en utilisant la méthode directe. Veuillez utiliser une autre méthode d’écriture et essayez à nouveau.',
	'WRITE_DIRECT_TOO_SHORT'	=> 'AutoMOD n’a pas été en mesure de terminer l’écriture du fichier « %s ». Cela peut souvent être réglé avec le bouton « Réessayer ». Si cela ne fonctionne pas, essayez une autre méthode d’écriture.',
	'WRITE_MANUAL_FAIL'			=> 'AutoMOD ne peut pas ajouter le fichier « %s » à une archive compressée. Veuillez choisir une autre méthode d’écriture.',
	'WRITE_METHOD'				=> 'Méthode d’écriture',
	'WRITE_METHOD_DIRECT'		=> 'Directe',
	'WRITE_METHOD_EXPLAIN'		=> 'Vous pouvez choisir une méthode préférée pour écrire dans les fichiers. La méthode la plus compatible est « Téléchargement des fichiers compressés ».',
	'WRITE_METHOD_FTP'			=> 'FTP',
	'WRITE_METHOD_MANUAL'		=> 'Téléchargement des fichiers compressés',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'					=> 'Ajouter après',
	'before add'				=> 'Ajouter avant',
	'find'						=> 'Trouver',
	'in-line-after-add'			=> 'Dans la ligne, ajouter après',
	'in-line-before-add'		=> 'Dans la ligne, ajouter avant',
	'in-line-edit'				=> 'Dans la ligne, trouver',
	'in-line-operation'			=> 'Dans la ligne, incrémenter',
	'in-line-replace'			=> 'Dans la ligne, remplacer',
	'in-line-replace-with'		=> 'Dans la ligne, remplacer par',
	'operation'					=> 'Incrémenter',
	'replace'					=> 'Remplacer',
	'replace with'				=> 'Remplacer par',

));

?>