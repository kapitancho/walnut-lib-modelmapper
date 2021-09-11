<?php

namespace Walnut\Lib\ModelMapper;

/**
 * @template T
 */
interface ConditionChecker {
	/**
	 * @param T $target
	 * @return bool
	 */
	public function checkCondition(object $target): bool;
}