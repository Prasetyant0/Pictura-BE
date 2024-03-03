function previewImage(input) {
    const file = input.files[0];
    const label = input.parentElement;
    const previewContainer = document.getElementById('preview-container');
    const originalContent = document.getElementById('original-content');
    label.classList.remove('w-full');
    label.classList.remove('h-full');
    label.classList.add('h-auto');
    label.classList.add('w-auto');

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewContainer.classList.remove('hidden');
            originalContent.classList.add('hidden');
            const previewImage = document.getElementById('preview-image');
            previewImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        label.classList.remove('w-auto');
        label.classList.remove('h-auto');
        label.classList.add('w-full');
        label.classList.add('h-full');
        previewContainer.classList.add('hidden');
        originalContent.classList.remove('hidden');
    }
}

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
function sendTagsToServer(tags) {
    $.ajax({
        type: "POST",
        url: "/upload-post",
        data: { tags: tags },
        success: function(response) {
            console.log("Response from server:", response);
        },
        error: function(errors) {
            console.log("Error:", errors);
        }
    });
}
document.getElementById("tagged-topics").addEventListener("keyup", handleTagInput);

$("#upload-post-form").submit(function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    formData.append("tagged_topics", tagsArray.join(","));
    const userId = $('input[name="users_id"]').val();

    $.ajax({
        type: "POST",
        url: "/upload-post",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            window.location.href = "/profile/" +  userId;
            console.log(response);
        },
        error: function (errors) {
            console.log(errors);
        }
    });
});
