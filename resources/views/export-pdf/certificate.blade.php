{{--<link rel="stylesheet" href="{{ public_path().'/css/app.css' }}">--}}
<link rel="stylesheet" href="{{ 'css/app.css' }}">

<div class="min-h-screen">
    <div class="font-serif text-xl">
        <div class="text-center">
            <h1 class="text-center font-black text-5xl">Certification of Commendation</h1>
            is given to
            <div class="font-bold underline text-4xl">
                <span class="underline" style="text-decoration: underline">{{ $certificate->name }}</span>
            </div>
        </div>
        <div class="text-center">
        <span>
            as a NNN survivor during the conduct of No Nut November: Worldwide held on {{ $startOfNovember }}
            to {{ $endOfNovember }}.
        </span>
            <div>
                Given to this {{ $certificate->issue_date->format('jS \d\a\y \o\f F, Y') }}.
            </div>
            <canvas id="canvas"></canvas>
        </div>
    </div>
    <div>
        <div class="text-right">
            <img alt="" src="data:image/png;base64, {!! $qrCode !!}">
        </div>
        <div class="text-right">{{ $certificate->validation_key }}</div>
    </div>
</div>
