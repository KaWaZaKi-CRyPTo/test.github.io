<form wire:submit.prevent="submit" class="pt-3">
    <div class="w-full flex flex-auto ">
        <div class="form-group w-1/2 {{ $errors->has('busPark.name') ? 'invalid' : '' }}">
            <label class="form-label" for="name">{{ trans('cruds.busPark.fields.name') }}</label>
            <input class="form-control" type="text" name="name" id="name" wire:model.defer="busPark.name">
            <div class="validation-message">
                {{ $errors->first('busPark.name') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.busPark.fields.name_helper') }}
            </div>
        </div>
        <div class="form-group w-1/2 {{ $errors->has('busPark.code') ? 'invalid' : '' }}">
            <label class="form-label" for="code">{{ trans('cruds.busPark.fields.code') }}</label>
            <input class="form-control" type="text" name="code" id="code" wire:model.defer="busPark.code">
            <div class="validation-message">
                {{ $errors->first('busPark.code') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.busPark.fields.code_helper') }}
            </div>
        </div>
    </div>
    <div class="w-full flex flex-auto ">
        <div class="form-group   w-1/2 {{ $errors->has('busPark.country_id') ? 'invalid' : '' }}">
            <label class="form-label" for="country">{{ trans('cruds.busPark.fields.country') }}</label>
            <x-select-list class="form-control" id="country" name="country" :options="$this->listsForFields['country']"
                wire:model="busPark.country_id" />
            <div class="validation-message">
                {{ $errors->first('busPark.country_id') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.busPark.fields.country_helper') }}
            </div>
        </div>
        <div class="form-group  w-1/2 {{ $errors->has('busPark.city_id') ? 'invalid' : '' }}">
            <label class="form-label" for="city">{{ trans('cruds.busPark.fields.city') }}</label>
            <x-select-list class="form-control" id="city" name="city" :options="$this->listsForFields['city']"
                wire:model="busPark.city_id" />
            <div class="validation-message">
                {{ $errors->first('busPark.city_id') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.busPark.fields.city_helper') }}
            </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.bus-parks.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>