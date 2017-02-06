<?php
namespace CodeQ\UnicodeNormalizer\TypoScript;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\SystemLoggerInterface;
use Neos\Fusion\FusionObjects\AbstractFusionObject;
use Neos\Neos\Exception as NeosException;

/**
 * Normalizer
 */
class NormalizerImplementation extends AbstractFusionObject {

	/**
	 * Get value
	 *
	 * @return string
	 */
	public function getValue() {
		return $this->tsValue('value');
	}

	/**
	 * Normalize unicode form.
	 */
	public function evaluate() {
		return \Normalizer::normalize($this->getValue(), \Normalizer::FORM_C);
	}
}
