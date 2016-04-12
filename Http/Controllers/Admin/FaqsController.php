<?php namespace Modules\Faqs\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Faqs\Entities\Faqs;
use Modules\Faqs\Repositories\FaqsRepository;
use Modules\Faqs\Http\Requests\EditFAQRequest;
use Modules\Faqs\Http\Requests\CreateFAQRequest;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class FaqsController extends AdminBaseController
{
    /**
     * @var FaqsRepository
     */
    private $faqs;

    public function __construct(FaqsRepository $faqs)
    {
        parent::__construct();

        $this->faqs = $faqs;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faqs = $this->faqs->all();

        return view('faqs::admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('faqs::admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(CreateFAQRequest $request)
    {
        $this->faqs->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('faqs::faqs.title.faqs')]));

        return redirect()->route('admin.faqs.faqs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Faqs $faqs
     * @return Response
     */
    public function edit(Faqs $faqs)
    {
        return view('faqs::admin.faqs.edit', compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Faqs $faqs
     * @param  Request $request
     * @return Response
     */
    public function update(Faqs $faqs, EditFAQRequest $request)
    {
        $this->faqs->update($faqs, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('faqs::faqs.title.faqs')]));

        return redirect()->route('admin.faqs.faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Faqs $faqs
     * @return Response
     */
    public function destroy(Faqs $faqs)
    {
        $this->faqs->destroy($faqs);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('faqs::faqs.title.faqs')]));

        return redirect()->route('admin.faqs.faqs.index');
    }
}
