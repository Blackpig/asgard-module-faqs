<?php namespace Modules\Faqs\Composers;

use Illuminate\Contracts\View\View;
use Modules\Faqs\Repositories\FaqsRepository;

class FaqsPageComposer
{
    public function __construct(FaqsRepository $faqs)
    {
        $this->faqs = $faqs;
    }

    public function compose(View $view)
    {
        $view->with('faqs', $this->faqs->all());
    }
}
