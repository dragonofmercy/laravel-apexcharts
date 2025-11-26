<?php

namespace ApexCharts\Options\DataLabels;

use ApexCharts\Abstracts\OptionsAbstract;

class Style extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.dataLabels.style'));
        parent::__construct($options);
    }

    public function fontSize(string $fontSize): static
    {
        return $this->setOption('fontSize', $fontSize);
    }

    public function fontFamily(string $fontFamily): static
    {
        return $this->setOption('fontFamily', $fontFamily);
    }

    public function fontWeight(string|int $fontWeight): static
    {
        return $this->setOption('fontWeight', $fontWeight);
    }

    public function colors(array $colors): static
    {
        return $this->setOption('colors', $colors);
    }
}