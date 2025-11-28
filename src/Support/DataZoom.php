<?php

namespace ApexCharts\Support;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Builder;
use ApexCharts\Enums\DataZoomPosition;
use ApexCharts\Options\Chart;
use ApexCharts\Options\Chart\Brush;
use ApexCharts\Options\Chart\Selection;
use ApexCharts\Options\Stroke;
use ApexCharts\Options\XAxis;
use Illuminate\Support\Collection;
use Illuminate\View\ComponentAttributeBag;
use InvalidArgumentException;

class DataZoom extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions([
            'brush' => Brush::make(),
            'selection' => Selection::make(),
            'position' => DataZoomPosition::Bottom,
            'serieIndex' => 0,
            'height' => 48,
            'attributes' => new ComponentAttributeBag([])
        ]);

        parent::__construct($options);
    }

    public function selection(Selection $selection): static
    {
        return $this->setOption('selection', $selection);
    }

    public function brush(Brush $brush): static
    {
        return $this->setOption('brush', $brush);
    }

    public function position(DataZoomPosition $position): static
    {
        return $this->setOption('position', $position);
    }

    public function serieIndex(int $index): static
    {
        return $this->setOption('seriesIndex', $index);
    }

    public function height(float $height): static
    {
        return $this->setOption('height', $height);
    }

    public function attributes(array|Collection|ComponentAttributeBag $attributes): static
    {
        return $this->setOption('attributes', $attributes);
    }

    /**
     * Builds and returns a chart representation based on the provided parent builder and internal options.
     *
     * @param Builder $parent The parent builder object containing options and configurations.
     * @return string The rendered chart as a string.
     *
     * @throws InvalidArgumentException If the specified series index does not exist in the dataset.
     */
    public function build(Builder $parent): string
    {
        $currentSeries = $parent->getOption('series');
        $serieIndex = $this->options['serieIndex'];

        if(!array_key_exists($serieIndex, $currentSeries)){
            throw new InvalidArgumentException("The specified serie index does not exist in the dataset.");
        }

        return (new Builder())
            ->tooltip(false)
            ->chart(
                Chart::make()
                    ->id('zoom-' . $parent->getId())
                    ->type($parent->getOption('chart')->getOption('type'))
                    ->height($this->options['height'])
                    ->sparkline()
                    ->selection($this->options['selection'])
                    ->brush($this->options['brush']->target($parent->getId()))
            )
            ->stroke(Stroke::make()->width(2))
            ->xAxis(XAxis::make()->type($parent->getOption('xaxis')->getOption('type')))
            ->serie([$currentSeries[$serieIndex]])
            ->renderChart($this->options['attributes']);
    }
}