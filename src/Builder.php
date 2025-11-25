<?php
namespace ApexCharts;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Options\Chart;
use ApexCharts\Options\DataLabels;
use ApexCharts\Options\ForecastDataPoints;
use ApexCharts\Options\Grid;
use ApexCharts\Options\Legend;
use ApexCharts\Options\NoData;
use ApexCharts\Options\Serie;
use ApexCharts\Options\States;
use ApexCharts\Options\Stroke;
use ApexCharts\Options\Subtitle;
use ApexCharts\Options\Title;
use ApexCharts\Options\XAxis;
use ApexCharts\Options\YAxis;
use ApexCharts\Traits\Options;
use Balping\JsonRaw\Encoder;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
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

    /**
     * Sets the chart option for the current instance.
     *
     * @param Chart $chart The chart instance to be set.
     * @return static
     */
    public function chart(Chart $chart): static
    {
        return $this->setOption('chart', $chart);
    }

    /**
     * Sets the labels option.
     *
     * @param array $labels An array of labels to be set.
     * @return static
     */
    public function labels(array $labels): static
    {
        return $this->setOption('labels', $labels);
    }

    /**
     * Sets the colors option.
     *
     * @param array $colors An array of colors to be set.
     * @return static
     */
    public function colors(array $colors): static
    {
        return $this->setOption('colors', $colors);
    }

    /**
     * Sets the stroke option.
     *
     * @param Stroke $stroke The stroke configuration to be set.
     * @return static
     */
    public function stroke(Stroke $stroke): static
    {
        return $this->setOption('stroke', $stroke);
    }

    /**
     * Sets the x-axis configuration.
     *
     * @param XAxis $xAxis An instance of the xAxis configuration to be set.
     * @return static
     */
    public function xAxis(XAxis $xAxis): static
    {
        return $this->setOption('xaxis', $xAxis);
    }

    /**
     * Configures the y-axis option.
     *
     * @param bool|YAxis $yAxis A boolean to show or hide the y-axis, or a YAxis instance to configure the y-axis.
     * @return static
     */
    public function yAxis(bool|YAxis $yAxis): static
    {
        if(is_bool($yAxis)){
            return $this->setOption('yaxis.show', $yAxis);
        }

        return $this->setOption('yaxis', $yAxis);
    }

    /**
     * Sets the grid option.
     *
     * @param Grid $grid The grid object to be set.
     * @return static
     */
    public function grid(Grid $grid): static
    {
        return $this->setOption('grid', $grid);
    }

    /**
     * Adds a series to the options.
     *
     * @param Serie $serie An instance of the Serie class to be added.
     * @return static
     */
    public function serie(Serie $serie): static
    {
        return $this->setOption('series', $serie, true);
    }

    /**
     * Sets the plot options configuration.
     *
     * @param PlotOptionsAbstract $plotOptions An instance of PlotOptionsAbstract that defines the plot options configuration.
     * @return static
     */
    public function plotOptions(PlotOptionsAbstract $plotOptions): static
    {
        return $this->setOption('plotOptions.' . enum_value($plotOptions->getType()), $plotOptions);
    }

    /**
     * Sets the forecast data points for the current instance.
     *
     * @param ForecastDataPoints $forecastDataPoints The forecast data points to set.
     * @return static
     */
    public function forecastDataPoints(ForecastDataPoints $forecastDataPoints): static
    {
        return $this->setOption('forecastDataPoints', $forecastDataPoints);
    }

    /**
     * Sets the states for the current instance.
     *
     * @param States $states The states to set.
     * @return static
     */
    public function states(States $states): static
    {
        return $this->setOption('states', $states);
    }

    /**
     * Sets the noData option.
     *
     * @param NoData $noData The noData instance to set.
     * @return static
     */
    public function noData(NoData $noData): static
    {
        return $this->setOption('noData', $noData);
    }

    /**
     * Sets the title for the current instance.
     *
     * @param Title $title The title to set.
     * @return static
     */
    public function title(Title $title): static
    {
        return $this->setOption('title', $title);
    }

    /**
     * Sets the subtitle for the current instance.
     *
     * @param Subtitle $subtitle The subtitle to set.
     * @return static
     */
    public function subtitle(Subtitle $subtitle): static
    {
        return $this->setOption('subtitle', $subtitle);
    }

    /**
     * Sets the data labels option.
     *
     * @param bool|DataLabels $value A boolean value to enable or disable data labels, or an instance of DataLabels to configure detailed settings.
     * @return static
     */
    public function dataLabels(bool|DataLabels $value): static
    {
        if(is_bool($value)){
            return $this->setOption('dataLabels.enabled', $value);
        }

        return $this->setOption('dataLabels', $value);
    }

    /**
     * Configures the legend option.
     *
     * @param bool|Legend $value A boolean to show/hide the legend or a Legend instance to configure it.
     * @return static
     */
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
        Arr::map($series, function ($serie){
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
        if($this->getOption('chart')){
            /** @var Chart $chartOptions */
            $chartOptions = $this->getOption('chart', new Chart());
            return $chartOptions->getOption('id', "");
        }

        return "";
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

        if(is_object($item)){
            foreach($item as $key => $value) {
                $item->{$key} = $this->processRecursive($value);
            }
        }

        return $item;
    }
}