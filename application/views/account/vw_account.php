<div>
    <div id="content-wrap">
        <section id="navbar-dashboard" class="bg-white sticky">
            <div class="flex flex-space-between flex-center-vertical">
                <div class="breadcrumb-navbar"><span class="color-text-neutral">Settings</span></div>
                <div class="flex flex-gap-regular"><a href="/student/discussion?lang=English"
                        class="no-decoration flex navbar-icon flex-center-vertical"><img src="Message.svg" alt=""></a>
                    <div class="profile-nav-dashboard"><img
                            src="https://lh3.googleusercontent.com/a/ACg8ocKBXrjtWV3lnxyWtQRPJx9glVi_Cj9ousA8V1HpQ0j9cg=s96-c"
                            class="profile-nav-dashboard" alt="" referrerpolicy="no-referrer"></div>
                </div>
            </div>
        </section>
        <div id="content-main">
            <div class="grid">
                <div class="row">
                    <div class="col-4" id="settings-desktop">
                        <div class="card-white-2 flex flex-direction-col">
                            <div class="flex title-settings b-bot-settings item-settings item-settings-unset">Settings
                            </div>
                            <div class="flex b-bot-settings item-settings setting-menu item-settings-active">
                                <div class="flex flex-gap-regular">
                                    <div><img src="Profile.svg" alt=""></div>
                                    <div class="flex flex-direction-col flex-gap-small">
                                        <div class="title-item-setting mt-1 active-title-setting">My Profile</div>
                                        <div class="desc-item-setting active-desc-setting active-desc-setting">See how
                                            your
                                            current profile looks. You can always change it
                                            later.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex setting-menu  item-settings ">
                                <div class="flex flex-gap-regular">
                                    <div><img alt="" src="Document.svg"></div>
                                    <div class="flex flex-direction-col flex-gap-small">
                                        <div class="title-item-setting mt-1 ">My Courses</div>
                                        <div class="desc-item-setting active-desc-setting ">Configure which classes that
                                            you
                                            want to display</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 mobile-flex-full">
                        <div class="card-white-2 flex flex-direction-col">
                            <div style="">
                                <div class="flex title-settings b-bot-settings item-settings item-settings-unset">My
                                    Profile
                                </div>
                                <div
                                    class="item-settings flex flex-direction-col flex-gap-semi-large item-settings-unset">
                                    <div class="b-bot-settings p-border flex flex-direction-col flex-gap-semi-large">
                                        <div class="flex flex-direction-col flex-gap-small">
                                            <div class="subtitle-content-setting">This information will be displayed
                                                publicly so be
                                                careful what you share.</div>
                                        </div>
                                        <div class="flex flex-direction-col flex-gap-regular">
                                            <div class="title-photo">Photo</div>
                                            <div class="flex flex-gap-regular flex-center-vertical"><input type="file"
                                                    hidden="" id="input-image-file"> <img
                                                    src="https://lh3.googleusercontent.com/a/ACg8ocKBXrjtWV3lnxyWtQRPJx9glVi_Cj9ousA8V1HpQ0j9cg=s96-c"
                                                    alt="" referrerpolicy="no-referrer" width="44"
                                                    class="profile-nav-dashboard" style="cursor: pointer;"> <button
                                                    class="setting-profile-button">Change</button> <button
                                                    class="setting-profile-button-2">Remove</button></div>
                                        </div>
                                        <div class="flex flex-gap-regular w-100 column-mobile">
                                            <div
                                                class="flex flex-direction-col flex-gap-semi-small mobile-flex-full-important w-50">
                                                <label class="label-profile-setting" for="full-name-field">Full name
                                                    <span id="full-name-field-error"
                                                        style="display: none;"></span></label>
                                                <input id="full-name-field" type="text"
                                                    class="input-profile-setting mobile-flex-full"
                                                    placeholder="Full name">
                                            </div>
                                            <div
                                                class="flex flex-direction-col flex-gap-semi-small mobile-flex-full-important w-50">
                                                <label class="label-profile-setting"
                                                    for="username-field">Username</label>
                                                <input id="username-field" type="text"
                                                    class="input-profile-setting mobile-flex-full"
                                                    placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="flex flex-direction-col flex-gap-regular">
                                            <div class="flex flex-gap-small"><label for=""
                                                    class="label-profile-setting">About</label></div>
                                            <div id="editor" style="display: none;">
                                                <p></p>
                                            </div>
                                            <div class="ck ck-reset ck-editor ck-rounded-corners" role="application"
                                                dir="ltr" lang="en"
                                                aria-labelledby="ck-editor__label_ed05c7c2ee9492052ef7fcc8b4af5f97c">
                                                <label class="ck ck-label ck-voice-label"
                                                    id="ck-editor__label_ed05c7c2ee9492052ef7fcc8b4af5f97c">Rich Text
                                                    Editor</label>
                                                <div class="ck ck-editor__top ck-reset_all" role="presentation">
                                                    <div class="ck ck-sticky-panel">
                                                        <div class="ck ck-sticky-panel__placeholder"
                                                            style="display: none;">
                                                        </div>
                                                        <div class="ck ck-sticky-panel__content">
                                                            <div class="ck ck-toolbar ck-toolbar_grouping"
                                                                role="toolbar" aria-label="Editor toolbar">
                                                                <div class="ck ck-toolbar__items">
                                                                    <div class="ck ck-dropdown ck-heading-dropdown">
                                                                        <button
                                                                            class="ck ck-button ck-off ck-button_with-text ck-dropdown__button"
                                                                            type="button" tabindex="-1"
                                                                            aria-labelledby="ck-editor__aria-label_eb86611c70ae8a0347e83a34c06ce077b"
                                                                            aria-haspopup="true"><span
                                                                                class="ck ck-tooltip ck-tooltip_s"><span
                                                                                    class="ck ck-tooltip__text">Heading</span></span><span
                                                                                class="ck ck-button__label"
                                                                                id="ck-editor__aria-label_eb86611c70ae8a0347e83a34c06ce077b">Paragraph</span><svg
                                                                                class="ck ck-icon ck-dropdown__arrow"
                                                                                viewBox="0 0 10 10">
                                                                                <path
                                                                                    d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z">
                                                                                </path>
                                                                            </svg></button>
                                                                        <div
                                                                            class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se">
                                                                            <ul class="ck ck-reset ck-list">
                                                                                <li class="ck ck-list__item"><button
                                                                                        class="ck ck-button ck-heading_paragraph ck-on ck-button_with-text"
                                                                                        type="button" tabindex="-1"
                                                                                        aria-labelledby="ck-editor__aria-label_ec006a835fb0e0fc0955c4cbf453ec621"><span
                                                                                            class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                class="ck ck-tooltip__text"></span></span><span
                                                                                            class="ck ck-button__label"
                                                                                            id="ck-editor__aria-label_ec006a835fb0e0fc0955c4cbf453ec621">Paragraph</span></button>
                                                                                </li>
                                                                                <li class="ck ck-list__item"><button
                                                                                        class="ck ck-button ck-heading_heading1 ck-off ck-button_with-text"
                                                                                        type="button" tabindex="-1"
                                                                                        aria-labelledby="ck-editor__aria-label_eea177463e17f88f4bc78bcc9e98eab49"><span
                                                                                            class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                class="ck ck-tooltip__text"></span></span><span
                                                                                            class="ck ck-button__label"
                                                                                            id="ck-editor__aria-label_eea177463e17f88f4bc78bcc9e98eab49">Heading
                                                                                            1</span></button></li>
                                                                                <li class="ck ck-list__item"><button
                                                                                        class="ck ck-button ck-heading_heading2 ck-off ck-button_with-text"
                                                                                        type="button" tabindex="-1"
                                                                                        aria-labelledby="ck-editor__aria-label_ea8eb1ca1511981d7cd831890012a4747"><span
                                                                                            class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                class="ck ck-tooltip__text"></span></span><span
                                                                                            class="ck ck-button__label"
                                                                                            id="ck-editor__aria-label_ea8eb1ca1511981d7cd831890012a4747">Heading
                                                                                            2</span></button></li>
                                                                                <li class="ck ck-list__item"><button
                                                                                        class="ck ck-button ck-heading_heading3 ck-off ck-button_with-text"
                                                                                        type="button" tabindex="-1"
                                                                                        aria-labelledby="ck-editor__aria-label_ed0f210bf2081538c60353f83edc88179"><span
                                                                                            class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                class="ck ck-tooltip__text"></span></span><span
                                                                                            class="ck ck-button__label"
                                                                                            id="ck-editor__aria-label_ed0f210bf2081538c60353f83edc88179">Heading
                                                                                            3</span></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div><span
                                                                        class="ck ck-toolbar__separator"></span><button
                                                                        class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e97d59debc07138d5d1ab1cd64cdf54a5"
                                                                        aria-pressed="false"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M10.187 17H5.773c-.637 0-1.092-.138-1.364-.415-.273-.277-.409-.718-.409-1.323V4.738c0-.617.14-1.062.419-1.332.279-.27.73-.406 1.354-.406h4.68c.69 0 1.288.041 1.793.124.506.083.96.242 1.36.478.341.197.644.447.906.75a3.262 3.262 0 0 1 .808 2.162c0 1.401-.722 2.426-2.167 3.075C15.05 10.175 16 11.315 16 13.01a3.756 3.756 0 0 1-2.296 3.504 6.1 6.1 0 0 1-1.517.377c-.571.073-1.238.11-2 .11zm-.217-6.217H7v4.087h3.069c1.977 0 2.965-.69 2.965-2.072 0-.707-.256-1.22-.768-1.537-.512-.319-1.277-.478-2.296-.478zM7 5.13v3.619h2.606c.729 0 1.292-.067 1.69-.2a1.6 1.6 0 0 0 .91-.765c.165-.267.247-.566.247-.897 0-.707-.26-1.176-.778-1.409-.519-.232-1.31-.348-2.375-.348H7z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Bold
                                                                                (Ctrl+B)</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_e97d59debc07138d5d1ab1cd64cdf54a5">Bold</span></button><button
                                                                        class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_efb66e3b4694b78d57e52b15e229bef1a"
                                                                        aria-pressed="false"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="m9.586 14.633.021.004c-.036.335.095.655.393.962.082.083.173.15.274.201h1.474a.6.6 0 1 1 0 1.2H5.304a.6.6 0 0 1 0-1.2h1.15c.474-.07.809-.182 1.005-.334.157-.122.291-.32.404-.597l2.416-9.55a1.053 1.053 0 0 0-.281-.823 1.12 1.12 0 0 0-.442-.296H8.15a.6.6 0 0 1 0-1.2h6.443a.6.6 0 1 1 0 1.2h-1.195c-.376.056-.65.155-.823.296-.215.175-.423.439-.623.79l-2.366 9.347z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Italic
                                                                                (Ctrl+I)</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_efb66e3b4694b78d57e52b15e229bef1a">Italic</span></button><button
                                                                        class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_eac604c7f36059c34098c254f112365f3"
                                                                        aria-pressed="false"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="m11.077 15 .991-1.416a.75.75 0 1 1 1.229.86l-1.148 1.64a.748.748 0 0 1-.217.206 5.251 5.251 0 0 1-8.503-5.955.741.741 0 0 1 .12-.274l1.147-1.639a.75.75 0 1 1 1.228.86L4.933 10.7l.006.003a3.75 3.75 0 0 0 6.132 4.294l.006.004zm5.494-5.335a.748.748 0 0 1-.12.274l-1.147 1.639a.75.75 0 1 1-1.228-.86l.86-1.23a3.75 3.75 0 0 0-6.144-4.301l-.86 1.229a.75.75 0 0 1-1.229-.86l1.148-1.64a.748.748 0 0 1 .217-.206 5.251 5.251 0 0 1 8.503 5.955zm-4.563-2.532a.75.75 0 0 1 .184 1.045l-3.155 4.505a.75.75 0 1 1-1.229-.86l3.155-4.506a.75.75 0 0 1 1.045-.184z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Link
                                                                                (Ctrl+K)</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_eac604c7f36059c34098c254f112365f3">Link</span></button><button
                                                                        class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e630c67db80d7390b4f88c7f76caef4ca"
                                                                        aria-pressed="false"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0C1 4.784 1.777 4 2.75 4c.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75C1.784 7.5 1 6.723 1 5.75zm6 9c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0c0-.966.777-1.75 1.75-1.75.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75-.966 0-1.75-.777-1.75-1.75z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Bulleted
                                                                                List</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_e630c67db80d7390b4f88c7f76caef4ca">Bulleted
                                                                            List</span></button><button
                                                                        class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_eb26a625321763a6f2f43c4ab0e8ffc43"
                                                                        aria-pressed="false"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM3.5 3v5H2V3.7H1v-1h2.5V3zM.343 17.857l2.59-3.257H2.92a.6.6 0 1 0-1.04 0H.302a2 2 0 1 1 3.995 0h-.001c-.048.405-.16.734-.333.988-.175.254-.59.692-1.244 1.312H4.3v1h-4l.043-.043zM7 14.75a.75.75 0 0 1 .75-.75h9.5a.75.75 0 1 1 0 1.5h-9.5a.75.75 0 0 1-.75-.75z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Numbered
                                                                                List</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_eb26a625321763a6f2f43c4ab0e8ffc43">Numbered
                                                                            List</span></button><span
                                                                        class="ck ck-toolbar__separator"></span><button
                                                                        class="ck ck-button ck-disabled ck-off"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_ee168b9f49ed860920d7510e0e8313e86"
                                                                        aria-disabled="true"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M2 3.75c0 .414.336.75.75.75h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 0 0-.75.75zm5 6c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM2.75 16.5h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 1 0 0 1.5zm1.618-9.55L.98 9.358a.4.4 0 0 0 .013.661l3.39 2.207A.4.4 0 0 0 5 11.892V7.275a.4.4 0 0 0-.632-.326z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Decrease
                                                                                indent</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_ee168b9f49ed860920d7510e0e8313e86">Decrease
                                                                            indent</span></button><button
                                                                        class="ck ck-button ck-disabled ck-off"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_ea16a5f1434baab5467754bf3eaa6efd2"
                                                                        aria-disabled="true"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M2 3.75c0 .414.336.75.75.75h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 0 0-.75.75zm5 6c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM2.75 16.5h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 1 0 0 1.5zM1.632 6.95 5.02 9.358a.4.4 0 0 1-.013.661l-3.39 2.207A.4.4 0 0 1 1 11.892V7.275a.4.4 0 0 1 .632-.326z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Increase
                                                                                indent</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_ea16a5f1434baab5467754bf3eaa6efd2">Increase
                                                                            indent</span></button><span
                                                                        class="ck ck-toolbar__separator"></span><span
                                                                        class="ck-file-dialog-button"><button
                                                                            class="ck ck-button ck-off" type="button"
                                                                            tabindex="-1"
                                                                            aria-labelledby="ck-editor__aria-label_e27aeeae92a9c36fbcf4b72f51d92e500"><svg
                                                                                class="ck ck-icon ck-button__icon"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M6.91 10.54c.26-.23.64-.21.88.03l3.36 3.14 2.23-2.06a.64.64 0 0 1 .87 0l2.52 2.97V4.5H3.2v10.12l3.71-4.08zm10.27-7.51c.6 0 1.09.47 1.09 1.05v11.84c0 .59-.49 1.06-1.09 1.06H2.79c-.6 0-1.09-.47-1.09-1.06V4.08c0-.58.49-1.05 1.1-1.05h14.38zm-5.22 5.56a1.96 1.96 0 1 1 3.4-1.96 1.96 1.96 0 0 1-3.4 1.96z">
                                                                                </path>
                                                                            </svg><span
                                                                                class="ck ck-tooltip ck-tooltip_s"><span
                                                                                    class="ck ck-tooltip__text">Insert
                                                                                    image</span></span><span
                                                                                class="ck ck-button__label"
                                                                                id="ck-editor__aria-label_e27aeeae92a9c36fbcf4b72f51d92e500">Insert
                                                                                image</span></button><input
                                                                            class="ck-hidden" type="file" tabindex="-1"
                                                                            accept="image/jpeg,image/png,image/gif,image/bmp,image/webp,image/tiff"
                                                                            multiple="true"></span><button
                                                                        class="ck ck-button ck-off" type="button"
                                                                        tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e5281a54e535f7ff1589eb4935c3ef94c"
                                                                        aria-pressed="false"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M3 10.423a6.5 6.5 0 0 1 6.056-6.408l.038.67C6.448 5.423 5.354 7.663 5.22 10H9c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574zm8 0a6.5 6.5 0 0 1 6.056-6.408l.038.67c-2.646.739-3.74 2.979-3.873 5.315H17c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Block
                                                                                quote</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_e5281a54e535f7ff1589eb4935c3ef94c">Block
                                                                            quote</span></button>
                                                                    <div class="ck ck-dropdown"><button
                                                                            class="ck ck-button ck-off ck-dropdown__button"
                                                                            type="button" tabindex="-1"
                                                                            aria-labelledby="ck-editor__aria-label_e480bf06c3527247b9a568f5a52de65a4"
                                                                            aria-haspopup="true"><svg
                                                                                class="ck ck-icon ck-button__icon"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M3 6v3h4V6H3zm0 4v3h4v-3H3zm0 4v3h4v-3H3zm5 3h4v-3H8v3zm5 0h4v-3h-4v3zm4-4v-3h-4v3h4zm0-4V6h-4v3h4zm1.5 8a1.5 1.5 0 0 1-1.5 1.5H3A1.5 1.5 0 0 1 1.5 17V4c.222-.863 1.068-1.5 2-1.5h13c.932 0 1.778.637 2 1.5v13zM12 13v-3H8v3h4zm0-4V6H8v3h4z">
                                                                                </path>
                                                                            </svg><span
                                                                                class="ck ck-tooltip ck-tooltip_s"><span
                                                                                    class="ck ck-tooltip__text">Insert
                                                                                    table</span></span><span
                                                                                class="ck ck-button__label"
                                                                                id="ck-editor__aria-label_e480bf06c3527247b9a568f5a52de65a4">Insert
                                                                                table</span><svg
                                                                                class="ck ck-icon ck-dropdown__arrow"
                                                                                viewBox="0 0 10 10">
                                                                                <path
                                                                                    d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z">
                                                                                </path>
                                                                            </svg></button>
                                                                        <div
                                                                            class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ck ck-dropdown"><button
                                                                            class="ck ck-button ck-off ck-dropdown__button"
                                                                            type="button" tabindex="-1"
                                                                            aria-labelledby="ck-editor__aria-label_ee9b3e431729c49942862bcb1c479f8c7"
                                                                            aria-haspopup="true"><svg
                                                                                class="ck ck-icon ck-button__icon"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M18.68 3.03c.6 0 .59-.03.59.55v12.84c0 .59.01.56-.59.56H1.29c-.6 0-.59.03-.59-.56V3.58c0-.58-.01-.55.6-.55h17.38zM15.77 15V5H4.2v10h11.57zM2 4v1h1V4H2zm0 2v1h1V6H2zm0 2v1h1V8H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zM17 4v1h1V4h-1zm0 2v1h1V6h-1zm0 2v1h1V8h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zM7.5 7.177a.4.4 0 0 1 .593-.351l5.133 2.824a.4.4 0 0 1 0 .7l-5.133 2.824a.4.4 0 0 1-.593-.35V7.176v.001z">
                                                                                </path>
                                                                            </svg><span
                                                                                class="ck ck-tooltip ck-tooltip_s"><span
                                                                                    class="ck ck-tooltip__text">Insert
                                                                                    media</span></span><span
                                                                                class="ck ck-button__label"
                                                                                id="ck-editor__aria-label_ee9b3e431729c49942862bcb1c479f8c7">Insert
                                                                                media</span><svg
                                                                                class="ck ck-icon ck-dropdown__arrow"
                                                                                viewBox="0 0 10 10">
                                                                                <path
                                                                                    d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z">
                                                                                </path>
                                                                            </svg></button>
                                                                        <div
                                                                            class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se">
                                                                            <form
                                                                                class="ck ck-media-form ck-responsive-form"
                                                                                tabindex="-1">
                                                                                <div
                                                                                    class="ck ck-labeled-field-view ck-labeled-field-view_empty">
                                                                                    <div
                                                                                        class="ck ck-labeled-field-view__input-wrapper">
                                                                                        <input
                                                                                            class="ck ck-input ck-input-text_empty ck-input-text"
                                                                                            id="ck-labeled-field-view-ecac445d7f7fcb5fcb936017731eb0799"
                                                                                            inputmode="text"
                                                                                            aria-describedby="ck-labeled-field-view-status-e40230d85ffceb5630892cbe261b6feb1"
                                                                                            type="text"><label
                                                                                            class="ck ck-label"
                                                                                            id="ck-editor__label_e00f764c1697d9fb6b466a02d4c6807bd"
                                                                                            for="ck-labeled-field-view-ecac445d7f7fcb5fcb936017731eb0799">Media
                                                                                            URL</label>
                                                                                    </div>
                                                                                    <div class="ck ck-labeled-field-view__status"
                                                                                        id="ck-labeled-field-view-status-e40230d85ffceb5630892cbe261b6feb1">
                                                                                        Paste the media URL in the
                                                                                        input.
                                                                                    </div>
                                                                                </div><button
                                                                                    class="ck ck-button ck-disabled ck-off ck-button-save"
                                                                                    type="submit" tabindex="-1"
                                                                                    aria-labelledby="ck-editor__aria-label_e6dbf14a825194361e909db3db5a85406"
                                                                                    aria-disabled="true"><svg
                                                                                        class="ck ck-icon ck-button__icon"
                                                                                        viewBox="0 0 20 20">
                                                                                        <path
                                                                                            d="M6.972 16.615a.997.997 0 0 1-.744-.292l-4.596-4.596a1 1 0 1 1 1.414-1.414l3.926 3.926 9.937-9.937a1 1 0 0 1 1.414 1.415L7.717 16.323a.997.997 0 0 1-.745.292z">
                                                                                        </path>
                                                                                    </svg><span
                                                                                        class="ck ck-tooltip ck-tooltip_s"><span
                                                                                            class="ck ck-tooltip__text">Save</span></span><span
                                                                                        class="ck ck-button__label"
                                                                                        id="ck-editor__aria-label_e6dbf14a825194361e909db3db5a85406">Save</span></button><button
                                                                                    class="ck ck-button ck-off ck-button-cancel"
                                                                                    type="button" tabindex="-1"
                                                                                    aria-labelledby="ck-editor__aria-label_e06a7540ab8e2f928c7e21c4135ff7cf3"><svg
                                                                                        class="ck ck-icon ck-button__icon"
                                                                                        viewBox="0 0 20 20">
                                                                                        <path
                                                                                            d="m11.591 10.177 4.243 4.242a1 1 0 0 1-1.415 1.415l-4.242-4.243-4.243 4.243a1 1 0 0 1-1.414-1.415l4.243-4.242L4.52 5.934A1 1 0 0 1 5.934 4.52l4.243 4.243 4.242-4.243a1 1 0 1 1 1.415 1.414l-4.243 4.243z">
                                                                                        </path>
                                                                                    </svg><span
                                                                                        class="ck ck-tooltip ck-tooltip_s"><span
                                                                                            class="ck ck-tooltip__text">Cancel</span></span><span
                                                                                        class="ck ck-button__label"
                                                                                        id="ck-editor__aria-label_e06a7540ab8e2f928c7e21c4135ff7cf3">Cancel</span></button>
                                                                            </form>
                                                                        </div>
                                                                    </div><button
                                                                        class="ck ck-button ck-disabled ck-off"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_eb3536b9bbe563531f3e9eb539808a72e"
                                                                        aria-disabled="true"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="m5.042 9.367 2.189 1.837a.75.75 0 0 1-.965 1.149l-3.788-3.18a.747.747 0 0 1-.21-.284.75.75 0 0 1 .17-.945L6.23 4.762a.75.75 0 1 1 .964 1.15L4.863 7.866h8.917A.75.75 0 0 1 14 7.9a4 4 0 1 1-1.477 7.718l.344-1.489a2.5 2.5 0 1 0 1.094-4.73l.008-.032H5.042z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Undo
                                                                                (Ctrl+Z)</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_eb3536b9bbe563531f3e9eb539808a72e">Undo</span></button><button
                                                                        class="ck ck-button ck-disabled ck-off"
                                                                        type="button" tabindex="-1"
                                                                        aria-labelledby="ck-editor__aria-label_e11f6054e829b0181559bb06585c01fa6"
                                                                        aria-disabled="true"><svg
                                                                            class="ck ck-icon ck-button__icon"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="m14.958 9.367-2.189 1.837a.75.75 0 0 0 .965 1.149l3.788-3.18a.747.747 0 0 0 .21-.284.75.75 0 0 0-.17-.945L13.77 4.762a.75.75 0 1 0-.964 1.15l2.331 1.955H6.22A.75.75 0 0 0 6 7.9a4 4 0 1 0 1.477 7.718l-.344-1.489A2.5 2.5 0 1 1 6.039 9.4l-.008-.032h8.927z">
                                                                            </path>
                                                                        </svg><span
                                                                            class="ck ck-tooltip ck-tooltip_s"><span
                                                                                class="ck ck-tooltip__text">Redo
                                                                                (Ctrl+Y)</span></span><span
                                                                            class="ck ck-button__label"
                                                                            id="ck-editor__aria-label_e11f6054e829b0181559bb06585c01fa6">Redo</span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ck ck-editor__main" role="presentation">
                                                    <div class="ck-blurred ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline"
                                                        lang="en" dir="ltr" role="textbox"
                                                        aria-label="Rich Text Editor, main" contenteditable="true">
                                                        <p><br data-cke-filler="true"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-direction-col flex-gap-semi-large">
                                        <div class="flex flex-direction-col flex-gap-small">
                                            <div class="title-content-setting">Personal Information</div>
                                            <div class="subtitle-content-setting">This information well be displayed
                                                publicly so be
                                                careful what you share.</div>
                                        </div>
                                        <div class="flex flex-gap-regular w-100 column-mobile">
                                            <div
                                                class="flex flex-direction-col flex-gap-semi-small mobile-flex-full-important w-50">
                                                <label for="email-field" class="label-profile-setting">Email address
                                                    <span id="email-field-error" style="display: none;"></span></label>
                                                <input id="email-field" type="text"
                                                    class="input-profile-setting mobile-flex-full" name=""
                                                    placeholder="Email address">
                                            </div>
                                            <div
                                                class="flex flex-direction-col flex-gap-semi-small mobile-flex-full-important w-50">
                                                <label for="phone-number-field" class="label-profile-setting">Phone
                                                    Number</label> <input id="phone-number-field" type="text"
                                                    class="input-profile-setting-2 phone-number mobile-flex-full"
                                                    name="" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="flex flex-gap-regular w-100 b-bot-settings p-border column-mobile">
                                            <div
                                                class="flex flex-direction-col flex-gap-semi-small mobile-flex-full-important w-50">
                                                <label for="country-field" class="label-profile-setting">Country</label>
                                                <div id="country-field"
                                                    class="input-profile-setting-2 padding-unset mobile-flex-full">
                                                    <select class="select-profile">
                                                        <option value="" disabled="">Select country </option>
                                                        <option value="1">Indonesia</option>
                                                        <option value="2">Malaysia</option>
                                                        <option value="3">Singapore</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-direction-col flex-gap-semi-small mobile-flex-full-important w-50">
                                                <label for="language-field" class="label-profile-setting">Language <span
                                                        id="language-field-error" style="display: none;"></span></label>
                                                <div id="language-field"
                                                    class="input-profile-setting-2 padding-unset mobile-flex-full">
                                                    <select class="select-profile">
                                                        <option value="" disabled="">Select language </option>
                                                        <option value="1">Bahasa Indonesia</option>
                                                        <option value="2">English</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-space-between flex-center-vertical mobile-flex-end mobile-flex-gap-m">
                                            <div class="date-account">This account was created on Dec 11, 2023, 9:41:35
                                                AM
                                            </div>
                                            <div
                                                class="flex flex-gap-regular column-mobile mobile-flex-full mobile-flex-end">
                                                <button
                                                    class="button-cancel-profile mobile-flex-full mobile-justify-center">Cancel</button>
                                                <button
                                                    class="button-save-profile mobile-flex-full mobile-justify-center">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>