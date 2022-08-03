<form wire:submit.prevent="submit" class="pt-3">
    <div class="w-full flex flex-auto ">
        <div class="form-group w-1/2 {{ $errors->has('route.name') ? 'invalid' : '' }}">
            <label class="form-label required" for="name">{{ trans('cruds.route.fields.name') }}</label>
            <input class="form-control" type="text" name="name" id="name" required wire:model.defer="route.name">
            <div class="validation-message">
                {{ $errors->first('route.name') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.route.fields.name_helper') }}
            </div>
        </div>
        <div class="form-group w-1/2 {{ $errors->has('route.distance') ? 'invalid' : '' }}">
            <label class="form-label" for="distance">{{ trans('cruds.route.fields.distance') }}</label>
            <input class="form-control" type="number" name="distance" id="distance" wire:model.defer="route.distance"
                step="1">
            <div class="validation-message">
                {{ $errors->first('route.distance') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.route.fields.distance_helper') }}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('route.start_provenance_id') ? 'invalid' : '' }}">
        <label class="form-label" for="start_provenance">{{ trans('cruds.route.fields.start_provenance') }}</label>
        <x-select-list class="form-control" id="start_provenance" name="start_provenance"
            :options="$this->listsForFields['start_provenance']" wire:model="route.start_provenance_id" />
        <div class="validation-message">
            {{ $errors->first('route.start_provenance_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.route.fields.start_provenance_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('route.end_provenance_id') ? 'invalid' : '' }}">
        <label class="form-label" for="end_provenance">{{ trans('cruds.route.fields.end_provenance') }}</label>
        <x-select-list class="form-control" id="end_provenance" name="end_provenance"
            :options="$this->listsForFields['end_provenance']" wire:model="route.end_provenance_id" />
        <div class="validation-message">
            {{ $errors->first('route.end_provenance_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.route.fields.end_provenance_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.routes.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>