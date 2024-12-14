@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: white;
        }
    }

    .typing-text {
        overflow: hidden;
        border-right: .15em solid black;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: .15em;
        animation: typing 5s steps(30, end), blink-caret .75s step-end infinite;
        animation-iteration-count: infinite;
    }

    #togglePassword {
        background: none;
        border: none;
        cursor: pointer;
    }
</style>

<body class="dark bg-black flex items-center justify-center">
    <div
        class="flex align-middle w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-black lg:max-w-4xl
        shadow-gray-700">

        <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
            <div class="flex items-center justify-between mb-4">
                <a href="#" class="text-xs text-gray-500 dark:text-gray-400 hover:underline">
                    Sign In</a>
                <span class="w-1/5 border-b dark:border-gray-600 md:w-5/6"></span>
            </div>

            <p class="font-sans text-xl text-center text-gray-600 dark:text-gray-200 typing-text">
                Hello.
            </p>

            <div class="flex items-center justify-between mt-4">
                <label for="name" class="block text-white text-sm font-medium">Name</label>
                <span class="w-1/2 border-b dark:border-white lg:w-5/6"></span>
            </div>
            <div class="mt-4">
                <input id="name"
                    class="block w-full px-4 py-2 rounded-lg dark:bg-black dark:text-gray-300 focus:border-black focus:ring-opacity-40 dark:focus:border-black focus:outline-none focus:ring focus:ring-white dark:focus:bg-black"
                    type="text" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <label for="email" class="block text-white text-sm font-medium">Username</label>
                <span class="w-1/2 border-b dark:border-white lg:w-4/5"></span>
            </div>
            <div class="mt-4">
                <input id="email"
                    class="block w-full px-4 py-2 rounded-lg dark:bg-black dark:text-gray-300 focus:border-black focus:ring-opacity-40 dark:focus:border-black focus:outline-none focus:ring focus:ring-white dark:focus:bg-black"
                    type="email" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <label for="password" class="text-white text-sm font-medium">Password</label>
                <span class="w-1/2 border-b dark:border-white lg:w-4/5"></span>
            </div>
            <div class="mt-4 relative">
                <div class="relative">
                    <input id="password"
                        class="block w-full px-4 py-2 rounded-lg dark:bg-black dark:text-gray-300 focus:border-black focus:ring-opacity-40 dark:focus:border-black focus:outline-none focus:ring focus:ring-white dark:focus:bg-black"
                        type="password" />
                    <svg id="togglePassword"
                        class="h-6 w-6 text-white absolute top-1/2 transform -translate-y-1/2 right-4 cursor-pointer"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path id="eye" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        <path id="eye-slash" style="display: none;" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                </div>
            </div>

            <div class="flex items-center justify-between mt-4">
                <label for="passwordConfirm" class="text-white text-sm font-medium">Password Confirmation</label>
                <span class="w-1/2 border-b dark:border-white lg:w-3/5"></span>
            </div>
            <div class="mt-4 relative">
                <div class="relative">
                    <input id="passwordConfirm"
                        class="block w-full px-4 py-2 rounded-lg dark:bg-black dark:text-gray-300 focus:border-black focus:ring-opacity-40 dark:focus:border-black focus:outline-none focus:ring focus:ring-white dark:focus:bg-black"
                        type="password" />
                    <svg id="togglePassword"
                        class="h-6 w-6 text-white absolute top-1/2 transform -translate-y-1/2 right-4 cursor-pointer"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path id="eye" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        <path id="eye-slash" style="display: none;" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                </div>
            </div>

            <div class="mt-6">
                <button
                    class="w-full px-6 py-3 text-sm font-medium text-black capitalize bg-white rounded-lg hover:bg-black hover:border-white hover:border-2 hover:text-white focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    Sign Up
                </button>
            </div>

            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                <a href="#" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">
                    &copy; Themoma, 2024.</a>

                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            </div>
        </div>

        <div class="border-l border-white h-96 self-center"></div>

        <div class="hidden lg:flex lg:w-1/2 items-center justify-center">
            <div class="w-full h-96 flex items-center justify-center">
                <img src="logo/w-logo.png" alt="Logo" class="max-h-full max-w-full" />
            </div>
        </div>
    </div>
</body>
<script>
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eye');
    const eyeSlashIcon = document.getElementById('eye-slash');

    toggleIcon.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') == 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        if (type == 'password') {
            eyeIcon.style.display = 'block';
            eyeSlashIcon.style.display = 'none';
        } else {
            eyeIcon.style.display = 'none';
            eyeSlashIcon.style.display = 'block';
        }
    });
</script>
