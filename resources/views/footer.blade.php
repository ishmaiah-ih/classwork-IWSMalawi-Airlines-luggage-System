<footer class="bg-blue-600 text-white py-8">
    <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row justify-between items-center">
        <!-- Logo and Description -->
        <div class="mb-6 md:mb-0 text-center md:text-left">
            <h2 class="text-2xl font-bold">Our Airline</h2>
            <p class="mt-2 text-sm">
                Fly with us for a memorable and comfortable journey. Your satisfaction is our priority.
            </p>
        </div>
        <!-- Navigation Links -->
        <div class="flex justify-center md:justify-end space-x-8 mb-6 md:mb-0">
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">Home</a>
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">About</a>
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">Services</a>
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">Contact</a>
        </div>
        <!-- Social Media Icons -->
        <div class="flex justify-center md:justify-end space-x-4">
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 2.04c-5.523 0-10 4.477-10 10 0 4.991 3.657 9.128 8.438 9.88v-6.99h-2.54v-2.89h2.54v-2.2c0-2.51 1.493-3.89 3.788-3.89 1.099 0 2.245.196 2.245.196v2.47h-1.263c-1.245 0-1.63.772-1.63 1.562v1.862h2.773l-.443 2.89h-2.33v6.99c4.781-.752 8.438-4.889 8.438-9.88 0-5.523-4.477-10-10-10z"/>
                </svg>
            </a>
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M22.46 6.03c-.77.34-1.59.57-2.46.68a4.38 4.38 0 0 0 1.92-2.42 8.78 8.78 0 0 1-2.77 1.06 4.39 4.39 0 0 0-7.6 3c0 .34.03.66.1.97a12.46 12.46 0 0 1-9.06-4.59 4.39 4.39 0 0 0 1.35 5.86 4.4 4.4 0 0 1-1.98-.55v.05c0 2.08 1.49 3.82 3.47 4.22a4.42 4.42 0 0 1-1.98.07 4.4 4.4 0 0 0 4.1 3.05 8.8 8.8 0 0 1-5.44 1.87c-.35 0-.7-.02-1.04-.06a12.41 12.41 0 0 0 6.74 1.97c8.08 0 12.5-6.7 12.5-12.5 0-.19-.01-.38-.02-.57a8.96 8.96 0 0 0 2.21-2.28z"/>
                </svg>
            </a>
            <a href="#" class="text-white hover:text-amber-500 transition duration-300">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 0C5.372 0 0 5.372 0 12c0 5.299 3.438 9.747 8.199 11.314.6.111.82-.261.82-.578v-2.268c-3.338.726-4.043-1.415-4.043-1.415-.547-1.387-1.335-1.758-1.335-1.758-1.092-.746.083-.73.083-.73 1.206.084 1.84 1.239 1.84 1.239 1.073 1.838 2.815 1.307 3.504.998.109-.777.42-1.308.764-1.608-2.667-.307-5.467-1.333-5.467-5.93 0-1.31.469-2.384 1.237-3.226-.123-.307-.536-1.54.116-3.209 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.398 3.005-.403 1.022.005 2.048.137 3.006.403 2.292-1.552 3.298-1.23 3.298-1.23.653 1.669.24 2.902.117 3.209.77.842 1.236 1.916 1.236 3.226 0 4.608-2.802 5.618-5.473 5.918.43.37.814 1.102.814 2.222v3.293c0 .32.22.693.824.574C20.565 21.743 24 17.297 24 12c0-6.628-5.372-12-12-12z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="mt-8 text-center text-sm text-white">
        &copy; 2024 Our Airline. All rights reserved.
    </div>
</footer>

<script>
    // JavaScript to toggle the navbar on mobile
    document.getElementById('navbar-toggle').addEventListener('click', function () {
        var menu = document.getElementById('navbar-links');
        menu.classList.toggle('hidden');
    });
</script>

@yield('script')
</body>
</html>
