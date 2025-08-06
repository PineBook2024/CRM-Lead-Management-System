<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Lead') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                {{-- ✅ Updated route --}}
                <form method="POST" action="{{ route('leads.store') }}">
                    @csrf

                    {{-- Lead Info --}}
                    <h3 class="text-lg font-semibold mt-4 mb-4">Lead Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input-label for="company" :value="__('Company')" />
                            <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" required />
                        </div>
                        <div>
                            <x-input-label for="first_name" :value="__('First Name')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required />
                        </div>
                        <div>
                            <x-input-label for="last_name" :value="__('Last Name')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" />
                        </div>
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" />
                        </div>
                        <div>
                            <x-input-label for="mobile" :value="__('Mobile')" />
                            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" />
                        </div>
                        <div>
                            <x-input-label for="lead_source" :value="__('Lead Source')" />
                            <x-text-input id="lead_source" class="block mt-1 w-full" type="text" name="lead_source" />
                        </div>
                        <div>
                            <x-input-label for="industry" :value="__('Industry')" />
                            <x-text-input id="industry" class="block mt-1 w-full" type="text" name="industry" />
                        </div>
                        <div>
                            <x-input-label for="no_of_employees" :value="__('No. of Employees')" />
                            <x-text-input id="no_of_employees" class="block mt-1 w-full" type="number" name="no_of_employees" />
                        </div>
                        <div>
                            <x-input-label for="lead_status" :value="__('Lead Status')" />
                            <x-text-input id="lead_status" class="block mt-1 w-full" type="text" name="lead_status" />
                        </div>
                        <div>
                            <x-input-label for="social_lead_id" :value="__('Social Lead ID')" />
                            <x-text-input id="social_lead_id" class="block mt-1 w-full" type="text" name="social_lead_id" />
                        </div>
                        <div>
                            <x-input-label for="website" :value="__('Website')" />
                            <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" />
                        </div>
                        <div>
                            <x-input-label for="secondary_email" :value="__('Secondary Email')" />
                            <x-text-input id="secondary_email" class="block mt-1 w-full" type="email" name="secondary_email" />
                        </div>
                    </div>

                    {{-- Address Information --}}
                    <hr class="my-6 border-gray-300" />
                    <h3 class="text-lg font-semibold mb-4 mt-4">Address Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input-label for="state" :value="__('State')" />
                            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" />
                        </div>
                        <div>
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" />
                        </div>
                        <div>
                            <x-input-label for="country" :value="__('Country')" />
                            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" />
                        </div>
                        <div>
                            <x-input-label for="zip_code" :value="__('Zip Code')" />
                            <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" />
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="mb-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    {{-- Submit --}}
                    <div class="flex items-center justify-end">
                        <x-primary-button>
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
