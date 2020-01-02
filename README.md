# GDPR with Privacy by Design in mind

## GDPR / DSGVO Class in PHP

### Disclaimer

This is a technical solution for a legal issue. 
This is no legal advice.
Please check with your lawyer, if this processing is compliant with your environment.

### Key Consideration

GDPR is a class to comply with three main GDPR requirements

- Privacy by design
- Privacy by default
- Data mimimalism

The goal is to minify the potentially critical data, to avoid additional legal requirements if the respective data is not used anyway.

### The Core Process

All unneeded personal indentifiable information (pii) data should be wiped or anonymized.

If 
1. this process is called before any other access and
2. other processes only access this kind of data via `$_SERVER` Superglobal

then you are not processing pii anymore. 

This disables all GDPR requirements (after anonymizing) as GDPR only discusses personal identifiable information.
Of course, the process of anonymizing and deletion has to be documented in your processes.

Again: Check this process with your lawyer.

If you anonymize it, you can choose to encrypt the raw data to have access to it later.
All Access to the raw data will be logged by default.

### Documentation / Logging

Each processing (read, transform, delete) of pii has to be documented and logged. 
This is even needed for anonymization or deletion. 
Logs have to document this process is in place and working.

But logging pii in a raw log to document that you are using pii responsibly is not an option.
Leaking of pii has to be prevented.

We use Private/Public Key Encryption based on Sodium for each Log Entry so that only an Auditor can access the logging data.

You can provide the auditors public key in the key directory.
You MUST NOT provide the private key of the auditor in the key directory. 
Keep it safe for the auditing process only.

All single log entries are a JSON array, signed by the local box and encrypted with the public key of the auditor.

You can forward the encrypted log entry to a logging service of your choice.

If logged locally,  all logfiles are stored in daily directories and are deleted after two days.

# Installation

    composer require q48academy/gdpr-privacy-by-design 
    
# Usage

This class takes care about processing potential personal information in a way that is compliant with 

## Wipe Information

WARNING: Wiping this information can have unexpected behavior in your application. Test carefully.

Basic Usage is to remove potential personal information from

    Gdpr::wipeIp();
    
As you propably know, the  `REMOTE_ADDR` does not always hold the correct data, if you are behind a proxy. 
You can forward the key corresponding to your environement.
  
    Gdpr::wipeIp( 'HTTP_X_FORWARDED_FOR' );

The same methods can be used for other potentially pii holding keys.

    Gdpr::wipeUserAgent();
    Gdpr::wipeReferrer();
    Gdpr::wipeQueryString();
    Gdpr::wipeCookies();
    

## Anonymize Information

WARNING: Anonymizing this information can have unexpected behavior in your application. Test carefully.

### Key functionality

there are three methods for each Key field.

- `getAnon[Key]` i.e. `getAnonIp()` to get the anonymized Data
- `setAnon[Key]` i.e. `setAnonIp()` to set the anonymized Data
- `getRaw[Key]` i.e. `getRawIp()` to get the raw Data after calling `setAnon[Key]` with the 'doEncrypt' Option


### Options

Different Keys provide different options.
Options are passed as array to Getter and Setters

Options that are always available are:

- 'index' : The Key of the `$_SERVER` Array holding the information. i.e. `REMOTE_ADDR`
- 'doEncrypt' : The raw data shall be stored for later retrieval. It will be stored in a Key based in 'index' i.e. `GDPR_REMOTE_ADDR`

### IP

#### Why

The IP is considered to be pii. With IPv6, this seems to be really clear.

#### Anonymizing Concept

Set a specific number of Octets to '0'.

#### Basic usage

    $gdpr = new Gdpr();
    $anonIp = $gdpr->getAnonIp();

### Special Options

- 'rawIp' : The IP should not be taken from the `$_SERVER` Array but is given in raw. The information will be stored 'index' in i.e. `REMOTE_ADDR`
- 'v4' : The number of octets of an IPv4 Address that should be set to zero to anonymize. Default right now is 1.
- 'v6' : The number of octets of an IPv4 Address that should be set to zero to anonymize. Default right now is 4.



### User Agent

#### Why

The User Agent is considered to be pii as it can be used to create a device fingerprint.

#### Anonymizing Concept

Remove all Version information. 
Keep anonymized
- OS
- Mobile/Tablet
- Browser

Bots are not anonymized.

#### Basic usage

    $gdpr = new Gdpr();
    $anonIp = $gdpr->getAnonUserAgent();

Settings can be set via ENV 

    GDPR_DIR_KEYS=/etc/.keys
    GDPR_DIR_LOGS=/var/log/gdpr

The class can also be initiated with two Settings

- keyDir
- logDir


    $gdpr = new Gdpr('/etc/.keys','/var/log/gdpr');

