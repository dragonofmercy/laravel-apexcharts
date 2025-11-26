<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

abstract class AxisTitleAbstract extends OptionsAbstract
{
    public function text(string $text): static
    {
        return $this->setOption('text', $text);
    }

    public function offsetX(float $offsetX): static
    {
        return $this->setOption('offsetX', $offsetX);
    }

    public function offsetY(float $offsetY): static
    {
        return $this->setOption('offsetY', $offsetY);
    }

    public function fontSize(string $fontSize): static
    {
        return $this->setOption('style.fontSize', $fontSize);
    }

    public function fontFamily(string $fontFamily): static
    {
        return $this->setOption('style.fontFamily', $fontFamily);
    }

    public function color(string $color): static
    {
        return $this->setOption('style.color', $color);
    }

    public function fontWeight(string|int $value): static
    {
        return $this->setOption('style.fontWeight', $value);
    }

    public function cssClass(string $value): static
    {
        return $this->setOption('style.cssClass', $value);
    }
}