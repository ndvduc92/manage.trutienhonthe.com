<?php


namespace hrace009\ConfigWriter;

use hrace009\ConfigWriter\DataWriter\FileWriter;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind it only once so we can reuse in IoC
        $this->app->singleton($this->repository(), function ($app, $items) {
            $writer = new FileWriter($this->getFiles(), $this->getConfigPath());
            return new Repository($writer, $items);
        });

        $this->app->extend('config', function ($config, $app) {
            // Capture the loaded configuration items
            $config_items = $config->all();
            return $app->make($this->repository(), $config_items);
        });
    }

    public function repository()
    {
        return Repository::class;
    }

    protected function getFiles(): Filesystem
    {
        return $this->app['files'];
    }

    protected function getConfigPath(): string
    {
        return $this->app['path.config'];
    }
}
