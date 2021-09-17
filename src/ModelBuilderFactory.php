<?php

namespace Walnut\Lib\ModelMapper;

interface ModelBuilderFactory {
	/**
	 * @template T
	 * @param class-string<T> $className
	 * @return ModelBuilder<T>
	 * @throws MappingNotAvailable
	 */
	public function getBuilder(string $className): ModelBuilder;
}
