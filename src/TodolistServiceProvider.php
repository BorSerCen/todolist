<?php

namespace Borsercen\Todolist;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider {
	/**
	 * Register services.
	 *
	 * @return void
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function register() {
		$this->app->make('Borsercen\Todolist\TaskController');
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->loadRoutesFrom(__DIR__.'/routes.php');
		$this->loadMigrationsFrom(__DIR__.'/migrations');
		$this->loadViewsFrom(__DIR__.'/views', 'todolist');
		$this->publishes([
			__DIR__.'/views' => resource_path('views/borsercen/todolist'),
		]);
	}
}
