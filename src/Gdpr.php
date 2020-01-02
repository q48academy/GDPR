<?php

namespace Q48academy\Gdpr;

use Exception;
use phpDocumentor\Reflection\Types\Boolean;
use RangeException;


/**
 * Class Gdpr
 * @package Rpf\Boot
 */

class Gdpr
{
	/**
	 * Art. 1 - Gegenstand und Ziele*
	 *
	 * (1) Diese Verordnung enthält Vorschriften zum Schutz natürlicher Personen bei der Verarbeitung personenbezogener Daten und zum freien Verkehr solcher Daten.
	 * (2) Diese Verordnung schützt die Grundrechte und Grundfreiheiten natürlicher Personen und insbesondere deren Recht auf Schutz personenbezogener Daten.
	 * (3) Der freie Verkehr personenbezogener Daten in der Union darf aus Gründen des Schutzes natürlicher Personen bei der Verarbeitung personenbezogener Daten weder eingeschränkt noch verboten werden.
	 *
	 * @see https://dejure.org/gesetze/DSGVO/1.html
	 */

	/**
	 * Art. 2 - Sachlicher Anwendungsbereich
	 * (1) Diese Verordnung gilt für die ganz oder teilweise automatisierte Verarbeitung personenbezogener Daten sowie für die nichtautomatisierte Verarbeitung personenbezogener Daten, die in einem Dateisystem gespeichert sind oder gespeichert werden sollen.
	 *
	 * @see https://dejure.org/gesetze/DSGVO/2.html
	 */

	/**
	 * Art. 3 - Räumlicher Anwendungsbereich
	 * (1) Diese Verordnung findet Anwendung auf die Verarbeitung personenbezogener Daten, soweit diese im Rahmen der Tätigkeiten einer Niederlassung eines Verantwortlichen oder eines Auftragsverarbeiters in der Union erfolgt, unabhängig davon, ob die Verarbeitung in der Union stattfindet.
	 *
	 * @see https://dejure.org/gesetze/DSGVO/3.html
	 */

	/**
	 * Art. 4
	 * Begriffsbestimmungen
	 *
	 * 1.	"personenbezogene Daten" alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person (im Folgenden "betroffene Person") beziehen; als identifizierbar wird eine natürliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren besonderen Merkmalen, die Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder sozialen Identität dieser natürlichen Person sind, identifiziert werden kann;
	 * 	2.	"Verarbeitung" jeden mit oder ohne Hilfe automatisierter Verfahren ausgeführten Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung;
	 * 	3.	"Einschränkung der Verarbeitung" die Markierung gespeicherter personenbezogener Daten mit dem Ziel, ihre künftige Verarbeitung einzuschränken;
	 * 	4.	"Profiling" jede Art der automatisierten Verarbeitung personenbezogener Daten, die darin besteht, dass diese personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte, die sich auf eine natürliche Person beziehen, zu bewerten, insbesondere um Aspekte bezüglich Arbeitsleistung, wirtschaftliche Lage, Gesundheit, persönliche Vorlieben, Interessen, Zuverlässigkeit, Verhalten, Aufenthaltsort oder Ortswechsel dieser natürlichen Person zu analysieren oder vorherzusagen;
	 * 	5.	"Pseudonymisierung" die Verarbeitung personenbezogener Daten in einer Weise, dass die personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr einer spezifischen betroffenen Person zugeordnet werden können, sofern diese zusätzlichen Informationen gesondert aufbewahrt werden und technischen und organisatorischen Maßnahmen unterliegen, die gewährleisten, dass die personenbezogenen Daten nicht einer identifizierten oder identifizierbaren natürlichen Person zugewiesen werden;
	 * 	6.	"Dateisystem" jede strukturierte Sammlung personenbezogener Daten, die nach bestimmten Kriterien zugänglich sind, unabhängig davon, ob diese Sammlung zentral, dezentral oder nach funktionalen oder geografischen Gesichtspunkten geordnet geführt wird;
	 * 	7.	"Verantwortlicher" die natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten entscheidet; sind die Zwecke und Mittel dieser Verarbeitung durch das Unionsrecht oder das Recht der Mitgliedstaaten vorgegeben, so kann der Verantwortliche beziehungsweise können die bestimmten Kriterien seiner Benennung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten vorgesehen werden;
	 * 	8.	"Auftragsverarbeiter" eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet;
	 * 	9.	"Empfänger" eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, der personenbezogene Daten offengelegt werden, unabhängig davon, ob es sich bei ihr um einen Dritten handelt oder nicht. Behörden, die im Rahmen eines bestimmten Untersuchungsauftrags nach dem Unionsrecht oder dem Recht der Mitgliedstaaten möglicherweise personenbezogene Daten erhalten, gelten jedoch nicht als Empfänger; die Verarbeitung dieser Daten durch die genannten Behörden erfolgt im Einklang mit den geltenden Datenschutzvorschriften gemäß den Zwecken der Verarbeitung;
	 * 	10.	"Dritter" eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, außer der betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen, die unter der unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters befugt sind, die personenbezogenen Daten zu verarbeiten;
	 * 	11.	"Einwilligung" der betroffenen Person jede freiwillig für den bestimmten Fall, in informierter Weise und unmissverständlich abgegebene Willensbekundung in Form einer Erklärung oder einer sonstigen eindeutigen bestätigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie mit der Verarbeitung der sie betreffenden personenbezogenen Daten einverstanden ist;- Rechtmäßigkeit, Verarbeitung nach Treu und Glauben, Transparenz
	 *
	 * @see https://dejure.org/gesetze/DSGVO/4.html
	 */

	const PROCESS_REASON_CREATE 	= 'create';
	const PROCESS_REASON_READ 		= 'read';
	const PROCESS_REASON_UPDATE 	= 'update';
	const PROCESS_REASON_DELETE 	= 'delete';
	const PROCESS_REASON_PUBLISH 	= 'publish';
	const PROCESS_REASON_COMBINE 	= 'combine';
	const PROCESS_REASON_ANONYMIZE 	= 'anonymize';
	const PROCESS_REASON_ENCRYPT 	= 'encrypt';


	/**
	 * Art. 5
	 * Grundsätze der Verarbeitung personenbezogener Daten
	 *
	 * - Rechtmäßigkeit, Verarbeitung nach Treu und Glauben, Transparenz
	 * - Zweckbindung (Verarbeitung nur für festgelegte, eindeutige und legitime Zwecke)
	 * - Datenminimierung („dem Zweck angemessen und erheblich sowie auf das […] notwendige Maß beschränkt“)
	 * - Richtigkeit („es sind alle angemessenen Maßnahmen zu treffen, damit [unrichtige] personenbezogene Daten unverzüglich gelöscht oder berichtigt werden“)
	 * - Speicherbegrenzung (Daten müssen „in einer Form gespeichert werden, die die Identifizierung der betroffenen Personen nur so lange ermöglicht, wie es […] erforderlich ist“)
	 * - Integrität und Vertraulichkeit („angemessene Sicherheit der personenbezogenen Daten […], einschließlich Schutz vor unbefugter oder unrechtmäßiger Verarbeitung und vor unbeabsichtigtem Verlust, unbeabsichtigter Zerstörung oder unbeabsichtigter Schädigung“)
	 *
	 * @see https://dejure.org/gesetze/DSGVO/5.html
	 */


