<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 *
 * @discriminator type
 * @discriminatorType IdNumberIdentifier
 */
class IdNumberIdentifier extends ClientIdentifier implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type Initialization value for $this->type
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->type = func_get_arg(0);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json = array_merge($json, parent::jsonSerialize());

        return array_merge($json, $this->additionalProperties);
    }
}
