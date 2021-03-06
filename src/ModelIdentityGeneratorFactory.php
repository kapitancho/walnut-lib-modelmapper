<?php

namespace Walnut\Lib\ModelMapper;

use Walnut\Lib\IdentityGenerator\IdentityGenerator;

interface ModelIdentityGeneratorFactory {
	/**
	 * @param class-string $className
	 * @return IdentityGenerator
	 * @throws MappingNotAvailable
	 */
	public function getIdentityGenerator(string $className): IdentityGenerator;
}
