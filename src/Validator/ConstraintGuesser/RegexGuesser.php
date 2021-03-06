<?php

namespace Pim\Bundle\ExtendedAttributeTypeBundle\Validator\ConstraintGuesser;

use Pim\Bundle\ExtendedAttributeTypeBundle\AttributeType\ExtendedAttributeTypes;
use Pim\Component\Catalog\Model\AttributeInterface;
use Pim\Component\Catalog\Validator\ConstraintGuesser\RegexGuesser as PimRegexGuesser;

/**
 * Regex guesser
 *
 * @author    JM Leroux <jean-marie.leroux@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class RegexGuesser extends PimRegexGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportAttribute(AttributeInterface $attribute)
    {
        return ExtendedAttributeTypes::TEXT_COLLECTION === $attribute->getType();
    }
}
