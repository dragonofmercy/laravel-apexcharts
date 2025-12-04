<?php

namespace ApexCharts\Options\PlotOptions\Bar\DataLabels;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Total extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotoptions.bar.datalabels.total'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(val, o){ $value }";
        }

        return $this->setOption('formatter', new Raw($value));
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function color(string $value): static
    {
        return $this->setOption('style.color', $value);
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('style.fontSize', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('style.fontFamily', $value);
    }

    public function fontWeight(string|int $value): static
    {
        return $this->setOption('style.fontWeight', $value);
    }
}