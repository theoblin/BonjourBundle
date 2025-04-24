<?php

namespace Theoblin\BonjourBundle\Twig;

use Theoblin\BonjourBundle\Service\BonjourService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class BonjourExtension extends AbstractExtension
{
    private BonjourService $bonjourService;

    public function __construct(BonjourService $bonjourService)
    {
        $this->bonjourService = $bonjourService;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('bonjour', [$this, 'getBonjourMessage']),
        ];
    }

    public function getBonjourMessage(): string
    {
        return $this->bonjourService->sayHello();
    }
}