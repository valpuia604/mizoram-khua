<?php

namespace Valpuia\MizoramKhua;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MizoramKhuaServiceProvider extends PackageServiceProvider
{
    public static string $name = 'mizoram-khua';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasMigrations($this->getMigrations())
            ->hasCommand(Commands\SeederCommand::class)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('valpuia/mizoram-khua');
            });
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_mizoram_districts_table',
            'create_mizoram_villages_table',
        ];
    }
}
