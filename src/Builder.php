<?php
namespace ApexCharts;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Options\Annotations;
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
use Balping\JsonRaw\Encoder;
use Balping\JsonRaw\Raw;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use UnitEnum;
use function Illuminate\Support\enum_value;

class Builder implements Jsonable
{
    use Options;

    public function __construct(bool $withDefaults = true)
    {
        if($withDefaults){
            $this->setOptions(config('apexcharts.options'));
        }
    }

    public function annotations(Annotations $annotations): static
    {
        return $this->setOption('annotations', $annotations);
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

        return $this->setOption('yaxis', $yAxis, true);
    }

    public function grid(Grid $grid): static
    {
        return $this->setOption('grid', $grid);
    }

    public function fill(Fill $fill): static
    {
        return $this->setOption('fill', $fill);
    }

    public function serie(Serie|array $serie): static
    {
        if(is_array($serie)){
            return $this->setOption('series', $serie);
        }

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

        return $this->setOption('tooltip', $value);
    }

    public function legend(bool|Legend $value): static
    {
        if(is_bool($value)){
            return $this->setOption('legend.show', $value);
        }

        return $this->setOption('legend', $value);
    }

    /**
     * Add responsive option with a specified breakpoint and builder options.
     *
     * @param float $brakepointDown The breakpoint value for the responsive setting.
     * @param Builder $builder The builder instance containing options to be applied.
     * @return static
     */
    public function responsive(float $brakepointDown, Builder $builder): static
    {
        return $this->setOption('responsive', [
            'breakpoint' => $brakepointDown,
            'options' => $builder->toArray()
        ], true);
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
     * Converts the options object to an array representation.
     *
     * @return array Returns the array representation of the options.
     */
    public function toArray(): array
    {
        return $this->collectRecursive($this->options)->toArray();
    }

    /**
     * Converts the options object to a JSON string representation.
     *
     * @return string Returns the JSON encoded string of the options.
     */
    public function toJson($options = 0): string
    {
        return Encoder::encode($this->toArray());
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

        if($item instanceof Raw){
            return $item;
        }

        if(is_object($item)){
            return $this->processRecursive($item->getOptions());
        }

        return $item;
    }

    /**
     * Sets the DataZoom object for the current instance.
     *
     * @param DataZoom $dataZoom The DataZoom object to be set.
     * @return static
     */
    public function dataZoom(DataZoom $dataZoom): static
    {
        $this->dataZoom = $dataZoom;
        return $this;
    }

    /**
     * Renders a chart within a container div and a script using the given attributes.
     *
     * @param array|Collection|ComponentAttributeBag $attributes The attributes to be applied to the chart container.
     * @return string Returns the rendered HTML content of the chart container with attributes and script.
     */
    public function renderChart(array|Collection|ComponentAttributeBag $attributes = [])
    {
        $dataZoomHtml = $this->renderDataZoom();

        $tag = $this->getChartContainer();
        $script = $this->getScript();

        if($attributes instanceof Collection){
            $attributes = $attributes->toArray();
        } elseif(is_array($attributes)){
            $attributes = new ComponentAttributeBag($attributes);
        }

        $html = Blade::render('<div {{ $attributes }}>' . $tag . $script . '</div>', compact('attributes'));

        if(!$dataZoomHtml){
            return $html;
        }

        return $this->dataZoom->getOption('position') === DataZoomPosition::Top ? $dataZoomHtml . $html : $html . $dataZoomHtml;
    }

    /**
     * Renders the data zoom configuration and returns the result.
     *
     * @return string|false Returns the rendered data zoom configuration as a string,
     *                      or false if the dataZoom property is null.
     */
    public function renderDataZoom(): string|false
    {
        if(null === $this->dataZoom){
            return false;
        }

        return $this->dataZoom->build($this);
    }

    /**
     * Retrieves the HTML container for the chart.
     *
     * @return string Returns the HTML string of the chart container.
     */
    public function getChartContainer(): string
    {
        return '<div id="' . $this->getId() . '"></div>';
    }

    /**
     * Generates and returns the JavaScript code required to initialize and render an ApexCharts chart.
     *
     * @return string The HTML script tag containing the JavaScript code to render the chart.
     */
    public function getScript(): string
    {
        $js = 'new ApexCharts(document.querySelector("#' . $this->getId() . '"), ' . $this->toJson() . ').render();';

        if(!Request::isXmlHttpRequest()){
            $js = 'window.addEventListener("DOMContentLoaded",function(){' . $js . '});';
        }

        return '<script type="text/javascript">' . $js . '</script>';
    }
}