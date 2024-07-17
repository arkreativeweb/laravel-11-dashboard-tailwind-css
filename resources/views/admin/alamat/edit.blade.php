<x-dashboard>

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Buat alamat
            </h2>
            <!-- CTA -->


            <!-- General elements -->
            <form action="{{ route('admin.alamat.update', $alamat->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Alamat</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="alamat" type="text" name="alamat" rows="5" required>{{ $alamat->alamat }}</textarea>
                    </label>
                    <br>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="email" type="email" name="email" value ="{{ $alamat->email }}" required></input>
                    </label>
                    <br>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Telepon</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="telepon" type="number" name="telepon" value ="{{ $alamat->telepon }}"
                            required></input>
                    </label>
                    <br>


                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Jam Kerja</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="jam" type="text" name="jam" value ="{{ $alamat->jam }}" required></input>
                    </label>
                    <br>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">maps</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="maps" type="text" name="maps" rows="5" value ="{{ $alamat->maps }}" required>{{ $alamat->maps }}</textarea>
                    </label>
                    <br>

                    <label class="block text-sm">
                        <button
                            class="w-full px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            kirim
                        </button>
                    </label>
                </div>
            </form>
        </div>
    </main>

</x-dashboard>