	/**
	 * Art. 6 lawful purposes
	 *
	 * (a) If the data subject has given consent to the processing of his or her personal data;
	 * (b) To fulfill contractual obligations with a data subject, or for tasks at the request of a data subject who is in the process of entering into a contract;
	 * (c) To comply with a data controller's legal obligations;
	 * (d) To protect the vital interests of a data subject or another individual;
	 * (e) To perform a task in the public interest or in official authority;
	 * (f) For the legitimate interests of a data controller or a third party, unless these interests are overridden by interests of the data subject or her or his rights according to the Charter of Fundamental Rights (especially in the case of children).
	 *
	 * Art. 6
	 * Rechtmäßigkeit der Verarbeitung
	 * @see https://dejure.org/gesetze/DSGVO/6.html
	 *
	 *
	 */
	const LAWFUL_PURPOSE_CONSENT 						= 'consent';
	const LAWFUL_PURPOSE_CONTRACTUAL_OBLIGATION 		= 'contract';
	const LAWFUL_PURPOSE_LEGAL_OBLIGATION 				= 'legal';
	const LAWFUL_PURPOSE_VITAL_INTEREST_OF_INDIVIDUAL 	= 'vital';
	const LAWFUL_PURPOSE_PUBLIC_INTEREST 				= 'public';
	const LAWFUL_PURPOSE_LEGITIMATE_INTEREST 			= 'interest';

	/**
	 * Art. 9
	 * Verarbeitung besonderer Kategorien personenbezogener Daten
	 *
	 * @see https://dejure.org/gesetze/DSGVO/9.html
	 */
	const DATA_CATEGORY_DEFAULT 	= 'default';
	const DATA_CATEGORY_ETHNICITY 	= 'ethnicity';
	const DATA_CATEGORY_POLITICS 	= 'politics';
	const DATA_CATEGORY_RELIGION 	= 'religion';
	const DATA_CATEGORY_LABOR_UNION = 'laborUnion';
	const DATA_CATEGORY_HEALTH 		= 'health';
	const DATA_CATEGORY_SEXUAL 		= 'sexual';

	/**
	 * Art. 11
	 * Verarbeitung, für die eine Identifizierung der betroffenen Person nicht erforderlich ist
	 *
	 *
	 * @see https://dejure.org/gesetze/DSGVO/11.html
	 */


	///
	///  ENV Keys
	///
	const ENV_KEY_LOG_RETURN 			= 'GDPR_LOG_RETURN'; // Default: false
	const ENV_KEY_LOG_DAILY_DIR			= 'GDPR_LOG_DAILY_DIR'; // Default: true
	const ENV_KEY_DIR_LOGS 				= 'GDPR_DIR_LOGS'; // Default: /var/log/gdpr
	const ENV_KEY_DIR_KEYS 				= 'GDPR_DIR_KEYS'; // Default: /etc/.keys


	///
	///  Key File Naming Elements
	///
	const CRYPTO_KEY_LOCAL 			= 'local';
	const CRYPTO_KEY_AUDITOR 		= 'auditor';
	const CRYPTO_KEY_PRIVATE 		= 'secret'; // aka Shared Secret
	const CRYPTO_KEY_PUBLIC 		= 'public';
	const CRYPTO_KEY_ENCRYPTION 	= 'box';
	const CRYPTO_KEY_SIGNING 		= 'sign';

	///
	///  Data Reboot
	///
	const SERVER_KEY_IP 		= 'REMOTE_ADDR';
	const SERVER_KEY_USER_AGENT = 'HTTP_USER_AGENT';
	const SERVER_KEY_REFERER 	= 'HTTP_REFERER';
	const SERVER_KEY_QUERY 		= 'QUERY_STRING';
	const SERVER_KEY_URI 		= 'REQUEST_URI';

	///
	///  Log File Permissions
	///
	const LOG_DIR_PERMISSION 	= 0700;
	const LOG_FILE_PERMISSION 	= 0600;

	private $keyDir;
	private $logDir;

	///
	/// Setup
	///
	public function __construct( ?string $keyDir=null , ?string $logDir=null)
	{

		if(!empty($keyDir)){
			$this->keyDir = $keyDir;
			self::setEnv( self::ENV_KEY_DIR_KEYS , $this->keyDir);
		}elseif(!empty( self::getEnv( self::ENV_KEY_DIR_KEYS ) ) ){
			$this->keyDir = self::getEnv( self::ENV_KEY_DIR_KEYS );
		}else{
			$this->keyDir = dirname(__DIR__ ) .  DIRECTORY_SEPARATOR . 'etc' .  DIRECTORY_SEPARATOR . '.keys' ;
			self::setEnv( self::ENV_KEY_DIR_KEYS , $this->keyDir);
		}

		if(!empty($logDir)){
			$this->logDir = $logDir;
			self::setEnv( self::ENV_KEY_DIR_LOGS , $this->logDir);
		}elseif(!empty( self::getEnv( self::ENV_KEY_DIR_LOGS ) ) ){
			$this->logDir = self::getEnv( self::ENV_KEY_DIR_LOGS );
		}else{
			$this->logDir = dirname(__DIR__ ) .  DIRECTORY_SEPARATOR . 'var' .  DIRECTORY_SEPARATOR . 'log' ;
			self::setEnv( self::ENV_KEY_DIR_LOGS , $this->logDir);
		}

	}


