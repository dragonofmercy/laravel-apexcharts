<?php

namespace ApexCharts\Support;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Builder;
use ApexCharts\Enums\ChartType;
use ApexCharts\Enums\DataZoomPosition;
use ApexCharts\Enums\XAxisType;
use ApexCharts\Options\Chart;
use ApexCharts\Options\Chart\Brush;
use ApexCharts\Options\Chart\Selection;
use ApexCharts\Options\Fill;
use ApexCharts\Options\Grid;
use ApexCharts\Options\Stroke;
use ApexCharts\Options\XAxis;
use Illuminate\Support\Collection;
use Illuminate\View\ComponentAttributeBag;
use InvalidArgumentException;
use RuntimeException;

class DataZoom extends OptionsAbstract
{
    protected ?Builder $dataZoomBuilder = null;

    public function __construct(array $options = [])
    {
        $this->setOptions([
            'brush' => Brush::make(),
            'selection' => Selection::make(),
            'position' => DataZoomPosition::Bottom,
            'serieIndex' => 0,
            'height' => 48,
            'chartType' => null,
            'stroke' => Stroke::make()->width(2),
            'fill' => null,
            'attributes' => new ComponentAttributeBag([])
        ]);

        parent::__construct($options);
    }

    public function attributes(array|Collection|ComponentAttributeBag $attributes): static
    {
        if(!$attributes instanceof ComponentAttributeBag){
            if($attributes instanceof Collection){
                $attributes = $attributes->toArray();
            }

            $attributes = new ComponentAttributeBag($attributes);
        }

        return $this->setOption('attributes', $attributes);
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
        return $this->setOption('serieIndex', $index);
    }

    public function stroke(Stroke $stroke): static
    {
        return $this->setOption('stroke', $stroke);
    }

    public function fill(Fill $fill): static
    {
        return $this->setOption('fill', $fill);
    }

    public function chartType(ChartType $type): static
    {
        if(!in_array($type, [ChartType::Area, ChartType::Bar, ChartType::Line])){
            throw new InvalidArgumentException("Invalid chart type specified, must be one of Area, Bar or Line.");
        }

        return $this->setOption('chartType', $type);
    }

    public function height(float $height): static
    {
        return $this->setOption('height', $height);
    }

    /**
     * @return Builder
     */
    public function getBuilder(): Builder
    {
        if(null === $this->dataZoomBuilder){
            throw new RuntimeException("DataZoom has not been built yet.  Call the build() method first.");
        }

        return $this->dataZoomBuilder;
    }

    /**
     * Builds a new instance of the Builder class configured with the specified chart options.
     *
     * @param Builder $parent The parent Builder instance used as a reference for configuration.
     * @return Builder
     */
    public function build(Builder $parent): Builder
    {
        $currentSeries = $parent->getOption('series');
        $serieIndex = $this->options['serieIndex'];

        if(!array_key_exists($serieIndex, $currentSeries)){
            throw new InvalidArgumentException("The specified serie index does not exist in the dataset.");
        }

        $this->dataZoomBuilder = (new Builder())
            ->attributes($this->options['attributes'])
            ->tooltip(false)
            ->chart(
                Chart::make()
                    ->id('zoom-' . $parent->getId())
                    ->type($this->options['chartType'] ?? $parent->getOption('chart')->getOption('type'))
                    ->height($this->options['height'])
                    ->sparkline()
                    ->selection($this->options['selection'])
                    ->brush($this->options['brush']->target($parent->getId()))
            )
            ->grid(Grid::make()->padding(left: 1, right: 1))
            ->stroke($this->options['stroke'])
            ->xAxis(XAxis::make()->type($this->getXAxisType($parent)))
            ->serie([$currentSeries[$serieIndex]]);

        if(null !== $this->options['fill']){
            $this->dataZoomBuilder->fill($this->options['fill']);
        }

        return $this->dataZoomBuilder;
    }

    protected function getXAxisType(Builder $parent): XAxisType
    {
        $type = $parent->getOption('xaxis')?->getOption('type');

        if(null === $type){
            $type = XAxisType::Datetime;
        }

        return $type;
    }
}