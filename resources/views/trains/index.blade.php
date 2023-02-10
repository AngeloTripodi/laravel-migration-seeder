<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train</title>

    @vite('resources/js/app.js')
</head>

<body>

    <header>
        <h1>Trains</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">

                @forelse ($trains as $train)
                    <div class="col-3">
                        <h2>
                            {{ $train->azienda }} \\ {{ $train->codice_treno }}
                        </h2>
                        <h6>
                            {{ $train->stazione_di_partenza }} to {{ $train->stazione_di_arrivo }}
                        </h6>
                        <p>
                            Orari: <br> {{ $train->orario_di_partenza }} <br> {{ $train->orario_di_arrivo }}
                        </p>
                        <p>
                            Numero carrozze: {{ $train->numero_carrozze }}
                        </p>
                        <p>il treno è in orario: {{ $train->in_orario }}</p>
                        <p>il treno è stato cancellato? {{ $train->cencellato }}</p>
                    </div>
                @empty
                    <div class="col-12">
                        <h6>
                            Siamo spiacenti, non abbiamo trovato nessuna corsa disponibile.
                        </h6>
                    </div>
                @endforelse

            </div>
        </div>


    </main>

</body>

</html>
