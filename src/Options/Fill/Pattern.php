<?php

namespace ApexCharts\Options\Fill;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\PatternStyle;

class Pattern extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options'));
        parent::__construct($options);
    }

    public function style(PatternStyle $value): static
    {
        return $this->setOption('style', $value);
    }

    public function width(int $value): static
    {
        return $this->setOption('width', $value);
    }

    public function height(int $value): static
    {
        return $this->setOption('height', $value);
    }

    public function strokeWidth(int $value): static
    {
        return $this->setOption('strokeWidth', $value);
    }
}