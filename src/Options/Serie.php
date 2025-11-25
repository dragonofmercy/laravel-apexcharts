<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartType;

class Serie extends OptionsAbstract
{
    public function name(string $name): static
    {
        return $this->setOption('name', $name);
    }

    public function data(array $data): static
    {
        return $this->setOption('data', $data);
    }

    public function type(ChartType $type): static
    {
        return $this->setOption('type', $type);
    }

    public function color(string $color): static
    {
        return $this->setOption('color', $color);
    }

    public function hidden(bool $hidden): static
    {
        return $this->setOption('hidden', $hidden);
    }

    public function group(string $group): static
    {
        return $this->setOption('group', $group);
    }

    public function zIndex(int $zIndex): static
    {
        return $this->setOption('zIndex', $zIndex);
    }

    /**
     * Creates a new instance with optional configurations.
     *
     * @param array|null $options An associative array of options where keys match method names and values are passed as arguments to the methods.
     * @return static Returns a new instance configured with the provided options, or the default instance if no options are given.
     */
    public static function make(?array $options = null): static
    {
        $objSerie = parent::make();

        if(null === $options){
            return $objSerie;
        }

        foreach($options as $k => $v){
            if(method_exists($objSerie, $k)){
                $objSerie->$k($v);
            }
        }

        return $objSerie;
    }
}