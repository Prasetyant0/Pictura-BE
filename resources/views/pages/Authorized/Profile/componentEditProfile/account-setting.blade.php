<section id="account-setting" class="hidden">
    <div class="flex flex-row">
        <div class="p-4 sm:ml-64 h-40 w-1/2">
            <div class="mb-6">
                <h1 class="roboto-medium text-2xl text-black pt-1">Account Setting</h1>
            </div>
            <form action="/update-account/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm roboto-regular text-iconColor">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="example777@example.com" value="{{ $userData->email }}" required>
                </div>
                <div class="mb-6">
                    <label for="birthdate" class="block mb-2 text-sm roboto-regular text-iconColor">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        value="{{ $userData->birthdate }}">
                </div>
                <div class="mb-6">
                    <label for="gender" class="block mb-2 text-sm roboto-regular text-iconColor">Gender</label>
                    <select id="gender" name="gender"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl roboto-regular focus:ring-primary focus:border-primary block w-full p-2.5">
                        <option selected value="">Choose your gender</option>
                        @foreach ($getGender as $key => $value)
                            <option value="{{ $key }}" {{ $userData->gender == $key ? 'selected' : '' }}>
                                {{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 flex flex-col space-y-2">
                    <div>
                        <h1 class="roboto-medium text-sm text-black">Deactivate account</h1>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <div class="w-1/2">
                            <p class="roboto-regular text-sm text-colorText">Your content is no longer visible online
                                and should not be searchable online</p>
                        </div>
                        <div class="w-1/2 flex justify-end">
                            <input type="hidden" name="deactivate_account" value="{{ $userData->account_status }}">
                            <button type="button" id="deactivate"
                                class="roboto-medium text-sm text-colorText block py-2.5 px-4 rounded-full bg-btnsec hover:bg-gray-300"
                                onclick="toggleDeactivate()">
                                @if ($userData->account_status == 1)
                                    Deactivate
                                @else
                                    Deactivated
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mb-6 flex items-center justify-end">
                    <button type="submit"
                        class="roboto-medium text-sm text-backcolor block py-2 px-4 rounded-full bg-primary hover:bg-primaryDark">Save</button>
                </div>
            </form>
        </div>
        <div class="w-1/2"></div>
    </div>
</section>
