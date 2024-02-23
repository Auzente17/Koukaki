<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uo]a_vXMN~a)V[AWJ3fcSZ. _,;x,Dcg3do#jg6`[_Smji5`|{DsZggbCS?h:NtS' );
define( 'SECURE_AUTH_KEY',  '4r(:y(yX@wd`h^p>D=0zSSP_g$Yv!Ats.*x4u+_>y[dp4:<oV<YS4:l1Z)o0Po|e' );
define( 'LOGGED_IN_KEY',    'ekfz^MTtO)2tO$0>r7A/!TA9rBc,r$:G6C3T/a)1$,1{Q6Q@(u%]B3VAtuEnSc4_' );
define( 'NONCE_KEY',        'H rN4=6Zu$EzV3!wDAMC,lN!UeP(47E3(Q><~;K >n:NoZDn=JzG13Zd6Z.a`=p:' );
define( 'AUTH_SALT',        '^H7{P`TKo?J<ZRx5vqPiQT_AVsGr2D |[v;^SLO!t!@tn]<xuCU=SG^Eu>%J3~Bc' );
define( 'SECURE_AUTH_SALT', 'JO6K`+sML4rR(vW0t@rzHsqmZ?m^[w~*WUwJ!_tP<_~k;=SI1rhC,^c95.W?YB4b' );
define( 'LOGGED_IN_SALT',   'L+^Y)(DP|< xP3g3@Vr3sHdiO!qfwQ/^eYUMAsg7@,AKa(BHe4= ^}=w~xe/IoqJ' );
define( 'NONCE_SALT',       'fJIuR1R1|aFjTn`J+4>y Dmb2]fv4HRKF=mj0I%bTB~D@MkEpL?=}hVENA|Gi)!;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
