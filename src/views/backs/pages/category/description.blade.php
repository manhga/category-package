<div class="d-inline-block">
    @foreach($model->categoryLang as $category)
        @if($category->lang_id == 1)
            {{ $category->description }}
        @endif
    @endforeach
</div>
