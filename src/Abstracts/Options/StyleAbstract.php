<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class StyleAbstract extends OptionsAbstract
{
    public function fontSize(string $fontSize): static
    {
        return $this->setOption('fontSize', $fontSize);
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