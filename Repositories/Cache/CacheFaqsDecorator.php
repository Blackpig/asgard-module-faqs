<?php namespace Modules\Faqs\Repositories\Cache;

use Modules\Faqs\Repositories\FaqsRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheFaqsDecorator extends BaseCacheDecorator implements FaqsRepository
{
    public function __construct(FaqsRepository $faqs)
    {
        parent::__construct();
        $this->entityName = 'faqs.faqs';
        $this->repository = $faqs;
    }
}
