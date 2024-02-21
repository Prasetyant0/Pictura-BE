const editProfileLink = document.querySelector('#sidebar-profile a[href="#edit-profile"]');
const accountSettingLink = document.querySelector('#sidebar-profile a[href="#account-setting"]');
const changePasswordLink = document.querySelector('#sidebar-profile a[href="#change-password"]');
const editProfileContent = document.getElementById('edit-profile');
const accountSettingContent = document.getElementById('account-setting');
const changePasswordContent = document.getElementById('change-password');

document.getElementById('fileInput').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const profileImage = document.getElementById('profileImage');
            profileImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.getElementById('deactivate').addEventListener('click', function () {
    var button = this;
    if (button.textContent.trim().toLowerCase() === 'deactivate') {
        button.textContent = 'Deactivated';
    } else {
        button.textContent = 'Deactivate';
    }
})

function showContent(contentToShow) {
    const links = [editProfileLink, accountSettingLink, changePasswordLink];
    const contents = [editProfileContent, accountSettingContent, changePasswordContent];

    for (let i = 0; i < links.length; i++) {
        links[i].classList.remove('bg-btnsec');
        contents[i].classList.add('hidden');
    }

    const indexToShow = contents.indexOf(contentToShow);
    if (indexToShow !== -1) {
        links[indexToShow].classList.add('bg-btnsec');
        contentToShow.classList.remove('hidden');
    }
}

editProfileLink.addEventListener('click', function (event) {
    event.preventDefault();
    showContent(editProfileContent);
});

accountSettingLink.addEventListener('click', function (event) {
    event.preventDefault();
    showContent(accountSettingContent);
});

changePasswordLink.addEventListener('click', function (event) {
    event.preventDefault();
    showContent(changePasswordContent);
});

showContent(editProfileContent);
