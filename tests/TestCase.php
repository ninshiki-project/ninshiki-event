<?php

namespace MarJose123\NinshikiEvent\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MarJose123\NinshikiEvent\NinshikiEventServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MarJose123\\NinshikiEvent\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            NinshikiEventServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_ninshiki-event_table.php.stub';
        $migration->up();
        */
    }
}
