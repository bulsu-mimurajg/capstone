<x-layout>
    <x-slot:heading>Hello Bulsuan!</x-slot:heading>

    <div class="px-6 pt-2 pb-16 flex items-start justify-center ">
        <div class="space-y-6 max-w-md text-center md:text-left ">
            <h1 class="text-[35px] font-semibold text-[#666666]">To create an account:</h1>
            <p class="text-[#707070] ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nihil nisi, quae aspernatur ipsa consequatur perferendis.
                Consectetur similique praesentium modi, quas asperiores blanditiis
                voluptates voluptatem sunt, magni sapiente cupiditate excepturi deleniti!</p>
        </div>
    </div>

    <div class="bg-[#ececec] flex justify-center items-start pt-[90px] h-full ">
        <div class="max-w-md w-full bg-white  py-8 md:py-10 px-12 md:px-16 rounded-md shadow">
            <form action="">
                <h1 class="font-bold flex justify-center items-center text-[30px] text-[#666666] mb-[16px]">Forgot
                    Password</h1>
                <p class="text-center text-[#666666] text-[15px] md:text-left ml-[12px]">
                    Please enter the email connected to your account to request for a password reset link.
                </p>
                <div class=" mt-8">
                    <input
                        class="w-full px-4 py-[3px] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="text" name="username" id="username" placeholder="Username" required>
                </div>

                <button class="w-full mt-6 bg-[#FF9D41] text-white font-semibold py-[3px] rounded-md hover:bg-[#ffa856]"
                        type="submit">Send
                </button>

                <p class="text-center text-[13px] mt-8 text-[#707070]">
                    Go back to
                    <a class="text-[#FF9D41] hover:underline" href="{{ route('login') }}">login?</a>
                </p>
            </form>
        </div>
    </div>

</x-layout>
