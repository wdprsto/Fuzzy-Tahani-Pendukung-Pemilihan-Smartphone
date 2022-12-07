/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.18-MariaDB : Database - db_sihumas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sihumas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_sihumas`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('mrrjnniei59buj209dbemevcfpd1sj9u','::1',1657954099,'__ci_last_regenerate|i:1657954099;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('v8a616nkpsctpdp3v5e85vil2ns654ug','::1',1657954472,'__ci_last_regenerate|i:1657954472;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('o1eli9l67l0nrsfemhhfmrrldnkgkq7s','::1',1657954977,'__ci_last_regenerate|i:1657954977;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('g2e2169abmbuirnul79efete527jgpj5','::1',1657955448,'__ci_last_regenerate|i:1657955448;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('9lf71k4a0j51pqqrp2qmc99mevvs6d6e','::1',1657955977,'__ci_last_regenerate|i:1657955977;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('r2n9vp6o9s6mefhbticeva3artpikc3i','::1',1657955626,'__ci_last_regenerate|i:1657955457;__ACTIVE_SESSION_DATA|s:300:\"2587b91babe7cbb8a941e4c51723755dbe5206ea3e3f92e2ad4e71cc06dd53f0e1fcb1a765c7ce658b68fa9c0e13a598e98f297419cb5651a8893d6295907bf6c6wWNtzdj1K0c5Z3H+Qv4kQ3fIvLsTs/bCJMJ0d+80SFqDNzDBMfCCfJatUzjGsdraQIi0r7FrTrHZs559M3hLO6QWMjsH3DgZcNY828bpEP4yh3f0gnNd5OuA1p0NGXSWJ+WLCRvR3cAT5m3C9w/lYVLOXxj1ylsBqGFIfwAGA=\";'),
('01fojemk0803cftpasbrb9u0anmuug2o','::1',1657955908,'__ci_last_regenerate|i:1657955632;__ACTIVE_SESSION_DATA|s:300:\"4df357001500435cac3a765c552260ef1f8fad6ff198e61a7b0babc5c7a00d86598f85fe105e4239d30b767c30ed4192ab5ed63c62e38aa6b51851dc79ebfad0Yd9na/WkJPGrna2VHNdfKsrOfFtyXq23nct1QGYCQ7YK160GiMFMCnsSCWG14XU6EwcSskhMMKraQ3KocHG0VfUyew4oNVuO6rhXpNSMTLxJ579Pq9RQLwCWr20HQ7Wcd2LRaTYBXy7LTUGhj5aFQn69EJMzNwsrKVH1ObclnBc=\";'),
('c9c5c76ne69c9jfp1mjdcf8r2l5u9v1h','::1',1657956357,'__ci_last_regenerate|i:1657956357;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('oof8pu31ukgp2pn7pqk7e8rjsuldvukv','::1',1657956716,'__ci_last_regenerate|i:1657956716;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('pjvnclabsej5cm2u6l8v7djqn4e0l6pj','::1',1657957113,'__ci_last_regenerate|i:1657957113;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('mrk63jknph3papur8rgdako358brjutk','::1',1657957478,'__ci_last_regenerate|i:1657957478;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"520081c041dbac8dc5daddd2d7e5a493d38c4e5faa5eb71c33e977026886bed31264503fb7db866c5d9fbaaf7aa60a132c74f3dfa0b4b9ab3d574fcba92b4c72WytG5Mx3b6zLUY02NVRGvaRiJeT0m94hbHeyPFfCunPegDQuDvCkcC6HpQwQSP5FUtQl7fBsitOxn3iDkSyvxwwuaBx18xbwTkfSnkJeSIndIYmLSfXXf3PYf3C1ZLLW9ua2NGITpMlT02JtJ8wkWU+8uyQnDjE1Z0D/WGMCPHU=\";'),
('u3sv6mpd05jsirfkitp3an675t59tvr4','::1',1657957938,'__ci_last_regenerate|i:1657957938;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"e3874d55a29162cc46360a2fed1abd99483b80182203b516381f79de3763b4908783b749a06dc2944b383777f12e4a8e7ea979932c71a2d5841869d070c171a5ox7oFu+6x6PQbSyDJEwkj8lw64sp6aNh5ZSlVj734WHFFlKAFht8JR4AcaVCa50xbUybkTdGKIKwDPMOh/36pETLrjV8SDx1ArQ9dTPTo6wSWv9Rx2VncKVCp/Qp/drXD3OTFgHGrnGTv3y4H39y2y1dcoStKnP9+k+yejqhKmw=\";'),
('2pln20spqg108nigpmil9fptp2h3ihj6','::1',1657958256,'__ci_last_regenerate|i:1657958256;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"e3874d55a29162cc46360a2fed1abd99483b80182203b516381f79de3763b4908783b749a06dc2944b383777f12e4a8e7ea979932c71a2d5841869d070c171a5ox7oFu+6x6PQbSyDJEwkj8lw64sp6aNh5ZSlVj734WHFFlKAFht8JR4AcaVCa50xbUybkTdGKIKwDPMOh/36pETLrjV8SDx1ArQ9dTPTo6wSWv9Rx2VncKVCp/Qp/drXD3OTFgHGrnGTv3y4H39y2y1dcoStKnP9+k+yejqhKmw=\";'),
('jreq9iflo8etqehvdviburm9j9qm2jbp','::1',1657958581,'__ci_last_regenerate|i:1657958581;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"e3874d55a29162cc46360a2fed1abd99483b80182203b516381f79de3763b4908783b749a06dc2944b383777f12e4a8e7ea979932c71a2d5841869d070c171a5ox7oFu+6x6PQbSyDJEwkj8lw64sp6aNh5ZSlVj734WHFFlKAFht8JR4AcaVCa50xbUybkTdGKIKwDPMOh/36pETLrjV8SDx1ArQ9dTPTo6wSWv9Rx2VncKVCp/Qp/drXD3OTFgHGrnGTv3y4H39y2y1dcoStKnP9+k+yejqhKmw=\";'),
('b00bre77isei4867b6ck7gojjhmf1puv','::1',1657958885,'__ci_last_regenerate|i:1657958885;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"e3874d55a29162cc46360a2fed1abd99483b80182203b516381f79de3763b4908783b749a06dc2944b383777f12e4a8e7ea979932c71a2d5841869d070c171a5ox7oFu+6x6PQbSyDJEwkj8lw64sp6aNh5ZSlVj734WHFFlKAFht8JR4AcaVCa50xbUybkTdGKIKwDPMOh/36pETLrjV8SDx1ArQ9dTPTo6wSWv9Rx2VncKVCp/Qp/drXD3OTFgHGrnGTv3y4H39y2y1dcoStKnP9+k+yejqhKmw=\";'),
('1vvt9p3l5332q81rvtj8k6e67v4o0qe8','::1',1657959321,'__ci_last_regenerate|i:1657959321;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"e3874d55a29162cc46360a2fed1abd99483b80182203b516381f79de3763b4908783b749a06dc2944b383777f12e4a8e7ea979932c71a2d5841869d070c171a5ox7oFu+6x6PQbSyDJEwkj8lw64sp6aNh5ZSlVj734WHFFlKAFht8JR4AcaVCa50xbUybkTdGKIKwDPMOh/36pETLrjV8SDx1ArQ9dTPTo6wSWv9Rx2VncKVCp/Qp/drXD3OTFgHGrnGTv3y4H39y2y1dcoStKnP9+k+yejqhKmw=\";'),
('94gmisrpk04pdp1dfv9f8ggedt04arch','::1',1657959689,'__ci_last_regenerate|i:1657959689;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"1fee63c0568a9b951982a12093b930d1c970b7ccd6a4347bf12d209319d868aee828feff3a14aae26b160903a938a81b27c064cdf7ceb37dc2de2730d05bc6e6ryPAhsC8EtEWGK8nVsQXh/mBpEARBPV4p6ytELU314qTg6NLp77nBC61xp4UkT/4ZWetm5HWRSCqs+KstKsjYRA9OQG8OgFcTP/9ygT8DPT1ALiexmz3LkjYa4kLx96XX1gbtv1gdMcn0uaZFRqEmcbS6WmznFQ0WH1E3W4W4uA=\";'),
('2gujj01k6ur2q9cu1ei7c0ov5d67r1ct','::1',1657960057,'__ci_last_regenerate|i:1657960057;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"1fee63c0568a9b951982a12093b930d1c970b7ccd6a4347bf12d209319d868aee828feff3a14aae26b160903a938a81b27c064cdf7ceb37dc2de2730d05bc6e6ryPAhsC8EtEWGK8nVsQXh/mBpEARBPV4p6ytELU314qTg6NLp77nBC61xp4UkT/4ZWetm5HWRSCqs+KstKsjYRA9OQG8OgFcTP/9ygT8DPT1ALiexmz3LkjYa4kLx96XX1gbtv1gdMcn0uaZFRqEmcbS6WmznFQ0WH1E3W4W4uA=\";'),
('pr91oik6c5vnmhjn6kq4fikkausu1qp3','::1',1657960379,'__ci_last_regenerate|i:1657960379;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"1fee63c0568a9b951982a12093b930d1c970b7ccd6a4347bf12d209319d868aee828feff3a14aae26b160903a938a81b27c064cdf7ceb37dc2de2730d05bc6e6ryPAhsC8EtEWGK8nVsQXh/mBpEARBPV4p6ytELU314qTg6NLp77nBC61xp4UkT/4ZWetm5HWRSCqs+KstKsjYRA9OQG8OgFcTP/9ygT8DPT1ALiexmz3LkjYa4kLx96XX1gbtv1gdMcn0uaZFRqEmcbS6WmznFQ0WH1E3W4W4uA=\";'),
('rppcplbdckrh4gekeg1hjbhd2t2lerg0','::1',1657960817,'__ci_last_regenerate|i:1657960817;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"1fee63c0568a9b951982a12093b930d1c970b7ccd6a4347bf12d209319d868aee828feff3a14aae26b160903a938a81b27c064cdf7ceb37dc2de2730d05bc6e6ryPAhsC8EtEWGK8nVsQXh/mBpEARBPV4p6ytELU314qTg6NLp77nBC61xp4UkT/4ZWetm5HWRSCqs+KstKsjYRA9OQG8OgFcTP/9ygT8DPT1ALiexmz3LkjYa4kLx96XX1gbtv1gdMcn0uaZFRqEmcbS6WmznFQ0WH1E3W4W4uA=\";'),
('1pt4cm5g93tqo9bnp9mldusffst126in','::1',1657961125,'__ci_last_regenerate|i:1657961125;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"1fee63c0568a9b951982a12093b930d1c970b7ccd6a4347bf12d209319d868aee828feff3a14aae26b160903a938a81b27c064cdf7ceb37dc2de2730d05bc6e6ryPAhsC8EtEWGK8nVsQXh/mBpEARBPV4p6ytELU314qTg6NLp77nBC61xp4UkT/4ZWetm5HWRSCqs+KstKsjYRA9OQG8OgFcTP/9ygT8DPT1ALiexmz3LkjYa4kLx96XX1gbtv1gdMcn0uaZFRqEmcbS6WmznFQ0WH1E3W4W4uA=\";'),
('sqjnv20glsvdo9rn7hhqqi81da8gl98t','::1',1657961427,'__ci_last_regenerate|i:1657961427;redirection|N;login_flash|s:16:\"Berhasil logout!\";__ci_vars|a:1:{s:11:\"login_flash\";s:3:\"old\";}'),
('ertqv9jgqk529rtgmt25md0pua7h476p','::1',1657961788,'__ci_last_regenerate|i:1657961788;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"4e286df35a0b5bd14a8462a8d26db51b5ae9913107a25428f8a7b37061a8fe34e58b1efe0a4f00217eee87dc5c11cd3d3e414fdb4d3ccd2e4ae2878887fded3cZRlFdDvfmlE3DKStDrRVkJr0AqsMRvtMKdpzg3zc8dhYNS3feGcyRDSCllIP4sYy94jmrFKwJlwcaDDXUGDETwikXJLrEZ+ERvzP0lJx+VAq76gy24NT8dBikG796y66ftfFLbS4Oy8YaENahqBCWXcLBWqz7p9yFt8M2aNtKAQ=\";'),
('es411mlr6q84e03oqd0b53e4sv5vv0tu','192.168.43.1',1657963185,'__ci_last_regenerate|i:1657963185;'),
('rubgg4cvg2ftkml9iifmcde7ui0pkhls','::1',1657962500,'__ci_last_regenerate|i:1657962500;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"4e286df35a0b5bd14a8462a8d26db51b5ae9913107a25428f8a7b37061a8fe34e58b1efe0a4f00217eee87dc5c11cd3d3e414fdb4d3ccd2e4ae2878887fded3cZRlFdDvfmlE3DKStDrRVkJr0AqsMRvtMKdpzg3zc8dhYNS3feGcyRDSCllIP4sYy94jmrFKwJlwcaDDXUGDETwikXJLrEZ+ERvzP0lJx+VAq76gy24NT8dBikG796y66ftfFLbS4Oy8YaENahqBCWXcLBWqz7p9yFt8M2aNtKAQ=\";'),
('vlpmujom1aefsco9khjhqlmcdrptqgqn','::1',1657962858,'__ci_last_regenerate|i:1657962858;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"4e286df35a0b5bd14a8462a8d26db51b5ae9913107a25428f8a7b37061a8fe34e58b1efe0a4f00217eee87dc5c11cd3d3e414fdb4d3ccd2e4ae2878887fded3cZRlFdDvfmlE3DKStDrRVkJr0AqsMRvtMKdpzg3zc8dhYNS3feGcyRDSCllIP4sYy94jmrFKwJlwcaDDXUGDETwikXJLrEZ+ERvzP0lJx+VAq76gy24NT8dBikG796y66ftfFLbS4Oy8YaENahqBCWXcLBWqz7p9yFt8M2aNtKAQ=\";'),
('t538pmg8rceee40aap4ah7c47ca3srjb','::1',1657963174,'__ci_last_regenerate|i:1657963174;redirection|N;__ACTIVE_SESSION_DATA|s:300:\"4e286df35a0b5bd14a8462a8d26db51b5ae9913107a25428f8a7b37061a8fe34e58b1efe0a4f00217eee87dc5c11cd3d3e414fdb4d3ccd2e4ae2878887fded3cZRlFdDvfmlE3DKStDrRVkJr0AqsMRvtMKdpzg3zc8dhYNS3feGcyRDSCllIP4sYy94jmrFKwJlwcaDDXUGDETwikXJLrEZ+ERvzP0lJx+VAq76gy24NT8dBikG796y66ftfFLbS4Oy8YaENahqBCWXcLBWqz7p9yFt8M2aNtKAQ=\";'),
('fqrfb7t48687ent75ogleou7bca2dmg2','::1',1657963635,'__ci_last_regenerate|i:1657963635;redirection|N;'),
('nokjo82u7qqd4odm2pkm2u1j92c22t64','192.168.43.1',1657967630,'__ci_last_regenerate|i:1657967630;'),
('svck580un3viel7ak4gvb9n104lshgfk','::1',1657963281,'__ci_last_regenerate|i:1657963281;redirection|s:52:\"aHR0cDovL2xvY2FsaG9zdC9zaWh1bWFzL2FkbWluL3JlbGVhc2U=\";'),
('qk46qfvf45iii77ss5rln6davee1j86o','::1',1657964394,'__ci_last_regenerate|i:1657964394;redirection|N;'),
('8tllf4144vtru4c5u0su7ikngvs1o1qu','::1',1657964948,'__ci_last_regenerate|i:1657964948;redirection|N;status|s:8:\"loggedin\";__ACTIVE_SESSION_DATA|s:300:\"1434fb90a937686d83b36dffd49d1d01eb72fac10bdae83532325deb5e510f6614c8c4b7956e8dae4fa99a8d22588e38d2661756d1941acdab22e4a47132c359kSYKeThEX8yXoHDkZFdMOefgBuzX/iuY5A3gO8u5f8LgGFKogWXU3AJ71kXVVfvlGOwJQiqTOueu2zV2Zptv8FJZtI6iHe930kL1ozmhA+Mua1nnnJWbBnJBslT91ogR7wvKHCu5V3mOXGgHnr2SXfD+8AsZkwcHY7e9Q8y0/GY=\";'),
('kukua7cro7p9ijupdrcdn9t2tvv7naej','::1',1657964948,'__ci_last_regenerate|i:1657964948;redirection|N;status|s:8:\"loggedin\";__ACTIVE_SESSION_DATA|s:300:\"1434fb90a937686d83b36dffd49d1d01eb72fac10bdae83532325deb5e510f6614c8c4b7956e8dae4fa99a8d22588e38d2661756d1941acdab22e4a47132c359kSYKeThEX8yXoHDkZFdMOefgBuzX/iuY5A3gO8u5f8LgGFKogWXU3AJ71kXVVfvlGOwJQiqTOueu2zV2Zptv8FJZtI6iHe930kL1ozmhA+Mua1nnnJWbBnJBslT91ogR7wvKHCu5V3mOXGgHnr2SXfD+8AsZkwcHY7e9Q8y0/GY=\";'),
('vq2paj6fm8kihs3hdppglhveklc9leu8','192.168.43.1',1657967630,'__ci_last_regenerate|i:1657967630;'),
('ovkmaghbb00j95kj4d8e83lca77glkd3','192.168.43.1',1658046839,'__ci_last_regenerate|i:1658046839;'),
('j91mculg1chju7f9si0120bgu5qfae78','127.0.0.1',1658112609,'__ci_last_regenerate|i:1658112576;'),
('is46gn341djr5omipl8n3lfcmvgskla5','::1',1658112633,'__ci_last_regenerate|i:1658112615;'),
('td7r9tjbv4vsivg0bro9did3fipqnmpk','::1',1658113891,'__ci_last_regenerate|i:1658113891;__ACTIVE_SESSION_DATA|s:300:\"947da9d0a9c438c52b341c02ce83bed8bc31f0503e05d9b4edb43fb4169d79a6527bdafec93d6be94809009cc0a03ed1662e7496960b1ce268740eab25ec3143caYhx8dbal8hP98LBNxvdF0ANTU7FKUPXQ5zfLcaflDWRW//qTIw1zv72y21FPD/fEL2+rQNmfLe4gOErNb/jy+zbvWWzwtjCG7shvB9zJJ5WwQw1acVwhzPuVxwr9eMFsZKNGjdQowqy2OPgx5QW2lx93dS8n7KLZWfC74p0P8=\";'),
('cj1f91atov822tiqjrr42osmu2o7u1u1','::1',1658113981,'__ci_last_regenerate|i:1658113891;__ACTIVE_SESSION_DATA|s:300:\"947da9d0a9c438c52b341c02ce83bed8bc31f0503e05d9b4edb43fb4169d79a6527bdafec93d6be94809009cc0a03ed1662e7496960b1ce268740eab25ec3143caYhx8dbal8hP98LBNxvdF0ANTU7FKUPXQ5zfLcaflDWRW//qTIw1zv72y21FPD/fEL2+rQNmfLe4gOErNb/jy+zbvWWzwtjCG7shvB9zJJ5WwQw1acVwhzPuVxwr9eMFsZKNGjdQowqy2OPgx5QW2lx93dS8n7KLZWfC74p0P8=\";'),
('c8uk10443srrp16f7ljk1finunh71vht','::1',1658903053,'__ci_last_regenerate|i:1658902973;__ACTIVE_SESSION_DATA|s:300:\"27310db154b4051b2116b801ef826f3cb84d9f28bdcaee81bd0808833f00a2fd85e79ca4a980c1b98c6d956a63d0594a53154a6480dd04b515c7b658a58b781byIJ7+mRnY1839cJ8u1vva/TASOB2eG9CexexaIYTquZbM00TylkayGrQTeZr/gGfd4uQbvOk6JCqY4mBKa3Asc7PBu4ThXvjDK2wEelqcUURUyJY6bye0qBlu9iro74i54oPV9RFKmtsREfzE8U6ezlq/LGrhklwvtbpmcfaicU=\";');

/*Table structure for table `ci_settings` */

DROP TABLE IF EXISTS `ci_settings`;

CREATE TABLE `ci_settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(32) NOT NULL,
  `content` varchar(600) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_settings` */

insert  into `ci_settings`(`id`,`key`,`content`) values 
(1,'current_theme_name','argon'),
(2,'web_name','Humas PN Langsa'),
(3,'web_phone_number','(0641)21114 – 21449, Fax (0641)21114'),
(4,'web_email','pnlangsa@gmail.com'),
(5,'web_tagline',''),
(6,'web_logo','logo.png'),
(7,'web_description',''),
(8,'web_address','Jl. W.R. Supratman No. 10 Kota Langsa, 24416'),
(14,'peng_template','<h3><strong>Pengumuman</strong></h3> <hr> <p>Paragraf Pertama</p> <table align=\"left\" border=\"0\" cellpadding=\"3\" cellspacing=\"3\"> <tbody> <tr> <td>Hari/tangal</td> <td>:</td> <td>Kamis/23 Juli 2022</td> </tr> <tr> <td>Pukul</td> <td>:</td> <td>10.00 WIB</td> </tr> <tr> <td>Tempat</td> <td>:</td> <td>Ruang Press Release PN Langsa</td> </tr> </tbody> </table> <p> </p> <p> </p> <p> </p> <p>Atas perhatiannya kami ucapkan terima kasih.</p> <p> </p> <p><strong>Ttd</strong></p> <p><strong>Humas Pengadilan Negeri Langsa</strong></p> <p> </p> <p><strong>Iman Hario Putmana, S.H., M.H.</strong></p>');

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `adm_id` varchar(30) NOT NULL,
  `adm_nama` varchar(40) NOT NULL,
  `adm_password` varchar(191) NOT NULL,
  `adm_nohp` varchar(20) NOT NULL,
  PRIMARY KEY (`adm_id`),
  UNIQUE KEY `adm_nohp` (`adm_nohp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`adm_id`,`adm_nama`,`adm_password`,`adm_nohp`) values 
