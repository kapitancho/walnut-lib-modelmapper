<?php

namespace Walnut\Lib\ModelMapper;

/**
 * @template T
 */
interface ModelBuilder {
	/**
	 * @param array $source
	 * @return T
	 */
	public function build(array $source): object;
}
