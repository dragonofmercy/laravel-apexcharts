<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Theme;
use ApexCharts\Options\Tooltip\Fixed;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Tooltip extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.tooltip'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function enabledOnSeries(array $value): static
    {
        return $this->setOption('enabledOnSeries', $value);
    }

    public function shared(bool $value = true): static
    {
        return $this->setOption('shared', $value);
    }

    public function followCursor(bool $value = true): static
    {
        return $this->setOption('followCursor', $value);
    }

    public function intersect(bool $value = true): static
    {
        return $this->setOption('intersect', $value);
    }

    public function inverseOrder(bool $value = true): static
    {
        return $this->setOption('inverseOrder', $value);
    }

    public function custom(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(series, seriesIndex, dataPointIndex, w){ $value }";
        }

        return $this->setOption('custom', new Raw($value));
    }

    public function hideEmptySeries(bool $value = true): static
    {
        return $this->setOption('hideEmptySeries', $value);
    }

    public function theme(Theme $value): static
    {
        return $this->setOption('theme', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('style.fontFamily', $value);
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('style.fontSize', $value);
    }

    public function highlightDataSeries(bool $value = true)
    {
        return $this->setOption('onDatasetHover.highlightDataSeries', $value);
    }

    public function xShow(bool $value = true)
    {
        return $this->setOption('x.show', $value);
    }

    public function xFormat(string $value)
    {
        return $this->setOption('x.format', $value);
    }

    public function xFormatter(string $value)
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(value, series, seriesIndex, dataPointIndex, w){ $value }";
        }

        return $this->setOption('x.formatter', $value);
    }

    public function yFormatter(string $value)
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(value, series, seriesIndex, dataPointIndex, w){ $value }";
        }

        return $this->setOption('y.formatter', $value);
    }

    public function yTitleFormatter(string $value)
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(seriesName){ $value }";
        }

        return $this->setOption('y.title.formatter', $value);
    }

    public function zFormatter(string $value)
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(value, series, seriesIndex, dataPointIndex, w){ $value }";
        }

        return $this->setOption('z.formatter', $value);
    }

    public function zTitle(string $value)
    {
        return $this->setOption('z.title', $value);
    }

    public function marker(bool $value = true)
    {
        return $this->setOption('marker.show', $value);
    }

    public function itemsDisplay(string $value)
    {
        return $this->setOption('items.display', $value);
    }

    public function fixed(bool|Fixed $value): static
    {
        if(is_bool($value)){
            return $this->setOption('fixed.enabled', $value);
        }

        return $this->setOption('fixed', $value);
    }
}