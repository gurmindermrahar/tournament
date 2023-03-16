<div id="app">
    <chat-messages :messages="messages" :user="{{ Auth::user() }}" :chatwith="{{$chatwith}}"></chat-messages>
    <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}" :chatwith="{{$chatwith}}"></chat-form>
</div>
@push('scripts')
 <!-- Scripts -->
 @vite(['resources/js/app.js'])
@endpush