#### Installation Verification

    $gdpr = new Gdpr();
    $verifyLog = $gdpr->verify();
    var_dump($verifyLog);


### Special Options

- 'rawUserAgent' : The User Agent should not be taken from the `$_SERVER` Array but is given in raw. The information will be stored in 'index' i.e. `HTTP_USER_AGENT`



### HTTP Referer

#### Why

The Referer can contain pii.

#### Anonymizing Concept

Remove all Path and Query information. Keep only host.
If host matches whitelist, path information is kept.

#### Basic usage

    $gdpr = new Gdpr();
    $anonIp = $gdpr->getAnonReferrer();

### Special Options

- 'rawReferrer' : The Referrer should not be taken from the `$_SERVER` Array but is given in raw. The information will be stored in 'index' i.e. `HTTP_REFERER`
- 'whitelist' : an Array containing host names



### HTTP Referer

#### Why

The Referer can contain pii.

#### Anonymizing Concept

Remove all Path and Query information. Keep only host.
If host matches whitelist, path information is kept.

#### Basic usage

    $gdpr = new Gdpr();
    $anonIp = $gdpr->getAnonReferrer();

### Special Options

- 'rawReferrer' : The Referrer should not be taken from the `$_SERVER` Array but is given in raw. The information will be stored in 'index' i.e. `HTTP_REFERER`
- 'whitelist' : an Array containing host names



### Query String

#### Why

The Query String can contain pii. i.e. `http://example.com/?mynameis=John+Smith`

#### Anonymizing Concept

Remove all Query Keys. 
If key matches whitelist, path information is kept.

#### Basic usage

    $gdpr = new Gdpr();
    $anonIp = $gdpr->getAnonQueryString();

### Special Options

- 'rawQueryString' : The Query String should not be taken from the `$_SERVER` Array but is given in raw. The information will be stored in 'index' i.e. `QUERY_STRING`
- 'whitelist' : an Array containing query keys




### Request Uri

#### Why

The Request Uri can contain pii. i.e. `http://example.com/path?mynameis=John+Smith`

#### Anonymizing Concept

Remove Query String. 
If key matches whitelist, path information is kept.

ATTENTION: pii can be leaked with 404 requests as i.e. `http://example.com/mynameis/John+Smith`. This should be handled in your app.

#### Basic usage

    $gdpr = new Gdpr();
    $anonIp = $gdpr->getAnonRequestUri();

### Special Options

- 'rawRequestUri' : The Request Uri should not be taken from the `$_SERVER` Array but is given in raw. The information will be stored in 'index' i.e. `REQUEST_URI`
- 'whitelist' : an Array containing query keys






# Accessing raw data

If raw data should be accessed, some information have to be provided and will be logged.

    public function getRawIp(string $lawful_purpose, string $data_category, string $process_reason, string  $accessor ,array $options=[]):string

## Lawfull purpose

The lawful purposes from GDPR are provided as Constants

    	const LAWFUL_PURPOSE_CONSENT 						= 'consent';
    	const LAWFUL_PURPOSE_CONTRACTUAL_OBLIGATION 		= 'contract';
    	const LAWFUL_PURPOSE_LEGAL_OBLIGATION 				= 'legal';
    	const LAWFUL_PURPOSE_VITAL_INTEREST_OF_INDIVIDUAL 	= 'vital';
    	const LAWFUL_PURPOSE_PUBLIC_INTEREST 				= 'public';
    	const LAWFUL_PURPOSE_LEGITIMATE_INTEREST 			= 'interest';

## Data categories

The data categories from GDPR are provided as Constants

	const DATA_CATEGORY_DEFAULT 	= 'default';
	const DATA_CATEGORY_ETHNICITY 	= 'ethnicity';
	const DATA_CATEGORY_POLITICS 	= 'politics';
	const DATA_CATEGORY_RELIGION 	= 'religion';
	const DATA_CATEGORY_LABOR_UNION = 'laborUnion';
	const DATA_CATEGORY_HEALTH 		= 'health';
	const DATA_CATEGORY_SEXUAL 		= 'sexual';

## Process Reason

The process reasons from GDPR are provided as Constants

	const PROCESS_REASON_CREATE 	= 'create';
	const PROCESS_REASON_READ 		= 'read';
	const PROCESS_REASON_UPDATE 	= 'update';
	const PROCESS_REASON_DELETE 	= 'delete';
	const PROCESS_REASON_PUBLISH 	= 'publish';
	const PROCESS_REASON_COMBINE 	= 'combine';
	const PROCESS_REASON_ANONYMIZE 	= 'anonymize';
	const PROCESS_REASON_ENCRYPT 	= 'encrypt';

## Accessor

The accessor is the Class|Fucntion|Author accessing this data

TODO: provide information where this process of accessing is documented 