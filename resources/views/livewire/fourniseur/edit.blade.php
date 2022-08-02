<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('fourniseur.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.fourniseur.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="fourniseur.name">
        <div class="validation-message">
            {{ $errors->first('fourniseur.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.fourniseur.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('fourniseur.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.fourniseur.fields.email') }}</label>
        <input class="form-control" type="text" name="email" id="email" wire:model.defer="fourniseur.email">
        <div class="validation-message">
            {{ $errors->first('fourniseur.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.fourniseur.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('fourniseur.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.fourniseur.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="fourniseur.phone">
        <div class="validation-message">
            {{ $errors->first('fourniseur.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.fourniseur.fields.phone_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.fourniseurs.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>