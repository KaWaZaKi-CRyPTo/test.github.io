<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('prodouit.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.prodouit.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="prodouit.name">
        <div class="validation-message">
            {{ $errors->first('prodouit.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.prodouit.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('prodouit.mark') ? 'invalid' : '' }}">
        <label class="form-label" for="mark">{{ trans('cruds.prodouit.fields.mark') }}</label>
        <input class="form-control" type="text" name="mark" id="mark" wire:model.defer="prodouit.mark">
        <div class="validation-message">
            {{ $errors->first('prodouit.mark') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.prodouit.fields.mark_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('prodouit.price') ? 'invalid' : '' }}">
        <label class="form-label" for="price">{{ trans('cruds.prodouit.fields.price') }}</label>
        <input class="form-control" type="number" name="price" id="price" wire:model.defer="prodouit.price" step="0.01">
        <div class="validation-message">
            {{ $errors->first('prodouit.price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.prodouit.fields.price_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.prodouits.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>