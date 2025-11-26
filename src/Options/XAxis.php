<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\AxisAbstract;
use ApexCharts\Enums\XAxisTickPlacement;
use ApexCharts\Enums\XAxisPosition;
use ApexCharts\Enums\XAxisType;
use ApexCharts\Options\XAxis\AxisBorder;
use ApexCharts\Options\XAxis\AxisTicks;
use ApexCharts\Options\XAxis\Group;
use ApexCharts\Options\XAxis\Labels;
use ApexCharts\Options\XAxis\Tooltip;
use ApexCharts\Options\XAxis\Crosshairs;

class XAxis extends AxisAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis'));
        parent::__construct($options);
    }

    public function type(XAxisType $type): static
    {
        return $this->setOption('type', $type);
    }

    public function tickPlacement(XAxisTickPlacement $placement): static
    {
        return $this->setOption('tickPlacement', $placement);
    }

    public function position(XAxisPosition $placement): static
    {
        return $this->setOption('position', $placement);
    }

    public function categories(array $categories): static
    {
        return $this->setOption('categories', $categories);
    }

    public function range(float $value): static
    {
        return $this->setOption('range', $value);
    }

    public function overwriteCategories(array $value): static
    {
        return $this->setOption('overwriteCategories', $value);
    }

    public function group(Group $value): static
    {
        return $this->setOption('group', $value);
    }

    public function labels(bool|Labels $value): static
    {
        if(is_bool($value)){
            return $this->setOption('labels.show', $value);
        } else {
            return $this->setOption('labels', $value);
        }
    }

    public function axisBorder(bool|AxisBorder $value): static
    {
        if(is_bool($value)){
            return $this->setOption('axisBorder.show', $value);
        } else {
            return $this->setOption('axisBorder', $value);
        }
    }

    public function axisTicks(bool|AxisTicks $value): static
    {
        if(is_bool($value)){
            return $this->setOption('axisTicks.show', $value);
        } else {
            return $this->setOption('axisTicks', $value);
        }
    }

    public function crosshairs(bool|Crosshairs $value): static
    {
        if(is_bool($value)){
            return $this->setOption('crosshairs.show', $value);
        } else {
            return $this->setOption('crosshairs', $value);
        }
    }

    public function tooltip(bool|Tooltip $value): static
    {
        if(is_bool($value)){
            return $this->setOption('tooltip.enabled', $value);
        } else {
            return $this->setOption('tooltip', $value);
        }
    }
}