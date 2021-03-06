<?php

defined('INTERNAL') || die();

$string['accessdenied'] = 'accès refusé';
$string['accessdeniedforinst'] = ' accès refusé pour l\'insitution « %s »';
$string['accessdeniedforinstgroup'] = ' accès refusé pour l\'institution « %s » dans le groupe « %s »';
$string['accessdeniedforinstuser'] = ' accès refusé pour l\'institution « %s » avec l\'utilisateur « %s »';
$string['accessexception'] = 'Contrôle des exceptions d\'accès';
$string['accessextfunctionnotconf'] = 'L\'accès aux fonctions externes n\'a pas été configuré';
$string['accessnotallowed'] = 'L\'accès au service web n\'est pas autorisé';
$string['accessto'] = 'Accéder à';
$string['accesstofunctionnotallowed'] = 'L\'accès à la fonction %s/() n\'est pas autorisé. Veuillez contrôler si un service contenant cette fonction est activé. Dans les paramètres du service : si l\'accès du service est restreint, contrôlez que l\'utilisateur est dans la liste des utilisateurs autorisés. Toujours dans les paramètres du service, contrôlez aussi les restrictions d\'adresses IP ou si le service requiert une capacité particulière.';
$string['accesstokens'] = 'Jeton d\'accès pour OAuth';
$string['add'] = 'Ajouter';
$string['addconnection'] = 'Ajouter un client Connexion';
$string['addfunction'] = 'Ajouter une fonction';
$string['addfunctions'] = 'Ajouter des fonctions';
$string['addservice'] = 'Ajouter un nouveau service : {$a->name} (id : {$a->id})';
$string['apiexplorer'] = 'Explorer l\'API';
$string['application'] = 'Application';
$string['application_title'] = 'Titre de l\'application';
$string['application_uri'] = 'URL de l\'application';
$string['apptokens'] = 'Connexions vers l\'application';
$string['apptokensdesc'] = 'Générer des jetons pour les services web d\'accès';
$string['arguments'] = 'Paramètres';
$string['authmethod'] = 'Méthode d\'authentification';
$string['authorise'] = 'Autoriser l\'accès à l\'application';
$string['authtype'] = 'Type d\'authentification';
$string['callback'] = 'URI de rappel';
$string['cannotdeleteaccount'] = 'impossible de supprimer un compte qui est utilisé et non suspendu. Identifiant de l\'utilisateur « %s »';
$string['cannotfindimplfile'] = 'Impossible de trouver le fichier avec l\'implémentation des fonctions externes';
$string['catinvalid'] = 'la catégorie « %s » est erronée';
$string['certauth'] = 'Certificat';
$string['certificate'] = 'Certificat partenaire XML-RPC';
$string['certificates'] = 'Certificats de réseau';
$string['class'] = 'Classe';
$string['classname'] = 'Nom de la classe';
$string['clientconnections'] = 'Client Connexion';
$string['clienturl'] = 'URL du service web';
$string['codingerror'] = 'Erreur dans le code';
$string['completeregistration'] = 'Terminer l\'enregistrement';
$string['component'] = 'Composant';
$string['configsaved'] = 'Configuration enregistrée';
$string['connections'] = 'Gestionnaire des connexions';
$string['connectionsdesc'] = 'Gérer les services web d\'accès existants';
$string['connectionsswitch'] = 'Activer/désactiver la gestion des clients des connexions';
$string['consumer'] = 'Clé client';
$string['consumer_key'] = 'Clé client';
$string['consumer_secret'] = 'Clé secrète client';
$string['context'] = 'Contexte';
$string['control_webservices'] = 'Activation ou désactivation de TOUS les Services Web : ';
$string['correctjointype'] = 'vous devez sélectionner un type d\'accès valide : ouvert, sur demande, et/ou contrôlé';
$string['createtoken'] = 'Créer le jeton';
$string['createtokenforuser'] = 'Créer un jeton pour un utilisateur';
$string['createuser'] = 'Créer un utilisateur spécifique';
$string['customservicegroup'] = '(Personnalisé)';
$string['default'] = 'Défaut pour « %s »';
$string['deleteservice'] = 'Supprimer le service: {$a->name} (id : {$a->id})';
$string['description'] = 'Services web disponibles seulement pour les utilisateurs authentifiés par la base de données Mahara.';
$string['doc'] = 'Documentation';
$string['documentation'] = 'Documentation du service web';
$string['duplicateuser'] = 'Ce compte est déjà configurer pour les services web';
$string['editconnection'] = 'Modifier le client Connexion';
$string['emailalreadytaken'] = 'Cette adresse de courriel est déjà enregistrée';
$string['emptycert'] = 'Un certificat doit être indiqué';
$string['emptycertextended'] = 'Lorsque vous utilisez une authentification basée sur auth, vous devez aussi entrer un jeton ou un couple nom d\'utilisateur/mot de passe.';
$string['emptyoauthkey'] = 'La clé client doit être indiquée pour OAuth1.x';
$string['emptyoauthsecret'] = 'Le mot secret doit être indiqué pour OAuth1.x';
$string['emptytoken'] = 'Un jeton doit être indiqué';
$string['emptyuser'] = 'Un utilisateur doit être indiqué';
$string['emptyuserpass'] = 'Un mot de passe doit être indiqué';
$string['enable'] = 'Connexion établie';
$string['enabledocumentation'] = 'Activer la documentation pour développeurs';
$string['enableprotocols'] = 'Activer les protocols';
$string['enableservice'] = 'Activer/Désactiver le service';
$string['enablews'] = 'Activer les services web';
$string['enterparameters'] = 'Entrez les paramètres de la fonction';
$string['error'] = 'Erreur : %s';
$string['errorcodes'] = 'Message d\'erreur';
$string['errorinvalidparam'] = 'Le paramètres « %s » n\'est pas valide.';
$string['errorinvalidparamsapi'] = 'Le paramètre de l\'API externe n\'est pas valide';
$string['errorinvalidparamsdesc'] = 'La description de l\'API externe n\'est pas valide';
$string['errorinvalidresponseapi'] = 'La réponse de l\'API externe n\'est pas valide';
$string['errorinvalidresponsedesc'] = 'La description de la réponse de l\'API externe n\'est pas valide';
$string['errormissingkey'] = 'Une clé requise est manquante dans la structure simple : %s';
$string['errornotemptydefaultparamarray'] = 'Le paramètre de description du service web nommé « %s » est une structure simple ou multiple.  Par défaut il ne peut s\'agir que d\'un tableau vide. Référez-vous à la description du service web.';
$string['erroronlyarray'] = 'Seuls les tableaux sont acceptés.';
$string['erroroptionalparamarray'] = 'Le paramètre de description du service web nommée « %s » a une structure simple ou multiple. Il ne peut pas être fixé à la valeur VALUE_OPTIONAL. Contrôlez la description du service web.';
$string['errorregister'] = 'Erreur lors de l\'enregistrement du serveur';
$string['errorresponsemissingkey'] = 'Erreur dans la réponse - Les clés requises suivantes manquent dans la structure simple : %s';
$string['errors'] = 'N\'afficher que les erreurs';
$string['errorscalartype'] = 'Une valeur de type vecteur est attendue ici au lieu du tableau qui a été reçu.';
$string['errorunexpectedcustomkey'] = 'L\'existence inattendue de clés personnalisées (%s) a été détectée dans le bloc des paramètres. Celles-ci seront ignorées par Mahara. Ce message est affiché pour vous informer de ce problème afin que vous puissiez viser les paramètres et que vous soyez informé des éléments qui vont être ignorés.';
$string['errorunexpectedkey'] = 'Détection inattendue de clés (%s) détectée dans la tableau des paramètres.';
$string['errorupdate'] = 'Échec de la mise à jour';
$string['erroruser'] = 'L\'utilisateur spécifié est invalide';
$string['execute'] = 'Éxécuter';
$string['executed'] = 'Appel à la fonction exécuté';
$string['expires'] = 'Échéance';
$string['externalapps'] = 'Applications externes';
$string['externalappsdesc'] = 'Enregistrer des applications externes comme service web d\'accès';
$string['externalappsregister'] = 'Enregistrer une application externe';
$string['externalservice'] = 'Service externe';
$string['featuredisabled'] = 'Cette fonctionnalité de ce service web n\'est pas activée. Veuillez contacter votre administrateur du site pour plus d\'information.';
$string['fortokenusers'] = 'Accès par jeton pour l\'utilisateur';
$string['function'] = 'Fonction';
$string['functionname'] = 'Nom de la fonction';
$string['functions'] = 'Fonctions';
$string['gen'] = 'Générer';
$string['generalstructure'] = 'Structure générale';
$string['generate'] = 'Générer le jeton';
$string['groupeditroles'] = 'le rôle d\'édition dans le groupe doit être l\'un des suivants : %s';
$string['groupexists'] = 'Le groupe « %s » existe déjà';
$string['groupnotexist'] = 'Le groupe « %s » n\'existe pas';
$string['header'] = 'Nom de l\'en-tête';
$string['headingusersearchtoken'] = 'Services web : Rechercher des utilisateurs par jeton';
$string['headingusersearchuser'] = 'Services web : Rechercher des utilisateurs par service';
$string['iagreetothetermsandconditions'] = 'J\'accepte les conditions d\'utilisation';
$string['info'] = 'Info';
$string['information'] = 'Information';
$string['instancelistempty'] = 'Aucun objet de connexion n\'a été trouvé pour cette institution.';
$string['instexceedmax'] = 'L\'institution dépasse le maximum alloué de « %s »';
$string['institutiondenied'] = 'Accès à l\'institution refusé';
$string['institutionunknown'] = '- inconnu -';
$string['instmustbeongroup'] = 'l\'insitution doit être placée dans le groupe « %s »';
$string['instmustset'] = 'l\'insitution doit être configurée pour « %s »';
$string['instructions'] = 'Instructions';
$string['invalidaccount'] = 'Compte invalide pour ce service web - contrôlez la configuration des utilisateurs pour le service';
$string['invalidauthtype'] = 'Le type d\'authentification « %s » est erroné';
$string['invalidauthtypecombination'] = 'Le type d\'authentification sélectionné pour %s est invalide';
$string['invalidauthtypeuser'] = 'Le type d’authentification « %s » pour l\'utilisateur « %s » est erroné';
$string['invalidextparam'] = 'Paramètre API externe invalide : %s';
$string['invalidextresponse'] = 'Réponse API externe invalide : %s';
$string['invalidfavourite'] = 'Favori « %s » erroné';
$string['invalidfunction'] = 'Fonction sélectionnée invalide ';
$string['invalidinput'] = 'Entrée incorrecte';
$string['invalidiptoken'] = 'Jeton invalide - votre adresse IP n\'est pas supportée';
$string['invalidjointype'] = 'type de combinaison d\'accès « %s » erroné';
$string['invalidlogin'] = 'Impossible de vous connecter. Veuillez contrôler votre nom d\'utilisateur et votre mot de passe.';
$string['invalidmemroles'] = 'Les rôle « %s » dans le groupe est erroné pour l\'utilisateur « %s »';
$string['invalidparamdesc'] = 'Paramètres de description invalides';
$string['invalidparameter'] = 'Un paramètre contient une valeur erronée. Le programme ne peut pas continuer. ';
$string['invalidremoteusername'] = 'Nom d\'utilisateur « %s » erroné sur la plateforme distante';
$string['invalidresponse'] = 'Résponse invalide';
$string['invalidretdesc'] = 'Description retournée invalide';
$string['invalidservice'] = 'Service sélectionné invalide ';
$string['invalidserviceuser'] = 'Utilisateur du service sélectionné invalide';
$string['invalidsocialprofile'] = 'Profil du réseau social « %s » invalide';
$string['invalidstatedetected'] = 'Détection d\'un état invalide';
$string['invalidtimedtoken'] = 'Jeton invalide - le jeton a expiré';
$string['invalidtoken'] = 'Jeton invalide - jeton non trouvé';
$string['invalidtokennotsupplied'] = 'Aucun jeton accessible ou le jeton sélectionné est invalide';
$string['invalidtokensession'] = 'Session invalide basée sur un jeton  - la session n\'a pas été trouvée ou a expiré';
$string['invaliduser'] = 'utilisateur « %s » erroné';
$string['invalidusergroup'] = 'utilisateur « %s » erroné pour le groupe « %s »';
$string['invaliduserid'] = 'identifiant de l\'utilisateur « %s » erroné';
$string['invalidusername'] = 'nom d\'utilisateur « %s » erroné';
$string['invaliduserpass'] = 'Le couple wusername/wpassword indiqué pour « %s », n\'est pas valide';
$string['invaliduserselected'] = 'Sélection d\'utilisateurs invalide';
$string['invaliduserselectedinstitution'] = 'Utilisateur invalide pour le jeton de l\'institution dans la liste des utilisateurs trouvés';
$string['iprestriction'] = 'Restriction IP';
$string['isfatal'] = 'Est fatal en cas d\'erreur';
$string['iterationtitle'] = '%s iteration : %s';
$string['json'] = 'JSON encodé';
$string['key'] = 'Clé';
$string['last_access'] = 'Dernier accès';
$string['list'] = 'liste de';
$string['manage_certificates'] = 'Il s\'agit des certificats générés par le service de <a href="%s">réseau</a>. Ces valeurs sont utilisées par Mahara lorsque les fonctions de signature WS-Security et de cryptage sont activées pour un service wstoken particulier ou un utilisateur du service (seulement pour XML-RPC et MNet original).';
$string['manage_protocols1'] = 'Active ou désactive les protocoles supportés comme prestataires de services web :';
$string['manageserviceusers'] = 'Gérer les utilisateurs dans le service';
$string['md5fingerprint'] = 'Empreinte MD5 : %s';
$string['membersinvalidaction'] = 'l\'action « %s » est erronée pour l\'utilisateur « %s » dans le groupe « %s »';
$string['method'] = 'Méthode';
$string['methodname'] = 'Nom de la méthode';
$string['missingfuncname'] = 'Nom de fonction manquant';
$string['missingimplofmeth'] = 'Méthode d\'implémentation manquante pour « %s »';
$string['missingparamdesc'] = 'Paramètres de description manquants';
$string['missingpassword'] = 'Mot de passe manquant';
$string['missingretvaldesc'] = 'Valeurs de description retournées manquantes';
$string['missingusername'] = 'Nom d\'utilisateur manquant';
$string['musthaveid'] = 'Doit comporter un id, un id d\'utilisateur ou un nom d\'utilisateur';
$string['mustsetauth'] = 'l\'authentification et l\'institution doivent être indiquées pour mettre à jour le système d\'authentification pour « %s ».';
$string['name'] = 'Nom';
$string['nameexists'] = 'Nom déjà utilisé';
$string['no_token'] = 'Jeton non généré';
$string['nodefinedconnections'] = 'Aucune connexion à un service web n\'a été définie pour aucun plug-in. Veuillez d\'abord définir une connexion.';
$string['nogroup'] = 'aucun groupe n\'a été spécifié';
$string['noname'] = 'aucun nom ou nom court n\'a été indiqué';
$string['nooauth'] = 'Non activé pour OAuth';
$string['noservices'] = 'Aucun service n\'est configué';
$string['notauthforuseridinstitution'] = 'Accès non autorisé pour l\'id d\'utilisateur «% s » dans l\'institution « %s »';
$string['notauthforuseridinstitutiongroup'] = 'Accès non autorisé pour l\'id d\'utilisateur «% s » dans le groupe « %s » de l\'institution « %s »';
$string['notoken'] = 'La liste des jetons est vide';
$string['notokens'] = 'Vous n\'avez aucun jeton d\'application';
$string['notuserblog'] = 'Le journal n\'est pas celui de « %s »';
$string['nouser'] = 'Veuillez sélectionner un utilisateur';
$string['nousernameorid'] = 'pas de nom d\'utilisateur ou d\'identifiant ';
$string['nousernameoridgroup'] = 'pas de nom d\'utilisateur ou d\'identifiant  pour le groupe  « %s »';
$string['nowsprotocolsenabled'] = 'Aucun protocole de service web n\'a été activé. Vous devez au moins activer un <a href="%s">protocole</a>.';
$string['oauth'] = 'OAuth';
$string['oauth1'] = 'OAuth1.x';
$string['oauth1auth'] = 'OAuth1.x';
$string['oauth_access'] = 'Cette application aura accès aux informations sur les utilisateurs et à leurs ressources.';
$string['oauth_instructions'] = 'Si vous désirez accorder l\'accès à cette application, alors cliquez sur « Autoriser l\'accès à l\'application », sinon cliquez sur « Annuler ».';
$string['oauthserverdeleted'] = 'Serveur supprimé';
$string['oauthtokendeleted'] = 'Jeton d\'application supprimé';
$string['onesystemcontrolling'] = 'Un système contrôlant Mahara avec un jeton';
$string['oob'] = 'Vérification OAuth en « Out of Band »';
$string['oobinfo'] = 'Ce qui suit est votre code de vérification qui autorise votre application externe à avoir accès aux données approuvées. Veuillez copier ce code et le coller dans zone ad hoc de l\'application associée avant de continuer.';
$string['operation'] = 'Opération';
$string['optional'] = 'Optionnel';
$string['owner'] = 'Propriétaire';
$string['parametercannotbevalueoptional'] = 'Ce paramètre ne peut pas avoir de valeur optionnelle';
$string['parameters'] = 'Paramètres constants à passer';
$string['password'] = 'Mot de passe';
$string['passwordinvalidform1'] = 'Votre mot de passe doit comporter au moins %s caractères. Les mot de passe sont sensibles à la casse et doivent être différents de votre nom d\'utilisateur. Votre mot de passe doit contenir %s.';
$string['passwordmustbechangedviawebsite'] = 'Vous devez modifier votre mot de passe. Veuillez vous connecter à l\'aide d\'un navigateur web pour mettre à jour votre mot de passe.';
$string['phpparam'] = 'XML-RPC (structure PHP)';
$string['plugin'] = 'Plug-in Connexion';
$string['pluginconnections'] = 'Objets Connexion';
$string['potusers'] = 'Utilisateurs non autorisés';
$string['print'] = 'Tout imprimer';
$string['protocol'] = 'Protocole';
$string['publickeyexpireson'] = 'Expiration de la clé publique : %s';
$string['registeredemailmessagehtml'] = '<p>Bonjour %s,</p>
<p>Merci de vous être enregistré sur %s. Veuillez suivre le lien ci-dessous pour terminer le processus d\'enregistrement.</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>Le lien sera échu dans 24 heures.</p>
<p>Avec nos meilleurs messages</p>
<p>L\'équipe de %s</p>';
$string['registeredemailmessagetext'] = 'Bonjour %s,

