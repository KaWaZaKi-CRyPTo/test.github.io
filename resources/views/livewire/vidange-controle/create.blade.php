<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('vidangeControle.bus_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="bus">{{ trans('cruds.vidangeControle.fields.bus') }}</label>
        <x-select-list class="form-control" required id="bus" name="bus" :options="$this->listsForFields['bus']" wire:model="vidangeControle.bus_id" />
        <div class="validation-message">
            {{ $errors->first('vidangeControle.bus_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.bus_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('vidangeControle.oil_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="oil">{{ trans('cruds.vidangeControle.fields.oil') }}</label>
        <x-select-list class="form-control" required id="oil" name="oil" :options="$this->listsForFields['oil']" wire:model="vidangeControle.oil_id" />
        <div class="validation-message">
            {{ $errors->first('vidangeControle.oil_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.oil_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('vidangeControle.anicien_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="anicien_number">{{ trans('cruds.vidangeControle.fields.anicien_number') }}</label>
        <input class="form-control" type="number" name="anicien_number" id="anicien_number" required wire:model.defer="vidangeControle.anicien_number" step="1">
        <div class="validation-message">
            {{ $errors->first('vidangeControle.anicien_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.anicien_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('vidangeControle.new_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="new_number">{{ trans('cruds.vidangeControle.fields.new_number') }}</label>
        <input class="form-control" type="number" name="new_number" id="new_number" required wire:model.defer="vidangeControle.new_number" step="1">
        <div class="validation-message">
            {{ $errors->first('vidangeControle.new_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.new_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('vidangeControle.last_date') ? 'invalid' : '' }}">
        <label class="form-label" for="last_date">{{ trans('cruds.vidangeControle.fields.last_date') }}</label>
        <x-date-picker class="form-control" wire:model="vidangeControle.last_date" id="last_date" name="last_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('vidangeControle.last_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.last_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('vidangeControle.date') ? 'invalid' : '' }}">
        <label class="form-label" for="date">{{ trans('cruds.vidangeControle.fields.date') }}</label>
        <x-date-picker class="form-control" wire:model="vidangeControle.date" id="date" name="date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('vidangeControle.date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('vidangeControle.oil_qtt') ? 'invalid' : '' }}">
        <label class="form-label required" for="oil_qtt">{{ trans('cruds.vidangeControle.fields.oil_qtt') }}</label>
        <input class="form-control" type="number" name="oil_qtt" id="oil_qtt" required wire:model.defer="vidangeControle.oil_qtt" step="1">
        <div class="validation-message">
            {{ $errors->first('vidangeControle.oil_qtt') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.vidangeControle.fields.oil_qtt_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.vidange-controles.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>