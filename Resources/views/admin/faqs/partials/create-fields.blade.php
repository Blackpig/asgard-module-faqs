<div class="box-body">
    {!! Form::i18nInput('question', trans('faqs::faqs.common.question'), $errors, $lang) !!}

    {!! Form::i18nTextarea('answer', trans('faqs::faqs.common.answer'), $errors, $lang) !!}
</div>