Merci de vous être enregistré sur %s. Veuillez suivre le lien ci-dessous pour terminer le processus d\'enregistrement.

%sregister.php?key=%s

Le lien sera échu dans 24 heures.

Avec nos meilleurs messages.
L\'équipe de %s';
$string['registeredemailsubject'] = 'Vous vous êtes enregistré sur %s';
$string['registeredok'] = '<p>Votre enregistrement a réussi. Veuillez consulter votre boîte à lettres pour des instructions sur l\'activation de votre compte.</p>';
$string['registrationnosuchkey'] = 'Désolé, cette clé ne correspond à aucun enregistrement. Peut-être avez-vous attendu plus de 24 heures avant de terminer l\'enregistrement ? Si ce n\'est pas le cas, il s\'agit d\'un problème chez nous.';
$string['registrationunsuccessful'] = 'Désolé, votre enregistrement a échoué. Ce n\'est pas votre faute, mais la nôtre. Veuillez essayez plus tard.';
$string['removefunction'] = 'Supprimer';
$string['required'] = 'Obligatoire';
$string['resettokenconfirm'] = 'Voulez-vous réellement réinitialiser la clé de ce service web pour <strong>{%s}</strong> dans le service <strong>{%s}</strong> ?';
$string['response'] = 'Réponse';
$string['rest'] = 'REST';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (paramètres POST)';
$string['restrictedusers'] = 'Seuls les utilisateurs autorisés';
$string['restricteduserswarning'] = 'Attention : Un jeton existe déjà pour les utilisateurs de ce service qui ne pourront alors plus l\'accéder si activez « %s ».';
$string['sauthtype'] = 'Type d\'authentification';
$string['secret'] = 'Mot secret';
$string['securitykey'] = 'Clé de sécurité (jeton)';
$string['selectedcapability'] = 'Sélectionné';
$string['selectspecificuser'] = 'Sélectionnez un utilisateur spécifique';
$string['service'] = 'Service';
$string['serviceaccess'] = 'Accès au service';
$string['servicecomponentnote'] = 'Ce service offre des fonctionnalités pour le composant « %s »';
$string['servicefunctiongroups'] = 'Gérer les groupes de services';
$string['servicefunctionlist'] = 'Fonctions allouées à ce service';
$string['servicegroup'] = 'Groupe de services : %s';
$string['servicename'] = 'Service';
$string['servicenamedesc'] = 'Un nom lisible par un humain pour ce groupe de services.';
$string['servicenamelabel'] = 'Nom';
$string['servicenamemustbeunique'] = 'Ce nom est déjà utilisé par un autre groupe de services.';
$string['serviceshortnamedesc'] = 'Un nom lisible par une machine pour le groupe de services (il s\'agit du nom qui sera utilisé si un service externe doit se référer à ce groupe de services).';
$string['serviceshortnamelabel'] = 'Nom abrégé';
$string['serviceshortnamemustbeunique'] = 'Ce nom court est déjà utilisé par un autre groupe de services.';
$string['servicetokens'] = 'Gérer les jetons du service d\'accès';
$string['serviceuser'] = 'Popriétaire du service';
$string['serviceusername'] = 'Propriétaire du service « %s »';
$string['serviceusers'] = 'Utilisateurs autorisés';
$string['setauthinstancefailed'] = 'L\'attribution du *Service web* d\'authentification pour l\'institution « %s » a échoué. Veuillez essayer de l\'ajouter en passant par la page Administration -> Institutions -> Paramètres';
$string['sfgdescription'] = 'Création dans des groupes de services d\'une liste de fonctions  qui peuvent être ensuite proposées aux utilisateurs qui sont autorisés à les utiliser.';
$string['sfldescription'] = 'Construit une liste de fonctions qui sont disponibles pour ce service';
$string['sha1fingerprint'] = 'Empreinte SHA1 : %s';
$string['simpleauthlog'] = 'Connexion par authentification simple';
$string['soap'] = 'SOAP';
$string['stdescription'] = 'Génération de jetons d\'accès et attribution des utilisateurs aux groupes de services';
$string['step'] = 'Étape';
$string['sudescription'] = 'Allocation des utilisateurs dans les groupes de services et les institutions. L\'utilisateur ne doit être configuré qu\'une seule fois. Tous les utilisateurs doivent avoir une méthode d\'authentification pour le service web. L\'instance de la méthode d\'authentification des services web pour l\'utilisateur doit appartenir à une institution dont l\'utilisateur est membre.';
$string['switchtotokens'] = 'Basculer sur la méthode des jetons';
$string['switchtousers'] = 'Basculer sur la méthode des utilateurs authentifiés';
$string['testclient'] = 'Client de test pour les services web';
$string['testclientdescription'] = '* Le client du service web <strong>exécute RÉÉLEMENT</strong> les fonctions. Ne testez alors pas des fonctions que vous ne connaissez pas. <br />* Les fonctions du service web ne sont pour l\'instant pas toutes implémentées dans le client de test. <br />* Pour contrôler qu\'un utilisateur n\'a pas accès à certaines fonctions, vous pouvez tester les fonctions que nous n\'avez pas autorisées à être utilisées. <br />* Pour obtenir des messages d\'erreur plus détaillés, activez les options de débogage avec <strong>$a->mode}</strong> dans {$a->atag}<br/>* Accédez au {$a->amfatag}.';
$string['testclientdescshort'] = 'Tester les services web avec votre site';
$string['testclientinstructions'] = 'Il s\'agit d\'un outil de test sous la forme d\'un client virtuel pour les services web. Cela vous permet de sélectionner une fonction et de l\'exécuter dans des conditions réelles sur le système courant. Soyez conscient que CHAQUE fonction que vous exécutez déploiera réellement ses effets.';
$string['testclientnav'] = 'Client test';
$string['testwithtestclient'] = 'Tester le service';
$string['timelogged'] = 'Date';
$string['timetaken'] = 'Durée';
$string['title'] = 'Services web';
$string['titlewssigenc'] = 'Sécurité WS';
$string['token'] = 'Jeton';
$string['token_generated'] = 'Jeton généré';
$string['tokenauth'] = 'Jeton';
$string['tokenauthlog'] = 'Authentification par jeton';
$string['tokenclient'] = 'Application cliente';
$string['tokenclientunknown'] = '(non spécifié)';
$string['tokengenerationfailed'] = 'Échec de la génération du jeton';
$string['tokenid'] = 'Jeton « %s »';
$string['tokenmanuallycreated'] = 'Créé manuellement';
$string['tokens'] = 'Jeton d\'accès au service';
$string['tokensonly'] = 'seulement les jetons actuels';
$string['tokenuserswarning'] = 'Attention : Un jeton existe déjà pour les utilisateurs de ce service qui ne pourront alors plus l\'accéder si désactivez « %s ».';
$string['type'] = 'Type de service web';
$string['unabletodeleteadmin'] = 'Impossible de supprimer l\'utilisateur avec l\'ID : « %s » car il a le rôle d\'administrateur.';
$string['unabletoruntestclient'] = 'Le client de test pour le service web doit être lancé en https sur une site en production, ou il faut mettre la commande $cfg->productionmode = false dans le config.php';
$string['useheader'] = 'Mettre l\'authentification dans l\'en-tête';
$string['userapplications1'] = 'Paramètres des applications externes';
$string['userasclients'] = 'Utilisateurs en tant que clients avec jeton';
$string['userauth'] = 'Utilisateur';
$string['username'] = 'Utilisateur';
$string['usernameexists2'] = 'Le nom d\'utilisateur « %s » n\'est pas valide.';
$string['usernameinvalidadminform'] = 'Les noms d\'utilisateur peuvent contenir des lettres, des chiffres et la plupart des symboles courants, et dovient contenir entre 3 et 236 caractères. Les espaces ne sont pas autorisés.';
$string['usernameinvalidform'] = 'Votre nom d\'utilisateur ne peut comporter que des caractères alphanumériques, des points, des soulignés et des arobases. Il doit en outre comporter entre 3 et 30 caractères.';
$string['users'] = 'Utilisateurs du service';
$string['usersearchinstructions'] = 'Sélectionner un utilisateur associé à un service web en cliquant sur son avatar. Vous pouvez rechercher des utilisateurs en cliquant sur les initiales de leurs prénoms et de leurs noms, ou en entrant un nom dans la boîte de recherche. Vous pouvez aussi utiliser une adresse de courriel comme critère de recherche.';
$string['usersonly'] = 'seulement les utilisateurs actuels';
$string['usertokens'] = 'Jetons personnels de l\'utilisateur';
$string['validuntil'] = 'Valide jusqu\'au';
$string['verifier'] = 'Vérifier le jeton';
$string['webservice'] = 'Services Web';
$string['webservice_master_switches'] = 'Active les fonctionnalités des services web';
$string['webservice_provider_enabled_label'] = 'Interrupteur principal d\'offre des services web';
$string['webservice_provider_enabled_label2'] = 'Accepter les demandes entrantes de services web :';
$string['webservice_requester_enabled_label'] = 'Interrupteur principal de demande des services web';
$string['webservice_requester_enabled_label2'] = 'Permettre des demandes de services web en sortie :';
$string['webserviceconnectionsconfigdesc'] = 'Configurez les objets Connexion qu\'un plug-in enregistré peut utiliser pour communiquer avec des systèmes externes.';
$string['webservicelogs'] = 'Journal des services Web';
$string['webservicelogsdesc'] = 'Configurer et afficher les journaux des services web';
$string['webservicelogsnav'] = 'Historique';
$string['webservices_title'] = 'Configuration des services web';
$string['webservicesconfig'] = 'Paramètres';
$string['webservicesconfigdesc'] = 'Vous pouvez ici configurer les différentes règles des service web et activer ou désactiver les service.';
$string['webservicesconfigdescshort'] = 'Configurer et gérer les services web d\'accès à votre site';
$string['webservicesenabled'] = 'Services web activés';
$string['webservicesnotenabled'] = 'Vous devez activer au moins un protocole';
$string['wrongusernamepassword'] = 'Nom d\'utilisateur ou mot de passe incorrect';
$string['wsauthnotenabled'] = 'Le plug-in du service web pour l\'authentification est désactivé.';
$string['wsdoc'] = 'Documentation des services web';
$string['wsdocdescription'] = 'Description';
$string['wsdocumentation'] = 'Documentation du service web';
$string['wspassword'] = 'Mot de passe du service web';
$string['wsseauth'] = 'WSSE';
$string['wssigenc'] = 'Activer la sécurité WS (seulement pour XML-RPC)';
$string['wsusername'] = 'Nom d\'utilisateur pour le service web';
$string['xmlrpc'] = 'XML-RPC';
$string['youmaynotregisterwithouttandc'] = 'Vous ne pouvez pas vous enregistrer sans accepter les <a href="terms.php">conditions d\'utilisation</a>';
