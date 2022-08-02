<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('provenance.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.provenance.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="provenance.name">
        <div class="validation-message">
            {{ $errors->first('provenance.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.provenance.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('provenance.distance') ? 'invalid' : '' }}">
        <label class="form-label" for="distance">{{ trans('cruds.provenance.fields.distance') }}</label>
        <input class="form-control" type="text" name="distance" id="distance" wire:model.defer="provenance.distance">
        <div class="validation-message">
            {{ $errors->first('provenance.distance') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.provenance.fields.distance_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('provenance.country_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="country">{{ trans('cruds.provenance.fields.country') }}</label>
        <x-select-list class="form-control" required id="country" name="country" :options="$this->listsForFields['country']" wire:model="provenance.country_id" />
        <div class="validation-message">
            {{ $errors->first('provenance.country_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.provenance.fields.country_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.provenances.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>