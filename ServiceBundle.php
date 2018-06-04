<?php

/*
 * This file is part of the {{ project_name }}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author {{ author_name }}
 */

declare(strict_types=1);

namespace Service;

use Mmoreram\BaseBundle\SimpleBaseBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class ServiceBundle.
 */
class ServiceBundle extends SimpleBaseBundle
{
    /**
     * Return all bundle dependencies.
     *
     * Values can be a simple bundle namespace or its instance
     *
     * @param KernelInterface $kernel
     *
     * @return array
     */
    public static function getBundleDependencies(KernelInterface $kernel): array
    {
        return [
            FrameworkBundle::class,
        ];
    }
}
