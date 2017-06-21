-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 服務器版本:                        10.1.21-MariaDB - mariadb.org binary distribution
-- 服務器操作系統:                      Win32
-- HeidiSQL 版本:                  9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 導出 myproject 的資料庫結構
CREATE DATABASE IF NOT EXISTS `myproject` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `myproject`;

-- 導出  表 myproject.ci_sessions 結構
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` varchar(120) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在導出表  myproject.ci_sessions 的資料：~65 rows (大約)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('06nlg4bp59lptdm6s09qap2jbs6uagqd', '192.168.0.100', '1498027575', '__ci_last_regenerate|i:1498027316;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";keyword|s:3:"台";'),
	('0bkh7l3csltlc51h3hdmcc4g0r4tt2ql', '127.0.0.1', '1497507917', '__ci_last_regenerate|i:1497507832;'),
	('12l651r9r9itks1qt69qute4cin3u25g', '192.168.0.100', '1498005232', '__ci_last_regenerate|i:1498004985;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('1jj0kb1otmtsgvpheqm7ek04ci731ikj', '192.168.0.100', '1497573943', '__ci_last_regenerate|i:1497573941;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('1pi321nlue29uetldpg2i552scgo62d0', '192.168.0.100', '1498028480', '__ci_last_regenerate|i:1498028408;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";keyword|s:3:"測";'),
	('3b5mqbnhev1cc3l4qq6l3jofendr1mrd', '192.168.0.100', '1498009925', '__ci_last_regenerate|i:1498009889;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('4cfj613b1r337ba7koa9tq4521l92agu', '192.168.0.100', '1497510793', '__ci_last_regenerate|i:1497510644;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('4elhb985667b020i0nr8svvip7f11942', '192.168.0.100', '1498007497', '__ci_last_regenerate|i:1498007400;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('4ss50pn6pn0179klvi7r9p1s64mr69j0', '192.168.0.100', '1497511272', '__ci_last_regenerate|i:1497510984;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('5c8kblrsb2nu20ipem1ffvpfduvi0la7', '192.168.0.100', '1497572547', '__ci_last_regenerate|i:1497572547;'),
	('5jfh231vvlckmmqg772eson30aac5r9f', '192.168.0.100', '1497945854', '__ci_last_regenerate|i:1497945808;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('5kibhss7ledhkv04q4fp8pskmfacmted', '192.168.0.100', '1498013305', '__ci_last_regenerate|i:1498013277;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('69m58qvmapsi4akpno19notkc1909i0n', '192.168.0.100', '1498015544', '__ci_last_regenerate|i:1498015419;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('6ee6e8ahdu4mterugbnuaetnthbkirc9', '192.168.0.100', '1498011073', '__ci_last_regenerate|i:1498010887;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('6isn0rp3j7bno2mpsd10kbj6jc8r79hd', '192.168.0.100', '1498008126', '__ci_last_regenerate|i:1498007875;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('6pcn1kkrge6st18dd7jlbljgut4k4fml', '192.168.0.100', '1497517296', '__ci_last_regenerate|i:1497517167;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('75fbbvgl2vipagokdrds720u79df8e18', '192.168.0.100', '1497943822', '__ci_last_regenerate|i:1497943793;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('7cq1rh92798da7fssqb10if9hbu92gku', '192.168.0.100', '1497505583', '__ci_last_regenerate|i:1497505292;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('7ska4khafopfjtfeu029tn747ibal3ra', '192.168.0.100', '1497506709', '__ci_last_regenerate|i:1497506643;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('7t3varphqdnmlh95rjc1v9oe8go53bl9', '192.168.0.100', '1497510564', '__ci_last_regenerate|i:1497510294;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('94fsbqqeb36s12ce6ucgp1ej0nrapc8u', '127.0.0.1', '1497508595', '__ci_last_regenerate|i:1497508581;'),
	('9c9751pf540i28novtb467ak62kifdkj', '192.168.0.100', '1497508706', '__ci_last_regenerate|i:1497508606;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('9pqgpt9ov1dedkd9q0lo07ah4uojcq5f', '192.168.0.100', '1497509941', '__ci_last_regenerate|i:1497509664;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('9trufs0pele709dqu12hqohsbmeh0v3f', '192.168.0.100', '1497944711', '__ci_last_regenerate|i:1497944693;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('9vt9icrb2tuij177nnv9j8uuh81e3hoj', '192.168.0.100', '1497505201', '__ci_last_regenerate|i:1497504924;'),
	('a0lfhidum96r6p23uenh44tr2siqopdd', '192.168.0.100', '1498012165', '__ci_last_regenerate|i:1498011967;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('alko9033bd0u0pvhsvl388v3h60v84s5', '192.168.0.112', '1497510630', '__ci_last_regenerate|i:1497510448;user|s:6:"u77889";ip_address|s:13:"192.168.0.112";'),
	('bds9m38o142m84npe4o92qdg2bmierhk', '192.168.0.100', '1498004752', '__ci_last_regenerate|i:1498004588;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('de2f0p8kdjmmvtuqk1lbmu7hd6ecjdms', '192.168.0.100', '1497946149', '__ci_last_regenerate|i:1497946122;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('dp8pkandhf2jt7s7ktuu84rje85hj6oh', '192.168.0.100', '1497506013', '__ci_last_regenerate|i:1497505987;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('e4p7te8u0ilhbcq7recics72ji6bts5t', '192.168.0.100', '1497942198', '__ci_last_regenerate|i:1497941911;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('ek8sm7vp047jvgfhj37ivs0089cb3vre', '192.168.0.101', '1497509785', '__ci_last_regenerate|i:1497509735;user|s:6:"u66554";ip_address|s:13:"192.168.0.101";'),
	('emgc9ei4baoh7ueruip2dqs65i37bopr', '192.168.0.100', '1497509246', '__ci_last_regenerate|i:1497508948;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('f380mvd7ukk6g9kl4dj6k8i8b67l7s7a', '192.168.0.100', '1498005873', '__ci_last_regenerate|i:1498005607;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('fiem7tvr613gnc21m7fe1taknea92vjd', '192.168.0.100', '1497941483', '__ci_last_regenerate|i:1497941483;'),
	('g8l7fe8aicnhsa8iku3qkbr9srdabfa6', '192.168.0.100', '1497516160', '__ci_last_regenerate|i:1497515983;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('gbqc83i2uu9aka06elnu76eb0d3ofu9e', '192.168.0.100', '1497515875', '__ci_last_regenerate|i:1497515610;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('gfbpni9iuvk6fkoco41suclpjhpv2tpc', '192.168.0.100', '1498025735', '__ci_last_regenerate|i:1498025647;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";success_msg|s:27:"Record updated successfully";__ci_vars|a:1:{s:11:"success_msg";s:3:"old";}'),
	('gfn5inrask3ldua1k5utuk815e2mpqav', '192.168.0.100', '1497944436', '__ci_last_regenerate|i:1497944234;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('gushd32htk5qlkaoqpt1o5lvi8aqna6q', '192.168.0.100', '1497573436', '__ci_last_regenerate|i:1497573337;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('hrjrasoo5bmu574tbdgajtcubb5frp9f', '192.168.0.100', '1497946511', '__ci_last_regenerate|i:1497946508;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('i4suig1ps9ca1n2i0b5o7gqnj5uc0k33', '192.168.0.100', '1498006404', '__ci_last_regenerate|i:1498006224;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('j3og9i36uja8vvkl3iroe3lrpaljjhku', '192.168.0.100', '1498004383', '__ci_last_regenerate|i:1498004207;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('jkjd5dml8njf47hllartuv6fq8ef5lt1', '192.168.0.100', '1498026296', '__ci_last_regenerate|i:1498026022;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";keyword|s:3:"台";'),
	('k0ltknpuhp9gvcs8orrboj7plcl71cmi', '192.168.0.100', '1497515554', '__ci_last_regenerate|i:1497515257;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('kbgk4n0v243hqtac1armq0hn1nftlifk', '192.168.0.112', '1497510040', '__ci_last_regenerate|i:1497509751;user|s:6:"u66554";ip_address|s:13:"192.168.0.112";'),
	('kobp4th27bqo36vpo4oia3e5k37o28sc', '192.168.0.100', '1497516626', '__ci_last_regenerate|i:1497516618;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('lopfoq78hk5ohovrveqt4dnllgang7k8', '192.168.0.100', '1498026757', '__ci_last_regenerate|i:1498026718;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";keyword|s:3:"台";'),
	('me4f4dqchab8n81l9433f2ppisl1s6nc', '192.168.0.100', '1498014153', '__ci_last_regenerate|i:1498014089;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('mgto7vtbdaqmtjs5j8tgdrvuhdrls70g', '192.168.0.100', '1497941740', '__ci_last_regenerate|i:1497941548;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('p41qanim7945terpv9ri6angjoci7l03', '192.168.0.101', '1497510208', '__ci_last_regenerate|i:1497510208;'),
	('p78ol9pfomaqtfs51g6vm560lgp98tat', '192.168.0.100', '1497516590', '__ci_last_regenerate|i:1497516316;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('qamvcvdojhragqcs5m3ttqov7hhsf9hu', '192.168.0.100', '1497505950', '__ci_last_regenerate|i:1497505674;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('qbeba0f89lomcp1d9lau649ms40i92ck', '192.168.0.100', '1498010692', '__ci_last_regenerate|i:1498010501;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('qq4vv8295eapb11k5diu6e3tecbes4jk', '192.168.0.100', '1497509569', '__ci_last_regenerate|i:1497509356;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('r4e3kduv1evb9l9banbkaklf69nm7m6k', '192.168.0.100', '1498027770', '__ci_last_regenerate|i:1498027762;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";keyword|s:3:"台";'),
	('r7jt4cg84b9ghmh3cpmgh7agjfn3q8om', '192.168.0.100', '1498006820', '__ci_last_regenerate|i:1498006556;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('s5i3bsegp8q8vpcrpu86a89tpot4084o', '192.168.0.100', '1498007231', '__ci_last_regenerate|i:1498007016;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('sl5e1q5vcti881bolnmf2jplooh3lrj7', '192.168.0.100', '1497945452', '__ci_last_regenerate|i:1497945161;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('t3t8h1bii188ifige30cunphet7s6nf3', '192.168.0.100', '1498013789', '__ci_last_regenerate|i:1498013626;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('t42rpvgpab7ua3qol6bcjg6g88lb8crr', '192.168.0.100', '1497572985', '__ci_last_regenerate|i:1497572975;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('tfb6pevmp0q6r9m78sajd5of9cag4v5e', '192.168.0.100', '1498004157', '__ci_last_regenerate|i:1498003860;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('u07beka2gafvc0qds9v64vgkm8bcj7f6', '192.168.0.112', '1497510419', '__ci_last_regenerate|i:1497510138;user|s:6:"u77889";ip_address|s:13:"192.168.0.112";'),
	('uk2ok1at9tepbhnqh4dpr8ssnrpfdgkg', '192.168.0.100', '1498009137', '__ci_last_regenerate|i:1498009080;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('uucdjki9rp84seb67nb8daabliumqrii', '192.168.0.100', '1497945768', '__ci_last_regenerate|i:1497945468;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";'),
	('vja81t3ejodca2edq13r9h10nr1hjc1k', '192.168.0.100', '1498011516', '__ci_last_regenerate|i:1498011481;user|s:6:"u77889";ip_address|s:13:"192.168.0.100";');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- 導出  表 myproject.events 結構
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `created_at` varchar(10) NOT NULL,
  `updated_at` varchar(10) NOT NULL,
  `event_name` varchar(10) NOT NULL,
  `hash_event_name` varchar(10) NOT NULL,
  `idnumber` varchar(10) NOT NULL,
  `validate` varchar(10) NOT NULL,
  `station` varchar(255) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `process` longtext NOT NULL,
  `assess` longtext NOT NULL,
  `use` longtext NOT NULL,
  `money` varchar(100) NOT NULL,
  `effect` longtext NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `name` (`event_name`),
  KEY `FK_events_users` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- 正在導出表  myproject.events 的資料：~22 rows (大約)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`event_id`, `user_name`, `created_at`, `updated_at`, `event_name`, `hash_event_name`, `idnumber`, `validate`, `station`, `birthday`, `gender`, `education`, `experience`, `phone`, `contact`, `email`, `address`, `process`, `assess`, `use`, `money`, `effect`) VALUES
	(6, 'u77889', '0000-00-00', '2017/06/21', '測試1', 'f4de0209c5', 'ahtreh', '', '台北', '2017/05/02', '', 'artjhasrejh', 'dacfGVHBJNKML,', '', 'haetrhsrtj', '3@#.#', 'atrhjsrtjh', 'cfVGHBJNKM', 'jnstrhsrtjnsrtmj', 'dfbxhgfjd', 'sjrtym', 'sjntrjnsr'),
	(7, 'u66554', '2017-05-03', '2017/06/15', '測試2', 'eaf004702a', '234567', '', 'qwe', '', '', '', 'CVHMJ', '', '', '', '', '', '', '', '', ''),
	(8, 'u66885', '0106-05-03', '0106-05-03', '測試3', '9a3f8250b6', '6789', '0', '', '0000-00-00', '0', '', 'VDSJHKJNM', '', '', '', '', 'DVSYUIO', '', '', '', ''),
	(9, 'u77889', '', '2017/06/21', '測試4', '0e90a4e523', '123456', '', '台北', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(13, 'u77889', '2017/06/12', '', '測試5', '2265168f03', 'ewg', 'yes', '', '2017/06/13', 'boy', 'g', 'gewge', 'e', 'g', 'g', 'g', 'eg', 'gew', 'gge', 'ge', 'ewe'),
	(15, 'u77889', '2017/06/12', '', '測試6', 'b2c392de65', '', 'yes', '', '2017/06/13', 'boy', '', '', '', '', '', '', '', '', '', '', ''),
	(19, 'u77889', '2017/06/12', '', '測試7', '4458752200', '', 'yes', '', '2017/06/04', 'boy', '', '', '', '', '', '', '', '', '', '', ''),
	(20, 'u77889', '2017/06/12', '', '測試8', 'cecf8b524f', '', 'yes', '', '2017/06/06', 'boy', '', '', '', '', '', '', '', '', '', '', ''),
	(21, 'u77889', '2017/06/12', '', '測試9', 'f45e46276a', '2', 'yes', '2', '2017/06/07', 'boy', '4', '4', '354354', '354', '354', '354', '354', '54', '354', '345', '354'),
	(22, 'u74141', '2017/06/14', '', '測試10', '287c98150f', 'snfghsreth', 'no', 'shhs', '2017/06/14', 'girl', 'hsthfha', 'ahrehaeh', 'aherth', 'hsr', 'aheth', 'erht', 'adhhnd', 'hsthrt', 'hsetrh', 'sht', 'trhdth'),
	(23, 'u74141', '2017/06/14', '', '測試11', 'e6df7b2a51', 'nstrhnrst', 'yes', 'ndfgn', '2017/06/05', 'girl', 'ndhtrs', 'snrths', 'hshaer', 'arhareh', 'aherher', 'aehareh', 'aerhareh', 'aehaerh', 'ahreh', 'erahreh', 'htrj'),
	(24, 'u74141', '2017/06/14', '', '測試12', '513c29c244', 'hjswhjrt', 'no', 'rytjtr', '2017/06/03', 'boy', 'jthrtsj', 'srjtj', 'sjyrtj', 'ktyik', '/iop/il', 'fouylofu', 'dti', 'kr6dyyt', 'foluyk', 'dioytuokfty', 'dtyukfuytl'),
	(25, 'u74141', '2017/06/14', '', '測試13', '0f01f55141', 'fyiluuyfl', 'yes', ';/oih;', '2017/01/31', 'girl', 'o;o;oiu', 'jftkfcyll', 'ityciyik', 'kcykc', 'ktcykcty', 'ykctylktuyl', 'kxirtykcyt', 'kdtyk', 'cyktkxy', 'jmrtsj', 'sjrt'),
	(26, 'u74141', '2017/06/14', '', '測試14', 'f4469c391b', 'srtjtjrts', 'yes', 'mdytm', '2017/05/29', 'boy', 'jyrdtjy', 'mdym', 'tjshrj', 'srjtryj', 'mdj', 'srtjtrj', 'strjrst', 'strjtrj', 'jsyrtjtysj', 'ewtger', 'jtrsjsr'),
	(27, 'u74141', '2017/06/14', '', '測試15', 'a8ffe6e380', 'jsrtjkrsyk', 'no', 'sjrtykj', '2017/06/02', 'girl', 'jsrtkyrs', 'hRWHzre', 'zjtejerz', 'tsjtrjrtjh', 'szerjerstjtr', 'aretjertje', 'jstrjts', 'jajtrejntjnzd', 'haertjze', 'jatdjza', 'jasertjre'),
	(28, 'u66554', '2017/06/15', '2017/06/15', '測試16', 'e13009fde7', '2', '', 'g', '2017/06/05', '', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g'),
	(30, 'u77889', '2017/06/20', '2017/06/21', 'cool~good', 'b1f4f9a523', 'bgsrgsgbbf', '', '台北', '2017/05/02', '', 'rhtrsj', 'jsrtjnza', 'shrthtjh', 'stjhstjh', 'sjzhzetrh', 'tjhsrtjh', 'jrsthrsx', 'sherthh', 'jsrtj', 'trjrs', 'aerhtr'),
	(31, 'u77889', '2017/06/21', '', '台客', '14e1621e88', 'FCJGMFYJ', 'no', 'TSRJ', '2017/05/28', 'boy', 'JTRSJ', 'JSRTJ', 'KYRSJKRSTJ', 'tuylkuytlky', 'JRSTJ', 'tdcdkytkyj', 'cl,gulutcl', 'xtkjxtykjxryt', 'kdrytdkjrtxu', 'rtxijdrtujrdx', 'xrjdtdjrt');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- 導出  表 myproject.messages 結構
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) unsigned NOT NULL,
  `hash_event_name` varchar(50) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `info` longtext NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_messages_events` (`event_id`),
  KEY `FK_messages_users` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- 正在導出表  myproject.messages 的資料：~26 rows (大約)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `event_id`, `hash_event_name`, `user_name`, `info`, `created_at`) VALUES
	(4, 6, '', 'u77889', '風大雨大', '2017/6/17'),
	(6, 8, '', 'u66885', '好喝', '2017/3/25'),
	(12, 6, '', 'u77889', 'aswfs', '2017/05/26 11:24:58'),
	(13, 8, '', 'u77889', 'p;olikjhnv', '2017/05/29 09:37:31'),
	(14, 7, '', 'u77889', 'nujmnrnbetb', '2017/05/29 09:37:48'),
	(15, 10, '', 'u77889', 'byebye', '2017/06/12 14:46:57'),
	(16, 6, '', 'u77889', 'cool', '2017/06/15 14:02:35'),
	(17, 6, '', 'u66554', 't6uu65', '2017/06/15 15:00:56'),
	(18, 6, '', 'u66554', '7yu5u6u', '2017/06/15 15:01:29'),
	(19, 6, '', 'u77889', 'ngfgjnf', '2017/06/15 15:05:24'),
	(20, 6, '', 'u77889', 'fdbf', '2017/06/15 15:05:41'),
	(21, 6, '', 'u77889', 'wwww', '2017/06/15 15:06:02'),
	(22, 6, '', 'u77889', 'tttt', '2017/06/15 15:06:37'),
	(23, 6, '', 'u77889', 'hthth', '2017/06/15 15:08:56'),
	(24, 6, '', 'u77889', 'tyyhhghh', '2017/06/15 15:09:21'),
	(25, 6, '', 'u77889', 'TTTTTTTTTTTTTTTT', '2017/06/15 15:09:46'),
	(26, 6, '', 'u77889', 'blhkjbu', '2017/06/15 15:12:39'),
	(27, 6, '', 'u77889', 'hesth', '2017/06/15 16:36:29'),
	(28, 10, '', 'u77889', 'fdzgdg', '2017/06/15 16:46:31'),
	(29, 8, '', 'u77889', 'jkryj', '2017/06/15 16:47:58'),
	(30, 30, 'b1f4f9a523', 'u77889', 'test1', '2017/06/21 08:24:41'),
	(31, 30, 'b1f4f9a523', 'u77889', 'test2', '2017/06/21 08:24:54'),
	(32, 30, 'b1f4f9a523', 'u77889', 'test3', '2017/06/21 08:25:09'),
	(33, 30, 'b1f4f9a523', 'u77889', 'test4', '2017/06/21 08:25:18'),
	(34, 30, 'b1f4f9a523', 'u77889', 'test5', '2017/06/21 08:25:25'),
	(35, 30, 'b1f4f9a523', 'u77889', 'test6', '2017/06/21 08:25:35');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- 導出  表 myproject.users 結構
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- 正在導出表  myproject.users 的資料：~4 rows (大約)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `fullname`, `password`, `role`, `updated_at`) VALUES
	(1, 'u66554', '李阿花', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 1, ''),
	(2, 'u66885', '蔡阿嘎', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 2, ''),
	(3, 'u77889', '王大明', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 3, '2017/06/15 16:33:44'),
	(4, 'u74141', '游小強', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 3, '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
