<?php
namespace ApexCharts;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Options\Chart;
use ApexCharts\Options\DataLabels;
use ApexCharts\Options\Fill;
use ApexCharts\Options\ForecastDataPoints;
use ApexCharts\Options\Grid;
use ApexCharts\Options\Legend;
use ApexCharts\Options\Markers;
use ApexCharts\Options\NoData;
use ApexCharts\Options\Serie;
use ApexCharts\Options\States;
use ApexCharts\Options\Stroke;
use ApexCharts\Options\Subtitle;
use ApexCharts\Options\Theme;
use ApexCharts\Options\Title;
use ApexCharts\Options\Tooltip;
use ApexCharts\Options\XAxis;
use ApexCharts\Options\YAxis;
use ApexCharts\Traits\Options;
use BackedEnum;
use Balping\JsonRaw\Encoder;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use UnitEnum;
use function Illuminate\Support\enum_value;

class Builder implements Jsonable
{
    use Options;

    /**
     * Initializes an instance and sets up default chart options by retrieving them from configuration.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setOptions(config('apexcharts.options'));
    }

    public function chart(Chart $chart): static
    {
        return $this->setOption('chart', $chart);
    }

    public function labels(array $labels): static
    {
        return $this->setOption('labels', $labels);
    }

    public function colors(array $colors): static
    {
        return $this->setOption('colors', $colors);
    }

    public function stroke(Stroke $stroke): static
    {
        return $this->setOption('stroke', $stroke);
    }

    public function xAxis(XAxis $xAxis): static
    {
        return $this->setOption('xaxis', $xAxis);
    }

    public function yAxis(bool|YAxis $yAxis): static
    {
        if(is_bool($yAxis)){
            return $this->setOption('yaxis.show', $yAxis);
        }

        return $this->setOption('yaxis', $yAxis);
    }

    public function grid(Grid $grid): static
    {
        return $this->setOption('grid', $grid);
    }

    public function fill(Fill $fill): static
    {
        return $this->setOption('fill', $fill);
    }

    public function serie(Serie $serie): static
    {
        return $this->setOption('series', $serie, true);
    }

    public function plotOptions(PlotOptionsAbstract $plotOptions): static
    {
        return $this->setOption('plotOptions.' . enum_value($plotOptions->getType()), $plotOptions);
    }

    public function forecastDataPoints(ForecastDataPoints $forecastDataPoints): static
    {
        return $this->setOption('forecastDataPoints', $forecastDataPoints);
    }

    public function states(States $states): static
    {
        return $this->setOption('states', $states);
    }

    public function noData(NoData $noData): static
    {
        return $this->setOption('noData', $noData);
    }

    public function title(Title $title): static
    {
        return $this->setOption('title', $title);
    }

    public function subtitle(Subtitle $subtitle): static
    {
        return $this->setOption('subtitle', $subtitle);
    }

    public function theme(Theme $theme): static
    {
        return $this->setOption('theme', $theme);
    }

    public function markers(bool|Markers $markers): static
    {
        if($markers === false){
            return $this->setOption('markers.size', 0);
        }

        return $this->setOption('markers', $markers);
    }

    public function dataLabels(bool|DataLabels $value): static
    {
        if(is_bool($value)){
            return $this->setOption('dataLabels.enabled', $value);
        }

        return $this->setOption('dataLabels', $value);
    }

    public function tooltip(bool|Tooltip $value): static
    {
        if(is_bool($value)){
            return $this->setOption('tooltip.enabled', $value);
        }

        return $this->setOption('dataLabels', $value);
    }

    public function legend(bool|Legend $value): static
    {
        if(is_bool($value)){
            return $this->setOption('legend.show', $value);
        }

        return $this->setOption('legend', $value);
    }

    /**
     * Sets the dataset using the provided series.
     *
     * @param array $series An array of series to be set in the dataset.
     * @return static
     */
    public function dataset(array $series): static
    {
        Arr::map($series, function($serie){
            $this->serie($serie);
        });

        return $this;
    }

    /**
     * Retrieves the chart ID.
     *
     * @return string The chart ID.
     */
    public function getId(): string
    {
        if(!$this->getOption('chart') instanceof Chart){
            $this->setOption('chart', Chart::make());
        }

        return $this->getOption('chart')->getOption('id');
    }

    /**
     * Converts the options object to a JSON string representation.
     *
     * @return string Returns the JSON encoded string of the options.
     */
    public function toJson($options = 0): string
    {
        return Encoder::encode($this->collectRecursive($this->options)->toArray());
    }

    /**
     * Processes the given array recursively and returns a collection.
     *
     * @param array $array The array to be processed recursively.
     * @return Collection
     */
    protected function collectRecursive(array $array): Collection
    {
        return $this->processRecursive($array);
    }

    /**
     * Processes the given item recursively, handling arrays, collections, and objects.
     *
     * @param mixed $item The item to be processed, which can be an array, a collection, or an object.
     * @return mixed The processed item after applying the recursive logic.
     */
    protected function processRecursive(mixed $item): mixed
    {
        if(is_array($item)){
            return collect($item)->map(fn($value) => $this->processRecursive($value));
        }

        if($item instanceof Collection){
            return $item->map(fn($value) => $this->processRecursive($value));
        }

        if($item instanceof UnitEnum){
            return enum_value($item);
        }

        if(is_object($item)){
            return $this->processRecursive($item->getOptions());
        }

        return $item;
    }
}