	///
	/// Verify
	///
	/**
	 * Check prerequisites and problems
	 *
	 * @param boolean $die should this function die instantly if it finds an error?
	 *
	 * @return array $log
	 */
	public function verify( $die = false )
	{

		$log = [];

		// check KEYS DIR
		$keyDir = self::getEnv(self::ENV_KEY_DIR_KEYS);

		if (empty($keyDir)) {

			$log['NO KEY DIR IN ENV'] = 'info';

		} else {

			if (!is_dir($keyDir)) {

				$log['KEY DIR IS NOT DIRECTORY'] = 'error';

			}

			if (is_writeable($keyDir)) {

				$log['KEY DIR IS WRITEABLE'] = 'warning';

			}

			// check for key files

			// encrypt local box
			if (!file_exists($this->getKeyFile( self::CRYPTO_KEY_LOCAL, self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_ENCRYPTION))) {

				$log['LOCAL PRIVATE BOX KEY IS MISSING'] = 'error';

			}

			if (!file_exists($this->getKeyFile(self::CRYPTO_KEY_LOCAL, self::CRYPTO_KEY_PUBLIC, self::CRYPTO_KEY_ENCRYPTION))) {

				$log['LOCAL PUBLIC BOX KEY IS MISSING'] = 'error';

			}

			// sign local
			if (!file_exists(self::getKeyFile(self::CRYPTO_KEY_LOCAL, self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_SIGNING))) {

				$log['LOCAL PRIVATE SIGN KEY IS MISSING'] = 'error';

			}

			if (!file_exists(self::getKeyFile(self::CRYPTO_KEY_LOCAL, self::CRYPTO_KEY_PUBLIC, self::CRYPTO_KEY_SIGNING))) {

				$log['LOCAL PUBLIC SIGN KEY IS MISSING'] = 'error';

			}

			// encrypt auditor box THIS FILE MUST NOT BE ON THIS SYSTEM
			if (file_exists(self::getKeyFile(self::CRYPTO_KEY_AUDITOR, self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_ENCRYPTION))) {
				$log['SECURITY ISSUE: AUDITOR PRIVATE BOX KEY IS ON LOCAL SYSTEM'] = 'error';
			}

			if (!file_exists(self::getKeyFile(self::CRYPTO_KEY_AUDITOR, self::CRYPTO_KEY_PUBLIC, self::CRYPTO_KEY_ENCRYPTION))) {

				$log['AUDITOR PUBLIC BOX KEY IS MISSING'] = 'error';
			}

		}


		// check LOGS DIR
		$logDir = self::getEnv(self::ENV_KEY_DIR_LOGS);

		if (empty($logDir)) {
			$log['NO LOGS DIR IN ENV'] = 'info';
		} else {

			if (!is_writeable($logDir)) {

				$log['LOG DIR IS NOT WRITEABLE'] = 'error';

			}

		}

		// TODO: Handle getallheaders / apache_request_headers
		/*
		$has_apache_request_headers = self::checkCriticalFunctionExists('apache_request_headers');
		if($has_apache_request_headers){
			$log['apache_request_headers is on system'] = 'info';
		}
		*/

		if ($die and !empty($log)) {
			var_dump($log);
			die('PLEASE FIX ISSUES');
		}

		return $log;
	}


	///
	/// Wipe
	///

	public static function wipeIp( ?string $index=null ){

		if(!$index){

			// Handle  REMOTE_ADDR
			self::setServerVar( self::SERVER_KEY_IP , '0.0.0.0' );

		}else{

			// Handle FORWARDED and REDIRECTED REMOTE_ADDR
			self::setServerVar( $index , '0.0.0.0' );

		}

	}

	public static function wipeUserAgent(){

		self::setServerVar( self::SERVER_KEY_USER_AGENT , '' );

	}

	public static function wipeReferrer(){

		self::setServerVar( self::SERVER_KEY_REFERER , '' );

	}

	public static function wipeQueryString(){

		self::setServerVar( self::SERVER_KEY_QUERY , '' );
		self::setServerVar( self::SERVER_KEY_URI , strtok(self::getServerVar(self::SERVER_KEY_URI ),'?') );

		foreach($_GET as $key=>$val){
			unset($_REQUEST[$key]);
		}
		$_GET = [];

	}

	public static function wipeCookies(){


		if (isset($_SERVER['HTTP_COOKIE'])) {
			$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie) {
				$parts = explode('=', $cookie);
				$name = trim($parts[0]);
				setcookie($name, '', time()-1000);
				setcookie($name, '', time()-1000, '/');
			}
		}

