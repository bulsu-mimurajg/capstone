<x-layout>
    <x-slot:heading>Hello Bulsuan!</x-slot:heading>

    <div class="px-6 pb-16 flex items-start justify-center ">
        <div class="space-y-6 max-w-md text-center md:text-left ">
            <h1 class="text-[50px] font-extrabold text-[#666666]">Hello Bulsuan!</h1>
            <p class="text-[#707070] ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nihil nisi, quae aspernatur ipsa consequatur perferendis.
                Consectetur similique praesentium modi, quas asperiores blanditiis
                voluptates voluptatem sunt, magni sapiente cupiditate excepturi deleniti!</p>
        </div>
    </div>

    <div class="bg-[#ececec] flex justify-center items-start pt-[90px] h-full ">
        <div class="max-w-md w-full bg-white py-8 md:py-10 px-12 md:px-16 rounded-md shadow-md">
            <form action="">
                <h1 class="font-bold flex justify-center items-center text-[40px] text-[#666666] mb-[25px]">Login</h1>
                <div class="mb-6">
                    <input class="w-full px-4 py-[3px] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div>
                    <input class="w-full px-4 py-[3px] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <button class="w-full mt-8 bg-[#FF9D41] text-white font-semibold py-[3px] rounded-md hover:bg-[#ffa856]"
                        type="submit">Login
                </button>

                <div class="mt-6 text-center text-[13px] text-[#707070] hover:text-[#FF9D41] hover:underline">
                    <a href="forgotPassword.php">Forgot Password?</a>
                </div>
                <p class="text-center text-[13px] text-[#707070]">
                    Don't have an account yet?
                    <a class="text-[#FF9D41] hover:underline" href="createAccount.php">Create here</a>
                </p>

            </form>
        </div>

    </div>

</x-layout>
