Welcome to Dashboard Admin

<!-- Authentication -->
<form method="GET" action="{{ route('logout') }}" x-ref="logoutForm">
    @csrf
</form>
<x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.$refs.logoutForm.submit();">
    {{ __('Log Out') }}
</x-dropdown-link>
