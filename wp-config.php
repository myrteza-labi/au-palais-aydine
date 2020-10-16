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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|jt@6XrtNAWhD7/*i][B]mGHPuFB&c;/$i4;ET7n}phZ+6>5v$,zJj$Y[2>K;A-l' );
define( 'SECURE_AUTH_KEY',  'lWy_g}Wj%L@M;d.PKG&%`o.Z64yJS}F`*jV.k!r%@KFoLDd;ET5<Y7kFmPNOfT] ' );
define( 'LOGGED_IN_KEY',    'bT!o4XC+Y:%/~_%;BLty3z`x?b;;L+PT7T(!;+/9Wm|l~4Jzr7]qo-gz(`$ DR3t' );
define( 'NONCE_KEY',        'EvE-/diYLA`jP<64+G1*<K@-#zW`pKZ=7z` -mfNKCnt-G)Lz*N<44C<qmXNkQ(%' );
define( 'AUTH_SALT',        'nt4x^eyoboZ`f*UAC;N!m+X1n[@L<J(L wiij$,OyW-7K6(_]-P;BvnPlKQg,St_' );
define( 'SECURE_AUTH_SALT', ':,jM1J!57?^fUW/PQ~B(M)yZE [fv&}?6>Cz=lLtqVLI;4K<rCJS82jjFwmGB45b' );
define( 'LOGGED_IN_SALT',   '8,>KLTT+E2mT_aeq6t}!B+Xl+x.-Jx?VE%de^3EONYj;_V=O7hmZO^|GD:72ifNk' );
define( 'NONCE_SALT',       'Wg??J8*:k@kvrDSKc=obE|QRRY94Ec #Gp)0LXxU,,WvmJ^S`T-(P$xyD/`N1?Cd' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
