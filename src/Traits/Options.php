<?php

namespace ApexCharts\Traits;

use Illuminate\Support\Arr;
use UnitEnum;

trait Options
{
    /**
     * @var array
     */
    protected array $options = [];

    /**
     * Results array of items from Collection or Arrayable.
     *
     * @param mixed $items
     * @return array
     */
    public function getArrayableItems(mixed $items): array
    {
        return is_null($items) || is_scalar($items) || $items instanceof UnitEnum
            ? Arr::wrap($items)
            : Arr::from($items);
    }

    /**
     * Retrieves all options stored in the options array.
     *
     * @return array The array of all options.
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Sets and merges the given options into the current options.
     *
     * @param mixed $options The new options to merge with the existing options.
     * @return static
     */
    public function setOptions(mixed $options): static
    {
        $this->options = array_merge_recursive($this->options, $this->getArrayableItems($options));
        return $this;
    }

    /**
     * Retrieves an option value from the options array using the specified key.
     *
     * @param string $key The key to search for in the options array.
     * @param mixed $default The default value to return if the key is not found.
     * @return mixed The value associated with the key, or the default value if the key does not exist.
     */
    public function getOption(string $key, mixed $default = null): mixed
    {
        return Arr::get($this->options, $key, $default);
    }

    /**
     * Represents a string key used as an identifier or indexing mechanism.
     *
     * This variable typically serves as a unique identifier or a lookup key
     * and is expected to hold valid string data.
     */
    public function setOption(string $key, mixed $value, bool $push = false): static
    {
        $method = $push ? 'push' : 'set';
        Arr::$method($this->options, $key, $value);

        return $this;
    }
}