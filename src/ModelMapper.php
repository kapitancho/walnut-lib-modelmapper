<?php

namespace Walnut\Lib\ModelMapper;

/**
 * @template T
 */
interface ModelMapper {

	/**
	 * @return T[]
	 */
	public function all(): array;

	/**
	 * @param ConditionChecker<T> $conditionChecker
	 * @return T[]
	 */
	public function byCondition(ConditionChecker $conditionChecker): array;

	/**
	 * @param string $entryId
	 * @return T|null
	 */
	public function byId(string $entryId): ?object;

	/**
	 * @param string $entryId
	 * @return bool
	 */
	public function exists(string $entryId): bool;

	/**
	 * @param T $entry
	 */
	public function store(string $entryId, object $entry): void;

	/**
	 * @param string $entryId
	 */
	public function remove(string $entryId): void;

}
