<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifies the type of brokerage to be applied to a shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ClearanceBrokerageType
    extends AbstractSimpleType
{
    const _BROKER_INCLUSIVE = 'BROKER_INCLUSIVE';
    const _BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER = 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER';
    const _BROKER_SELECT = 'BROKER_SELECT';
    const _BROKER_SELECT_NON_RESIDENT_IMPORTER = 'BROKER_SELECT_NON_RESIDENT_IMPORTER';
    const _BROKER_UNASSIGNED = 'BROKER_UNASSIGNED';
}