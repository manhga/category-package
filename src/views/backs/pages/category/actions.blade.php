<div class="d-inline-block">
    <a class="btn btn-sm btn-link text-secondary" href="{{route('admin.categories.edit', $id)}}" title="{{ __('Edit') }}">
        <i class="fas fa-fw fa-lg fa-edit"></i>
    </a>
    <a class="btn btn-sm btn-link text-secondary" href="#"
       data-toggle="modal" data-target="#modal-delete-category-{{ $id }}" title="{{ __('Delete') }}">
        <i class="fas fa-fw fa-lg fa-trash"></i>
    </a>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal-delete-category-{{ $id }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Delete Category') }} </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! __('Are you sure want to delete category <b>:name</b> ?', ['name' => $name]) !!}
                </div>
                <div class="modal-footer">
                    <form action="{{route('admin.categories.destroy', $id) }}" method="POST" id="delete-account-{{ $id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-width-default text-white">
                            {{ __('Delete') }}
                        </button>
                        <button type="button" class="btn btn-secondary btn-width-default" data-dismiss="modal">
                            {{ __('Cancel') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
