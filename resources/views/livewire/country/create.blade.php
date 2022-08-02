<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('country.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.country.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="country.name">
        <div class="validation-message">
            {{ $errors->first('country.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.country.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('country.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.country.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="country.slug">
        <div class="validation-message">
            {{ $errors->first('country.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.country.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('country.iso_3') ? 'invalid' : '' }}">
        <label class="form-label" for="iso_3">{{ trans('cruds.country.fields.iso_3') }}</label>
        <input class="form-control" type="text" name="iso_3" id="iso_3" wire:model.defer="country.iso_3">
        <div class="validation-message">
            {{ $errors->first('country.iso_3') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.country.fields.iso_3_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.countries.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>