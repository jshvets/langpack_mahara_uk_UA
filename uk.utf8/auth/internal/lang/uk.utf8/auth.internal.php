<?php

defined('INTERNAL') || die();

$string['approvalemailmessagehtml'] = '<p>Bonjour %s</p>
<p>Tout d\'abord merci de votre intérêt à rejoindre l\'institution %s. L\'administrateur de l\'institution
a été notifié de votre demande. Vous allez prochainement recevoir un autre message électronique,
dès que votre demande aura été traitée.</p>

<pre>–
Meilleurs messages,
L\'équipe %s</pre>';
$string['approvalemailmessagetext'] = 'Bonjour %s,

Tout d\'abord merci de votre intérêt à rejoindre l\'institution %s. L\'administrateur de l\'institution
a été notifié de votre demande. Vous allez prochainement recevoir un autre message électronique,
dès que votre demande aura été traitée.

Meilleurs messages
L\'équipe %s.';
$string['approvalemailsubject'] = 'La demande d\'inscription à %s a été reçue';
$string['completeregistration'] = 'Terminer l\'enregistrement';
$string['confirmcancelregistration'] = 'Voulez-vous réellement annuler cette inscription ? En continuant, votre demande sera supprimée du système.';
$string['confirmemailsubject'] = 'Message de confirmation d\'enregistrement sur %s';
$string['description'] = 'Utiliser la base de données de Mahara comme source d\'authentification';
$string['emailalreadytaken'] = 'Cette adresse de courriel est déjà enregistrée ici';
$string['emailalreadytakenbyothers'] = 'Cette adresse de courriel est déjà utilisée par un autre utilisateur.';
$string['emailconfirmedok'] = '<p>Vous avez confirmé votre adresse de messagerie avec succès. Vous allez prochainement des informations complémentaires quant à votre enregistrement.</p>';
$string['iagreetothetermsandconditions'] = 'J\'accepte les conditions d\'utilisation';
$string['internal'] = 'Interne';
$string['passwordinvalidform1'] = 'Votre mot de passe doit comporter au moins %s caractères. Les mot de passe sont sensibles à la casse et doivent être différents de votre nom d\'utilisateur. Votre mot de passe doit contenir %s.';
$string['pendingregistrationadminemailhtml'] = '<p>Bonjour %s,</p>
<p>Un nouvel utilisateur a fait une demande pour rejoindre l\'institution « %s ».</p>
<p>En tant qu\'administrateur de cette institution, vous devez approuver ou rejeter cette demande. Pour réaliser cette tâche, cliquez sur le lien suivant : <a href=\'%s\'>%s</a></p>
<p>Vous avez 2 semaines pour approuver ou rejeter cette demande.</p>
<p>Détails de la demande d\'enregistrement :</p>
<p>Nom : %s</p>
<p>Adresse électronique : %s</p>
<p>Raison de la demande :</p>
<p>%s</p>
<pre>--
Meilleurs messages,
L\'équipe %s</pre>';
$string['pendingregistrationadminemailsubject'] = 'Demande d\\\'un nouvel utilisateur pour l\\\'institution « %s » à %s.';
$string['pendingregistrationadminemailtext'] = 'Bonjour %s,

Un nouvel utilisateur a demandé à rejoindre l\'institution « %s ».

En tant qu\'administrateur de cette institution, vous devez approuver ou rejeter cette demande. Pour réaliser cette tâche, cliquez sur le lien suivant : %s

Vous avez 2 semaines pour approuver ou rejeter la demande.

Détails de la demande d\'affiliation : 

Nom : %s
Prénom : %s
Raison de la demande :
%s

--
Meilleurs messages,
Les gestionnaires de %s';
$string['recaptcharegisterdesc2'] = 'Veuillez cocher la boîte « Je ne suis pas un robot » si vous désirez continuer.';
$string['recaptcharegistertitle'] = 'Contrôle reCAPTCHA';
$string['registeredemailmessagehtml'] = '<p>Bonjour %s,</p>
<p>Merci de vous être enregistré sur %s. Veuillez suivre le lien ci-dessous pour terminer le processus d\'enregistrement.</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>Le lien sera échu dans 24 heures.</p>
<p>L\'équipe de %s</p>';
$string['registeredemailmessagetext'] = 'Bonjour %s,

Merci de vous être enregistré sur %s. Veuillez suivre le lien ci-dessous pour terminer le processus d\'enregistrement.

%sregister.php?key=%s

Le lien sera échu dans 24 heures.

