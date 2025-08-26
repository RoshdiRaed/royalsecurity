<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\ContactSubmission;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $serviceTrend = $this->getWeeklyTrend(Service::class);
        $testimonialTrend = $this->getWeeklyTrend(Testimonial::class);
        $portfolioTrend = $this->getWeeklyTrend(Portfolio::class);
        $submissionTrend = $this->getWeeklyTrend(ContactSubmission::class);

        return [
            Stat::make(__('Royal Security Services'), Service::count())
                ->description(__('Total security services offered by Royal Security'))
                ->descriptionIcon('heroicon-o-shield-check')
                ->color('primary')
                ->chart($serviceTrend)
                ->extraAttributes([
                    'class' => 'shadow-xl rounded-xl p-6 bg-gradient-to-r from-blue-600 to-blue-800 text-white hover:shadow-2xl transition-shadow duration-300',
                    'style' => 'background-image: url(' . asset('storage/logo.png') . '); background-size: 50px; background-position: top right; background-repeat: no-repeat;',
                ]),
            Stat::make(__('Royal Security Testimonials'), Testimonial::count())
                ->description(__('Client feedback for Royal Security'))
                ->descriptionIcon('heroicon-o-chat-bubble-left-right')
                ->color('success')
                ->chart($testimonialTrend)
                ->extraAttributes([
                    'class' => 'shadow-xl rounded-xl p-6 bg-gradient-to-r from-green-600 to-green-800 text-white hover:shadow-2xl transition-shadow duration-300',
                    'style' => 'background-image: url(' . asset('storage/logo.png') . '); background-size: 50px; background-position: top right; background-repeat: no-repeat;',
                ]),
            Stat::make(__('Royal Security Portfolio'), Portfolio::count())
                ->description(__('Completed projects by Royal Security'))
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('warning')
                ->chart($portfolioTrend)
                ->extraAttributes([
                    'class' => 'shadow-xl rounded-xl p-6 bg-gradient-to-r from-yellow-600 to-yellow-800 text-white hover:shadow-2xl transition-shadow duration-300',
                    'style' => 'background-image: url(' . asset('storage/logo.png') . '); background-size: 50px; background-position: top right; background-repeat: no-repeat;',
                ]),
            Stat::make(__('Royal Security Contact Submissions'), ContactSubmission::count())
                ->description(__('Messages received by Royal Security'))
                ->descriptionIcon('heroicon-o-envelope')
                ->color('danger')
                ->chart($submissionTrend)
                ->extraAttributes([
                    'class' => 'shadow-xl rounded-xl p-6 bg-gradient-to-r from-red-600 to-red-800 text-white hover:shadow-2xl transition-shadow duration-300',
                    'style' => 'background-image: url(' . asset('storage/logo.png') . '); background-size: 50px; background-position: top right; background-repeat: no-repeat;',
                ]),
        ];
    }

    protected function getWeeklyTrend(string $model): array
    {
        $trend = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i)->startOfDay();
            $count = $model::whereDate('created_at', $date)->count();
            $trend[] = $count;
        }
        return $trend;
    }
}
