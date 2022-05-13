<?php

namespace Walnut\Lib\ModelMapper;

/**
 * @template T of object
 */
interface ModelBuilder {
	/**
	 * @param array $source
	 * @return T
	 */
	public function build(array $source): object;
}
