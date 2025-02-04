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
 * LineItem model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LineItem  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LineItem';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'aggregatedTaxRate' => 'float',
		'amountExcludingTax' => 'float',
		'amountIncludingTax' => 'float',
		'attributes' => 'map[string,\Wallee\Sdk\Model\LineItemAttribute]',
		'discountExcludingTax' => 'float',
		'discountIncludingTax' => 'float',
		'name' => 'string',
		'quantity' => 'float',
		'shippingRequired' => 'bool',
		'sku' => 'string',
		'taxAmount' => 'float',
		'taxAmountPerUnit' => 'float',
		'taxes' => '\Wallee\Sdk\Model\Tax[]',
		'type' => '\Wallee\Sdk\Model\LineItemType',
		'undiscountedAmountExcludingTax' => 'float',
		'undiscountedAmountIncludingTax' => 'float',
		'undiscountedUnitPriceExcludingTax' => 'float',
		'undiscountedUnitPriceIncludingTax' => 'float',
		'uniqueId' => 'string',
		'unitPriceExcludingTax' => 'float',
		'unitPriceIncludingTax' => 'float'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The aggregated tax rate is the sum of all tax rates of the line item.
	 *
	 * @var float
	 */
	private $aggregatedTaxRate;

	/**
	 * 
	 *
	 * @var float
	 */
	private $amountExcludingTax;

	/**
	 * 
	 *
	 * @var float
	 */
	private $amountIncludingTax;

	/**
	 * 
	 *
	 * @var map[string,\Wallee\Sdk\Model\LineItemAttribute]
	 */
	private $attributes;

	/**
	 * 
	 *
	 * @var float
	 */
	private $discountExcludingTax;

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
	 * @var float
	 */
	private $taxAmount;

	/**
	 * 
	 *
	 * @var float
	 */
	private $taxAmountPerUnit;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Tax[]
	 */
	private $taxes;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItemType
	 */
	private $type;

	/**
	 * 
	 *
	 * @var float
	 */
	private $undiscountedAmountExcludingTax;

	/**
	 * 
	 *
	 * @var float
	 */
	private $undiscountedAmountIncludingTax;

	/**
	 * 
	 *
	 * @var float
	 */
	private $undiscountedUnitPriceExcludingTax;

	/**
	 * 
	 *
	 * @var float
	 */
	private $undiscountedUnitPriceIncludingTax;

	/**
	 * The unique id identifies the line item within the set of line items associated with the transaction.
	 *
	 * @var string
	 */
	private $uniqueId;

	/**
	 * 
	 *
	 * @var float
	 */
	private $unitPriceExcludingTax;

	/**
	 * 
	 *
	 * @var float
	 */
	private $unitPriceIncludingTax;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['attributes'])) {
			$this->setAttributes($data['attributes']);
		}
		if (isset($data['taxes'])) {
			$this->setTaxes($data['taxes']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
	}


	/**
	 * Returns aggregatedTaxRate.
	 *
	 * The aggregated tax rate is the sum of all tax rates of the line item.
	 *
	 * @return float
	 */
	public function getAggregatedTaxRate() {
		return $this->aggregatedTaxRate;
	}

	/**
	 * Sets aggregatedTaxRate.
	 *
	 * @param float $aggregatedTaxRate
	 * @return LineItem
	 */
	protected function setAggregatedTaxRate($aggregatedTaxRate) {
		$this->aggregatedTaxRate = $aggregatedTaxRate;

		return $this;
	}

	/**
	 * Returns amountExcludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAmountExcludingTax() {
		return $this->amountExcludingTax;
	}

	/**
	 * Sets amountExcludingTax.
	 *
	 * @param float $amountExcludingTax
	 * @return LineItem
	 */
	protected function setAmountExcludingTax($amountExcludingTax) {
		$this->amountExcludingTax = $amountExcludingTax;

		return $this;
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
	 * @return LineItem
	 */
	protected function setAmountIncludingTax($amountIncludingTax) {
		$this->amountIncludingTax = $amountIncludingTax;

		return $this;
	}

	/**
	 * Returns attributes.
	 *
	 * 
	 *
	 * @return map[string,\Wallee\Sdk\Model\LineItemAttribute]
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * Sets attributes.
	 *
	 * @param map[string,\Wallee\Sdk\Model\LineItemAttribute] $attributes
	 * @return LineItem
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
	 * Returns discountExcludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getDiscountExcludingTax() {
		return $this->discountExcludingTax;
	}

	/**
	 * Sets discountExcludingTax.
	 *
	 * @param float $discountExcludingTax
	 * @return LineItem
	 */
	protected function setDiscountExcludingTax($discountExcludingTax) {
		$this->discountExcludingTax = $discountExcludingTax;

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
	 * @return LineItem
	 */
	protected function setDiscountIncludingTax($discountIncludingTax) {
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
	 * @return LineItem
	 */
	protected function setName($name) {
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
	 * @return LineItem
	 */
	protected function setQuantity($quantity) {
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
	 * @return LineItem
	 */
	protected function setShippingRequired($shippingRequired) {
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
	 * @return LineItem
	 */
	protected function setSku($sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Returns taxAmount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getTaxAmount() {
		return $this->taxAmount;
	}

	/**
	 * Sets taxAmount.
	 *
	 * @param float $taxAmount
	 * @return LineItem
	 */
	protected function setTaxAmount($taxAmount) {
		$this->taxAmount = $taxAmount;

		return $this;
	}

	/**
	 * Returns taxAmountPerUnit.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getTaxAmountPerUnit() {
		return $this->taxAmountPerUnit;
	}

	/**
	 * Sets taxAmountPerUnit.
	 *
	 * @param float $taxAmountPerUnit
	 * @return LineItem
	 */
	protected function setTaxAmountPerUnit($taxAmountPerUnit) {
		$this->taxAmountPerUnit = $taxAmountPerUnit;

		return $this;
	}

	/**
	 * Returns taxes.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\Tax[]
	 */
	public function getTaxes() {
		return $this->taxes;
	}

	/**
	 * Sets taxes.
	 *
	 * @param \Wallee\Sdk\Model\Tax[] $taxes
	 * @return LineItem
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
	 * @return LineItem
	 */
	public function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Returns undiscountedAmountExcludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUndiscountedAmountExcludingTax() {
		return $this->undiscountedAmountExcludingTax;
	}

	/**
	 * Sets undiscountedAmountExcludingTax.
	 *
	 * @param float $undiscountedAmountExcludingTax
	 * @return LineItem
	 */
	protected function setUndiscountedAmountExcludingTax($undiscountedAmountExcludingTax) {
		$this->undiscountedAmountExcludingTax = $undiscountedAmountExcludingTax;

		return $this;
	}

	/**
	 * Returns undiscountedAmountIncludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUndiscountedAmountIncludingTax() {
		return $this->undiscountedAmountIncludingTax;
	}

	/**
	 * Sets undiscountedAmountIncludingTax.
	 *
	 * @param float $undiscountedAmountIncludingTax
	 * @return LineItem
	 */
	protected function setUndiscountedAmountIncludingTax($undiscountedAmountIncludingTax) {
		$this->undiscountedAmountIncludingTax = $undiscountedAmountIncludingTax;

		return $this;
	}

	/**
	 * Returns undiscountedUnitPriceExcludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUndiscountedUnitPriceExcludingTax() {
		return $this->undiscountedUnitPriceExcludingTax;
	}

	/**
	 * Sets undiscountedUnitPriceExcludingTax.
	 *
	 * @param float $undiscountedUnitPriceExcludingTax
	 * @return LineItem
	 */
	protected function setUndiscountedUnitPriceExcludingTax($undiscountedUnitPriceExcludingTax) {
		$this->undiscountedUnitPriceExcludingTax = $undiscountedUnitPriceExcludingTax;

		return $this;
	}

	/**
	 * Returns undiscountedUnitPriceIncludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUndiscountedUnitPriceIncludingTax() {
		return $this->undiscountedUnitPriceIncludingTax;
	}

	/**
	 * Sets undiscountedUnitPriceIncludingTax.
	 *
	 * @param float $undiscountedUnitPriceIncludingTax
	 * @return LineItem
	 */
	protected function setUndiscountedUnitPriceIncludingTax($undiscountedUnitPriceIncludingTax) {
		$this->undiscountedUnitPriceIncludingTax = $undiscountedUnitPriceIncludingTax;

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
	 * @return LineItem
	 */
	protected function setUniqueId($uniqueId) {
		$this->uniqueId = $uniqueId;

		return $this;
	}

	/**
	 * Returns unitPriceExcludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUnitPriceExcludingTax() {
		return $this->unitPriceExcludingTax;
	}

	/**
	 * Sets unitPriceExcludingTax.
	 *
	 * @param float $unitPriceExcludingTax
	 * @return LineItem
	 */
	protected function setUnitPriceExcludingTax($unitPriceExcludingTax) {
		$this->unitPriceExcludingTax = $unitPriceExcludingTax;

		return $this;
	}

	/**
	 * Returns unitPriceIncludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getUnitPriceIncludingTax() {
		return $this->unitPriceIncludingTax;
	}

	/**
	 * Sets unitPriceIncludingTax.
	 *
	 * @param float $unitPriceIncludingTax
	 * @return LineItem
	 */
	protected function setUnitPriceIncludingTax($unitPriceIncludingTax) {
		$this->unitPriceIncludingTax = $unitPriceIncludingTax;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

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

