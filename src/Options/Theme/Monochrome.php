<?php

namespace ApexCharts\Options\Theme;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Shade;

class Monochrome extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.theme.monochrome'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function color(string $color): static
    {
        return $this->setOption('color', $color);
    }

    public function shadeTo(Shade $shadeTo): static
    {
        return $this->setOption('shadeTo', $shadeTo);
    }

    public function shadeIntensity(float $shadeIntensity): static
    {
        return $this->setOption('shadeIntensity', $shadeIntensity);
    }
}