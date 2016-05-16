<?php
/**
 * Created by PhpStorm.
 * User: a9396
 * Date: 2016/5/16
 * Time: 23:20
 */

namespace Doraemons\Container\Contracts;


interface ContextualBindingBuilder
{
    /**
     * Define the abstract target that depends on the context.
     *
     * @param  string  $abstract
     * @return $this
     */
    public function needs($abstract);

    /**
     * Define the implementation for the contextual binding.
     *
     * @param  \Closure|string  $implementation
     * @return void
     */
    public function give($implementation);
}