<x-app-layout>
    <div class="min-h-screen flex items-center justify-center flex-col p-2 from-blue-100 to-blue-400">

        <h1 class="text-7xl font-black text-center bg-clip-text text-transparent bg-gradient-to-r from-blue-400  to-blue-800 drop-shadow-lg">
            NNN Certificate</h1>
        <div class="mt-4 flex flex-row gap-6">
            <a class="px-6 py-3 bg-gradient-to-r from-blue-400 to-blue-500 rounded-full shadow-lg shadow-blue-600/50 text-center hover:cursor-pointer"
               href="{{ route('certificate.generate') }}">
                <span class="font-semibold text-white">Generate</span>
            </a>
            <a class="px-6 py-3 text-center bg-white rounded-full border shadow-lg shadow-blue-600/50 hover:cursor-pointer"
               href="{{ route('certificate.manual-validate') }}">
                <span class="font-semibold text-blue-600">Validate</span>
            </a>
        </div>
    </div>
</x-app-layout>
