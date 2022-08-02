<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('stockWarehouse.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.stockWarehouse.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="stockWarehouse.name">
        <div class="validation-message">
            {{ $errors->first('stockWarehouse.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.stockWarehouse.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('stockWarehouse.country_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="country">{{ trans('cruds.stockWarehouse.fields.country') }}</label>
        <x-select-list class="form-control" required id="country" name="country" :options="$this->listsForFields['country']" wire:model="stockWarehouse.country_id" />
        <div class="validation-message">
            {{ $errors->first('stockWarehouse.country_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.stockWarehouse.fields.country_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('stockWarehouse.city_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.stockWarehouse.fields.city') }}</label>
        <x-select-list class="form-control" required id="city" name="city" :options="$this->listsForFields['city']" wire:model="stockWarehouse.city_id" />
        <div class="validation-message">
            {{ $errors->first('stockWarehouse.city_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.stockWarehouse.fields.city_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.stock-warehouses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>