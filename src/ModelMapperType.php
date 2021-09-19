<?php

namespace Walnut\Lib\ModelMapper;

#[\Attribute]
final class ModelMapperType {
	/**
	 * @param class-string $className
	 */
	public function __construct(
		public /*readonly*/ string $className
	) {}
}