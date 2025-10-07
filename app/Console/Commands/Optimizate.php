<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Optimizate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:optimizate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear caches, optimize resources, update icons, and refresh Filament components.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Iniciando ...');

        $this->info('Limpando otimizações e caches...');
        $this->call('optimize:clear');
        $this->info('Otimizações e caches limpos com sucesso!');

        $this->info('Atualizando ícones...');
        $this->call('icons:cache');
        $this->info('Ícones atualizados com sucesso!');

        $this->info('Atualizando componentes do Filament...');
        $this->call('filament:cache-components');
        $this->info('Componentes do Filament atualizados com sucesso!');

        $this->info('Otimização concluída com sucesso!');
    }
}
