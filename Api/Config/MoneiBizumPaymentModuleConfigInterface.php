<?php

/**
 * @author Monei Team
 * @copyright Copyright © Monei (https://monei.com)
 */

declare(strict_types=1);

namespace Monei\MoneiPayment\Api\Config;

/**
 * Get payment method configuration interface.
 */
interface MoneiBizumPaymentModuleConfigInterface
{
    public const IS_PAYMENT_ENABLED = 'payment/monei_bizum/active';

    public const TITLE = 'payment/monei_bizum/title';

    public const ALLOW_SPECIFIC = 'payment/monei_bizum/allowspecific';

    public const SPECIFIC_COUNTRIES = 'payment/monei_bizum/specificcountry';

    public const SORT_ORDER = 'payment/monei_bizum/sort_order';

    /**
     * Check if payment method is enabled
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isEnabled(int $storeId = null): bool;

    /**
     * Get payment method title
     *
     * @param int|null $storeId
     * @return string
     */
    public function getTitle(int $storeId = null): string;

    /**
     * Get allow specific countries
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isAllowSpecific(int $storeId = null): bool;

    /**
     * Get specific countries for payment method
     *
     * @param int|null $storeId
     * @return string
     */
    public function getSpecificCountries(int $storeId = null): string;

    /**
     * Get payment method sort order
     *
     * @param int|null $storeId
     * @return int
     */
    public function getSortOrder(int $storeId = null): int;
}
