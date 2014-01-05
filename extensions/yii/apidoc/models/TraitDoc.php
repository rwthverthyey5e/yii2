<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\apidoc\models;

class TraitDoc extends TypeDoc
{
	// classes using the trait
	// will be set by Context::updateReferences()
	public $usedBy = [];

	public $traits = [];

	/**
	 * @param \phpDocumentor\Reflection\TraitReflector $reflector
	 * @param array $config
	 */
	public function __construct($reflector, $config = [])
	{
		parent::__construct($reflector, $config);

		foreach($reflector->getTraits() as $trait) {
			$this->traits[] = ltrim($trait, '\\');
		}
	}
}