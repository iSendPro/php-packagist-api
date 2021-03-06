<?php
/**
 * REPERTOIREcreaterequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Isendpro
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API iSendPro
 *
 * [1] Liste des fonctionnalités : - envoi de SMS à un ou plusieurs destinataires, - lookup HLR, - récupération des récapitulatifs de campagne, - gestion des répertoires, - ajout en liste noire. - comptage du nombre de caractères des SMS  [2] Pour utiliser cette API vous devez: - Créer un compte iSendPro sur https://isendpro.com/ - Créditer votre compte      - Remarque: obtention d'un crédit de test possible sous conditions - Noter votre clé de compte (keyid)   - Elle vous sera indispensable à l'utilisation de l'API   - Vous pouvez la trouver dans le rubrique mon \"compte\", sous-rubrique \"mon API\" - Configurer le contrôle IP   - Le contrôle IP est configurable dans le rubrique mon \"compte\", sous-rubrique \"mon API\"   - Il s'agit d'un système de liste blanche, vous devez entrer les IP utilisées pour appeler l'API   - Vous pouvez également désactiver totalement le contrôle IP
 *
 * OpenAPI spec version: 1.1.1
 * Contact: support@isendpro.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Isendpro\Model;

use \ArrayAccess;

/**
 * REPERTOIREcreaterequest Class Doc Comment
 *
 * @category    Class
 * @package     Isendpro
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class REPERTOIREcreaterequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'REPERTOIREcreaterequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keyid' => 'string',
        'repertoire_edit' => 'string',
        'repertoire_nom' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keyid' => null,
        'repertoire_edit' => null,
        'repertoire_nom' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'keyid' => 'keyid',
        'repertoire_edit' => 'repertoireEdit',
        'repertoire_nom' => 'repertoireNom'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'keyid' => 'setKeyid',
        'repertoire_edit' => 'setRepertoireEdit',
        'repertoire_nom' => 'setRepertoireNom'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'keyid' => 'getKeyid',
        'repertoire_edit' => 'getRepertoireEdit',
        'repertoire_nom' => 'getRepertoireNom'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REPERTOIRE_EDIT_CREATE = 'create';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRepertoireEditAllowableValues()
    {
        return [
            self::REPERTOIRE_EDIT_CREATE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['keyid'] = isset($data['keyid']) ? $data['keyid'] : null;
        $this->container['repertoire_edit'] = isset($data['repertoire_edit']) ? $data['repertoire_edit'] : 'create';
        $this->container['repertoire_nom'] = isset($data['repertoire_nom']) ? $data['repertoire_nom'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['keyid'] === null) {
            $invalid_properties[] = "'keyid' can't be null";
        }
        if ($this->container['repertoire_edit'] === null) {
            $invalid_properties[] = "'repertoire_edit' can't be null";
        }
        $allowed_values = $this->getRepertoireEditAllowableValues();
        if (!in_array($this->container['repertoire_edit'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'repertoire_edit', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['repertoire_nom'] === null) {
            $invalid_properties[] = "'repertoire_nom' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['keyid'] === null) {
            return false;
        }
        if ($this->container['repertoire_edit'] === null) {
            return false;
        }
        $allowed_values = $this->getRepertoireEditAllowableValues();
        if (!in_array($this->container['repertoire_edit'], $allowed_values)) {
            return false;
        }
        if ($this->container['repertoire_nom'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets keyid
     * @return string
     */
    public function getKeyid()
    {
        return $this->container['keyid'];
    }

    /**
     * Sets keyid
     * @param string $keyid Clé API
     * @return $this
     */
    public function setKeyid($keyid)
    {
        $this->container['keyid'] = $keyid;

        return $this;
    }

    /**
     * Gets repertoire_edit
     * @return string
     */
    public function getRepertoireEdit()
    {
        return $this->container['repertoire_edit'];
    }

    /**
     * Sets repertoire_edit
     * @param string $repertoire_edit Action à réaliser doit valoir \"create\" ici.
     * @return $this
     */
    public function setRepertoireEdit($repertoire_edit)
    {
        $allowed_values = $this->getRepertoireEditAllowableValues();
        if (!in_array($repertoire_edit, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repertoire_edit', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['repertoire_edit'] = $repertoire_edit;

        return $this;
    }

    /**
     * Gets repertoire_nom
     * @return string
     */
    public function getRepertoireNom()
    {
        return $this->container['repertoire_nom'];
    }

    /**
     * Sets repertoire_nom
     * @param string $repertoire_nom Nom du répertoire (libellé) à créer
     * @return $this
     */
    public function setRepertoireNom($repertoire_nom)
    {
        $this->container['repertoire_nom'] = $repertoire_nom;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Isendpro\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Isendpro\ObjectSerializer::sanitizeForSerialization($this));
    }
}


