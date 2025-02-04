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



/**
 * CriteriaOperator model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class CriteriaOperator implements IEnum {

	const CONTAINS = 'CONTAINS';
	const EQUALS = 'EQUALS';
	const EQUALS_IGNORE_CASE = 'EQUALS_IGNORE_CASE';
	const GREATER_THAN = 'GREATER_THAN';
	const GREATER_THAN_OR_EQUAL = 'GREATER_THAN_OR_EQUAL';
	const LESS_THAN = 'LESS_THAN';
	const LESS_THAN_OR_EQUAL = 'LESS_THAN_OR_EQUAL';
	const NOT_EQUALS = 'NOT_EQUALS';
	const NOT_EQUALS_IGNORE_CASE = 'NOT_EQUALS_IGNORE_CASE';
	const NOT_CONTAINS = 'NOT_CONTAINS';
	const IS_NULL = 'IS_NULL';
	const IS_NOT_NULL = 'IS_NOT_NULL';
	

	

}
