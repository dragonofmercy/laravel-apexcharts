<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\TitleAbstract;
use ApexCharts\Options\Subtitle\Style;

class Subtitle extends TitleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.subtitle'));
        parent::__construct($options);
    }

    public function style(Style $style): static
    {
        return $this->setOption('style', $style);
    }
}