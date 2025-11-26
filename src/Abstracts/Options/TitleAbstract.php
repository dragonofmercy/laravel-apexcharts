<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Align;

abstract class TitleAbstract extends OptionsAbstract
{
    public function text(string $text): static
    {
        return $this->setOption('text', $text);
    }

    public function align(Align $align): static
    {
        return $this->setOption('align', $align);
    }

    public function margin(int $margin): static
    {
        return $this->setOption('margin', $margin);
    }

    public function offsetX(float $offsetX): static
    {
        return $this->setOption('offsetX', $offsetX);
    }

    public function offsetY(float $offsetY): static
    {
        return $this->setOption('offsetY', $offsetY);
    }

    public function floating(bool $floating): static
    {
        return $this->setOption('floating', $floating);
    }
}