<?php

namespace ApexCharts\Options\Chart\Toolbar;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Export extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.toolbar.export'));
        parent::__construct($options);
    }

    /**
     * Sets the scale option.
     *
     * @param float $value The scale value to be set.
     * @return static
     */
    public function scale(float $value): static
    {
        return $this->setOption('scale', $value);
    }

    /**
     * Sets the width option.
     *
     * @param float $value The width value to be set.
     * @return static
     */
    public function width(float $value): static
    {
        return $this->setOption('width', $value);
    }

    /**
     * Set the SVG filename option.
     *
     * @param string $value The name of the SVG file.
     * @return static
     */
    public function svgFilename(string $value): static
    {
        return $this->setOption('svg.filename', $value);
    }

    /**
     * Sets the PNG filename option.
     *
     * @param string $value The filename to be used for the PNG export.
     * @return static
     */
    public function pngFilename(string $value): static
    {
        return $this->setOption('png.filename', $value);
    }

    /**
     * Sets the CSV filename option.
     *
     * @param string $value The desired filename for the CSV.
     * @return static
     */
    public function csvFilename(string $value): static
    {
        return $this->setOption('csv.filename', $value);
    }

    /**
     * Sets the CSV column delimiter.
     *
     * @param string $value The delimiter to use for separating columns in the CSV export.
     * @return static
     */
    public function csvColumnDelimiter(string $value): static
    {
        return $this->setOption('csv.columnDelimiter', $value);
    }

    /**
     * Sets the CSV header category option.
     *
     * @param string $value The value of the CSV header category.
     * @return static
     */
    public function csvHeaderCategory(string $value): static
    {
        return $this->setOption('csv.headerCategory', $value);
    }

    /**
     * Sets the CSV header value option.
     *
     * @param string $value The header value to set for the CSV.
     * @return static
     */
    public function csvHeaderValue(string $value): static
    {
        return $this->setOption('csv.headerValue', $value);
    }

    /**
     * Formats the CSV category value.
     *
     * @param string $value The value to format as a category.
     * @return static
     */
    public function csvCategoryFormatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(x){ $value }";
        }

        return $this->setOption('csv.categoryFormatter', new Raw($value));
    }

    /**
     * Formats the given value to ensure it is a valid JavaScript function for CSV value formatting.
     *
     * @param string $value The value to be formatted, which will be wrapped into a JavaScript function if it is not already one.
     * @return static
     */
    public function csvValueFormatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(y){ $value }";
        }

        return $this->setOption('csv.valueFormatter', new Raw($value));
    }
}