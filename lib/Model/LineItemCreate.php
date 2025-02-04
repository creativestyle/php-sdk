<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 * wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;

use Wallee\Sdk\ValidationException;

/**
 * LineItemCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LineItemCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LineItem.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amountIncludingTax' => 'float',
		'attributes' => 'map[string,\Wallee\Sdk\Model\LineItemAttributeCreate]',
		'discountIncludingTax' => 'float',
		'name' => 'string',
		'quantity' => 'float',
		'shippingRequired' => 'bool',
		'sku' => 'string',
		'taxes' => '\Wallee\Sdk\Model\TaxCreate[]',
		'type' => '\Wallee\Sdk\Model\LineItemType',
		'uniqueId' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * 
	 *
	 * @var float
	 */
	private $amountIncludingTax;

	/**
	 * 
	 *
	 * @var map[string,\Wallee\Sdk\Model\LineItemAttributeCreate]
	 */
	private $attributes;

	/**
	 * 
	 *
	 * @var float
	 */
	private $discountIncludingTax;

	/**
	 * 
	 *
	 * @var string
	 */
	private $name;

	/**
	 * 
	 *
	 * @var float
	 */
	private $quantity;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $shippingRequired;

	/**
	 * 
	 *
	 * @var string
	 */
	private $sku;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\TaxCreate[]
	 */
	private $taxes;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItemType
	 */
	private $type;

	/**
	 * The unique id identifies the line item within the set of line items associated with the transaction.
	 *
	 * @var string
	 */
	private $uniqueId;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['amountIncludingTax'])) {
			$this->setAmountIncludingTax($data['amountIncludingTax']);
		}
		if (isset($data['attributes'])) {
			$this->setAttributes($data['attributes']);
		}
		if (isset($data['discountIncludingTax'])) {
			$this->setDiscountIncludingTax($data['discountIncludingTax']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['quantity'])) {
			$this->setQuantity($data['quantity']);
		}
		if (isset($data['shippingRequired'])) {
			$this->setShippingRequired($data['shippingRequired']);
		}
		if (isset($data['sku'])) {
			$this->setSku($data['sku']);
		}
		if (isset($data['taxes'])) {
			$this->setTaxes($data['taxes']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
		if (isset($data['uniqueId'])) {
			$this->setUniqueId($data['uniqueId']);
		}
	}


	/**
	 * Returns amountIncludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAmountIncludingTax() {
		return $this->amountIncludingTax;
	}

	/**
	 * Sets amountIncludingTax.
	 *
	 * @param float $amountIncludingTax
	 * @return LineItemCreate
	 */
	public function setAmountIncludingTax($amountIncludingTax) {
		$this->amountIncludingTax = $amountIncludingTax;

		return $this;
	}

	/**
	 * Returns attributes.
	 *
	 * 
	 *
	 * @return map[string,\Wallee\Sdk\Model\LineItemAttributeCreate]
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * Sets attributes.
	 *
	 * @param map[string,\Wallee\Sdk\Model\LineItemAttributeCreate] $attributes
	 * @return LineItemCreate
	 */
	public function setAttributes($attributes) {
		if (is_array($attributes) && empty($attributes)) {
			$this->attributes = new \stdClass;
		} else {
			$this->attributes = $attributes;
		}

		return $this;
	}

	/**
	 * Returns discountIncludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getDiscountIncludingTax() {
		return $this->discountIncludingTax;
	}

	/**
	 * Sets discountIncludingTax.
	 *
	 * @param float $discountIncludingTax
	 * @return LineItemCreate
	 */
	public function setDiscountIncludingTax($discountIncludingTax) {
		$this->discountIncludingTax = $discountIncludingTax;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param string $name
	 * @return LineItemCreate
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns quantity.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * Sets quantity.
	 *
	 * @param float $quantity
	 * @return LineItemCreate
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;

		return $this;
	}

	/**
	 * Returns shippingRequired.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getShippingRequired() {
		return $this->shippingRequired;
	}

	/**
	 * Sets shippingRequired.
	 *
	 * @param bool $shippingRequired
	 * @return LineItemCreate
	 */
	public function setShippingRequired($shippingRequired) {
		$this->shippingRequired = $shippingRequired;

		return $this;
	}

	/**
	 * Returns sku.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSku() {
		return $this->sku;
	}

	/**
	 * Sets sku.
	 *
	 * @param string $sku
	 * @return LineItemCreate
	 */
	public function setSku($sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Returns taxes.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\TaxCreate[]
	 */
	public function getTaxes() {
		return $this->taxes;
	}

	/**
	 * Sets taxes.
	 *
	 * @param \Wallee\Sdk\Model\TaxCreate[] $taxes
	 * @return LineItemCreate
	 */
	public function setTaxes($taxes) {
		$this->taxes = $taxes;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItemType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\LineItemType $type
	 * @return LineItemCreate
	 */
	public function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Returns uniqueId.
	 *
	 * The unique id identifies the line item within the set of line items associated with the transaction.
	 *
	 * @return string
	 */
	public function getUniqueId() {
		return $this->uniqueId;
	}

	/**
	 * Sets uniqueId.
	 *
	 * @param string $uniqueId
	 * @return LineItemCreate
	 */
	public function setUniqueId($uniqueId) {
		$this->uniqueId = $uniqueId;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getAmountIncludingTax() === null) {
			throw new ValidationException("'amountIncludingTax' can't be null", 'amountIncludingTax', $this);
		}
		if ($this->getName() === null) {
			throw new ValidationException("'name' can't be null", 'name', $this);
		}
		if ($this->getQuantity() === null) {
			throw new ValidationException("'quantity' can't be null", 'quantity', $this);
		}
		if ($this->getType() === null) {
			throw new ValidationException("'type' can't be null", 'type', $this);
		}
		if ($this->getUniqueId() === null) {
			throw new ValidationException("'uniqueId' can't be null", 'uniqueId', $this);
		}
	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}

