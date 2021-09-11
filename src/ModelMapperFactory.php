<?php

namespace Walnut\Lib\ModelMapper;

interface ModelMapperFactory {
	/**
	 * @template T
	 * @param class-string<T> $className
	 * @return ModelMapper<T>
	 */
	public function getMapper(string $className): ModelMapper;
}
