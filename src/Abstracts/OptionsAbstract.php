<?php

namespace ApexCharts\Abstracts;

use ApexCharts\Traits\Options;
use Illuminate\Contracts\Support\Arrayable;

abstract class OptionsAbstract implements Arrayable
{
    use Options;

    /**
     * Constructor method for initializing the object with the given options.
     *
     * @param array $options An optional array of configuration options to set.
     * @return void
     */
    public function __construct(array $options = [])
    {
        $this->setOptions($options);
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return collect($this->getOptions())->toArray();
    }

    /**
     * Factory method for creating a new instance of the class with the given options.
     *
     * @param array $options An optional array of configuration options to initialize the instance.
     * @return static A new instance of the class initialized with the provided options.
     */
    public static function make(array $options = []): static
    {
        return new static($options);
    }
}