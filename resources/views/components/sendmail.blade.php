<div class="my-2 z-10 rounded-md mt-6 border border-zinc-300 p-6 shadow-lg text-md">
    <form wire:submit.prevent="submitEmail">
        @csrf

        <div class="flex flex-col gap-3 text-left">
            <div class="w-full">
                <label for="inputField" class="block mb-2 font-medium text-gray-700">Masukkan Nama Anda</label>
                <div class="border border-zinc-300 rounded-md">
                    <input type="text" id="inputField" wire:model="namaEmail"
                        class="w-full p-2 border border-zinc-300 rounded-md" placeholder="Masukkan Nama Anda...">
                </div>
            </div>
            <div class="w-full">
                <label for="inputField" class="block mb-2 font-medium text-gray-700">Masukkan Email Anda</label>
                <div class="border border-zinc-300 rounded-md">
                    <input type="text" id="inputField" wire:model="email"
                        class="w-full p-2 border border-zinc-300 rounded-md" placeholder="Masukkan Email Anda...">
                </div>
            </div>
            <div class="w-full">
                <label for="inputField" class="block mb-2 font-medium text-gray-700">Subject</label>
                <div class="border border-zinc-300 rounded-md">
                    <input type="text" id="inputField" wire:model="subject"
                        class="w-full p-2 border border-zinc-300 rounded-md" placeholder="Apa yang Anda tanyakan...">
                </div>
            </div>
            <div class="w-full">
                <label for="message" class="block mb-2 font-medium text-gray-700">Deskripsi</label>
                <textarea id="message" rows="3" wire:model="desc"
                    class="block w-full p-2 border border-zinc-300 rounded-md shadow-sm focus:border-red-600 focus:ring focus:ring-red-200"
                    placeholder="Ceritakan deitl apa yang ditanyakan..."></textarea>
            </div>

            <button class="lg:w-1/4 px-4 py-2 font-semibold text-white bg-red-600 rounded hover:bg-red-700">Submit
                Data</button>
        </div>
    </form>
</div>
