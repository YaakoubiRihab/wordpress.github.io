<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'YZ&]J1s!$XLhs1jg1x7A>P}R{OF:j5<QiO3clE<X-_TYhBp<<Hwa:nk;+9}L8838' );
define( 'SECURE_AUTH_KEY',  'oZcmG)fMkJdQVG6V}LZs]Mkkramkufcz>9W+8N_ /)Pa4xIUz{N{|jUH]%*$2m<(' );
define( 'LOGGED_IN_KEY',    'd~8z[Qv .v2d078$S/@b}9GL]/$%ILP:4;s/*(@ENHp*N%iE]_ZI)1^fUh+VMm-M' );
define( 'NONCE_KEY',        'Sm;Nlu}%J50/}/@wN:#GJ(XY,jx `1TP)bI@/rm4q;lO$`S9EA_re@:5Tr~xxie&' );
define( 'AUTH_SALT',        'EUa*J46Gbz|uWT7Kjs%k~4i_5=T/;;;G6L7Kk>P$r5l,Ye%zZdW46wr-ulBCY!nI' );
define( 'SECURE_AUTH_SALT', '?baa${lmScJM(c31/!i~7C0lPKv!^Y#eXGQYUj^RArtO^Kzk;.^eF=$N{FXj-u|j' );
define( 'LOGGED_IN_SALT',   'jb%vrQ>4(wINGF<>BkZa7m1J8KtL0[egvdRDUgV_n|Z#CHb/U&LusPR4iDLIv|v>' );
define( 'NONCE_SALT',       'fAGsjXc>sOgRg3g&)./]lMq/n=}R2Y_B#)@<lmO6r84R8}p)Fm67#{*thrP@6iqy' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
