<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Enums\Position;

abstract class AnnotationsAxisAbstract extends AnnotationsAbstract
{
    public function strokeDashArray(int $value): static
    {
        return $this->setOption('strokeDashArray', $value);
    }

    public function borderColor(string $value): static
    {
        return $this->setOption('borderColor', $value);
    }

    public function fillColor(string $value): static
    {
        return $this->setOption('fillColor', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function labelPosition(Position $value): static
    {
        return $this->setOption('label.position', $value);
    }
}