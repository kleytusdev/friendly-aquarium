<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <script>
        // Selecciona el enlace que apunta al elemento deseado
        const link = document.querySelector('a[href="#about-section"]');

        // Manejador de evento de clic para el enlace
        link.addEventListener('click', (e) => {
            // Previene la acción predeterminada del enlace (redireccionamiento)
            e.preventDefault();

            // Obtiene la posición del elemento deseado
            const target = document.querySelector('#about-section');
            const targetPosition = target.getBoundingClientRect().top + window.scrollY;

            // Desplaza suavemente hasta la posición deseada
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    </script>

    <script>
        const details = document.querySelector('details');
        const content = document.querySelector('div');

        details.addEventListener('toggle', () => {
            content.classList.toggle('opacity-100');
        });
    </script>

    <script>
        function setTheme(theme) {
            document.documentElement.className = theme;
            localStorage.setItem('theme', theme);
        }

        // Obtiene el tema actual del almacenamiento local
        var theme = localStorage.getItem('theme');

        // Si no hay un tema en el almacenamiento local, usa el tema predeterminado
        if (!theme) {
            theme = 'theme-light';
        }

        // Establece el tema actual
        setTheme(theme);
    </script>



</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-[#020206]">
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-gray-400 dark:bg-gray-200 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Nav -->


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Sweet Alert Delete Script --}}
    <script>
        window.addEventListener('eventDeleteConfirmation', event => {
            const swalWithTailwindButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded',
                    cancelButton: 'mr-5 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded',
                },
                buttonsStyling: false,
            })
            swalWithTailwindButtons.fire({
                title: '¿Realmente quieres eliminar este registro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, bórralo',
                cancelButtonText: 'No, cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('destroy')
                    swalWithTailwindButtons.fire(
                        '¡Eliminado!',
                        'Su registro a sido eliminado.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithTailwindButtons.fire(
                        'Cancelado',
                        'Tu registro está a salvo :)',
                        'error'
                    )
                }
            })
        });
    </script>
    @stack('modals')

    @stack('js')

    @livewireScripts
</body>

</html>
