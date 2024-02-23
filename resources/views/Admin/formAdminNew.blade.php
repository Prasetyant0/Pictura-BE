@extends('Admin.layout.master_admin')
@section('content-admin')
    <main>
        <section class="max-w-screen-2xl mx-auto" id="postReport-content">
            <div class="px-4 mt-20 sm:ml-64">
                <div class="bg-backcolor p-3 rounded-lg mb-5">
                    <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="fullname"
                                    class="block mb-2 text-sm font-medium text-gray-900">Fullname</label>
                                <input type="text" id="fullname"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                    placeholder="John Wick" required />
                            </div>
                            <div>
                                <label for="username"
                                    class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                                <input type="text" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                    placeholder="Doenil11" required />
                            </div>
                            <div>
                                <label for="gender"
                                    class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                                <select id="gender"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                    focus:ring-primary focus:border-primary block w-full p-2.5">
                                    <option selected>Choose your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div>
                                <label for="birthdate"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Birthdate</label>
                                <input type="date" id="birthdate"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                                address</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="john.doe@company.com" required />
                        </div>
                        <div class="mb-6">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="•••••••••" required />
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="photo_profile">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                aria-describedby="photo_profile_help" id="photo_profile" type="file">
                            <p class="mt-1 text-sm text-gray-500" id="photo_profile_help">SVG, PNG, JPG
                                or GIF (MAX. 800x400px).</p>
                        </div>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-primaryDark font-medium rounded-xl text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
