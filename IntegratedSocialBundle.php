<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Bundle\SocialBundle;

use Integrated\Bundle\SocialBundle\DependencyInjection\IntegratedSocialExtension;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IntegratedSocialBundle extends Bundle
{
    /**
     * @return IntegratedSocialExtension
     */
    public function getContainerExtension()
    {
        return new IntegratedSocialExtension();
    }
}
