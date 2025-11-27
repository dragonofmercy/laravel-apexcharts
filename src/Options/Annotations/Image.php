<?php

namespace ApexCharts\Options\Annotations;

use ApexCharts\Abstracts\OptionsAbstract;

class Image extends OptionsAbstract
{
    public function path(string $value): static
    {
        return $this->setOption('path', $value);
    }

    public function x(mixed $value): static
    {
        return $this->setOption('x', $value);
    }

    public function y(mixed $value): static
    {
        return $this->setOption('y', $value);
    }

    public function width(int $value): static
    {
        return $this->setOption('width', $value);
    }

    public function height(int $value): static
    {
        return $this->setOption('height', $value);
    }

    public function appendTo(string $value): static
    {
        return $this->setOption('appendTo', $value);
    }
}