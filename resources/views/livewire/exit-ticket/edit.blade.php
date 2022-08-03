<form wire:submit.prevent="submit" class="pt-3">
    <div class="w-full flex flex-auto ">
        <div class="form-group w-1/3 {{ $errors->has('exitTicket.product_id') ? 'invalid' : '' }}">
            <label class="form-label" for="product">{{ trans('cruds.exitTicket.fields.product') }}</label>
            <x-select-list class="form-control" id="product" name="product" :options="$this->listsForFields['product']"
                wire:model="exitTicket.product_id" />
            <div class="validation-message">
                {{ $errors->first('exitTicket.product_id') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.exitTicket.fields.product_helper') }}
            </div>
        </div>
        <div class="form-group w-1/3 {{ $errors->has('exitTicket.date') ? 'invalid' : '' }}">
            <label class="form-label" for="date">{{ trans('cruds.exitTicket.fields.date') }}</label>
            <x-date-picker class="form-control" wire:model="exitTicket.date" id="date" name="date" picker="date" />
            <div class="validation-message">
                {{ $errors->first('exitTicket.date') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.exitTicket.fields.date_helper') }}
            </div>
        </div>
        <div class="form-group w-1/3 {{ $errors->has('exitTicket.qtt') ? 'invalid' : '' }}">
            <label class="form-label" for="qtt">{{ trans('cruds.exitTicket.fields.qtt') }}</label>
            <input class="form-control" type="number" name="qtt" id="qtt" wire:model.defer="exitTicket.qtt" step="1">
            <div class="validation-message">
                {{ $errors->first('exitTicket.qtt') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.exitTicket.fields.qtt_helper') }}
            </div>
        </div>
    </div>
    <div class="w-full flex flex-auto ">
        <div class="form-group w-1/2 {{ $errors->has('exitTicket.bus_number_id') ? 'invalid' : '' }}">
            <label class="form-label" for="bus_number">{{ trans('cruds.exitTicket.fields.bus_number') }}</label>
            <x-select-list class="form-control" id="bus_number" name="bus_number"
                :options="$this->listsForFields['bus_number']" wire:model="exitTicket.bus_number_id" />
            <div class="validation-message">
                {{ $errors->first('exitTicket.bus_number_id') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.exitTicket.fields.bus_number_helper') }}
            </div>
        </div>
        <div class="form-group w-1/2 {{ $errors->has('exitTicket.number_exit_ticker') ? 'invalid' : '' }}">
            <label class="form-label" for="number_exit_ticker">{{ trans('cruds.exitTicket.fields.number_exit_ticker')
                }}</label>
            <input class="form-control" type="text" name="number_exit_ticker" id="number_exit_ticker"
                wire:model.defer="exitTicket.number_exit_ticker">
            <div class="validation-message">
                {{ $errors->first('exitTicket.number_exit_ticker') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.exitTicket.fields.number_exit_ticker_helper') }}
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.exit-tickets.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>