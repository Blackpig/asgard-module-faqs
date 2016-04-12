<?php namespace Modules\Faqs\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Faqs\Composers\FaqsPageComposer;

class FaqsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        view()->composer('faqs', FaqsPageComposer::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Faqs\Repositories\FaqsRepository',
            function () {
                $repository = new \Modules\Faqs\Repositories\Eloquent\EloquentFaqsRepository(new \Modules\Faqs\Entities\Faqs());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Faqs\Repositories\Cache\CacheFaqsDecorator($repository);
            }
        );
// add bindings

    }
}
