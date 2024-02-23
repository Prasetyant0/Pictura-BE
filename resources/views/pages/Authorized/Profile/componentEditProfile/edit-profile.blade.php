<section id="edit-profile">
    <div class="flex flex-row">
        <div class="p-4 sm:ml-64 h-40 w-1/2">
            <div>
                <h1 class="roboto-medium text-2xl text-black pt-1">Edit Profile</h1>
                <p class="roboto-regular text-sm text-black">Keep your personal details private. Information you
                    add
                    here is visible to any who can view your
                    profile.</p>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="flex flex-col pt-3 space-y-3 mb-6">
                    <div>
                        <p class="roboto-regular text-sm text-iconColor">Photo</p>
                    </div>
                    <div class="flex flex-row items-center gap-4">
                        <div class="overflow-hidden">
                            <img id="profileImage"
                                src="{{ asset('assets/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg') }}"
                                alt="Foto Profile" class="rounded-full object-cover object-top h-20 w-20">
                        </div>
                        <div>
                            <input type="file" id="fileInput" class="hidden" accept="image/*">
                            <button type="button" onclick="document.getElementById('fileInput').click()"
                                class="roboto-medium text-sm text-colorText block py-2.5 px-4 rounded-full bg-btnsec hover:bg-gray-300">Change</button>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="full-name" class="block mb-2 text-sm roboto-regular text-iconColor">Full
                        Name</label>
                    <input type="text" id="full-name"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="Enter your full name" value="Janggar Prakoso" required>
                </div>
                <div class="mb-6">
                    <label for="bio" class="block mb-2 text-sm roboto-regular text-iconColor">Bio</label>
                    <textarea id="bio" rows="4"
                        class="block p-2.5 w-full text-sm text-colorText bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                        placeholder="Write your bio">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, qui!</textarea>
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-sm roboto-regular text-iconColor">Username</label>
                    <input type="text" id="username"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="Enter your username" value="devtasen" required>
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
