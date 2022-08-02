<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('inventory.product_id') ? 'invalid' : '' }}">
        <label class="form-label" for="product">{{ trans('cruds.inventory.fields.product') }}</label>
        <x-select-list class="form-control" id="product" name="product" :options="$this->listsForFields['product']" wire:model="inventory.product_id" />
        <div class="validation-message">
            {{ $errors->first('inventory.product_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.inventory.fields.product_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('inventory.qtt_init') ? 'invalid' : '' }}">
        <label class="form-label" for="qtt_init">{{ trans('cruds.inventory.fields.qtt_init') }}</label>
        <input class="form-control" type="number" name="qtt_init" id="qtt_init" wire:model.defer="inventory.qtt_init" step="1">
        <div class="validation-message">
            {{ $errors->first('inventory.qtt_init') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.inventory.fields.qtt_init_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('inventory.final_qtt') ? 'invalid' : '' }}">
        <label class="form-label" for="final_qtt">{{ trans('cruds.inventory.fields.final_qtt') }}</label>
        <input class="form-control" type="number" name="final_qtt" id="final_qtt" wire:model.defer="inventory.final_qtt" step="1">
        <div class="validation-message">
            {{ $errors->first('inventory.final_qtt') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.inventory.fields.final_qtt_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.inventories.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>