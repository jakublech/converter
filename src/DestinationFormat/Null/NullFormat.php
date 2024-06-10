<?php
/**
 * @author Jakub Lech <info@smartbyte.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace JakubLech\Converter\DestinationFormat\Null;

class NullFormat
{
    public function __invoke(object $class, array $context = []): null
    {
        return null;
    }
}