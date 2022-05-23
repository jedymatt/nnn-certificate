<x-app-layout>
    <div class="py-6 px-3">
        <div class="md:w-3/4 md:mx-auto">
            <form action="{{ route('certificate.generate') }}" method="POST">
                @csrf
                <label>
                    Name
                    <input class="mt-1 rounded-lg w-full" type="text" name="name" placeholder="Juan Dela Cruz" required>
                </label>

                <div class="mt-4 flex place-content-end">
                    <button type="submit"
                            class="py-2 px-4 rounded-full bg-blue-500 shadow-lg shadow-blue-500/50 hover:bg-blue-600">
                        <span class="text-white">Generate</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
