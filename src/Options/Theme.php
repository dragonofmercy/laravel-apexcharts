<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ColorPalette;
use ApexCharts\Enums\Theme as Mode;
use ApexCharts\Options\Theme\Monochrome;

class Theme extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.theme'));
        parent::__construct($options);
    }

    public function mode(Mode $value): static
    {
        return $this->setOption('mode', $value);
    }

    public function palette(ColorPalette $value): static
    {
        return $this->setOption('palette', $value);
    }

    public function monochrome(bool|Monochrome $value): static
    {
        if(is_bool($value)){
            return $this->setOption('monochrome.enabled', $value);
        }

        return $this->setOption('monochrome', $value);
    }
}