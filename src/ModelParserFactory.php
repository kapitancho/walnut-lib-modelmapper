<?php

namespace Walnut\Lib\ModelMapper;

interface ModelParserFactory {
	/**
	 * @template T
	 * @param class-string<T> $className
	 * @return ModelParser<T>
	 */
	public function getParser(string $className): ModelParser;
}
