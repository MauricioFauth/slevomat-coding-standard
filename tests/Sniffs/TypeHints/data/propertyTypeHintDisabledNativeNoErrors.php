<?php

class Whatever
{

	public const WHATEVER = 0;

	public function whatever()
	{
	}

	/**
	 * @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint
	 */
	private $isSniffSuppressed;

	/**
	 * {@inheritdoc}
	 */
	private $hasInheritdocAnnotation;

	/**
	 * @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
	 */
	private $isSniffCodeAnyTypeHintSuppressed;

	/**
	 * @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingTraversableTypeHintSpecification
	 * @var array
	 */
	private $isSniffCodeMissingTravesableTypeHintSpecificationSuppressed;

	/**
	 * @var int
	 */
	private $noTraversableType;

	/**
	 * @var int[]
	 */
	private $withTraversableTypeHintSpecification;

}
