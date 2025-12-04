<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\TextAnchor;
use ApexCharts\Options\DataLabels\Background;
use ApexCharts\Options\DataLabels\DropShadow;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class DataLabels extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.dataLabels'));
        $this->setOption('enabled', true);

        parent::__construct($options);
    }

    public function enabledOnSeries(array $value): static
    {
        return $this->setOption('enabledOnSeries', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(val, opts){ $value }";
        }

        return $this->setOption('formatter', new Raw($value));
    }

    public function textAnchor(TextAnchor $value): static
    {
        return $this->setOption('textAnchor', $value);
    }

    public function distributed(bool $value = true): static
    {
        return $this->setOption('distributed', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function background(Background $value): static
    {
        return $this->setOption('background', $value);
    }

    public function dropShadow(DropShadow $value): static
    {
        return $this->setOption('dropShadow', $value);
    }

    public function fontSize(string $fontSize): static
    {
        return $this->setOption('style.fontSize', $fontSize);
    }

    public function fontFamily(string $fontFamily): static
    {
        return $this->setOption('style.fontFamily', $fontFamily);
    }

    public function fontWeight(string|int $fontWeight): static
    {
        return $this->setOption('style.fontWeight', $fontWeight);
    }

    public function colors(array $colors): static
    {
        return $this->setOption('style.colors', $colors);
    }
}