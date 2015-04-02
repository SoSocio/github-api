<?php

namespace Github\OAuth;

use Github;


/**
 * Configuration for OAuth token obtaining.
 *
 * @author  Miloslav Hůla (https://github.com/milo)
 */
class Configuration extends Github\Sanity
{
	/** @var string */
	public $clientId;

	/** @var string */
	public $clientSecret;

	/** @var string[] */
	public $scopes;


	/**
	 * @param  string
	 * @param  string
	 * @param  string[]
	 */
	public function __construct($clientId, $clientSecret, array $scopes = array())
	{
		$this->clientId = $clientId;
		$this->clientSecret = $clientSecret;
		$this->scopes = $scopes;
    }


	/**
	 * @return Configuration
	 */
	public static function fromArray(array $conf)
	{
		return new static($conf['clientId'], $conf['clientSecret'], isset($conf['scopes']) ? $conf['scopes'] : array());
	}

}
