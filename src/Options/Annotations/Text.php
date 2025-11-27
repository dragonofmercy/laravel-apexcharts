<?php

namespace ApexCharts\Options\Annotations;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\TextAnchor;

class Text extends OptionsAbstract
{
    public function x(mixed $value): static
    {
        return $this->setOption('x', $value);
    }

    public function y(mixed $value): static
    {
        return $this->setOption('y', $value);
    }

    public function text(string $value): static
    {
        return $this->setOption('text', $value);
    }

    public function textAnchor(TextAnchor $value): static
    {
        return $this->setOption('textAnchor', $value);
    }

    public function foreColor(string $value): static
    {
        return $this->setOption('foreColor', $value);
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('fontSize', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('fontFamily', $value);
    }

    public function fontWight(string|int $value): static
    {
        return $this->setOption('fontWeight', $value);
    }

    public function appendTo(string $value): static
    {
        return $this->setOption('appendTo', $value);
    }

    public function backgroundColor(string $value): static
    {
        return $this->setOption('backgroundColor', $value);
    }

    public function borderColor(string $value): static
    {
        return $this->setOption('borderColor', $value);
    }

    public function borderRadius(int $value): static
    {
        return $this->setOption('borderRadius', $value);
    }

    public function borderWidth(int $value): static
    {
        return $this->setOption('borderWidth', $value);
    }
}