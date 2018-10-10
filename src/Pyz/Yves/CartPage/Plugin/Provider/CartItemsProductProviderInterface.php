<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CartPage\Plugin\Provider;

interface CartItemsProductProviderInterface
{
    /**
     * @param \Generated\Shared\Transfer\ItemTransfer[] $cartItems
     * @param string $locale
     *
     * @return \Generated\Shared\Transfer\ProductViewTransfer[]
     */
    public function getItemsProducts(array $cartItems, string $locale): array;
}
