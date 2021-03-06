<?PHP
// File: $Id: inc.searchengines.php 28 2008-05-11 19:18:49Z mistral $
// +----------------------------------------------------------------------+
// | Version: Sefrengo $Name:  $                                          
// +----------------------------------------------------------------------+
// | Copyright (c) 2005 - 2007 sefrengo.org <info@sefrengo.org>           |
// +----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify |
// | it under the terms of the GNU General Public License                 |
// |                                                                      |
// | This program is subject to the GPL license, that is bundled with     |
// | this package in the file LICENSE.TXT.                                |
// | If you did not receive a copy of the GNU General Public License      |
// | along with this program write to the Free Software Foundation, Inc., |
// | 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA               |
// |                                                                      |
// | This program is distributed in the hope that it will be useful,      |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of       |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        |
// | GNU General Public License for more details.                         |
// |                                                                      |
// +----------------------------------------------------------------------+
// + Autor: $Author: mistral $
// +----------------------------------------------------------------------+
// + Revision: $Revision: 28 $
// +----------------------------------------------------------------------+
// + Description:
// +----------------------------------------------------------------------+
// + Changes: 
// +----------------------------------------------------------------------+
// + ToDo:
// +----------------------------------------------------------------------+

// Suchmaschinen-IPs, zum deaktivieren der Session
$searchengine_ips =
array(
	//localhost, for testing
	//'127.0.0.1',
	//google
	'209.185.253.167',
	'209.185.253.168',
	'209.185.253.169',
	'209.185.253.170',
	'209.185.253.171',
	'209.185.253.172',
	'209.185.253.173',
	'209.185.253.174',
	'209.185.253.175',
	'209.185.253.176',
	'209.185.253.177',
	'209.185.253.178',
	'209.185.253.179',
	'209.185.253.180',
	'209.185.253.181',
	'209.185.253.182',
	'209.185.253.183',
	'209.185.253.184',
	'209.185.253.185',
	'209.185.253.186',
	'209.185.253.187',
	'209.185.253.188',
	'209.185.108.138',
	'209.185.108.139',
	'209.185.108.140',
	'209.185.108.141',
	'209.185.108.142',
	'209.185.108.143',
	'209.185.108.144',
	'209.185.108.145',
	'209.185.108.146',
	'209.185.108.147',
	'209.185.108.148',
	'209.185.108.149',
	'209.185.108.150',
	'209.185.108.151',
	'209.185.108.152',
	'209.185.108.153',
	'209.185.108.154',
	'209.185.108.155',
	'209.185.108.156',
	'209.185.108.157',
	'209.185.108.158',
	'209.185.108.159',
	'209.185.108.160',
	'209.185.108.161',
	'209.185.108.162',
	'209.185.108.163',
	'209.185.108.164',
	'209.185.108.165',
	'209.185.108.134',
	'209.185.108.135',
	'64.209.181.52',
	'64.208.33.33',
	'64.209.181.53',
	'64.68.82.22',
	'64.68.82.23',
	'64.68.82.24',
	'64.68.82.25',
	'64.68.82.26',
	'64.68.82.27',
	'64.68.82.28',
	'64.68.82.29',
	'64.68.82.30',
	'64.68.82.1',
	'64.68.82.2',
	'64.68.82.3',
	'64.68.82.4',
	'64.68.82.5',
	'64.68.82.6',
	'64.68.82.7',
	'64.68.82.8',
	'64.68.82.9',
	'64.68.82.10',
	'64.68.82.11',
	'64.68.82.12',
	'64.68.82.13',
	'64.68.82.14',
	'64.68.82.15',
	'64.68.82.16',
	'64.68.82.17',
	'64.68.82.18',
	'64.68.82.19',
	'64.68.82.20',
	'64.68.82.21',
	'64.68.82.50',
	'64.68.82.51',
	'64.68.82.52',
	'64.68.82.53',
	'64.68.82.54',
	'64.68.82.55',
	'64.68.82.56',
	'64.68.82.57',
	'64.68.82.58',
	'64.68.82.59',
	'64.68.82.60',
	'64.68.82.31',
	'64.68.82.32',
	'64.68.82.33',
	'64.68.82.34',
	'64.68.82.35',
	'64.68.82.36',
	'64.68.82.37',
	'64.68.82.38',
	'64.68.82.39',
	'64.68.82.40',
	'64.68.82.41',
	'64.68.82.42',
	'64.68.82.43',
	'64.68.82.44',
	'64.68.82.45',
	'64.68.82.46',
	'64.68.82.47',
	'64.68.82.48',
	'64.68.82.49',
	'64.68.82.76',
	'64.68.82.77',
	'64.68.82.78',
	'64.68.82.79',
	'64.68.82.80',
	'64.68.82.61',
	'64.68.82.62',
	'64.68.82.63',
	'64.68.82.64',
	'64.68.82.65',
	'64.68.82.66',
	'64.68.82.67',
	'64.68.82.68',
	'64.68.82.69',
	'64.68.82.70',
	'64.68.82.71',
	'64.68.82.72',
	'64.68.82.73',
	'64.68.82.74',
	'64.68.82.75',
	//excite
	'198.3.103.50',
	'198.3.103.35',
	'198.3.103.56',
	'198.3.103.57',
	'198.3.103.58',
	'198.3.103.59',
	'198.3.103.65',
	'198.3.103.66',
	'198.3.103.68',
	'198.3.103.69',
	'198.3.103.70',
	'198.3.103.72',
	'198.3.103.81',
	'198.3.103.84',
	'198.3.103.93',
	'198.3.103.97',
	'204.62.245.167',
	'204.62.245.187',
	'204.62.245.32',
	'198.3.103.105',
	'198.3.103.108',
	'198.3.103.112',
	'198.3.103.60',
	'199.172.149.131',
	'199.172.149.132',
	'199.172.149.138',
	'199.172.149.139',
	'199.172.149.140',
	'199.172.149.141',
	'199.172.149.142',
	'199.172.149.143',
	'199.172.149.144',
	'199.172.149.161',
	'204.62.245.178',
	//altavista
	'204.123.9.76',
	'204.152.191.47',
	'204.123.9.123',
	'204.123.9.18',
	'204.123.9.19',
	'204.123.9.20',
	'204.123.9.23',
	'204.123.9.47',
	'204.123.9.76',
	'204.123.9.95',
	'204.152.191.41',
	'204.152.191.47',
	'204.152.191.52',
	'204.152.190.148',
	'204.152.191.57',
	'128.177.243.155',
	'204.152.191.47',
	'204.152.191.58',
	'128.177.243.82',
	'128.177.243.86',
	'212.187.226.111',
	//infoseek
	'198.5.208.100',
	'198.5.210.181',
	'198.5.210.189',
	'204.162.96.124',
	'204.162.96.3',
	'204.162.96.66',
	'204.162.96.73',
	'204.162.96.92',
	'204.162.97.17',
	'204.162.97.1',
	'204.162.97.231',
	'204.162.98.11',
	'204.162.98.38',
	'204.162.98.38',
	'205.226.201.30',
	'205.226.203.35',
	'205.226.203.56',
	'205.226.204.238',
	'210.236.233.155',
	//lycos
	'166.48.225.254',
	'206.79.171.157',
	'206.79.171.18',
	'206.79.171.19',
	'206.79.171.20',
	'206.79.171.21',
	'206.79.171.22',
	'206.79.171.23',
	'206.79.171.24',
	'206.79.171.25',
	'206.79.171.81',
	'206.79.171.89',
	'206.79.171.97',
	'206.79.171.85',
	'207.77.90.136',
	'207.77.90.14',
	'207.77.90.183',
	'207.77.90.185',
	'207.77.90.186',
	'207.77.90.187',
	'207.77.90.20',
	'207.77.91.184',
	'208.146.26.19',
	'208.146.26.233',
	'208.146.27.123',
	'208.146.27.124',
	'208.146.27.94',
	'208.146.27.95',
	'208.146.27.96',
	'209.67.228.109',
	'209.67.228.15',
	'209.67.228.159',
	'209.67.228.166',
	'209.67.228.17',
	'209.67.228.174',
	'209.67.228.178',
	'209.67.228.182',
	'209.67.228.19',
	'209.67.228.21',
	'209.67.228.23',
	'209.67.228.42',
	'209.67.229.100',
	'209.67.229.101',
	'209.67.229.102',
	'209.67.229.137',
	'209.67.229.138',
	'209.67.229.139',
	'209.67.229.140',
	'209.67.229.141',
	'209.67.229.142',
	'209.67.229.143',
	'209.67.229.143',
	'209.67.229.144',
	'209.67.229.62',
	'209.67.229.85',
	'216.35.194.183',
	'216.35.194.184',
	'216.35.194.185',
	'216.35.194.186',
	'216.35.194.187',
	'216.35.194.188',
	'216.35.194.189',
	'216.35.194.190',
	'217.160.91.146',
	//nothern light
	'208.219.77.29',
	'208.219.77.9',
	'208.219.77.19',
	'216.34.109.190',
	'216.34.109.191',
	'216.34.109.192',
	'205.181.75.66',
	'205.181.75.65',
	//fast/ althenet
	'209.67.247.129',
	'209.67.247.255',
	'209.202.148.13',
	'209.202.148.18',
	'209.202.148.23',
	'209.202.148.25',
	'209.202.148.39',
	'209.202.148.51',
	'209.202.148.53',
	'209.202.148.63',
	'209.202.148.65',
	'209.202.148.74',
	'209.67.247.153',
	'209.67.247.158',
	'209.67.247.161',
	'209.67.247.200',
	'209.67.247.202',
	'209.67.247.205',
	'209.67.247.206',
	'209.67.247.207',
	'209.67.247.208',
	'209.67.247.230',
	'209.67.247.231',
	'209.67.247.233',
	'209.67.247.234',
	'207.138.42.105');
?>