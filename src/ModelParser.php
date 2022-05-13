<?php

namespace Walnut\Lib\ModelMapper;

/**
 * @template T of object
 */
interface ModelParser {
	/**
	 * @param T $source
	 * @return array
	 */
	public function parse(object $source): array;
}
