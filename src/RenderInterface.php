<?php

declare(strict_types=1);

namespace PHPForge\Html\Interop;

use Stringable;

/**
 * Provide methods for handling HTML rendering.
 */
interface RenderInterface extends Stringable
{
    /**
     * Executes the widget.
     *
     * This method is responsible for executing the widget and returning the result of the execution as a string.
     *
     * @return string The result of widget execution to be outputted.
     */
    public function render(): string;
}
