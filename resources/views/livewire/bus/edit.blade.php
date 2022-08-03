<form wire:submit.prevent="submit" class="pt-3">
    <div class="w-full flex flex-auto ">
    <div class="form-group w-1/3 {{ $errors->has('bus.bus_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="bus_number">{{ trans('cruds.bus.fields.bus_number') }}</label>
        <input class="form-control" type="text" name="bus_number" id="bus_number" required wire:model.defer="bus.bus_number">
        <div class="validation-message">
            {{ $errors->first('bus.bus_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bus.fields.bus_number_helper') }}
        </div>
    </div>
    <div class="form-group w-1/3 {{ $errors->has('bus.counetr') ? 'invalid' : '' }}">
        <label class="form-label" for="counetr">{{ trans('cruds.bus.fields.counetr') }}</label>
        <input class="form-control" type="text" name="counetr" id="counetr" wire:model.defer="bus.counetr">
        <div class="validation-message">
            {{ $errors->first('bus.counetr') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bus.fields.counetr_helper') }}
        </div>
    </div>
    <div class="form-group w-1/3 {{ $errors->has('bus.mark') ? 'invalid' : '' }}">
        <label class="form-label" for="mark">{{ trans('cruds.bus.fields.mark') }}</label>
        <input class="form-control" type="text" name="mark" id="mark" wire:model.defer="bus.mark">
        <div class="validation-message">
            {{ $errors->first('bus.mark') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bus.fields.mark_helper') }}
        </div>
    </div>
    </div>
    <div class="form-group {{ $errors->has('bus.park_id') ? 'invalid' : '' }}">
        <label class="form-label" for="park">{{ trans('cruds.bus.fields.park') }}</label>
        <x-select-list class="form-control" id="park" name="park" :options="$this->listsForFields['park']" wire:model="bus.park_id" />
        <div class="validation-message">
            {{ $errors->first('bus.park_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bus.fields.park_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.buses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>