L\'équipe de %s';
$string['registeredemailsubject'] = 'Vous vous êtes enregistré sur %s';
$string['registeredok'] = '<p>Votre enregistrement a réussi. Veuillez consulter votre boîte à lettres pour des instructions sur l\'activation de votre compte.</p>';
$string['registeredokawaitingemail2'] = 'Votre demande d\'accès à l\'institution a bien été envoyée. L\'administrateur de cette dernière en a été informé, et vous recevrez prochainement un courrier électronique, dès que votre demande aura été traitée.';
$string['registrationcancelledok'] = 'Vous avez annulé votre demande d\'enregistrement avec succès.';
$string['registrationconfirm'] = 'Confirmer la demande d\'enregistrement ?';
$string['registrationconfirmdescription'] = 'L\'enregistrement doit être approuvé par un administrateur de l\'institution';
$string['registrationdeniedemailsubject'] = 'Demande d\'enregistrement à %s refusée.';
$string['registrationdeniedmessage'] = 'Bonjour %s,

Nous avons bien reçu votre demande d\'accès à notre institution sur %s dont nous vous remercions, toutefois nous avons décidé de décliner votre demande.

Si vous estimez que cette décision est incorrecte, veuillez s\'il vous plait prendre contact avec moi par email.

Avec mes meilleurs messages,
%s';
$string['registrationdeniedmessagereason'] = 'Bonjour %s,

Nous avons bien reçu votre demande de rejoindre notre institution sur %s, et avons nous regrettons de ne pas pouvoir donner suite à votre demande pour la raison suivante :

%s

Si vous pensez que cette décision n\'est pas juste, vous pouvez prendre contact avec moi directement sur mon adresse de courrier électronique.

Meilleurs messages,
%s';
$string['registrationexpiredkey'] = 'Désolé mais votre clé a expiré. Peut-être avez-vous attendu plus de 24 heures pour terminer votre enregistrement ? Dans le cas contraire il s\'agit d\'une erreur de notre part.';
$string['registrationnosuchid'] = 'Désolé, mais cette clé d\'enregistrement n\'existe pas, peut-être avez-vous déjà procédé à l\'activation de votre compte ?';
$string['registrationnosuchkey1'] = 'Désolé, mais nous n\'avons pas de clé correspondant au lien que vous avez cliqué, peut-être que votre programme de messagerie électronique l\'a tronqué ?';
$string['registrationreason'] = 'Raison de la demande d\'enregistrement';
$string['registrationreasondesc1'] = 'La raison pour laquelle vous désirez rejoindre cette institution ainsi que tout autre détail que vous trouveriez important pour pour que l\'administrateur puisse prendre la décision de vous donner l\'accès que vous demandez.';
$string['registrationunsuccessful'] = 'Désolé, votre enregistrement a échoué. Ce n\'est pas votre faute, mais la nôtre. Veuillez essayez plus tard.';
$string['title'] = 'Interne';
$string['userdeletiondeniedemailsubject'] = 'La tentative de suppression du compte de l\'utilisateur %s a été rejetée.';
$string['userdeletiondeniedmessage'] = 'Bonjour %s,

Nous avons reçu votre demande de supprimer votre compte utilisateur %s et
avons décidé de ne pas supprimer vos données.

Si vous estimez que cette décision est incorrecte, veuillez vous mettre
en contact avec moi par courriel.

Meilleurs messages,
%s';
$string['userdeletiondeniedmessagereason'] = 'Bonjour %s,

Nous avons reçu votre demande de supprimer votre compte utilisateur %s et
avons décidé de ne pas supprimer vos données pour la raison suivante :

%s

Si vous estimez que cette décision est incorrecte, veuillez vous mettre
en contact avec moi par courriel.

Meilleurs messages,
%s';
$string['userdeletionemailmessagehtml'] = '<p>Bonjour %s,</p>
<p>Votre compte d\'utilisateur a été supprimé de %s.</p>

<pre>–
Meilleurs messages,
L\'équipe %s</pre>';
$string['userdeletionemailmessagetext'] = 'Bonjour %s,

Votre compte d\'utilisateur a été supprimé de %s.

–
Meilleurs messages,
L\'équipe %s';
$string['userdeletionemailsubject'] = 'Votre compte d\'utilisateur a été supprimé de %s';
$string['userdeletionnosuchid'] = 'Désolé, cette demande de supression n\'exsite pas. Peut-être a-t-elle déjà été évaluée ?';
$string['usernamealreadytaken1'] = 'Désolé, mais vous ne pouvez pas utiliser ce nom d\'utilisateur. Choisissez-en un autre.';
$string['usernameinvalidadminform'] = 'Les noms d\'utilisateur peuvent contenir des lettres, des chiffres et la plupart des symboles courants, et dovient contenir entre 3 et 236 caractères. Les espaces ne sont pas autorisés.';
$string['usernameinvalidform'] = 'Votre nom d\'utilisateur ne peut comporter que des caractères alphanumériques, des points, des soulignés et des arobases. Il doit en outre comporter entre 3 et 30 caractères.';
$string['youmaynotregisterwithouttandc'] = 'Vous ne pouvez pas vous enregistrer sans accepter les <a href="terms.php">conditions d\'utilisation</a>';
