<?php
namespace FedEx\RateService\SimpleType;

/**
 * The method used to calculate the weight to be used in rating the package..
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RatedWeightMethod
    extends AbstractSimpleType
{
    const _ACTUAL = 'ACTUAL';
    const _AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';
    const _BALLOON = 'BALLOON';
    const _DIM = 'DIM';
    const _FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';
    const _MIXED = 'MIXED';
    const _OVERSIZE = 'OVERSIZE';
    const _OVERSIZE_1 = 'OVERSIZE_1';
    const _OVERSIZE_2 = 'OVERSIZE_2';
    const _OVERSIZE_3 = 'OVERSIZE_3';
    const _PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';
    const _WEIGHT_BREAK = 'WEIGHT_BREAK';
}