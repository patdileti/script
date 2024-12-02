<div class="tab-pane" id="quick_billing">
    <form class="ajax_submit_form" data-action="{{ route('admin.settings.update') }}" method="POST">
        <div class="card">
            <div class="card-header">
                <h5>{{ ___('Billing details') }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert d-flex align-items-center bg-label-info mb-3" role="alert">
                            <span class="badge badge-center rounded-pill bg-info border-label-info p-3 me-2"><i class="fas fa-bell"></i></span>
                            <div class="ps-1">
                                <span>{{___("These details will be used for the invoice.")}}</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{___("Invoice Number Prefix")}}</label>
                            <div>
                                <input name="invoice_nr_prefix" type="text" class="form-control" value="{{ $settings->invoice_nr_prefix ?? 'INV-' }}" placeholder="Ex: INV-">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{___("Name")}}</label>
                            <div>
                                <input name="invoice_admin_name" type="text" class="form-control" value="{{ @$settings->invoice_admin_name }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">{{___("Email")}}</label>
                                    <div>
                                        <input name="invoice_admin_email" type="email" class="form-control" value="{{ @$settings->invoice_admin_email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">{{___("Phone")}}</label>
                                    <div>
                                        <input name="invoice_admin_phone" type="tel" class="form-control" value="{{ @$settings->invoice_admin_phone }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{___("Address")}}</label>
                            <div>
                                <input name="invoice_admin_address" type="text" class="form-control" value="{{ @$settings->invoice_admin_address }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">{{___("City")}}</label>
                                    <div>
                                        <input name="invoice_admin_city" type="text" class="form-control" value="{{ @$settings->invoice_admin_city }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">{{___("State/Province")}}</label>
                                    <div>
                                        <input name="invoice_admin_state" type="text" class="form-control" value="{{ @$settings->invoice_admin_state }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">{{___("ZIP Code")}}</label>
                                    <div>
                                        <input name="invoice_admin_zipcode" type="text" class="form-control" value="{{ @$settings->invoice_admin_zipcode }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{___("Country")}}</label>
                            <div>
                                <select class="form-control" name="invoice_admin_country">
                                    <option value="" selected disabled>{{ ___('Choose') }}</option>
                                    @foreach (countries() as $country)
                                        <option value="{{ $country->name }}"
                                                @if ($country->name == @$settings->invoice_admin_country) selected @endif>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">{{___("Tax Type")}}</label>
                                    <div>
                                        <input name="invoice_admin_tax_type" type="text" class="form-control" value="{{ @$settings->invoice_admin_tax_type }}" placeholder="Ex: VAT">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">{{___("Tax ID")}}</label>
                                    <div>
                                        <input name="invoice_admin_tax_id" type="text" class="form-control" value="{{ @$settings->invoice_admin_tax_id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" name="billing_settings" value="1">
                <button type="submit" class="btn btn-primary">{{ ___('Save Changes') }}</button>
            </div>
        </div>
    </form>
</div>
