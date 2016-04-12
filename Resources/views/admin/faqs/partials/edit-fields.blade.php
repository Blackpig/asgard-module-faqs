<div class="box-body">
    {!! Form::i18nInput('question', trans('faqs::faqs.common.question'), $errors, $lang, $faqs) !!}

    {!! Form::i18nTextarea('answer', trans('faqs::faqs.common.answer'), $errors, $lang, $faqs) !!}
</div>
