@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-lg font-bold uppercase mb- dark:text-gray-300">Create Customer</h2>
        <small class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut
            labore et dolore magna aliqua.</small>
    </div>
    <!-- Form -->
    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-4">
            <!-- Left Side Form -->
            <div class="col-span-1">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <x-label for="company" required="true">
                            Company Name
                        </x-label>

                        <x-input name="company_name" value="{{ old('company_name') }}"
                            placeholder="Enter your company name" />
                    </div>
                    <div>
                        <x-label for="industry" required="true">
                            Industry
                        </x-label>
                        <x-select name="industry" id="industry">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Industry
                            </option>
                            <option value="1" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Fabrication</option>
                            <option value="2" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Fabrication 2</option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="type" required="true">
                            Type
                        </x-label>
                        <x-select name="type" id="type" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Type
                            </option>
                            <option class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300" value="a">
                                Strictly Advance</option>
                            <option class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300" value="a">
                                Strictly Advance 2</option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="customer_visit" required="true">
                            Customer Visited
                        </x-label>
                        <x-select name="customer_visit" id="customer_visit" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Customer Visited
                            </option>
                            <option class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300" value="YES">YES
                            </option>
                            <option class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300" value="NONE">NO
                            </option>
                        </x-select>
                    </div>
                    <!-- Office Tel -->
                    <div>
                        <x-label for="office_tel" required="true">
                            Office Telephone
                        </x-label>
                        <x-phone-input name="office_tel" id="office_tel" codeName="office_tel_code" codeId="office_tel_code"
                            :codes="['+050', '+051', '+052', '+053']" selectedCode="+051" placeholder="123456789" value="{{ old('office_tel') }}"
                            required="true" />
                    </div>

                    <!-- Mobile -->
                    <div>
                        <x-label for="mobile" required="true">
                            Mobile
                        </x-label>
                        <x-phone-input name="office_mobile" id="office_mobile" codeName="office_mobile_code"
                            codeId="office_mobile_code" :codes="['+02', '+03', '+05', '+06']" selectedCode="+02" placeholder="123456789"
                            value="{{ old('office_tel') }}" required="true" />
                    </div>
                    <div>
                        <x-label for="city" required="true">
                            City
                        </x-label>
                        <x-select name="city" id="city" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select City
                            </option>
                            <option value="City1" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                City 1</option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="country" required="true">
                            Country
                        </x-label>
                        <x-input name="country" value="{{ old('country') }}" placeholder="Enter country name" />
                    </div>
                    <div>
                        <x-label for="Tax
                            Treatment" required="true">
                            Tax
                            Treatment
                        </x-label>
                        <x-select name="tax_treatment" id="tax_treatment" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Tax Treatment
                            </option>
                            <option value="Tax Treatment"
                                class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Tax Treatment</option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="vat" required="true">
                            Vat
                        </x-label>
                        <x-input name="vat" value="{{ old('vat') }}" placeholder="Enter vat" />
                    </div>
                    <div>
                        <x-label for="Trade
                            License" required="true">
                            Trade
                            License
                        </x-label>
                        <x-input name="trade_license" value="{{ old('trade_license') }}"
                            placeholder="Enter trade license" />
                    </div>
                    <div>
                        <x-label for="Trade License Expiry
                            Date" required="true">
                            Trade License Expiry
                            Date
                        </x-label>
                        <x-input type="date" name="trade_license_expire_date"
                            value="{{ old('trade_license_expire_date') }}" />
                    </div>
                    <div>

                        <x-label for="Ordering
                            Contact" required="true">
                            Ordering
                            Contact
                        </x-label>
                        <x-phone-input name="ordering_contact" id="ordering_contact" codeName="ordering_contact_code"
                            codeId="ordering_contact_code" :codes="['+02', '+03', '+05', '+06']" selectedCode="+02" placeholder="123456789"
                            value="{{ old('office_tel') }}" required="true" />
                    </div>
                    <div>
                        <x-label for="Owners
                            Contactt" required="true">
                            Owners
                            Contact
                        </x-label>

                        <x-input name="owners_contact" value="{{ old('owners_contact') }}"
                            placeholder="Enter your owners contact" />
                    </div>
                    <div>
                        <x-label for="payment_contact" required="true">
                            Payment
                            Contact
                        </x-label>
                        <x-input name="payment_contact" value="{{ old('payment_contact') }}"
                            placeholder="Enter your payment contact" />
                    </div>
                    <div>
                        <x-label for="payment_method" required="true">
                            Payment
                            Method
                        </x-label>
                        <x-select name="payment_method" id="payment_method" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Payment Method
                            </option>
                            <option value="Cash" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Cash</option>
                        </x-select>
                    </div>
                    <div>
                        <x-label for="payment_method" required="true">
                            Payment
                            Terms
                        </x-label>
                        <x-input name="payment_terms" value="{{ old('payment_terms') }}"
                            placeholder="Enter your payment terms" />
                    </div>
                    <div>
                        <x-label for="Credit
                            Limit" required="true">
                            Credit
                            Limit
                        </x-label>
                        <x-input name="credit_limit" value="{{ old('credit_limit') }}"
                            placeholder="Enter your credit limit" />
                    </div>
                </div>
            </div>
            <!-- Right Side Address Bar -->
            @include('customer.address')
        </div>
        @include('customer.contact_person')

        <!-- Confirm Button -->
        <div class="flex justify-end mt-4">
            <x-button type="submit" text-color="text-gray-100" bg-color="bg-blue-400" hover-color="hover:bg-blue-500"
                dark-bg-color="dark:bg-blue-500" dark-hover-color="dark:hover:bg-blue-400">
                Create Customer
            </x-button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        'use strict'
        $(document).ready(function() {
            // Add new row to the table
            $('#add-row').click(function() {
                const newRow = `
                 <tr>
                    <td class="px-4 py-2">
                        <x-select name="salution[]" id="salution[]" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Salutation
                            </option>
                            <option value="Mr" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Mr.</option>
                            <option value="Ms" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Ms.</option>
                        </x-select>
                    </td>
                    <td class="px-4 py-2">
                            <x-input name="name[]" value="{{ old('name[]') }}"
                            placeholder="Enter name" />
                    </td>
                    <td class="px-4 py-2">
                            <x-input name="mobile[]" value="{{ old('mobile[]') }}"
                            placeholder="Enter mobile" />
                    </td>
                    <td class="px-4 py-2">
                            <x-input name="landline[]" value="{{ old('landline[]') }}"
                            placeholder="Enter landline" />
                    </td>
                    <td class="px-4 py-2">
                            <x-input name="email[]" value="{{ old('email[]') }}"
                            placeholder="Enter email" />
                    </td>
                    <td class="px-4 py-2">
                        <x-select name="department[]" id="department[]" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Department
                            </option>
                            <option value="GM" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                GM</option>
                            <option value="HR" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                HR</option>
                                <option value="Finance" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Finance</option>
                        </x-select>
                    </td>
                    <td class="px-4 py-2">                       
                        <x-button type="button" icon="heroicon-o-trash" class="remove-row" bg-color="bg-red-400" hover-color="hover:bg-red-500" dark-bg-color="dark:bg-red-500" dark-hover-color="dark:hover:bg-red-400">
                        </x-button>
                    </td>
                </tr>
                `;
                $('#contact-persons-body').append(newRow);
            });

            // Remove row from the table
            $(document).on('click', '.remove-row', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>
@endpush
