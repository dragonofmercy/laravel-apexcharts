<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class Style extends OptionsAbstract
{
    public function fontSize(string $fontSize): static
    {
        return $this->setOption('fontSize', $fontSize);
    }

    public function fontWeight(string|int $fontWeight): static
    {
        return $this->setOption('fontWeight', $fontWeight);
    }

    public function fontFamily(string $fontFamily): static
    {
        return $this->setOption('fontFamily', $fontFamily);
    }

    public function color(string $color): static
    {
        return $this->setOption('color', $color);
    }
}