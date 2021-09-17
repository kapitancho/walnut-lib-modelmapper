<?php

namespace Walnut\Lib\ModelMapper;

interface ModelMapperFactory {
	/**
	 * @template T
	 * @param class-string<T> $className
	 * @return ModelMapper<T>
	 * @throws MappingNotAvailable
	 */
	public function getMapper(string $className): ModelMapper;
}