('admin123','Administrator Web','$2y$10$DBGDJvkvrpL5/MnWgRajtuVVA1DuZyiOMM/2t3w0UMhnXRcS7f2ha',''),
('ehumaspnlangsa','Humas PN Langsa','$2y$10$IUxpkAuGDQVpO3JqV8R72.7kfUrkEEiRLZdOu.7c5rYQLW47XgEoy','08116884646');

/*Table structure for table `tb_pengumuman` */

DROP TABLE IF EXISTS `tb_pengumuman`;

CREATE TABLE `tb_pengumuman` (
  `peng_id` int(10) NOT NULL AUTO_INCREMENT,
  `peng_tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `peng_judul` varchar(200) NOT NULL,
  `peng_isi` text DEFAULT NULL,
  PRIMARY KEY (`peng_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pengumuman` */

insert  into `tb_pengumuman`(`peng_id`,`peng_tgl`,`peng_judul`,`peng_isi`) values 
(1,'2022-07-16 09:48:53','Surat Ketua Pengadilan Negeri Langsa tentang Aplikasi E-Humas','<p>Berhubung dengan pemberitaan di berbagai media...., bersama dengan surat ini, Humas Pengadilan Negeri Langsa akan melaksanakan ress release secara offline pada:</p> <p> <table> <tr> <td>Hari/tanggal</td> <td>:</td> <td>Kamis/23 Juli 2022</td> </tr> <tr> <td>Pukul</td> <td>:</td> <td>10.00 WIB</td> </tr> <tr> <td>Tempat</td> <td>:</td> <td>Ruang Press Release PN Langsa</td> </tr> </table> </p> <p>Atas perhatiannya kami ucapkan terima kasih</p> <div class=\"ttd-peng-humas text-center mt-4\"> <p>Ttd<br>Humas Pengadilan Negeri Langsa</p> <br> <p>Iman Hario Putmana, S.H., M.H.</p> </div>'),
(5,'2022-07-16 13:19:00','Surat Testing','<h3><strong>Pengumuman</strong></h3>\r\n\r\n<hr>\r\n<p>Paragraf Pertama</p>\r\n\r\n<table align=\"left\" border=\"0\" cellpadding=\"3\" cellspacing=\"3\">\r\n <tbody>\r\n  <tr>\r\n   <td>Hari/tangal</td>\r\n   <td>:</td>\r\n   <td>Kamis/23 Juli 2022</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Pukul</td>\r\n   <td>:</td>\r\n   <td>10.00 WIB</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Tempat</td>\r\n   <td>:</td>\r\n   <td>Ruang Press Release PN Langsa</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p>Atas perhatiannya kami ucapkan terima kasih.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Ttd</strong></p>\r\n\r\n<p><strong>Humas Pengadilan Negeri Langsa</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Iman Hario Putmana, S.H., M.H.</strong></p>\r\n');

/*Table structure for table `tb_rilis` */

DROP TABLE IF EXISTS `tb_rilis`;

CREATE TABLE `tb_rilis` (
  `rls_id` int(11) NOT NULL AUTO_INCREMENT,
  `rls_tgl` datetime DEFAULT current_timestamp(),
  `rls_perihal` varchar(191) NOT NULL,
  `rls_jnsmedia` enum('Surat','Video') DEFAULT NULL,
  `rls_file` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`rls_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_rilis` */

insert  into `tb_rilis`(`rls_id`,`rls_tgl`,`rls_perihal`,`rls_jnsmedia`,`rls_file`) values 
(1,'2022-07-15 22:43:00','Testing','Video','1657901271.jpg'),
(2,'2022-07-15 23:10:00','Testing Lainnya','Surat','1657963269.pdf'),
(3,'2022-07-18 10:12:00','ayam','Surat','1658113951.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
