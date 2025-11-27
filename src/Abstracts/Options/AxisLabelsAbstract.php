<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;

abstract class AxisLabelsAbstract extends OptionsAbstract
{
    public function padding(float $value): static
    {
        return $this->setOption('padding', $value);
    }

    public function showDuplicates(bool $value = true): static
    {
        return $this->setOption('showDuplicates', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function rotate(float $value): static
    {
        return $this->setOption('rotate', $value);
    }

    public function formatter(string $value): static
    {
        return $this->setOption('formatter', new Raw($value));
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('style.fontSize', $value);
    }

    public function fontWeight(int|string $value): static
    {
        return $this->setOption('style.fontWeight', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('style.fontFamily', $value);
    }

    public function colors(array $value): static
    {
        return $this->setOption('style.colors', $value);
    }

    public function cssClass(string $value): static
    {
        return $this->setOption('style.cssClass', $value);
    }
}