<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', getenv('MYSQL_DATABASE_NAME'));

/** Usuário do banco de dados MySQL */
define('DB_USER', getenv('MYSQL_USER'));

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** nome do host do MySQL */
define('DB_HOST', getenv('MYSQL_HOST'));

// Determine HTTP or HTTPS, then set WP_SITEURL and WP_HOME
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
{
    $protocol_to_use = 'https://';
} else {
    $protocol_to_use = 'http://';
}
define( 'WP_SITEURL', $protocol_to_use . $_SERVER['HTTP_HOST']);
define( 'WP_HOME', $protocol_to_use . $_SERVER['HTTP_HOST']);

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'riH.:5c5>p-]lCO/fCEipGHb9W2z>_ Wlt-n>*|KoclL{!3d*I)%[BlPP|1%v%~=');
define('SECURE_AUTH_KEY',  '_46sk@ {{b;e/7C,-a=*B%b.g+MZw_/ |mrIDatRVv9^yWa>7o}S^b>U2epO#Ufy');
define('LOGGED_IN_KEY',    'xG^!}yS`j>*vkd5XhDM d0$mG`H`2)uv/hx6ApP,|LPX6pcpmUH1hTH)AFC_o;*e');
define('NONCE_KEY',        'dNRc:F-~hE3uDu*XOXI.)|1S`~F?D~^lTi3lV-dC(6h:m=a(51fu(2B2I_[q)ZT7');
define('AUTH_SALT',        'dn%U|]rvu#H0|7-@ZIPAVLo*pq9d;NA^2~+1=QiNuHrXibQ+:lunHc=`!kuhoH-J');
define('SECURE_AUTH_SALT', '8u,dDZCeDq4n-oX]AJh41iOLMWJtTuf ]?OZFULRVY(C$te>H^8B5~-Pdi9/?0UX');
define('LOGGED_IN_SALT',   'S*t*l!hr1Fqeb#QD[l3qc(_yB}AA=t6tFN++i0u#)JQ)7die~|r0JivD;8y7M(8r');
define('NONCE_SALT',       'nD+,i7mc^_@#TrsMy_g`d~%76_l2+twUkjl!cS!FK-xMQO~WBIP| T2i].Z(@?E+');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/*
* Definida as credenciais AWS
*/
define('AWS_ACCESS_KEY_ID', getenv('AWS_ACCESS_KEY_ID'));
define('AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY'));

/*
* SMTP Config
*/

define('WPMS_ON', true);
define('WPMS_MAIL_FROM', getenv('SMTP_FROM'));
define('WPMS_SMTP_HOST', getenv('SMTP_HOST')); // The SMTP mail host
define('WPMS_SMTP_PORT', getenv('SMTP_PORT')); // The SMTP server port number
define('WPMS_SSL', getenv('SMTP_SSL_TYPE')); // Possible values '', 'ssl', 'tls' - note TLS is not STARTTLS
define('WPMS_SMTP_USER', getenv('SMTP_USER')); // SMTP authentication username, only used if WPMS_SMTP_AUTH is true
define('WPMS_SMTP_PASS', getenv('SMTP_PASS')); // SMTP authentication password, only used if WPMS_SMTP_AUTH is true

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
