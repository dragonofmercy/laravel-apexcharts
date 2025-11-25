<?php

namespace ApexCharts\Options\Fill;

use ApexCharts\Abstracts\OptionsAbstract;

class Image extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options'));
        parent::__construct($options);
    }

    public function src(string $src): static
    {
        return $this->setOption('src', $src);
    }

    public function width(int $width): static
    {
        return $this->setOption('width', $width);
    }

    public function height(int $height): static
    {
        return $this->setOption('height', $height);
    }
}