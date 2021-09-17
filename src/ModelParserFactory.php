<?php

namespace Walnut\Lib\ModelMapper;

interface ModelParserFactory {
	/**
	 * @template T
	 * @param class-string<T> $className
	 * @return ModelParser<T>
	 * @throws MappingNotAvailable
	 */
	public function getParser(string $className): ModelParser;
}
