<x-dashboard>

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Forms
            </h2>
            <!-- CTA -->


            <!-- General elements -->
            <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Judul Artikel</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="title" type="text" name="title" placeholder="isi disini" />
                    </label>
                    <br>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="content" type="text" name="content" rows="10" placeholder="isi artikel disini"></textarea>
                    </label>
                    <br>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Upload Gambar</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="image" type="file" name="image" placeholder="isi disini" />
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">meta_deskripsi</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="meta_deskripsi" type="text" name="meta_deskripsi" rows="5" placeholder="isi artikel disini"></textarea>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">meta_keyword</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            id="meta_keyword" type="text" name="meta_keyword" rows="5" placeholder="isi artikel disini"></textarea>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>


    <script>
        CKEDITOR.replace('content');
    </script>
</x-dashboard>
