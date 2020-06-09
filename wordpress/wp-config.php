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
define( 'DB_USER', 'user1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'yes' );

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
define( 'AUTH_KEY',         'C@4[a*FuqkX=&o]aVG[}-s+ :Wv0hU0D0Y7nudl#1B/EWXn$K5`U1i=)*DvmtZtU' );
define( 'SECURE_AUTH_KEY',  '.rDe]i|Ort&28eoJ<{#{CKUc%oyLng0yeQ9hACyVo9!6FE.p2=6g^O0d.<#!!_g(' );
define( 'LOGGED_IN_KEY',    '8A3D2bG(i3t6[!AFKIn=^ObAqspGaj[Bkq:hJ#KVi$l*hPp8b17m@/O3^dlcb-V$' );
define( 'NONCE_KEY',        'Xkbx5tppsJ0`1sHz9ZeBI!IyYe-`q=&3g]!bic!.m_E%f/5!KQBbP/&ygP:/NN_Z' );
define( 'AUTH_SALT',        '%<-Z|2WrR]dy_we>;j-W$pD7f@E<&A?#q)nF<2^(T=_OKKTlaDbHL361I!,F21q]' );
define( 'SECURE_AUTH_SALT', 'AEQsvm:%iJZziaUw>qhksQ:DA-[4R;@)UM0S-{3nM`$`sXzPP,A/*@jA7M=o~TZL' );
define( 'LOGGED_IN_SALT',   'I{bIs0B.@laT(E#0X5+ZC8dTFD=yq~:7IU>Nq|oeAI*$zh-7g,}A1c|pzcCogu:+' );
define( 'NONCE_SALT',       '_Ab)R`-:Af5zbs;{{:<~M?wh6+C5*%{^aPNUL/s,i#BlR&$N0=$+jg+f-,E%cM+o' );
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
