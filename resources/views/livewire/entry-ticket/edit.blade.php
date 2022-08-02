<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('entryTicket.date') ? 'invalid' : '' }}">
        <label class="form-label required" for="date">{{ trans('cruds.entryTicket.fields.date') }}</label>
        <x-date-picker class="form-control" required wire:model="entryTicket.date" id="date" name="date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('entryTicket.date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('entryTicket.product_id') ? 'invalid' : '' }}">
        <label class="form-label" for="product">{{ trans('cruds.entryTicket.fields.product') }}</label>
        <x-select-list class="form-control" id="product" name="product" :options="$this->listsForFields['product']" wire:model="entryTicket.product_id" />
        <div class="validation-message">
            {{ $errors->first('entryTicket.product_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.product_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('entryTicket.qtt') ? 'invalid' : '' }}">
        <label class="form-label required" for="qtt">{{ trans('cruds.entryTicket.fields.qtt') }}</label>
        <input class="form-control" type="number" name="qtt" id="qtt" required wire:model.defer="entryTicket.qtt" step="1">
        <div class="validation-message">
            {{ $errors->first('entryTicket.qtt') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.qtt_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('entryTicket.price') ? 'invalid' : '' }}">
        <label class="form-label" for="price">{{ trans('cruds.entryTicket.fields.price') }}</label>
        <input class="form-control" type="number" name="price" id="price" wire:model.defer="entryTicket.price" step="0.01">
        <div class="validation-message">
            {{ $errors->first('entryTicket.price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.price_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('entryTicket.suplier_id') ? 'invalid' : '' }}">
        <label class="form-label" for="suplier">{{ trans('cruds.entryTicket.fields.suplier') }}</label>
        <x-select-list class="form-control" id="suplier" name="suplier" :options="$this->listsForFields['suplier']" wire:model="entryTicket.suplier_id" />
        <div class="validation-message">
            {{ $errors->first('entryTicket.suplier_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.suplier_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('entryTicket.n_bon_com') ? 'invalid' : '' }}">
        <label class="form-label" for="n_bon_com">{{ trans('cruds.entryTicket.fields.n_bon_com') }}</label>
        <input class="form-control" type="text" name="n_bon_com" id="n_bon_com" wire:model.defer="entryTicket.n_bon_com">
        <div class="validation-message">
            {{ $errors->first('entryTicket.n_bon_com') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.n_bon_com_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('entryTicket.n_rec_fac_bl') ? 'invalid' : '' }}">
        <label class="form-label" for="n_rec_fac_bl">{{ trans('cruds.entryTicket.fields.n_rec_fac_bl') }}</label>
        <input class="form-control" type="text" name="n_rec_fac_bl" id="n_rec_fac_bl" wire:model.defer="entryTicket.n_rec_fac_bl">
        <div class="validation-message">
            {{ $errors->first('entryTicket.n_rec_fac_bl') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.entryTicket.fields.n_rec_fac_bl_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.entry-tickets.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>