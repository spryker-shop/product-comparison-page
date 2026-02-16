<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductComparisonPage\Reader;

interface ProductComparisonListReaderInterface
{
    /**
     * @param array<string> $skus
     * @param string $localeName
     *
     * @return array<\Generated\Shared\Transfer\ProductViewTransfer>
     */
    public function getProductsCompareList(array $skus, string $localeName): array;
}
