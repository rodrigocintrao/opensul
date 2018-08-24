<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'opensul');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$k-#`T=5vC>626iDsPKm|FB^p /MrFo-?X4Rf{&Jo(PtARNpo7R8^5ksZ9}{Yrfe');
define('SECURE_AUTH_KEY',  'ytf_13Gac<_0em$R#X$,Onl80pi,>3|*)8j{Xp3w{Sg/5-}^w3Z82_u4Qdb%`FPg');
define('LOGGED_IN_KEY',    'DsAsFHR<WNhk(4*a88?A<waTaQaxeaR1vD:OZl==X@93^0pHiQB(_A[N`{yIr-ST');
define('NONCE_KEY',        'L`!74wPDR<H_YUR}Ly< UzSOw(dDM>WmFlrJrlL$y2G/O0g0pnlcp<ECjdO!(fo,');
define('AUTH_SALT',        '<N&/Q{?A_oE(kxOk`7BAr[<6>x&AazFt@v!y,9N242?9@HRmm.;TlcRzIjhiE8=t');
define('SECURE_AUTH_SALT', 'tS,or(E:vPJR_63q }$$g34^`/z/VL^X90O0yX|I6sbfnGwu3=l9-9to7#6#a3F7');
define('LOGGED_IN_SALT',   'yk5nyH ^pvkoEW(o4l$qSS:^<forbC~xs-yy4TI.pA>8D+^W i<D}yH<ze!LW{F!');
define('NONCE_SALT',       '!O$:2{ =njIp):RemV/q Lwr#.,ezx}dQmen)eTyxj1XOD,D[AHDGi-n~(5e9.;r');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
