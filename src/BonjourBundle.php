<?php

namespace TheoBlin\BonjourBundle;

use TheoBlin\BonjourBundle\DependencyInjection\BonjourBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BonjourBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            return new BonjourBundleExtension();
        }

        return $this->extension ?: null;
    }
}