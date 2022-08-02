<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('city.country_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="country">{{ trans('cruds.city.fields.country') }}</label>
        <x-select-list class="form-control" required id="country" name="country" :options="$this->listsForFields['country']" wire:model="city.country_id" />
        <div class="validation-message">
            {{ $errors->first('city.country_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.country_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('city.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.city.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="city.name">
        <div class="validation-message">
            {{ $errors->first('city.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('city.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.city.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="city.slug">
        <div class="validation-message">
            {{ $errors->first('city.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.slug_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>