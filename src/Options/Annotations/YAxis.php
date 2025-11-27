<?php

namespace ApexCharts\Options\Annotations;

use ApexCharts\Abstracts\Options\AnnotationsAxisAbstract;

class YAxis extends AnnotationsAxisAbstract
{
    public function y(mixed $value): static
    {
        return $this->setOption('y', $value);
    }

    public function y2(mixed $value): static
    {
        return $this->setOption('y2', $value);
    }

    public function width(string|float $value): static
    {
        return $this->setOption('width', $value);
    }

    public function yAxisIndex(int $value): static
    {
        return $this->setOption('yAxisIndex', $value);
    }
}