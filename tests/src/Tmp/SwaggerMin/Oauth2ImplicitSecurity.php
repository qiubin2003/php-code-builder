<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Swaggest\PhpCodeBuilder\Tests\Tmp\SwaggerMin;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Exception\StringException;
use Swaggest\JsonSchema\Helper;
use Swaggest\JsonSchema\InvalidValue;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/oauth2ImplicitSecurity
 */
class Oauth2ImplicitSecurity extends ClassStructure
{
    const OAUTH2 = 'oauth2';

    const IMPLICIT = 'implicit';

    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $type;

    /** @var string */
    public $flow;

    /** @var string[] */
    public $scopes;

    /** @var string */
    public $authorizationUrl;

    /** @var string */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->type = Schema::string();
        $properties->type->enum = array(
            self::OAUTH2,
        );
        $properties->flow = Schema::string();
        $properties->flow->enum = array(
            self::IMPLICIT,
        );
        $properties->scopes = Schema::object();
        $properties->scopes->additionalProperties = Schema::string();
        $properties->scopes->setFromRef('#/definitions/oauth2Scopes');
        $properties->authorizationUrl = Schema::string();
        $properties->authorizationUrl->format = "uri";
        $properties->description = Schema::string();
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = false;
        $patternProperty = new Schema();
        $patternProperty->additionalProperties = true;
        $patternProperty->additionalItems = true;
        $patternProperty->description = "Any property starting with x- is valid.";
        $patternProperty->setFromRef('#/definitions/vendorExtension');
        $ownerSchema->setPatternProperty('^x-', $patternProperty);
        $ownerSchema->required = array(
            0 => 'type',
            1 => 'flow',
            2 => 'authorizationUrl',
        );
        $ownerSchema->setFromRef('#/definitions/oauth2ImplicitSecurity');
    }

    /**
     * @param string $type
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $flow
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFlow($flow)
    {
        $this->flow = $flow;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[] $scopes
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $authorizationUrl
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $description
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @codeCoverageIgnoreStart
     */
    public function getXValues()
    {
        $result = array();
        if (!$names = $this->getPatternPropertyNames(self::X_PROPERTY_PATTERN)) {
            return $result;
        }
        foreach ($names as $name) {
            $result[$name] = $this->$name;
        }
        return $result;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $name
     * @param $value
     * @return self
     * @throws InvalidValue
     * @codeCoverageIgnoreStart
     */
    public function setXValue($name, $value)
    {
        if (preg_match(Helper::toPregPattern(self::X_PROPERTY_PATTERN), $name)) {
            throw new StringException('Pattern mismatch', StringException::PATTERN_MISMATCH);
        }
        $this->addPatternPropertyName(self::X_PROPERTY_PATTERN, $name);
        $this->{$name} = $value;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}