<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('oil.mark_oil') ? 'invalid' : '' }}">
        <label class="form-label required" for="mark_oil">{{ trans('cruds.oil.fields.mark_oil') }}</label>
        <input class="form-control" type="text" name="mark_oil" id="mark_oil" required wire:model.defer="oil.mark_oil">
        <div class="validation-message">
            {{ $errors->first('oil.mark_oil') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.oil.fields.mark_oil_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('oil.oil_distance') ? 'invalid' : '' }}">
        <label class="form-label" for="oil_distance">{{ trans('cruds.oil.fields.oil_distance') }}</label>
        <input class="form-control" type="number" name="oil_distance" id="oil_distance" wire:model.defer="oil.oil_distance" step="1">
        <div class="validation-message">
            {{ $errors->first('oil.oil_distance') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.oil.fields.oil_distance_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.oils.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>