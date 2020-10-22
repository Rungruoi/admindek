@extends('layouts.admin')
@section('content')
Design by Dung Ngoc Vu
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="form-group row">
                    <div class="col-sm-12">
                        @component('components.text_input',
                            [
                                'name' => 'staff_code',
                                'label' => __('common.staff_code'),
                                'attributes' => [
                                    'required' => true,
                                    'class' => 'form-control',
                                    'placeholder' => __('common.form.placeholder.staff_code'),
                                ]
                            ]
                        ) @endcomponent
                    </div>

                    <div class="col-sm-12">
                        @component('components.textarea_input',
                            [
                                'name' => 'description',
                                'label' => __('common.description'),
                                'attributes' => [
                                    'class' => 'form-control',
                                    'placeholder' => __('common.description'),
                                    'disabled' => false,
                                    'required' => true,
                                ]
                            ]
                        ) @endcomponent
                    </div>

                    <div class="col-sm-12">
                        @component('components.time_input', [
                            'name' => 'start_available',
                            'label' => __('page.request.form.fields.start_available'),
                            'attributes' => [
                                'class' => 'form-control available_time',
                                'disabled' => ($type == 'create' || @$request->is_pending) ? false :true,
                                'required' => true,
                            ]
                        ]) @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