		$_COOKIE = [];
		$_SERVER['HTTP_COOKIE'] = '';
	}

	///
	/// Anonymize
	///

	/**
	 * Get Anon IP
	 *
	 * @param array $options ip - Override IP from REMOTE_ADDR,
	 * 						v4 Number of Octets to anonymize
	 *						v6 Number of Octets to anonymize
	 *
	 * @return string Anon IP
	 */
	public function getAnonIp( array $options=[] ):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_IP;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		return $this->get( $index , 'setAnonIp' , $options);

	}

	/**
	 * Set Anon IP
	 *
	 * @param array $options ip Override IP from REMOTE_ADDR,
	 * 						v4 Number of Octets to anonymize
	 * 						v6 Number of Octets to anonymize
	 *
	 * @return bool Anon IP
	 */
	public function setAnonIp( array $options=[] ):bool{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_IP;
		}else{
			$index = $options['index'];
		}

		// get ip
		if(empty($options['rawIp'])){
			$ip = self::getServerVar( $index );
		}else{
			$ip = $options['rawIp'];
		}

		// get v4
		if(empty($options['v4'])){
			$v4 = 1;
		}else{
			$v4 = $options['v4'];
		}

		// get v6
		if(empty($options['v6'])){
			$v6 = 4;
		}else{
			$v6 = $options['v6'];
		}

		// shall we encrypt the raw data?
		if(empty($options['doEncrypt'])){
			$doEncrypt = false;
		}else{
			$doEncrypt = true;
		}

		// check if already set
		if( empty( self::getServerVar( self::getGdprAnonCheck( $index )))) {

			$anonIp = self::anonymizeIP( $ip , $v4 , $v6);

			// log and Store
			$this->logAnonymizeAndStore( $index , $ip , $anonIp , __CLASS__.'->'.__FUNCTION__ );

			// encrypt and Store for later logged RAW Access
			if($doEncrypt){
				$this->encryptLogAndStore( $index , $ip , __CLASS__.'->'.__FUNCTION__ );
			}

		}

		return true;

	}

	/**
	 * Get RAW IP
	 *
	 * @param string $lawful_purpose
	 * @param string $data_category
	 * @param string $process_reason
	 * @param string $accessor
	 * @param array $options
	 *
	 * @return string RAW IP
	 */
	public function getRawIp(string $lawful_purpose,string $data_category ,string $process_reason, string  $accessor ,array $options=[]):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_IP;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$this->getAnonIp( $options );

		// get and log pii Access
		$pii = $this->getEncryptedServerVar( $index ,
			$lawful_purpose, $data_category , $process_reason,
			$accessor );

		return $pii;

	}



	/*
	 * Get Anon UserAgent
	 *
	 * @param array $options Override IP from REMOTE_ADDR
	 *
	 * @return string Anon UserAgent
 	*/
	public function getAnonUserAgent( array $options=[] ):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_USER_AGENT;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		return $this->get( $index , 'setAnonUserAgent' , $options);

	}

	/*
	 * Set Anon UserAgent
	 *
	 * @param array $options Override IP from REMOTE_ADDR
	 *
	 * @return Anon UserAgent
 	*/
	public function setAnonUserAgent( array $options=[] ):bool{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_USER_AGENT;
		}else{
			$index = $options['index'];
		}

		// get ua
		if(empty($options['rawUserAgent'])){
			$rawUserAgent = self::getServerVar( $index );
		}else{
			$rawUserAgent = $options['rawUserAgent'];
		}


		// shall we encrypt the raw data?
		if(empty($options['doEncrypt'])){
			$doEncrypt = false;
		}else{
			$doEncrypt = true;
		}

		// anonymize
		$anonUserAgent = self::anonymizeUserAgent( $rawUserAgent , $options);

		// log and Store
		$this->logAnonymizeAndStore( $index , $rawUserAgent , $anonUserAgent , __CLASS__.'->'.__FUNCTION__);

		// encrypt and Store for later logged RAW Access
		if($doEncrypt) {
			$this->encryptLogAndStore($index, $rawUserAgent, __CLASS__ . '->' . __FUNCTION__);
		}

		return true;

	}

	/**
	 * Get RAW IP
	 *
	 * @param string $lawful_purpose
	 * @param string $data_category
	 * @param string $process_reason
	 * @param string $accessor
	 *
	 * @return string RAW IP
	 */
	public function getRawUserAgent(string $lawful_purpose,string $data_category ,string $process_reason, string  $accessor ,array $options=[]):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_USER_AGENT;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$this->getAnonUserAgent( $options );

		// get and log pii Access
		$pii = $this->getEncryptedServerVar( $index ,
			$lawful_purpose, $data_category , $process_reason,
			$accessor );

		return $pii;

	}



	public function getAnonReferrer( array $options=[] ):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_REFERER;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$options['filter'] = FILTER_SANITIZE_URL;

		$url = $this->get( $index , 'setAnonReferrer' , $options);
		#var_dump($url);
		return $url;



	}

	public function setAnonReferrer( array $options=[] ):bool{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_REFERER;
		}else{
			$index = $options['index'];
		}

		// get Referer
		if(empty($options['rawReferrer'])){
			$options['filter'] = FILTER_SANITIZE_URL;
			$rawReferrer = self::getServerVar( $index , $options);
		}else{
			$rawReferrer = $options['rawReferrer'];
		}

		// get whitelist for referer hosts
		if(empty($options['whitelist'])){
			$whitelist = [];
		}else{
			$whitelist = $options['whitelist'];
		}

		// shall we encrypt the raw data?
		if(empty($options['doEncrypt'])){
			$doEncrypt = false;
		}else{
			$doEncrypt = true;
		}

		// anonymize
		$anonReferrer = self::anonymizeReferrer( $rawReferrer , $whitelist);

		// log and Store
		$this->logAnonymizeAndStore( $index , $rawReferrer , $anonReferrer , __CLASS__.'->'.__FUNCTION__);

		// encrypt and Store for later logged RAW Access
		if($doEncrypt) {
			$this->encryptLogAndStore($index, $rawReferrer, __CLASS__ . '->' . __FUNCTION__);
		}

		return true;

	}

	/**
	 * Get RAW IP
	 *
	 * @param string $lawful_purpose
	 * @param string $data_category
	 * @param string $process_reason
	 * @param string $accessor
	 *
	 * @return string RAW IP
	 */
	public function getRawReferrer(string $lawful_purpose,string $data_category ,string $process_reason, string  $accessor ,array $options=[]):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_REFERER;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$this->getAnonReferrer( $options );

		// get and log pii Access
		$pii = $this->getEncryptedServerVar( $index ,
			$lawful_purpose, $data_category , $process_reason,
			$accessor );

		return $pii;

	}



	public function getAnonQueryString( array $options=[] ):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_QUERY;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$options['filter'] = FILTER_SANITIZE_URL;
		$qs =  $this->get( $index , 'setAnonQueryString' , $options);

		return $qs;
	}

	public function setAnonQueryString( array $options=[] ):bool{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_QUERY;
		}else{
			$index = $options['index'];
		}

		// get Referer
		if(empty($options['rawQueryString'])){
			$options['filter'] = FILTER_SANITIZE_URL;
			$rawQueryString = self::getServerVar( $index , $options);
		}else{
			$rawQueryString = $options['rawQueryString'];
		}

		// get whitelist for query keys
		if(empty($options['whitelist'])){
			$whitelist = [];
		}else{
			$whitelist = $options['whitelist'];
		}

		// shall we encrypt the raw data?
		if(empty($options['doEncrypt'])){
			$doEncrypt = false;
		}else{
			$doEncrypt = true;
		}



		// anonymize
		$anonQueryString = self::anonymizeQueryString( $rawQueryString , $whitelist);

		if(empty($whitelist)){

			foreach($_GET as $key=>$val){
				if(isset($_REQUEST[$key])) unset($_REQUEST[$key]);
			}
			$_GET = [];

		}else{

			parse_str($anonQueryString,$anonQuery);

			foreach($_GET as $key=>$val){

				if(!in_array($key,array_keys($anonQuery))){
					if(isset($_REQUEST[$key])) unset($_REQUEST[$key]);
				}

			}

			$_GET = $anonQuery;

		}

		// log and Store
		$this->logAnonymizeAndStore( $index , $rawQueryString , $anonQueryString , __CLASS__.'->'.__FUNCTION__);

		// encrypt and Store for later logged RAW Access
		if ($doEncrypt){
			$this->encryptLogAndStore( $index , $rawQueryString , __CLASS__.'->'.__FUNCTION__);
		}

		return true;

	}

	/**
	 * Get RAW IP
	 *
	 * @param string $lawful_purpose
	 * @param string $data_category
	 * @param string $process_reason
	 * @param string $accessor
	 *
	 * @return string RAW IP
	 */
	public function getRawQueryString( string $lawful_purpose,string $data_category ,string $process_reason, string  $accessor ,array $options=[]):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_QUERY;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$this->getAnonQueryString( $options );

		// get and log pii Access
		$pii = $this->getEncryptedServerVar( $index ,
			$lawful_purpose, $data_category , $process_reason,
			$accessor );

		return $pii;

	}



	public function getAnonRequestUri(array $options=[] ){

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_URI;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$options['filter'] = FILTER_SANITIZE_URL;
		$uri =  $this->get( $index , 'setAnonRequestUri' , $options);

		return $uri;


	}

	public function setAnonRequestUri( array $options=[] ):bool{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_URI;
		}else{
			$index = $options['index'];
		}

		// get Referer
		if(empty($options['rawRequestUri'])){
			$options['filter'] = FILTER_SANITIZE_URL;
			$rawRequestUri = self::getServerVar( $index , $options);
		}else{
			$rawRequestUri = $options['rawRequestUri'];
		}

		// get whitelist for query keys
		if(empty($options['whitelist'])){
			$whitelist = [];
		}else{
			$whitelist = $options['whitelist'];
		}

		// shall we encrypt the raw data?
		if(empty($options['doEncrypt'])){
			$doEncrypt = false;
		}else{
			$doEncrypt = true;
		}


		// anonymize
		$anonRequestUri = self::anonymizeRequestUri( $rawRequestUri , $whitelist);



		// log and Store
		$this->logAnonymizeAndStore( $index , $rawRequestUri , $anonRequestUri , __CLASS__.'->'.__FUNCTION__);

		// encrypt and Store for later logged RAW Access
		if ($doEncrypt){
			$this->encryptLogAndStore( $index , $rawRequestUri , __CLASS__.'->'.__FUNCTION__);
		}

		return true;

	}

	/**
	 * Get RAW IP
	 *
	 * @param string $lawful_purpose
	 * @param string $data_category
	 * @param string $process_reason
	 * @param string $accessor
	 *
	 * @return string RAW IP
	 */
	public function getRawRequestUri( string $lawful_purpose,string $data_category ,string $process_reason, string  $accessor ,array $options=[]):string{

		// get server key
		if(empty($options['index'])){
			$index = self::SERVER_KEY_URI;
			$options['index'] = $index;
		}else{
			$index = trim($options['index']);
		}

		$this->getAnonRequestUri( $options );

		// get and log pii Access
		$pii = $this->getEncryptedServerVar( $index ,
			$lawful_purpose, $data_category , $process_reason,
			$accessor );

		return $pii;

	}


	public function getAnonDocumentLocationUrl(array $options=[] ){

		$url = 'http';
		if (!empty($_SERVER["HTTPS"])) {
			$url .= "s";
		}
		$url .= "://" . $_SERVER["SERVER_NAME"];
		if ($_SERVER["SERVER_PORT"] != "80") {
			$url .= ":".$_SERVER["SERVER_PORT"];
		}
		$url .= self::getAnonRequestUri( $options );

		return $url;

	}

	///
	/// Anonymize Helper
	///
	private function get(string $index ,string $setter ,array $options):string{

		// check if anonymized
		$checkServerKey = self::getGdprAnonCheck( $index );

		if(empty( self::getServerVar( $checkServerKey , $options) ) ){

			$this->$setter( $options );

		}

		// access to anon data will not be logged
		return self::getServerVar( $index , $options);

	}

	private function logAnonymizeAndStore(string $index ,string $pii ,string $anon ,string $accessor ){


		// log Processing
		$this->logSealed(
			self::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
			self::DATA_CATEGORY_DEFAULT,
			self::PROCESS_REASON_ANONYMIZE,
			$accessor ,
			$pii , // pii
			$anon // result
		);

		self::setServerVar( $index, $anon );

		// store check
		self::setServerVar( self::getGdprAnonCheck( $index ), true );

	}

	private function encryptLogAndStore(string $index ,string $pii ,string $accessor ){

		// encrypt and store
		try {

			$enc = $this->encryptShared($pii);
			self::setServerVar( self::getGdprIndex( $index ), $enc );


			// log Processing
			$this->logSealed(
				self::LAWFUL_PURPOSE_LEGAL_OBLIGATION,
				self::DATA_CATEGORY_DEFAULT,
				self::PROCESS_REASON_ENCRYPT,
				$accessor ,
				$pii , // pii
				$enc // result
			);

			// store check
			self::setServerVar( self::getGdprEncCheck( $index ), true );

		} catch (Exception $e) {
			return $e->getMessage();
		}

		return true;
	}





	///
	/// Anonymize
	///

	private static function anonymizeIP(string $ip ,int $v4 ,int $v6):string{


		// anonymize
		// based on https://github.com/geertw/php-ip-anonymizer
		$packedAddress = inet_pton($ip);
		if (4 == strlen($packedAddress) ) {
			switch ($v4){
				case 4:
					$ipv4NetMask = "0.0.0.0";
					break;
				case 3:
					$ipv4NetMask = "255.0.0.0";
					break;
				case 2:
					$ipv4NetMask = "255.255.0.0";
					break;
				case 1:
				default:
					$ipv4NetMask = "255.255.255.0";
					break;
			}

			$anonIp = inet_ntop(inet_pton($ip) & inet_pton($ipv4NetMask));

		} elseif ( 16 == strlen($packedAddress) ) {
			switch ($v6){
				case 1:
					$ipv6NetMask = "ffff:ffff:ffff:ffff:ffff:ffff:ffff:0000";
					break;
				case 2:
					$ipv6NetMask = "ffff:ffff:ffff:ffff:ffff:ffff:0000:0000";
					break;
				case 3:
					$ipv6NetMask = "ffff:ffff:ffff:ffff:ffff:0000:0000:0000";
					break;
				case 5:
					$ipv6NetMask = "ffff:ffff:ffff:0000:0000:0000:0000:0000";
					break;
				case 6:
					$ipv6NetMask = "ffff:ffff:0000:0000:0000:0000:0000:0000";
					break;
				case 7:
					$ipv6NetMask = "ffff:00000:0000:0000:0000:0000:0000:0000";
					break;
				case 8:
					$ipv6NetMask = "0000:0000:0000:0000:0000:0000:0000:0000";
					break;
				case 4:
				default:
					$ipv6NetMask = "ffff:ffff:ffff:ffff:0000:0000:0000:0000";
					break;
			}
			$anonIp = inet_ntop(inet_pton($ip) & inet_pton($ipv6NetMask));

		} else {

			$anonIp = "";

		}

		return $anonIp;
	}

	private static function anonymizeUserAgent(string $rawUserAgent ,array $options):string{

		// Bot Matching
		if(empty( $options['anonymizeBots'])){

			$botMatcher = [
				'bot',
				'+http',
				'-Google',
				'Favicon',
			];

			foreach($botMatcher as $item){
				if( stripos( $rawUserAgent , $item) !== false ){

					return $rawUserAgent;
				}
			}

		}

		// @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent
		// User-Agent: <product> / <product-version> <comment>
		// User-Agent: Mozilla/<version> (<system-information>) <platform> (<platform-details>) <extensions>

		// @see https://tools.ietf.org/html/rfc7231#section-5.5.3
		// @see https://tools.ietf.org/html/rfc2616#section-14.43



		// remove subversions
		$regex = '$(\d?\.)\d?\.*\d*$';
		$rawWithoutSubversions = trim(preg_replace( $regex, '${1}0', $rawUserAgent ));
		#var_dump($rawWithoutSubversions);

		// product
		$info = self::getStringBeforeOneOfTokens( $rawWithoutSubversions , ['/',' '], '\w');
		if(is_string($info)){
			return $rawWithoutSubversions;
		}elseif(empty($info['str'])){
			return $rawWithoutSubversions;
		}

		$product = $info['str'];





		// productVersion
		$info = self::getStringBeforeOneOfTokens( $info['rest'] , ['('],'\d\.\d');
		if(is_string($info)){
			return $rawWithoutSubversions;
		}elseif(empty($info['str'])){
			return $rawWithoutSubversions;
		}
		$productVersion = $info['str'];

		// systemInformation
		// TODO: handle nested Brackets
		$info = self::getStringBeforeOneOfTokens( $info['rest'] , [')'],'.*');
		if(is_string($info)){
			return $rawWithoutSubversions;
		}elseif(empty($info['str'])){
			return $rawWithoutSubversions;
		}
		$systemInformation = $info['str'];
		$anonSystemInformation = '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'compatible') ) ? 'compatible; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Macintosh') ) ? 'Macintosh; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'iPhone') ) ? 'iPhone; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'iPad') ) ? 'iPad; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'iPod') ) ? 'iPod; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Windows') ) ? 'Windows; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Android') ) ? 'Android; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Mobile') ) ? 'Mobile; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Tablet') ) ? 'Tablet; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'TV') ) ? 'TV; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'X11') ) ? 'X11; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Linux') ) ? 'Linux; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'MSIE') ) ? 'MSIE; ' : '';
		$anonSystemInformation .= ( false !== mb_stripos($systemInformation,'Mac OS X') ) ? 'Mac OS X' : '';
		if(empty($anonSystemInformation)) $anonSystemInformation = $systemInformation;

		// platform
		$info = self::getStringBeforeOneOfTokens( $info['rest'] , ['(',' '],'.*');
		if(is_string($info)){
			return $rawWithoutSubversions;
		}elseif(empty($info['str'])){
			return $rawWithoutSubversions;
		}
		$platform = $info['str'];

		$anonPlatformDetails = '';
		$anonPlatformDetails .= ( false !== mb_stripos($platform,'AppleWebKit') ) ? 'AppleWebKit/0' : '';
		$anonPlatformDetails .= ( false !== mb_stripos($platform,'Gecko') ) ? 'Gecko/0' : '';
		$anonPlatformDetails .= ( false !== mb_stripos($platform,'Presto') ) ? 'Presto/0' : '';
		$anonPlatformDetails .= ( false !== mb_stripos($platform,'Trident') ) ? 'Trident/0' : '';
		$anonPlatformDetails .= ( false !== mb_stripos($platform,'Presto') ) ? 'Presto/0' : '';

		// Extensions
		$extensions = $info['rest'];
		$anonExtensions = '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'Chrome') ) ? 'Chrome/0 ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'Mobile') ) ? 'Mobile ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'Safari') ) ? 'Safari/0 ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'Edge') ) ? 'Edge/0 ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'Gecko') ) ? 'Gecko ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'Firefox') ) ? 'Firefox/0 ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'SeaMonkey') ) ? 'SeaMonkey/0 ' : '';
		$anonExtensions .= ( false !== mb_stripos($extensions,'OPR') ) ? 'OPR/0 ' : '';


		$anonUserAgent = trim($product);
		$anonUserAgent .= '/'.trim($productVersion);
		if(!empty($anonSystemInformation)) $anonUserAgent .= ' ('.trim($anonSystemInformation).')';
		if(!empty($anonPlatformDetails)) $anonUserAgent .= ' '.trim($anonPlatformDetails);
		if(!empty($anonExtensions)) $anonUserAgent .= ' '.trim($anonExtensions);


		return trim($anonUserAgent);
	}

	private static function anonymizeReferrer(string $rawReferrer ,array $whitelist=[] ):string{

		if(empty($rawReferrer)){
			return '';
		}

		$parts = parse_url($rawReferrer);

		$anonReferrer = $parts['scheme'] . '://' . $parts['host'] .  (empty($parts['port'])?'':':'.$parts['port']);

		if( in_array( $parts['host'] , $whitelist )){

			#var_dump($parts);
			#var_dump(str_replace('&amp;','&',$parts['query']));
			$anonReferrer .=  $parts['path'] . ( empty( $parts['query'] ) ? '' : '?' . $parts['query'] );

		}

		return $anonReferrer;

	}

	private static function anonymizeQueryString(string $rawQueryString,array $whitelist=[] ):string{

		if(empty($whitelist)){

			return '';

		}else{

			$anonQuery = [];
			parse_str($rawQueryString,$query);

			foreach($query as $key=>$val){

				if(in_array($key,array_values($whitelist))){
					$anonQuery[$key] = $val;
				}
			}

			$anonQueryString = http_build_query($anonQuery);

			if(empty($anonQueryString)){

				return '';

			}else{

				return $anonQueryString;

			}

		}
	}

	private static function anonymizeRequestUri(string $rawRequestUri,array $whitelist=[] ):string{

		$parts = parse_url($rawRequestUri);

		$anonRequestUri =  $parts['path'];

		if(empty($parts['query'])){

			return $anonRequestUri;

		}else{

			$anonQueryString = self::anonymizeQueryString( $parts['query'] , $whitelist );

			if(empty($anonQueryString)){
				return $anonRequestUri;
			}else{
				return $anonRequestUri . '?'. $anonQueryString ;

			}


		}

	}


	///
	///  Helper
	///
	private static function getStringBeforeOneOfTokens( $string , $tokens , $regex){

		foreach ($tokens as $token) {

			$pos = mb_strpos( $string , $token );
			if(false !== $pos){
				$positions[] = $pos;
			}
		}

		if(empty($positions)){
			return $string;
		}

		sort($positions);
		$pos = current($positions);

		$str = trim(substr($string,0 , $pos));
		if(preg_match("|$regex|",$str)){
			return [
				'pos' => $pos,
				'str' => $str,
				'rest' => trim( substr($string, $pos +1 ) ),
			];
		}

		return [
			'pos' => $pos,
			'str' => '',
			'rest' => $string,

		];

	}




	///
	///  $_ENV
	///

	protected static function getEnv(string $index ){

		return getenv( $index , true );

	}

	private static function setEnv(string $index ,string $value ){

		putenv("$index=$value");
		return getenv(  );

	}


	///
	///  $_SERVER
	///

	/**
	 * Get Decrypted Server Var
	 *
	 * @param string $index Index of Unencrypted _SERVER Var
	 *
	 * @return string $pii
	 */
	private function getEncryptedServerVar(string $index ,string $lawful_purpose,string $data_category ,string $process_reason ,string  $accessor ,array $options=[]){

		$gdprIndex = self::getGdprIndex( $index );
		$enc = self::getServerVar( $gdprIndex , $options);

		try {

			$pii = $this->decryptShared( $enc );
			// log Processing
			$this->logSealed(
				$lawful_purpose,
				$data_category ,
				$process_reason ,
				$accessor ,
				$pii ,
				null
			);

			return $pii;

		}catch( Exception $e ){

			return false;

		}

	}

	/**
	 * @param string $index
	 * @return string
	 */
	private static function getServerVar( string $index , array $options=[]):string{

		if (empty($_SERVER[$index])){

			return '';

		}else{

			if(empty($options['filter'])){

				return filter_var( $_SERVER[$index] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); //); FILTER_SANITIZE_STRING | FILTER_SANITIZE_FULL_SPECIAL_CHARS

			}else{

				return filter_var( $_SERVER[$index] , $options['filter']); //); FILTER_SANITIZE_STRING | FILTER_SANITIZE_FULL_SPECIAL_CHARS

			}

		}

	}

	/**
	 * @param string $index
	 * @param string $value
	 * @return array
	 */
	private static function setServerVar(string $index , string $value ):array{

		$_SERVER[$index] = $value;

		return $_SERVER;

	}

	///
	///  GDPR INDEX KEYS
	///

	/**
	 * @param string $index
	 * @return string
	 */
	private static function getGdprIndex(string $index ):string{
		return 'GDPR_'. strtoupper($index);
	}

	/**
	 * @param string $index
	 * @return string
	 */
	private static function getGdprAnonCheck(string $index ):string{
		return self::getGdprIndex($index) . '_ANONYMIZED';
	}

	/**
	 * @param string $index
	 * @return string
	 */
	private static function getGdprEncCheck(string $index ):string{
		return self::getGdprIndex($index) . '_ENCRYPTED';
	}

	///
	/// Encryption with Shared Secret
	///


	/**
	 * Encrypt Shared
	 *
	 * @param string $pii pii
	 *
	 * @throws RangeException if
	 * @throws Exception if
	 * @return string Cipher
	 *
	 */
	public function	encryptShared(string $pii ):string{

		$key 		= $this->getKey(self::CRYPTO_KEY_LOCAL,self::CRYPTO_KEY_PRIVATE,self::CRYPTO_KEY_ENCRYPTION);
		#if (SODIUM_CRYPTO_SECRETBOX_KEYBYTES !== mb_strlen($key, '8bit') ) {
		#	throw new RangeException('Key is not the correct size (must be 32 bytes).');
		#}
		$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

		$cipher = base64_encode(
			$nonce.
			sodium_crypto_secretbox(
				$pii,
				$nonce,
				$key
			)
		);
		sodium_memzero($pii);
		sodium_memzero($key);

		return $cipher;

	}

	/**
	 * Decrypt Shared
	 *
	 * @param string $encrypted
	 *
	 * @throws Exception
	 * @return string Plain
	 *
	 */
	public function	decryptShared(string $encrypted ):string{

		$key 		= $this->getKey(self::CRYPTO_KEY_LOCAL,self::CRYPTO_KEY_PRIVATE,self::CRYPTO_KEY_ENCRYPTION);
		$decoded 	= base64_decode($encrypted);

		$nonce 		= mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
		$cipherText = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

		$plain = sodium_crypto_secretbox_open(
			$cipherText,
			$nonce,
			$key
		);
		if (!is_string($plain)) {
			throw new Exception('Invalid MAC');
		}
		sodium_memzero($cipherText);
		sodium_memzero($key);

		return $plain;

	}


	///
	///  Sealed Logging
	///

	/**
	 * Log Sealed
	 *
	 * @param string $lawful_purpose
	 * @param string $data_category
	 * @param string $process_reason
	 * @param string $accessor
	 * @param string $pii
	 * @param boolean $return
	 * @param string|null $result
	 * @param string|null $publisher
	 *
	 * @return string Log Line
	 *
	 */
	public function logSealed(string $lawful_purpose,string $data_category ,string $process_reason ,string  $accessor ,string $pii ,?string $result ,bool $return=false,?string $publisher=null ):?string{

		$entry = [
			'utc' 		=> gmdate( 'c' ),
			'law' 		=> $lawful_purpose,
			'cat' 		=> $data_category,
			'pro' 		=> $process_reason,
			'accessor' 	=> $accessor,
			'pii' 		=> $pii,
			'result' 	=> $result,
			'publisher' => $publisher,
		];


		$signKey = $this->getKey(self::CRYPTO_KEY_LOCAL,self::CRYPTO_KEY_PRIVATE,self::CRYPTO_KEY_SIGNING);
		if(empty($signKey)){
			die('no sign key');
			//return null;
		}

		#if (mb_strlen($signKey, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
		#	throw new RangeException('Sign Key is not the correct size (must be 32 bytes). ' . mb_strlen($signKey, '8bit'));
		#	return false;
		#}

		$encKey = $this->getKey(self::CRYPTO_KEY_AUDITOR,self::CRYPTO_KEY_PUBLIC,self::CRYPTO_KEY_ENCRYPTION);
		if(empty($encKey)){
			die('no enc key');
			//return null;
		}

		$message = json_encode($entry);
		$signed = sodium_crypto_sign( $message,  $signKey );
		$sealed = sodium_crypto_box_seal( $signed, $encKey );
		$line = sodium_bin2base64( $sealed, SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING ) ."\n";

		if(!$return){
			//create date and access type based logfiles for cyclic deletion
			$logfile = $this->getLogfile( $process_reason );

			file_put_contents( $logfile, $line, FILE_APPEND | LOCK_EX);
			return true;

		}else{

			return $line;

		}


	}

	/**
	 * Check Sealed Log
	 *
	 * @param string $access_reason
	 * @param bool $isLocal
	 *
	 * @return string Log Line
	 *
	 */
	public function checkSealedLog(string $access_reason ,bool $isLocal=false):string{

		if($this->getKey( self::CRYPTO_KEY_AUDITOR , self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_ENCRYPTION ) and !$isLocal){
			die('Secret Key of Auditor is on this machine! This should never happen in production! Comment this line for local development ');
		}

		$logfile = $this->getLogfile( $access_reason );

		$log = trim(file_get_contents($logfile));
		$log_entries = explode("\n",$log);

		$b64message = array_pop($log_entries);

		$message = sodium_base642bin( $b64message, SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING );

		$unsealed = sodium_crypto_box_seal_open($message, $this->getKeyPair( self::CRYPTO_KEY_AUDITOR , self::CRYPTO_KEY_ENCRYPTION ));

		$verified = sodium_crypto_sign_open(
			$unsealed,
			$this->getKey(self::CRYPTO_KEY_LOCAL,self::CRYPTO_KEY_PUBLIC,self::CRYPTO_KEY_SIGNING)
		);

		return json_decode($verified , JSON_PRETTY_PRINT);
	}

	/**
	 * Get Log File
	 *
	 * @param string $access_reason
	 * @param bool $isDynamic static or dynamic filename
	 *
	 * @return string $file File Name
	 *
	 */
	protected function getLogfile( string $access_reason, bool $isDynamic=true ):string{

		if ($isDynamic){
			$logDir = $this->logDir . DIRECTORY_SEPARATOR . gmdate('Y-m-d');
			if (!file_exists($logDir)){
				mkdir($logDir,self::LOG_DIR_PERMISSION);
			}
			$logFile = $logDir . DIRECTORY_SEPARATOR . gmdate('Y-m-d.') . $access_reason . '.enc.log';

		}else{
			$logDir = $this->logDir;
			$logFile = $logDir . DIRECTORY_SEPARATOR .  $access_reason . '.enc.log';
		}

		if(!file_exists($logFile)){

			if(!file_exists(dirname($logFile))) mkdir( dirname($logFile) , self::LOG_FILE_PERMISSION );

			touch( $logFile );
		}

		return $logFile;

	}

	/**
	 * Delete Log Files
	 *
	 */
	protected function deleteLogs( $ttl ){

	}

	///
	///  Keys
	///

	/**
	 * Get Key Pair
	 *
	 * @param string $src local or auditor
	 * @param string $type box or sign
	 *
	 * @return string Key pair
	 *
	 */
	protected function getKeyPair(string $src ,string $type ){

		return sodium_crypto_box_keypair_from_secretkey_and_publickey(
			$this->getKey($src ,  self::CRYPTO_KEY_PRIVATE , $type),
			$this->getKey($src ,  self::CRYPTO_KEY_PUBLIC , $type)
		);

	}

	/**
	 * Has Key
	 *
	 * @param string $src local or auditor
	 * @param string $visibility private or public
	 * @param string $type box or sign
	 *
	 * @return string $file File Name
	 *
	 */
	public function hasKey(string $src , string $visibility ,string $type ):bool{

		if( !file_exists( $this->getKeyFile( $src ,  $visibility , $type ) ) ){

			return false;

		}

		return true;

	}


	/**
	 * Get Key
	 *
	 * @param string $src local or auditor
	 * @param string $visibility private or public
	 * @param string $type box or sign
	 *
	 * @return string $file File Name
	 *
	 */
	protected function getKey(string $src , string $visibility ,string $type ):?string{

		if( !file_exists( $this->getKeyFile( $src ,  $visibility , $type ) ) ){
			var_dump($this->getKeyFile( $src ,  $visibility , $type ));
			return null;
		}

		return sodium_hex2bin( file_get_contents( $this->getKeyFile( $src ,  $visibility , $type ) ) );

	}

	/**
	 * Set Key
	 *
	 * @param string $src local or auditor
	 * @param string $visibility private or public
	 * @param string $type box or sign
	 * @param string $key box or sign
	 *
	 */
	private function setKey( $src ,  $visibility , $type , $key ){

		// do not overwrite keys!
		if(!file_exists( $this->getKeyFile( $src ,  $visibility , $type ) )){
			file_put_contents( $this->getKeyFile( $src ,  $visibility , $type ) , sodium_bin2hex( $key ) );
		}
		sodium_memzero($key);

	}

	/**
	 * Get Key File
	 *
	 * @param string $src local or auditor
	 * @param string $visibility private or public
	 * @param string $type box or sign
	 *
	 * @return string $file File Name
	 *
	 */
	protected function getKeyFile(string $src , string $visibility ,string $type ):string{

		$file = $this->keyDir . DIRECTORY_SEPARATOR . "$src.$visibility.$type.key";

		return $file;
	}

	/**
	 * Generate Necessary Keys
	 */
	public function generateKeys(){

		// Encrypt
		try {
			$localBoxKeyPair = sodium_crypto_box_seed_keypair(random_bytes(SODIUM_CRYPTO_BOX_SEEDBYTES));

			$key = sodium_crypto_box_secretkey($localBoxKeyPair);
			$this->setKey(self::CRYPTO_KEY_LOCAL , self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_ENCRYPTION , $key);
			sodium_memzero($key);

			$key = sodium_crypto_box_publickey($localBoxKeyPair);
			$this->setKey(self::CRYPTO_KEY_LOCAL , self::CRYPTO_KEY_PUBLIC, self::CRYPTO_KEY_ENCRYPTION , $key);
			sodium_memzero($key);

			sodium_memzero($localBoxKeyPair);
		} catch (Exception $e) {

			die( $e->getMessage() );

		}


		// Signing Auth
		try {

			$localSignKeyPair = sodium_crypto_sign_seed_keypair(random_bytes(SODIUM_CRYPTO_SIGN_SEEDBYTES));
			$key = sodium_crypto_sign_secretkey($localSignKeyPair);
			$this->setKey(self::CRYPTO_KEY_LOCAL , self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_SIGNING , $key);
			sodium_memzero($key);

			$key = sodium_crypto_sign_publickey($localSignKeyPair);
			$this->setKey(self::CRYPTO_KEY_LOCAL , self::CRYPTO_KEY_PUBLIC, self::CRYPTO_KEY_SIGNING , $key);
			sodium_memzero($key);

			sodium_memzero($localSignKeyPair);

		} catch (Exception $e) {

			die( $e->getMessage() );

		}


		// Auditor
		try {

			$auditorBoxKeyPair = sodium_crypto_box_seed_keypair(random_bytes(SODIUM_CRYPTO_BOX_SEEDBYTES));
			$key = sodium_crypto_box_secretkey($auditorBoxKeyPair);
			$this->setKey(self::CRYPTO_KEY_AUDITOR , self::CRYPTO_KEY_PRIVATE, self::CRYPTO_KEY_ENCRYPTION , $key);
			sodium_memzero($key);

			$key = sodium_crypto_box_publickey($auditorBoxKeyPair);
			$this->setKey(self::CRYPTO_KEY_AUDITOR , self::CRYPTO_KEY_PUBLIC, self::CRYPTO_KEY_ENCRYPTION , $key);
			sodium_memzero($key);

			sodium_memzero($auditorBoxKeyPair);

		} catch (Exception $e) {

			die( $e->getMessage() );

		}


	}

	///
	/// HELPER
	///
	/*
	private static function checkCriticalFunctionExists( $function ){

		if(function_exists($function)){

			return('Gdpr Request: remove function ' . $function);

		}

	}
	*/

	public static function cleanup( string $index ){

		unset( $_SERVER[ $index ] );
		unset( $_SERVER[ self::getGdprAnonCheck( $index ) ] );
		unset( $_SERVER[ self::getGdprEncCheck( $index ) ] );
		unset( $_SERVER[ self::getGdprIndex( $index ) ] );

	}



}