<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // define este painel como o padrão (útil quando tem múltiplos panels)
            ->default()
            // id interno do painel (qualquer string única)
            ->id('admin')
            // path público (prefixo) - ex: https://app.test/admin
            ->path('laraveling')
            // Forçar apenas um domínio (ex.: admin.meusite.com)
            // ->domain('admin.meusite.com')
            ->login()
            // cores/tema (opcional, usando enum de Color)
            ->colors([
                'primary' => Color::Purple,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([Pages\Dashboard::class])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([Widgets\AccountWidget::class, Widgets\FilamentInfoWidget::class])
            // middleware que roda nas rotas públicas do panel (ex: web)
            ->middleware([EncryptCookies::class, AddQueuedCookiesToResponse::class, StartSession::class, AuthenticateSession::class, ShareErrorsFromSession::class, VerifyCsrfToken::class, SubstituteBindings::class, DisableBladeIconComponents::class, DispatchServingFilamentEvent::class])
            // middleware para rotas autenticadas do panel
            ->authMiddleware([Authenticate::class])
            // ativa/desativa broadcasting automático (depende de config/filament.php publicado)
            // ->broadcasting(false)
            // habilita alerts de "unsaved changes" nos forms (Create/Edit)
            ->unsavedChangesAlerts()
            // habilita wrap de ações em transações DB
            ->databaseTransactions();
    }
}
