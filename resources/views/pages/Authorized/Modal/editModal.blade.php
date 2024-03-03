<div id="edit-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg roboto-medium text-gray-900">
                    Edit your post
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="POST" action="/update-post/{{ $post->id }}">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="title" class="block mb-2 text-sm roboto-medium text-gray-900">Title</label>
                        <input type="text" id="title" name="photo_title"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                            required placeholder="your post title" value="{{ $post->photo_title }}">
                    </div>
                    <div class="col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm roboto-medium text-gray-900">Description</label>
                        <textarea id="description" rows="4" name="photo_description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                            placeholder="your post description">{{ $post->photo_description }}</textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="tagged-topics" class="block mb-2 text-sm roboto-medium text-gray-900">Tagged
                            Topics</label>
                        <div class="flex flex-wrap gap-1 pb-1" id="tag-container">
                        </div>
                        <input type="text" id="tagged-topics" name="tagged_topics" value="{{ $post->tag_topic }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="Press enter or add a comma after each tag (max 5 tags)"
                            onkeydown="handleTagInput(event)">
                    </div>
                    <div class="col-span-2">
                        <label for="category_id" class="block mb-2 text-sm roboto-medium text-gray-900">Category
                                Post</label>
                            <select id="category_id"
                                class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                name="category_id">
                                <option selected>Select category for your post</option>
                                @foreach ($postCategory as $c)
                                    <option value="{{ $c->id }}" {{ $c->id == $post->category_id ? 'selected' : '' }}>{{ $c->category_title }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-primary hover:bg-primaryDark roboto-medium rounded-xl text-sm px-5 py-2.5 text-center">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    let tagsArray = [];

    function handleTagInput(event) {
        if (event.key === "Enter" || event.keyCode === 13) {
            event.preventDefault();
            const tagInput = document.getElementById("tagged-topics");
            const newTagsArray = tagInput.value.split(",").map(tag => tag.trim());

            const trimmedValue = tagInput.value.trim();
            if (trimmedValue !== "") {
                tagInput.value = "";
            }

            const tagContainer = document.getElementById("tag-container");
            newTagsArray.forEach(tag => {
                if (tagsArray.length < 5 && tag !== "") {
                    const tagSpan = document.createElement("span");
                    tagSpan.className = "bg-gray-200 text-black px-2.5 py-1 rounded-md text-sm font-medium";
                    tagSpan.innerText = "#" + tag;
                    const closeButton = document.createElement("button");
                    closeButton.className = "ml-1 text-sm text-gray-500 focus:outline-none";
                    closeButton.innerHTML = "&times;";
                    closeButton.addEventListener("click", () => {
                        tagSpan.remove();
                        const index = tagsArray.indexOf(tag);
                        if (index > -1) {
                            tagsArray.splice(index, 1);
                        }
                    });
                    tagSpan.appendChild(closeButton);
                    tagContainer.appendChild(tagSpan);

                    if (tag !== "") {
                        tagsArray.push(tag);
                    }
                }
            });
            sendTagsToServer(tagsArray);
        }
    }
</script>
