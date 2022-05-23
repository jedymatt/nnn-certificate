<x-app-layout>
    <div>
        Certificate of Commendation
    </div>
    <div>
        is given to
    </div>
    <div>
        {{ $certificate->name }}
    </div>
    <div>
        as a NNN survivor during the conduct of No Nut November: Worldwide held on {{ $startOfNovember }} to {{ $endOfNovember }}. Given to this {{ $certificate->issue_date->format('jS \d\a\y \o\f F, Y') }}.
    </div>
    <div class="mt-4">
        {!! QrCode::format('svg')->generate('dfd') !!}

    </div>
    <a href="{{ route('certificate-export-pdf', $certificate) }}">Export</a>
</x-app-layout>
