<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Options\Annotations\Image;
use ApexCharts\Options\Annotations\Point;
use ApexCharts\Options\Annotations\Text;
use ApexCharts\Options\Annotations\YAxis;
use ApexCharts\Options\Annotations\XAxis;

class Annotations extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.annotations'));
        parent::__construct($options);
    }

    public function yAxis(YAxis $value): static
    {
        return $this->setOption('yaxis', $value, true);
    }

    public function xAxis(XAxis $value): static
    {
        return $this->setOption('xaxis', $value, true);
    }

    public function point(Point $value): static
    {
        return $this->setOption('points', $value, true);
    }

    public function text(Text $value): static
    {
        return $this->setOption('texts', $value, true);
    }

    public function image(Image $value): static
    {
        return $this->setOption('images', $value, true);
    }
}