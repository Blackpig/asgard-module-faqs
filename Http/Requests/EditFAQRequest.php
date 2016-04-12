<?php namespace Modules\Faqs\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class EditFAQRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
        ];
    }

    public function translationRules()
    {
        return [
            'question' => 'required',
            'answer' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function translationMessages()
    {
        return [
            'question.required' => trans('faqs::faqs.messages.question is required'),
            'answer.required' => trans('faqs::faqs.messages.answer is required'),
        ];
    }
}
