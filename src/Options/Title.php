<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\TitleAbstract;
use ApexCharts\Options\Title\Style;

class Title extends TitleAbstract
{
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        $this->setOptions(config('apexcharts.options.title'));
    }

    public function style(Style $style): static
    {
        return $this->setOption('style', $style);
    }
}