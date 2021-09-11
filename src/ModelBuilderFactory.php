<?php

namespace Walnut\Lib\ModelMapper;

interface ModelBuilderFactory {
	/**
	 * @template T
	 * @param class-string<T> $className
	 * @return ModelBuilder<T>
	 */
	public function getBuilder(string $className): ModelBuilder;
}
